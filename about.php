<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>About Us</title>

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
			<li class="active">About</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header"><h1 class="page-title">About Us</h1></header>
				<h3>The Queens College Incubator</h3>
				<p>The Incubator seeks to carry forward the mission of the college by attracting high tech business to campus and giving them access to the diverse and talented students, staff and faculty of the college. It is the ambition of the incubator to reflect the tremendous diversity and resoucefulneds of the many ethnic communities of Queens itself.</p>		
				
				<h3><a href="http://www.cs.qc.cuny.edu/index.html" target="_blank">Our Computer Science Department</a></h3>
				<p>Computer Science is an exciting and rapidly changing discipline, and students at Queens College have the opportunity to study towards B.A., B.S., M.A., and Ph.D. degrees at the cutting edge of this expanding field.
				The CS Faculty at QC is composed of leading researchers in many areas of computer science, including: computational linguistics, datamining, real-time computing, security, speech technology, and data visualization.
				</p><p>The diverse academic, industrial, and professional backgrounds of the full-time and adjunct faculty allow the Computer Science Department to offer a wide range of courses for our students.   In addition, the research programs of full-time faculty enrich the intellectual life of the college and create opportunities for graduate and undergraduate students.</p>
			</article>



		<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">
				<div class="widget">
                    <quick-links></quick-links>
                </div>
			</aside>

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header"><h1 class="page-title">About Our Facilities</h1></header>
				<h3><a href="http://www.qc.cuny.edu/about/business/rental/athletics/Pages/default.aspx" target="_blank">Fitzgerald Gymnasium</a></h3>
				<p>Queens College boasts a fitness center that features cardiovascular machines (elliptical cross trainers, stair steppers, cycles, treadmills and the new ARC trainer), a free weight area and a Cybex selectorized weight circuit. Trained recreation staff members are available to offer assistance with all of the equipment. Personal Training or Group Training sessions can be scheduled for those who want more personal attention. The Aquatics Center is located on the first floor of Fitzgerald Gymnasium. The pool, which is 25 yards long and six lanes wide, is utilized for lap swimming during recreeation hours. The Queens College Tennis Center houses six courts and is located just south of Fitzgerald Gymnasium. Our newly renovated outdoor track is located on the southwest corner of the Queens College campus. It is a 400 meter, eight lane track which is utilized from dawn until dusk for lap running and walking.</p>

				<h3><a href="http://queenscollegehousing.com/" target="_blank">The Summit</a></h3>
				<p>Queens College's first residence hall, Summit Apartments, opened in August 2009. Located in the heart of the campus, just south of Fitzgerald Gymnasium, the low-rise, U-shaped, 506-bed building has three wings of varying stories to complement the heights of the surrounding buildings.   In keeping with Queens College’s commitment to sustainability, the design of The Summit met Leadership in Energy and Environmental Design (LEED) requirements for gold certification. The LEED rating system is overseen by the United States Green Building Council, which awards certification to structures that prevent waste and conserve energy in measurable ways.</p>		
				
				<h3><a href="http://www.qc.cuny.edu/about/directions/Pages/Shuttle.aspx" target="_blank">The Queens College Shuttle</a></h3>
				<p>To reduce commute time and improve access to campus, Queens College launched a new shuttle bus service on August 28. The shuttle offers a faster, more convenient way to travel between the college and the two major transit hubs serving our community, Jamaica Station and Flushing-Main Street Station.
				The Queens College shuttle operates seven days a week, providing non-stop service throughout the day between the campus and these two stations. It also provides cross-campus service throughout the day between Queens Hall and the Student Union Building.</p>
			</article>


			<!-- /Article -->
			
			

		</div>
	</div>	<!-- /container -->
	

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