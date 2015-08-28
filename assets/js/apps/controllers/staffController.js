app.controller('staffController', function ($scope) {
    $scope.staffMembers = [
        {
            name: "Hsien-Tseng Wang",
            position: ["Managing Director, Queens College Tech Incubator Center"],
            img: "assets/images/elvin.png",
            bio: "Hsien-Tseng (Elvin) Wang is a PhD candidate in Computer Science at the Graduate Center, CUNY.  His research interests include semantic web technology, temporal data modeling, and knowledge-based systems.  He has worked on modeling temporal data with RDF models and developed a query language.  Since 2008, Wang has been an adjunct faculty member in the Computer Information Systems department at Baruch.  Prior to CUNY, he worked as an engineer for government construction projects for six years.  Wang holds M.S. and B.A. degrees in Civil engineering from NCU of Taiwan, an MBA in Finance from Baruch College, and a M. Phil from The Graduate Center of CUNY."
        },
        {
            name: "Haijun Su",
            position: ["System Administrator, CUNY Institute for Software Design and Development", "System Administrator, Queens College Tech Incubator"],
            img: "assets/images/navy.png",
            bio: "Navy (Haijun) Su has extensive experience developing advanced networks and web applications.  He has rich and broad expertise in object-oriented platforms, Middleware, UNIX systems, software reuse and third-party integration.  Navy holds an M.S. in Computer Science from CUNY Queens College.  Prior to Queens College, he worked as a software engineer in Nortel Networks and Ericsson in China for many years.  Navy is also familiar with most programming languages, databases, and operating systems, such as Java, PHP, C++, C, Python, Unix Shell, MySQL, Oracle, Solaris, Linux, Windows and Mac OS X."
        },
        {
            name: "Shu-Yuan Wu",
            img: "assets/images/sophie.png",
            bio: "Shu-Yuan Wu is a PhD candidate in Computer Science at the Graduate Center, CUNY. Her research interest includes social dynamics, mobile data analysis and simulations. She has worked on modeling opinion formation in the Gur Game framework. She had been working on the projects simulating transit signal priority in downtown Manhattan using bus health data, using taxicab trips data to define the traffic congested areas in NYC, and mobility modelling and simulation in an Army project as well."
        }
    ];
});