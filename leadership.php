<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Leadership</title>

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

<body ng-app="QuicApp">
    <!-- Fixed navbar -->
    <?php include("./navbar.php"); ?>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Resources</li>
        </ol>

        <div class="row">
            <header class="page-header"><h1 class="page-title">Leadership</h1></header>
            
            <!-- Article main content -->
            <article class="col-sm-8">
                <h3>Professor Ted Brown, Ph.D.</h3>
                <p><i>Executive Director, CUNY Institute for Software Design and Development<br>
                Executive Director, Queens College Tech Incubator<br>
                Professor of Computer Science, Queens College</i></p>
                <p><img src="assets/images/tedbrown.jpg" class="img-responsive pull-left">Professor Brown oversees CISDD, develops relationships with the software industry, develops software ideas and applications, facilitates CISDD's role in CUNY and determines the mission and goals of the Software Institute. As Chair of the Computer Science department at Queens College, he engineered a great deal of change, including overseeing an ever-changing curriculum and implementing Java as the language for all students to learn. Professor Brown is also on the Executive Board of the New York Software Industry Association.</p>
              </article> <!-- /Article -->

            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="widget">
                    <quick-links></quick-links>
                </div>
            </aside>       
        </div>
    </div>  <!-- /container -->
    

    <!-- footer -->
    <?php include("./footer.php"); ?>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">    </script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/apps/app.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>