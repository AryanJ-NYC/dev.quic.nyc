<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    
    <title>Students - Apply Now</title>

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
                <h1 class="page-title">Application For Students</h1>
                <div class="error"></div>
            </header>
            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <p>
                   Start the process for joining the Queens College Tech Incubator as a student developer. Fill out the form below and we will get back to you as soon as possible. 
                </p>
                    <form id="student-apply-form" method="post" enctype="multipart/form-data">

                        <p><h3>Applicant Information</h3></p>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Applicant Name:</label>
                                <input id="fellow-name" class="form-control" type="text" placeholder="Applicant Name" name='applicant'><br>
                            </div>

                            <div class="col-sm-6">
                                <label>Phone Number:</label>
                                <input id="fellow-phone" class="form-control" type="text" placeholder="Your Phone Number" name='phone'><br>
                            </div>

                            <div class="col-sm-6">
                                <label>Email Address:</label>
                                <input id="fellow-email" class="form-control" type="text" placeholder="Your Email Address" name='email'><br>
                            </div>
                        </div>
                        
                        <p><h3>Education & Experience</h3></p>
                        <div class="row">
                            <label for="degree" class="col-sm-6">Degree in progress?</label>
                            <div class="col-sm-6">
                                <select id="degree" class="form-control" name='degree'>
                                    <option value="bachelors">Bachelors</option>
                                    <option value="masters">Masters</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <label for="gradseason" class="col-sm-6">Expected Graduation:</label>
                            <div class="col-sm-3">
                                <select id="gradseason" class="form-control" name='gradseason'>
                                    <option value ="winter">Winter</option>
                                    <option value ="spring">Spring</option>
                                    <option value ="summer">Summer</option>
                                    <option value ="fall">Fall</option>
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <select id="gradyear" class="form-control" name='gradyear'>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                        </div>

                        <br> 

                        <div class="row">
                            <label for="citizenship" class="col-sm-6">Work Status:</label>
                            <div class="col-sm-6">
                                <select id="citizenship" class="form-control" name='citizenship' rows="9">
                                    <option value="citizen">Citizen</option>
                                    <option value="permanent-resident">Permanent Resident</option>
                                    <option value="visa">Work/Student Visa</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <br> 

                        <div class="row">
                            <label for="credstograd" class="col-sm-6">Credits needed to graduate?</label>
                            <div class="col-sm-6">
                                <input id="credstograd" placeholder="Credits needed" class="form-control" name='credstograd' rows="9"></input>
                            </div>
                        </div>

                        <br>
                    
                        <p><h3>Programming Experience</h3></p>
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Summarize any programming experience you have acquired from employment, freelance work, class projects, volunteering, hobbies, or through other activities. When referring to specific projects, please give a brief description and discuss the following: language(s) developed in and your level of proficiency; tools used; the environment created in; and your role. If any work is live, include a link to an online portfolio.</label>
                                <textarea id="programming-experience" name='programmingExperience' placeholder="" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <br>

                        <p><h3>Personal Statement</h3></p>
                        <div class="row">
                            <div class="col-sm-12">
                                <label>In fewer than 200 words, please describe why you want to participate in this program and what you hope to gain from the experience. You should indicate clearly what skills you will bring to the program and why you are likely to succeed. This is also your chance to explain any issues with your application not addressed in previous sections. The personal statement will be especially important in evaluating the strength of your candidacy if you are not submitting a letter of recommendation.</label>
                                <textarea id="personal-statement" name='personalstatement' placeholder="" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <br>

                        <p><h3>Documentation</h3></p>
                        <label>Unofficial Transcript <input type='file' name='unofficialTranscript' /><br></label>
                        <label>Resume <input type='file' name='resume' /><br></label>
                        <br><br><br>

                        <div class="row container">
                            <center>
                            <br>
                            </center>
                            <div class="col-sm-8 text-center">
                            <br>
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
                </div>
            </aside>
            <!-- /Sidebar -->

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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="assets/js/mail.js"></script>
    <script src="assets/js/functions.js"></script>

    <script>
    // The following code saves the form values in case of browser refresh
    window.onload = function() {
        setFormValue('name', '#fellow-name');
        setFormValue('phone', '#fellow-phone');
        setFormValue('email', '#fellow-email');
        setFormValue('degree', '#degree');
        setFormValue('gradseason', '#gradseason');
        setFormValue('gradyear', '#gradyear');
        setFormValue('citizenship', '#citizenship');
        setFormValue('creditstograd', '#credstograd');
        setFormValue('experience', '#programming-experience');
        setFormValue('statement', '#personal-statement');
    }
    
    window.onbeforeunload = function() {
        sessionStorage.setItem('name', $('#fellow-name').val());
        sessionStorage.setItem('phone', $('#fellow-phone').val());
        sessionStorage.setItem('email', $('#fellow-email').val());
        sessionStorage.setItem('degree', $('#degree').val());
        sessionStorage.setItem('gradseason', $('#gradseason').val());
        sessionStorage.setItem('gradyear', $('#gradyear').val());
        sessionStorage.setItem('citizenship', $('#citizenship').val());
        sessionStorage.setItem('creditstograd', $('#credstograd').val());
        sessionStorage.setItem('experience', $('#programming-experience').val());
        sessionStorage.setItem('statement', $('#personal-statement').val());
    }
    </script>

</body>
</html>