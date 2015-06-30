<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Queens College Incubator Application</title>

	<style>
		.formsection { border:solid 1px #CCC; padding:8px 12px; margin-bottom:12px; }
	</style>

    <!-- Le styles -->
    <link href="./theme/bootstrap.min.css" rel="stylesheet">
    <link href="./theme/bootstrap.min.responsive.css" rel="stylesheet">
    <link href="./theme/local.css" rel="stylesheet">
    <link href="./theme/pygments.css" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/mail.js"></script>
</head>

<body>
<?php include('header.php'); ?>
<div class='container'>

	<div class="content">
	<div class="row">
	<div class="span9">
	<form id="form" method ="post" enctype="multipart/form-data">
	<div class="body">
		<h2>City University of New York - Queens College Incubator Application</h2>
		<br>
		<div class="error"></div>
		<div class='formsection'>
		  <h3>Applicant Information</h3>
		  <table width="95%" border="0">
		   <tr><td>Venture Name:</td><td><input type='text' name='venturename' size="50"></td></tr>
		   <tr><td>Website:</td><td><input type='text' name='website' size="50"></td></tr>
		   <tr><td>Name of Applicant:</td><td><input type='text' name='applicant' size="50"></td></tr>
		   <tr><td>Title:</td><td><input type='text' name='title' size="50"></td></tr>
		   <tr><td>Phone</td><td><input type='text' name='phone' size="50"></td></tr>
		   <tr><td>E-mail:</td><td><input type='text' name='email' size="50"></td></tr>
		  </table>
		</div>
		<div class="formsection">
		  <h3>CUNY Incubator</h3>
		  <p>How many workstations do you need now and in the next 6 months? <input type='text' name='workstations' size="2" style="width:initial;"></p>
		  <p>How many new full-time posititons do you expect to add to your company each year for the next two years? <input type='text' name='numPos' size="3" style="width:initial;"></p>
		  <p>Are you a new business to New York State or an existing business? <input type='radio' name='newexisting' value='new' /> New <input type='radio' name='newexisting' value='old' > Existing</p>
		  <p>Have you participated in a startup accelerator/incubator in the past? If so, which one(s)?<br /><input type='text' name='participatedBefore'></p>
		  <p>How did you hear about the incubator?<br /><input type='text' name='hearAbout'></p>
		  <p>Do you know anyone who works in the incubator now or has worked there in the past? If so, who?<br><input type='text' name='knowAnyone'></p>
		  <p>Are you interested in Queens College housing at <a href="http://queenscollegehousing.com/" target="_blank">The Summit</a>? <input type='radio' name='housing' value='yes' >Yes <input type='radio' name='housing' value='no' /> No</p>
		</div>
		 <div class='formsection'>
		  <h3>Business Plan</h3>
		  <p>How much capital has been raised/invested to date? What are the sources of capital raised/invested to date?<br /><input type='text' name='howMuchCapital'></p>
		  <p>Define your venture in a single declarative sentence:<br /><input type='text' name='declare'></p>
		  <p>What existing problem does your solution (e.g.: product, service, app) address?<br /><textarea type='text' name='solution' cols="80" rows="3"></textarea></p>
		  <p>What makes your product/service unique and appealing to customers?<br /><textarea type='text' name='appeal' cols="80" rows="3"></textarea></p>
		  <p>Who are your target users/customers, and how big is the market for your product/service?<br /><input type='text' name='target' size="80"></p>
		</div>
		<div class='formsection'>
		  <h3>Market Analysis</h3>
		  <p>What is the technology/discovery at the core of your venture?<br /><input type='text' name = 'core' /></p>
		  <p>What are the potential (or current) sources of revenue? <br /><input type='text' name='revenue' /></p>
		  <p>Describe your sales and marketing strategy; how will you grow the business?<br /><textarea name = 'strategy' cols=70 rows=5></textarea></p>
		  <p>What are barriers to entry, and what is your competitive advantage?<br /><textarea name='advantage' cols=70 rows=5></textarea></p>
		  <p>What academic or industry groups would you like to partner with?<br /><input type='text' name='partner' /></p>
		</div>
		<div class='formsection'>
		  <h3>Management</h3>
		  <p>Which qualifications - skills and resources - does your current team have?<br /><textarea name = 'skills' cols="70" rows="10"></textarea></p>
		  <p>How will the incubator program impact your ability to succeed?<br /><textarea name = 'ability' cols=70 rows=5></textarea></p>
		</div>
		<div class='formsection'>
		  <h3>Documentation</h3>
		  <p>Executive Summary <input type='file' name='execSummary' style="margin-bottom:0;width:initial;"></p>
		  <p>Presentation <input type='file' name='presentation' style="margin-bottom:0;width:initial;"></p>
		  <p>Additional Bios/Etc <input type='file' name='bios' style="margin-bottom:0;width:initial;"></p>
		</div>
		<div style='margin-top:30px;margin-bottom:50px;text-align:center;'>
			<input id="submit" type='submit' name='submit' value='Submit' />
		</div>
	</div></form>
	</div><?php include('right-nav.php') ?>
	</div>
	</div></div></div>

</body>
</html>