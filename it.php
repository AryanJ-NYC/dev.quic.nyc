<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
    <title>IT</title>

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
            <header class="page-header"><h1 class="page-title">Information Technology Resources</h1></header>
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                
				<ul>
				<li> <b>Servers:</b>
					<p>We have two new and powerful servers: Dell PowerEdge R730 and Dell PowerEdge R920. Especially, R920 is configured two E7-8880L 2.2GHz Turbo 15 core CPUs, 1TB Memory, and 43TB Hard Disk. The dedicated building (CEP2) is equipped with 4 Cisco Catalyst 4500E Series switches, which would provide all Ethernet ports in building. While QC campus has average WiFi density and coverage, we deploy additional Cisco AP that provides dense coverage with high speed wireless connection. Virtualization is deployed via Citrix Xen server that provide virtual hosts on R730 and R920. Default applications on our servers include LAMP server, Hadoop, MySQL, PostgreSQL, Mongo DB, Subversion server, and more. Security is our top priority in servers and the network. While QUIC maintains our own sub network, we strictly follow Queens College security policy, and all operating network traffic is protected by a firewall.</p>
					
				<li> <b>App Center:</b>
				<p>	App Center is mainly utilized by our QUIC fellows/interns who are talented computer science students on campus. We equip an advanced 70-inch interactive flat panel display with collaborative capability via ShareLink 200N. 27-inch iMacs are the main desktop workforce for App Center.</p>
				
				<li> <b>Conference System:</b>
				<!--(more goes here, cite specs from A/V quote)-->
				
				<li> <b>Workshop/Classroom:</b>
				<!--(more goes here, cite specs from A/V quote)-->
				
				<li> <b>Resource Center:</b>
				<p>QUIC provides network copier, 3D printer in the dedicated resource center for all members.</p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">    </script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/apps/app.js"></script>
</body>
</html>