<footer id="footer" class="top-space">

<?php 
if(!ini_get('date.timezone')) {
    date_default_timezone_set('GMT');
}
?>

        <div class="footer1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Information</h3>
                        <div class="widget-body">
                                <a href="mailto:#">info@quic.nyc</a><br>
                                65-30 Kissena Boulevard, Flushing, New York
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Social</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href="//twitter.com/QCTechIncubator" target="_blank"><i class="fa fa-twitter fa-2"></i></a>
                                <a href="https://www.facebook.com/pages/Queens-College-Tech-Incubator/651083375025310" target="_blank"><i class="fa fa-facebook fa-2"></i></a>
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title"><a href="contact.php">Contact Us</a></h3>
                        <div class="widget-body">
                            <p>Get in contact with us through any of the available forms above. Students who want to join the Incubator as developers can apply for a position, while ventures can apply to have their product supported by our Incubator.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="index.php">Home</a> | 
                                <a href="about.php">About</a> |
                                <a href="projects.php">Projects</a> |
                                <a href="staff.php">Staff</a> |
                                <a href="contact.php">Contact</a> |
                                <b><a href="applynow.php">Apply Now</a></b>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; <?php echo date("Y"); ?> - Queens College Incubator 
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

</footer>