<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
</head>

<body>
<?php include('header.php'); ?>

<form action = "submit-form.php" method = "post">
	<div class='container'>
	<div class='content'>
		<h2>City University of New York - Queens College Incubator Application</h2>
		<div class='formsection'>
		  <h3>Applicant Information</h3>
		  <table width="800" border="0">
		   <tr><td width="200">Venture Name:</td><td width="600"><input type='text' name='venturename' /></td></tr>
		   <tr><td>Website:</td><td width="600"><input type='text' name='website' /></td></tr>
		   <tr><td>Name of Applicant:</td><td width="600"><input type='text' name='applicant' /></td></tr>
		   <tr><td>Title:</td><td width="600"><input type='text' name='title' /></td></tr>
		   <tr><td>Phone</td><td width="600"><input type='text' name='phone' /></td></tr>
		   <tr><td>E-mail:</td><td width="600"><input type='text' name='email' /></td></tr>
		  </table>
		</div>
		<div class="formsection">
		  <h3>CUNY Incubator</h3>
		  <p>How many workstations do you need now and in the next 6 months? <input type='text' name='workstations' style='width:50px;' /></p>
		  <p>How many new full-time posititons do you expect to add to your company each year for the next two years? <input type='text' name='numPos' style='width:60px; margin-left:5px;' /></p>
		  <p>Are you a new business to New York State, or an existing business? <input type='radio' name='newexisting' value='new' /> New <input type='radio' name='newexisting' value='old' /> Existing</p>
		  <p>Have you participated in a startup accelerator/incubator in the past? If so, which one(s)?<br /><input type='text' name='participatedBefore' /></p>
		  <p>How did you hear about the incubator?<br /><input type='text' name='hearAbout' /></p>
		  <p>Do you know anyone who works in the incubator now or has worked there in the past? If so, who?<br /><input type='text' name='knowAnyone' /></p>
		</div>
		 <div class='formsection'>
		  <h3>Business Plan</h3>
		  <p>How much capital has been raised/invested to date? What are the sources of capital raised/invested to date?<br /><input type='text' name='howMuchCapital' /></p>
		  <p>Define your venture in a single declarative sentence:<br /><input type='text' name='declare' /></p>
		  <p>What existing problem does your solution (e.g.: product, service, app) address?<br /><input type='text' name='solution' /></p>
		  <p>What makes your product/service unique and appealing to customers?<br /><input type='text' name='appeal' /></p>
		  <p>Who are your target users/customers, and how big is the market for your product/service?<br /><input type='text' name='target' /></p>
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
		  <p>Which qualifications - skills and resources - does your current team have?<br /><textarea name = 'skills' cols="700" rows="10"></textarea></p>
		  <p>How will the incubator program impact your ability to succeed?<br /><textarea name = 'ability' cols=70 rows=5></textarea></p>
		</div>
		<div class='formsection'>
		  <h3>Documentation</h3>
		  <p>Executive Summary <input type='file' name='execSummary' /></p>
		  <p>Presentation <input type='file' name='presentation' /></p>
		  <p>Additional Bios/Etc <input type='file' name='bios' /></p>
		</div>
		<div style='margin-top:30px;margin-bottom:50px;text-align:center;'><input type='submit' name='submit' value='Submit' /></div>
	</div>
	</div>

</form>

</body>
</html>