<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
    <title>Member Benefits</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.ico" type="image/x-icon"/>

    <?php include("css-links.php"); ?>

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
            <header class="page-header"><h1 class="page-title">Member Benefits</h1></header>
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <p>Whether you’re an independent app developer, or a team that works on full-time projects, you can leverage QUIC resources to enhance your software development. We’re seeking new members for our incubator space. We offer different levels of membership on a monthly or annual basis each including a range of benefits.</p>
				
				<ul>
				<li>Approved members for private offices will be offered 24/7 access to their preferable private office.  </li>
				<li>Approved members for shared offices will be offered 24/7 access to shared offices on a first-come, first-served basis. </li>
				<li>Invitation to our master classes or workshops with up to 25% discounts.</li>
				<li>All approved members are eligible for applying for parking on campus. The parking space is limited and subject to QC parking rules.</li>
				<li>Access to our facility, lounge room, resource center, and most IT resources.  </li>
				<li>On-site administrative and IT staff assistance</li>
				</ul>
            </article>

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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/apps/app.js"></script>
</body>
</html>
