<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
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

    <div id="welcome" class="container text-center">
        <!-- Do not change these --> <br> <br> <br> <!-- Do not change these -->

        <br><br><br><br>
        <h1 class="thin">Apply Now.</h1>
        <br>
        <h2 class="thin">Are you applying as a student or a venture?</h2>
        <br><br>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                <a class="btn btn-default btn-lg" href="studentapply.php" role="button">Student!</a></div>
                <div class="col-md-4 col-md-offset-4 col-xs-12 col-sm-4 col-sm-offset-4 col-lg-4">
                <a class="btn btn-default btn-lg" href="apply.php" role="button">Venture!</a></div>
            </div>
        </div>

    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
            </div>
        </div>
    </section>
    </div>
    

    <!-- footer -->
    <?php include("./footer.php"); ?>
        

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>