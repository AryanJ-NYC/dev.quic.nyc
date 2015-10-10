<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Queens College Tech Incubator</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.ico" type="image/x-icon"/>

    <?php include("css-links.php"); ?>

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
    <div class="container" ng-app="QuicApp">

        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Resources</li>
        </ol>

        <div class="row">
            <header class="page-header"><h1 class="page-title">About the Queens College Tech Incubator</h1></header>
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <p> The Queens College Tech Incubator Center, supported by the New York City Council, is the startup incubator
				for tech freelancers, professional developers, and entrepreneurs. QUIC aims  at  helping  startup  companies
				and entrepreneurs  to build  successful  technology  companies,  which  in  turn  creates  more  job opportunities
				and  driving  new  innovation  and  technology  development in New York. With  the advanced  computational
				infrastructure  and  the CUNY  community  advantages,  QUIC provides  an  outstanding  environment  for  companies
				to  turn  innovative  ideas  into businesses and success.
				</p>
              </article>
            <!-- /Article -->

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
    <script src="assets/js/template.js"></script>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/apps/app.js"></script>
</body>
</html>