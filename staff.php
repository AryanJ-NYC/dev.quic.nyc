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
    <link rel="stylesheet" href="assets/css/custom.css">

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
            <li class="active">Staff</li>
        </ol>

        <div class="row" ng-controller="staffController">
            
            <!-- Article main content -->
            <header class="page-header"><h1 class="page-title">Our Staff</h1></header>
            <article class="col-sm-9 maincontent">
                <div ng-repeat="member in staffMembers">
                    <h3>{{ member.name }}</h3>
                    <p class="staff-position" ng-repeat="position in member.position"><i>{{ position }}</i></p>
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <img ng-src="{{ member.img }}" class="img-responsive pull-left member-images">
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <p>{{ member.bio }}</p>
                        </div>
                    </div>
                </div>
            </article>

        <!-- Sidebar -->
            <aside class="col-sm-3 sidebar sidebar-right">
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
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/apps/app.js"></script>
    <script src="assets/js/apps/controllers/staffController.js"></script>
</body>
</html>