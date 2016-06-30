#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include "FS.h"


#include "routerInfo.h"


int currentStatus = 0;
//This ESP board has inverted output HIGH is LOW

#define INDEX "/index.php"
#define LIT_REVIEW "/literature-review.php"
#define WORKLOG "/work-log.php"

#define CSS "/main.css"
#define HEADER "/header.html"


ESP8266WebServer server(80);

String getLedStatus(){
  String builder = "<p> LED status: ";
  if(currentStatus){
    builder += "On";
  } else {
    builder += "Off";
  }
  return builder + "</p>";
}

void listDirectory(String path){
  if(SPIFFS.exists(path)){
    Serial.println("unable to open directory");
  }
  Dir dir = SPIFFS.openDir(path);

  while (dir.next()) {
    Serial.print(dir.fileName());
    File f = dir.openFile("r");
    Serial.println(f.size());
  }
}

String getStringFromFile(String path){
  if(SPIFFS.exists(path)){
    File htmlPage = SPIFFS.open(path,"r");
    Serial.print("File: ");
    Serial.print(htmlPage.name());
    Serial.print(" has file size of: ");
    Serial.println(htmlPage.size());

    bool done = false;
    String completeFile = "";
    char buffer[600];
    int byteCount = 0;
    while(!done){
      htmlPage.readBytes(buffer, 500);
      int charsLeft = htmlPage.size() - byteCount;
      if(charsLeft < 0){
        // we reached EOF
        done = true;
      }
      completeFile += String(buffer);
      memset(buffer,0,600);
      byteCount += 500;
      delay(1);//service the wifi bg processes so we dont crash reading in big files
    }

    Serial.print("Free ram: ");
    Serial.println(ESP.getFreeHeap());

    return completeFile;
  } else {
    Serial.println("No file found.");
    return "no data";
  }
}

String getStyle(String path){
  String style = "<style>";
  style += getStringFromFile(path);
  style += "</style>";
  Serial.println(style);//if i dont print this i don't get rounded edges on my links lolwut
  return style;
}

void handle_root(){
  String page = getStyle(CSS) + getStringFromFile(HEADER) + getStringFromFile(INDEX);
  server.send(200, "text/html", page);
  delay(100);
}

void handle_lit(){
  String page = getStyle(CSS) + getStringFromFile(HEADER) + getStringFromFile(LIT_REVIEW);
  server.send(200, "text/html", page);
  delay(100);
}

void handle_worklog(){
  String page = getStyle(CSS) + getStringFromFile(HEADER) + getStringFromFile(WORKLOG);
  server.send(200, "text/html", page);
  delay(100);
}




void setup(){
  Serial.begin(115200);
  pinMode(2,OUTPUT);
  digitalWrite(2, HIGH);
  SPIFFS.begin();
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println();
  Serial.print("Connected to ");
  Serial.print(ssid);
  Serial.print(" with IP: ");
  Serial.println(WiFi.localIP());

  server.on("/", handle_root);

  server.on(INDEX,handle_root);

  server.on(LIT_REVIEW,handle_lit);

  server.on(WORKLOG,handle_worklog);



  server.begin();

}

void loop(){
  server.handleClient();
}
