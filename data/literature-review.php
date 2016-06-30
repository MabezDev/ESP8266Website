<!DOCTYPE HTML5>


<html>

<head>
  
</head>

<body>
  <?php include "header.html";?>
  <article id="text">
      <section>
      <h3>Abstract</h3>
      <p>Computing use grows everyday, as it grows so does the the waste it produces. This waste could be physical dumping of retired systems, the physical architectures of systems or the energy wasted and consumed in systems. Only recently has the energy considerations come into the fold after realising the damage being done to this planet. This literature review focuses on techniques to minimise energy waste when implementing and developing software.</p>
      <h3>Sustainable Computing</h3>
      <p>Sustainable Computing is a prominent issue in the world today. Use of Computing techniques increase every year and with it the power consumed by them. This literature review will discuss the possibilities in software design and software implementation to cut down on energy consumption whilst meeting the same technological requirements including resource aware software, scaling software, fixed performance software, thin client systems and efficient algorithm design.
      </p>
      <p>Resource aware software breaks down the system into states. Theses states control what is running and how fast it is running (Page 14 Section 4 Tingyuan, N., Lijian, Z., &amp; Zhe-Ming, L. (2014)). These states include methods such as clocking down CPU’s (central processing unit)  frequencies when the number crunching horse power is not required or spinning down a HDD(hard disk drive) when not in use. These examples are for each local machine but it can be applied to a whole system if implemented correctly, rapidly reducing overall power consumption. When a system is in almost constant use resource aware software becomes much less effective as it will almost always be at the maximum energy usage state.
      </p>
      <p>Some problems can be solved in a few CPU cycles on a single computer, some can be solved in a few thousand cycles, but when you need to solve a big problem that would take millions upon millions of CPU cycles, a single system isn’t efficient. Scaling software can be spread over multiple machines to disperse the workload in parallel, this software has an overhead work manager that breaks up the problem and offloads snippets of the problem to many different machines. Finally it combines the micro solutions and returns the final solution (Page 1782 Section 4 Tian, W., Xiong, Q., &amp; Cao, J. (2013)). When using scaling software, it doesn't have to be on separate machines, using Virtualization it is possible to run multiple systems on the same machine. Virtualization can save energy by reducing the waste heat and energy used to run several separate machines and turn that into to one machine to cool and power (Page 987 Section 4.4 Jin, Y., Wen, Y., Chen, Q., &amp; Zhu, Z. (2013)). Software isn’t always able to scale efficiently, when the problem can’t be broken up easily scaling software actually lowers performance and thus consumes more energy.
      </p>
      <p>Fixed performance software is configured to consume a certain amount of resources for each task (Page 48 SAXE, E. (2010)). The amount of resources required for a certain task  is usually worked out with test runs, from theses test runs the maximum performance to power ratio can be obtained(Page 53 BROWN, D. J., &amp; REAMS, C. (2010)). The problem is that, in the real world it is unlikely to have a fixed workload every time, thus this solution can rarely be used when designing software.
  Fixed performance tracking software actively monitors a systems power usage versus work done. Using this data it tunes the system's resource usage to get the best power to performance ratio. This method introduces two problems, system overhead and latency (Page 54 BROWN, D. J., &amp; REAMS, C. (2010)). The system overhead uses processing time to calculate the power to performance ratio, this ‘wasted’ processing power contributes to the systems overall inefficiency. In parallel processing systems introducing latency can cripple efficiency. If a system starts offloading work then gets stopped to diagnose the current power vs work done ratio or there is a ‘bottleneck’ in the system, some of the work will be left idle whilst the other parts are solved, finally producing the final solution but in far less power efficient way.
      </p>
      <p>Terminal or Thin client systems consist of big servers doing the processing for many ‘thin’ or ‘terminal ’clients. The clients are a ‘barebones’ machines with a screen, I/O devices and a wired internet connection for stability (Page 7 Fanning, K. (2014)). Instead of doing the processing themselves they have a ‘virtual machine’ running on a big server and receives the data via the network. Thin clients act like a standard machine to the user but saves a lot of energy as the clients consume very little power, some as low as 40 watts. Thin client systems only work in scenarios where each client is running simple software, word processors for example. Graphics editors and other resource demanding programs that require a lot of processing power would be inefficient (Page 1 Section: Overview Zlotnikov, V., Kraemer, T. D., &amp; Goyal, M. (1996)), thus if the processing power is required, ‘fat’ clients are needed.
      </p>
      <p>How the problem is solved is as important as managing the resources consumed when solving. Efficient algorithm design is crucial when developing software, especially when the problem could be scaled. Saving half a second on completing one problem adds up dramatically when you have hundreds of problems being solved concurrently hence reducing overall energy consumption. Even when implemented efficiently some algorithms are very complex and require a lot of processing power (Page 12 Section 1 Tingyuan, N., Lijian, Z., &amp; Zhe-Ming, L. (2014)), one technique is to using hashing to bring the algorithms complexity down (Big O notation) (Page 58 Section 1 4th Paragraph  Wu, C., Berrouk, A., &amp; Nandakumar, K. (2010)). Using scaling software to simplify the algorithm into different parts should be used to improve overall efficiency if the problem is too complex to run on a single machine.
      </p>
      <h3>Conclusion</h3>
      <p>Software implementation and development in the commercial and business world is paramount to the sustainability of  the ICT sector. Techniques discussed in this literature review reveal that although there are a number of viable sustainable solutions, many of the sustainable methods of computing cannot be applied in all circumstances. Providing a sustainable computing environment is entirely possible with current technologies, but are imperfect. Reaching the end goal of a fully sustainable computing environment as soon as possible would be ideal. This however would take years of research, therefore current systems should be overhauled to limit waste energy. This has the added benefits of saving the company/user money in the long run and protecting the environment for our foreseeable future.</p>


      </section>
    </article>

  <?php include "footer.html";?>
</body>




</html>