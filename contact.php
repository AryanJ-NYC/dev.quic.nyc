<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	
	<title>Contact Us</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.ico" type="image/x-icon"/>

	<?php include("css-links.php"); ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	 var RecaptchaOptions = {
	    theme : 'clean'
	};
	</script>
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
            <header class="page-header">
                <h1 class="page-title">Contact Us</h1>
                <div class="error"></div>
            </header>
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<p>Feel free to contact us anytime. Fill out the form below and we will be sure to get back to you.</p><br>
					<form id="contact-form">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Name" name="name">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Email" name="email">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Phone" name="phone">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Type your message here..." class="form-control" name="text" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row container">
							<center>
							<div class='col-sm-8'>
							<?php
					          require_once('./assets/libraries/reCAPTCHA/recaptchalib.php');
					          $publickey = "6Ld6mQkTAAAAAHssW7iiyS3xccpBY6VKilV9_dQS"; 
					          echo recaptcha_get_html($publickey);
					        ?>
					        </div>
							<br>
							</center>
							<div class="col-sm-8 text-center">
							<br>
								<input class="btn btn-default btn-lg" type='submit' name='submit' value="Submit Message">
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
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="assets/js/mail.js"></script>
</body>
</html>