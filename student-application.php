<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Queens College Incubator Student Application</title>

	<style>
		.formsection { border:solid 1px #CCC; padding:8px 12px; margin-bottom:12px; }
	</style>

    <!-- Le styles -->
    <link href="./theme/bootstrap.min.css" rel="stylesheet">
    <link href="./theme/bootstrap.min.responsive.css" rel="stylesheet">
    <link href="./theme/local.css" rel="stylesheet">
    <link href="./theme/pygments.css" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/student-mail.js"></script>
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
		   <tr><td>Name of Applicant:</td><td><input type='text' name='applicant' size="50"></td></tr>
		   <tr><td>Phone</td><td><input type='text' name='phone' size="50"></td></tr>
		   <tr><td>E-mail:</td><td><input type='text' name='email' size="50"></td></tr>
		  </table>
		</div>
		<div class="formsection">
		  <h3>Education & Experience</h3>
		  <p>Degree in progress? <select name="degree">
		  	<option value="bachelors">Bachelors</option>
		  	<option value="masters">Masters</option>
		  </select></p>
		  <p>Expected Graduation:
		  <select name="gradseason">
		  	<option value ="winter">Winter</option>
		  	<option value ="spring">Spring</option>
		  	<option value ="summer">Summer</option>
		  	<option value ="fall">Fall</option>
		  </select>
		  <select name="gradyear">
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
		  </select></p>
		  <p>Work Status
          <select name="citizenship">
            <option value="citizen">Citizen</option>
            <option value="permanent-resident">Permanent Resident</option>
            <option value="visa">Work/Student Visa</option>
            <option value="other">Other</option>
          </select></p>
		  <p>Credits needed to graduate? <input type='text' name='credstograd' size="2" style="width:initial;"></p>
		</div>
		 <div class='formsection'>
		  <h3>Programming Experience</h3>
		  <p>Summarize any programming experience you have acquired from employment, freelance work, class projects, volunteering, hobbies, or through other activities. When referring to specific projects, please give a brief description and discuss the following: language(s) developed in and your level of proficiency; tools used; the environment created in; and your role. If any work is live, include a link to an online portfolio.<br><textarea name='programmingExperience' cols="70" rows="5"></textarea></p>
		</div>
		<div class='formsection'>
		  <h3>Personal Statement</h3>
		  <p>In fewer than 200 words, please describe why you want to participate in this program and what you hope to gain from the experience. You should indicate clearly what skills you will bring to the program and why you are likely to succeed. This is also your chance to explain any issues with your application not addressed in previous sections. The personal statement will be especially important in evaluating the strength of your candidacy if you are not submitting a letter of recommendation.<br><textarea name='personalstatement' cols="70" rows="5"></textarea></p>
		</div>
		<div class='formsection'>
		  <h3>Documentation</h3>
		  <p>Unofficial Transcript <input type='file' name='unofficialTranscript' style="margin-bottom: 0;width:initial;"></p>
		  <p>Resume <input type='file' name='resume' style="margin-bottom: 0;width:initial;"></p>
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