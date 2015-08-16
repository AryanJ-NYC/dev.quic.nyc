<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
    <title>Staff</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.ico" type="image/x-icon"/>
    
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
    <?php include("./navbar.php"); ?>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Staff</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                
                <header class="page-header"><h1 class="page-title">Our Staff</h1></header>
                <h3>Hsien-Tseng Wang</h3>
                <p><i>Managing Director, Queens College Tech Incubator Center</i>
                </p>
                <div class="row">
                    <div class="col-md-3 col-xs-12"><img src="assets/images/elvin.png" class="img-responsive pull-left member-images"></div>
                    <div class="col-md-9 col-sm-12">
                        <p> Hsien-Tseng (Elvin) Wang is a PhD candidate in Computer Science at the Graduate Center, CUNY.  His research interests include semantic web technology, temporal data modeling, and knowledge-based systems.  He has worked on modeling temporal data with RDF models and developed a query language.  Since 2008, Wang has been an adjunct faculty member in the Computer Information Systems department at Baruch.  Prior to CUNY, he worked as an engineer for government construction projects for six years.  Wang holds M.S. and B.A. degrees in Civil engineering from NCU of Taiwan, an MBA in Finance from Baruch College, and a M. Phil from The Graduate Center of CUNY.</p>
                    </div>
                </div>
                
                <h3>Haijun Su</h3>
                <p><i>
                    System Administrator, CUNY Institute for Software Design and Development<br>
                    System Administrator, Queens College Tech Incubator
                </i></p>
                <div class="row">
                    <div class="col-md-3 col-xs-12"><img src="assets/images/navy.png" class="img-responsive pull-left member-images"></div>
                    <div class="col-md-9 col-sm-12"><p>Navy (Haijun) Su has extensive experience developing advanced networks and web applications.  He has rich and broad expertise in object-oriented platforms, Middleware, UNIX systems, software reuse and third-party integration.  Navy holds an M.S. in Computer Science from CUNY Queens College.  Prior to Queens College, he worked as a software engineer in Nortel Networks and Ericsson in China for many years.  Navy is also familiar with most programming languages, databases, and operating systems, such as Java, PHP, C++, C, Python, Unix Shell, MySQL, Oracle, Solaris, Linux, Windows and Mac OS X.</p></div>
                </div>
            </article>



        <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="widget">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="index.php" target="_blank">Home Page</a><br><span class="small text-muted">Return to the main landing page.</span></li>
                        <li><a href="http://www.qc.cuny.edu/Pages/home.aspx" target="_blank">Queens College</a><br><span class="small text-muted">View our college's main website.</span></li>
                        <li><a href="http://www.cs.qc.edu/" target="_blank">Queens College CS Dept.</a><br><span class="small text-muted">View our computer science department's website.</span></li>
                    </ul>
            </aside>
            
            

        </div>
    </div>  <!-- /container -->
    

    <!-- footer -->
    <?php include("./footer.php"); ?>
        

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>