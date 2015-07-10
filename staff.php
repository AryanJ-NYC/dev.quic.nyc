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
                <header class="page-header"><h1 class="page-title">Staff</h1></header>
                <h3>Professor Ted Brown, Ph.D.</h3>
                <p><i>Executive Director, CUNY Institute for Software Design and Development</i></p>
                <p><i>Executive Director, Queens College Tech Incubator</i></p>
                <p><i>Professor of Computer Science, Queens College</i></p>
                <p><img src="assets/images/tedbrown.jpg" class="img-rounded pull-left"></img>Professor Brown oversees CISDD, develops relationships with the software industry, develops software ideas and applications, facilitates CISDD's role in CUNY and determines the mission and goals of the Software Institute. As Chair of the Computer Science department at Queens College, he engineered a great deal of change, including overseeing an ever-changing curriculum and implementing Java as the language for all students to learn. Professor Brown is also on the Executive Board of the New York Software Industry Association.</p>       
            </article>



        <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="widget">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="index.html" target="_blank">Home Page</a><br><span class="small text-muted">Return to the main landing page.</span></li>
                        <li><a href="http://www.qc.cuny.edu/Pages/home.aspx" target="_blank">Queens College</a><br><span class="small text-muted">View our college's main website.</span></li>
                        <li><a href="http://www.cs.qc.edu/" target="_blank">Queens College CS Dept.</a><br><span class="small text-muted">View our computer science department's website.</span></li>
                        <li><a href="https://github.com/QuicNYC" target="_blank">Github</a><br><span class="small text-muted">Keep track of progress on our current projects.</span></li>
                    </ul>
            </aside>

            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <header class="page-header"><h1 class="page-title">Fellows</h1></header>
                <h3>Carlos Del Rosario</h3>
                <p>Born and raised in the Dominican Republic, I moved to the United States in September of 2010. I am currently a Senior at Queens College; Originally pursuing a degree in Telecommunications Engineering I decided to get into the Computer Science field. Technology and Computers have always been of my interest; I enjoy learning new things and creating something from nothing. Programming has been something I've enjoyed since the day I wrote my first line of code. This is why participating in the Queens College Incubator to help create things that can benefit society while at the same time give experience and teach me new thing is a really great opportunity. In my spare time I enjoy learning about new technologies and work on small projects. Among technologies that call my attention right now are Software Development, Android Applications, Arduino Projects, 3D Printing and more.</p>

                <h3>Aryan Jabbari</h3>
                <p>I am a graduate student at CUNY Queens College and an IT aide at Queens College's Academic Advising Center. In addition to learning at Queens College, I am an active student at Coursera and regularly take computer science courses online. I am interested in using technology to help others, especially those in Queens county. My principal focuses at the Queens College technology incubator is on the Starter Jobs and Flushing Chamber of Commerce projects.</p>

                <h3>Kevin Ramsunder</h3>
                <p>I am a third year undergraduate student at Queens College. I started programming as a hobby in high school after participating in my school's Robotics program. Nowadays, my main goal in this field is to use technology to improve every aspect of our daily lives. Aside from my own personal projects, I enjoy coding collaboratively with others who share the same passion for creating useful and innovative software. I am also a believer in the Open-Source movement and its mission to make software free for the community.</p>           
            </article>


            <!-- /Article -->
            
            

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