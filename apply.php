<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	
	<title>Apply Now</title>

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
			<li><a href="index.html">Home</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Application For Your Venture</h1>
					<div class="error"></div>
				</header>
				
				<p>
				   Start the process for joining the Queens College Tech Incubator. Fill out the form below and we will get back to you as soon as possible. 
				</p>
					<form id="apply-form" method="post" enctype="multipart/form-data">

						<p><h3>Applicant Information</h3></p>
						<div class="row">
							<div class="col-sm-6">
								<label>Applicant Name:</label>
								<input class="form-control" type="text" placeholder="Applicant Name" name='applicant'><br>
							</div>

							<div class="col-sm-6">
								<label>Venture Name:</label>
								<input class="form-control" type="text" placeholder="Venture Name" name='venturename'><br>
							</div>

							<div class="col-sm-6">
								<label>Venture Website:</label>
								<input class="form-control" type="text" placeholder="Venture Website" name='website'><br>
							</div>

							<div class="col-sm-6">
								<label>Title:</label>
								<input class="form-control" type="text" placeholder="Your Title" name='title'><br>
							</div>

							<div class="col-sm-6">
								<label>Phone Number:</label>
								<input class="form-control" type="text" placeholder="Your Phone Number" name='phone'><br>
							</div>

							<div class="col-sm-6">
								<label>Email Address:</label>
								<input class="form-control" type="text" placeholder="Your Email Address" name='email'><br>
							</div>
						</div>
						
						<p><h3>Incubator Information</h3></p>
						<div class="row">
							<label for="id" class="col-sm-6">How many workstations do you need now and in the next 6 months?</label>
							<div class="col-sm-6">
								<input id="workstations" placeholder="How many workstations do you need?" class="form-control" name='workstations' rows="9"></input>
							</div>
						</div>

						<br>

						<div class="row">
							<label for="numPos" class="col-sm-6">How many new full-time posititons do you expect to add to your company each year for the next two years?</label>
							<div class="col-sm-6">
								<input id="numPos" placeholder="How many full-time positions do you expect?" class="form-control" name='numPos' rows="9"></input>
							</div>
						</div>

						<br> 

						<div class="row">
							<label for="participatedBefore" class="col-sm-6">Have you participated in a startup accelerator/incubator in the past? If so, which one(s)?</label>
							<div class="col-sm-6">
								<input id="participatedBefore" placeholder="Have you participated in a startup before? Which ones?" class="form-control" name='participatedBefore' rows="9"></input>
							</div>
						</div>

						<br> 

						<div class="row">
							<label for="hearAbout" class="col-sm-6">How did you hear about the incubator?</label>
							<div class="col-sm-6">
								<input id="hearAbout" placeholder="How did you hear about us?" class="form-control" name='hearAbout' rows="9"></input>
							</div>
						</div>

						<br> 

						<div class="row">
							<label for="knowAnyone" class="col-sm-6">Do you know anyone who works in the incubator now or has worked there in the past? If so, who?</label>
							<div class="col-sm-6">
								<input id="knowAnyone" placeholder="Do you know anyone who works with us?" class="form-control" name='knowAnyone' rows="9"></input>
							</div>
						</div>

						<br>

						<div class="row">
							<label for="newexisting" class="col-sm-6">Are you a new business to New York State, or an existing business?</label>
							<div class="col-sm-6">
								<input type='radio' name='newexisting' value='new' /> New <input type='radio' name='newexisting' value='old' /> Existing</p>	
							</div>
						</div>

						<br>

						<div class="row">
							<label for="housing" class="col-sm-6">Are you interested in Queens College housing at the Summit?</label>
							<div class="col-sm-6">
								<input type='radio' name='housing' value='Yes' /> Yes <input type='radio' name='housing' value='No' />No</p>	
							</div>
						</div> 

					
						<br>
						<p><h3>Business Plan</h3></p>
						<div class="row">
							<label for="howMuchCapital" class="col-sm-6">How much capital has been raised/invested to date? What are the sources of capital raised/invested to date?</label>
							<div class="col-sm-6">
								<input id="howMuchCapital" placeholder="How much capital has been raised or invested?" class="form-control" name='howMuchCapital' rows="9"></input>
							</div>
						</div>

						<br>

						<div class="row">
							<label for="declare" class="col-sm-6">Define your venture in a single declarative sentence:</label>
							<div class="col-sm-6">
								<input id="declare" placeholder="Define your venture!" class="form-control" name='declare' rows="9"></input>
							</div>
						</div>

						<br>

						<div class="row">
							<label for="solution" class="col-sm-6">What existing problem does your solution (e.g.: product, service, app) address?</label>
							<div class="col-sm-6">
								<input id="solution" placeholder="What do you help to solve with your venture?" class="form-control" name='solution' rows="9"></input>
							</div>
						</div>

						<br>

						<div class="row">
							<label for="appeal" class="col-sm-6">What makes your product/service unique and appealing to customers?</label>
							<div class="col-sm-6">
								<input id="appeal" placeholder="What makes your venture unique?" class="form-control" name='appeal' rows="9"></input>
							</div>
						</div>

						<br>

						<div class="row">
							<label for="target" class="col-sm-6">Who are your target users/customers, and how big is the market for your product/service?</label>
							<div class="col-sm-6">
								<input id="target" placeholder="Who are your target users?" class="form-control" name='target' rows="9"></input>
							</div>
						</div>
						<br>

						<p><h3>Market Analysis</h3></p>
						<div class="row">
							<label for="core" class="col-sm-6">What is the technology/discovery at the core of your venture?</label>
							<div class="col-sm-6">
								<input id="core" placeholder="What technology drives your venture?" class="form-control" name='core' rows="9"></input>
							</div>
						</div>
						<br>

						<div class="row">
							<label for="revenue" class="col-sm-6">What are the potential (or current) sources of revenue?</label>
							<div class="col-sm-6">
								<input id="revenue" placeholder="How do you plan to produce revenue with your venture?" class="form-control" name='revenue' rows="9"></input>
							</div>
						</div>
						<br>

						<div class="row">
							<label for="partner" class="col-sm-6">What academic or industry groups would you like to partner with?</label>
							<div class="col-sm-6">
								<input id="partner" placeholder="Who would you like to partner with?" class="form-control" name='partner' rows="9"></input>
							</div>
						</div>
						<br>

						<div class="row">
							<div class="col-sm-12">
								<label>Describe your sales and marketing strategy; how will you grow the business?</label>
								<textarea name='strategy' placeholder="Describe your sales and marketing strategy; how will you grow the business?" class="form-control" rows="3"></textarea>
							</div>
						</div>
						<br>

						<div class="row">
							<div class="col-sm-12">
								<label>What are barriers to entry, and what is your competitive advantage?</label>
								<textarea name='advantage' placeholder="What are barriers to entry, and what is your competitive advantage?" class="form-control" rows="3"></textarea>
							</div>
						</div>
						<br>

						<p><h3>Management</h3></p>
						<div class="row">
							<div class="col-sm-12">
								<label>Which qualifications - skills and resources - does your current team have?</label>
								<textarea name='skills' placeholder="Which qualifications - skills and resources - does your current team have?" class="form-control" rows="4"></textarea>
							</div>
						</div>
						<br>

						<div class="row">
							<div class="col-sm-12">
								<label>How will the incubator program impact your ability to succeed?</label>
								<textarea name='ability' placeholder="How will the incubator program impact your ability to succeed?" class="form-control" rows="4"></textarea>
							</div>
						</div>
						<br>

						<p><h3>Documentation</h3></p>
						<label>Executive Summary <input type='file' name='execSummary' /><br></label>
						<label>Presentation <input type='file' name='presentation' /><br></label>
						<label>Additional Bios/Etc <input type='file' name='bios' /><br></label>
						<br><br><br>

						<div class="row container">
							<div class="col-sm-8 text-center">
								<input class="btn btn-default btn-lg" type='submit' name='submit' value="Submit Application">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						65-30 Kissena Boulevard, Flushing, NY 11367
					</address>
					<h4>Phone:</h4>
					<address>
						(add) a phone number here
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

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
	<script src="assets/js/mail.js"></script>
</body>
</html>