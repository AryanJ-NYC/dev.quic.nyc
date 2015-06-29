<div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Queens College Incubator"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                <?php $thisPage = basename($_SERVER['SCRIPT_FILENAME']) ?>
                    <li <?php if ($thisPage=="index.php") echo "class=\"active\"";?>><a href="index.php">Home</a></li>
                    <li <?php if ($thisPage=="about.php") echo "class=\"active\"";?>><a href="about.php">About</a></li>
                    <li <?php if ($thisPage=="projects.php") echo "class=\"active\"";?>><a href="projects.php">Projects</a></li>
                    <li <?php if ($thisPage=="staff.php") echo "class=\"active\"";?>><a href="staff.php">Staff</a></li>
                    <li <?php if ($thisPage=="contact.php") echo "class=\"active\"";?>><a href="contact.php">Contact</a></li>
                    <li <?php if ($thisPage=="apply.php") echo "class=\"active\"";?>><a class="btn" href="apply.php">APPLY NOW</a></li>
                </ul>
            </div>
        </div>
</div>