<div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Queens College Incubator"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                <?php $thisPage = basename($_SERVER['SCRIPT_FILENAME']) ?>

                    <li class="dropdown" <?php if ($thisPage=="about.php") echo "class=\"active dropdown\"";?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="quic.php">QUIC</a></li>
                            <li><a href="facility.php">Facilities</a></li>
                            <li><a href="queenscollege.php">Queens College</a></li>
                            <li><a href="virtualtour.php">Virtual Tour</a></li>
                        </ul>
                    </li>

                    <li class="dropdown" <?php if ($thisPage=="community.php") echo "class=\"active dropdown\"";?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="leadership.php">Leadership</a></li>
                            <li><a href="staff.php">Staff</a></li>
                            <li><a href="fellows.php">Fellows</a></li>
                            <li><a href="members.php">Members</a></li>
                            <li><a href="partners.php">Partners</a></li>
                            <li><a href="committee.php">Advisory Committee</a></li>
                        </ul>
                    </li>

                    <li class="dropdown" <?php if ($thisPage=="resources.php") echo "class=\"active dropdown\"";?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="it.php">IT</a></li>
                            <li><a href="faculty.php">Faculty Experts in Residence</a></li>
                            <li><a href="master.php">Master Classes</a></li>
                            <li><a href="member.php">Member Study Groups</a></li>
                            <li><a href="officespace.php">Office Spaces</a></li>
                        </ul>
                    </li>

                    <li class="dropdown" <?php if ($thisPage=="events.php") echo "class=\"active dropdown\"";?>>
                    <a href="events.php">Events</a>
                    </li>

                    <li class="dropdown" <?php if ($thisPage=="membership.php") echo "class=\"active dropdown\"";?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="benefits.php">Member Benefits</a></li>
                            <li><a href="incubatorspace.php">Incubator Space</a></li>
                            <li><a href="cost.php">Membership Cost</a></li>
                        </ul>
                    </li>

                    <li class="dropdown" <?php if ($thisPage=="projects.php") echo "class=\"active dropdown\"";?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://flushing.quic.nyc" target="_blank">Underground Flushing Food Map</a></li>
                            <li><a href="colorblind.php">Colorblind Support</a></li>
                            <li><a href="buildings.php">Building Analytics</a></li>
                        </ul>
                    </li>

                    <li <?php if ($thisPage=="contact.php") echo "class=\"active dropdown\"";?> >
                    <a href="contact.php">Contact</a>
                    </li>

                    <li <?php if ($thisPage=="applynow.php") echo "class=\"active dropdown\"";?> >
                    <a class="btn" href="applynow.php">APPLY NOW</a>
                    </li>
                </ul>
            </div>
        </div>
</div>