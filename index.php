<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Queens College Incubator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/theme/bootstrap.min.css" rel="stylesheet" />
    <link href="/theme/bootstrap.min.responsive.css" rel="stylesheet" />
    <link href="/theme/local.css" rel="stylesheet" />
    <link href="/theme/pygments.css" rel="stylesheet" />
    <style>
        body {
        background-image: url("/images/qc.jpg");
		height:100%;
        } 
		.container{
			height:100%;
		}
        .front_page{
        background-color: rgba(240,240,240,.7);
        }
        .content-title{
                text-align:center;
        }
 footer{
	position:absolute;
   bottom:0;
   height:60px;   /* Height of the footer */
   text-align:center;
}
</style>
  </head>
  <body><?php include 'header.php'; ?>
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="span9">
          <div class="front_page">
            <div class="content-title">
            <h1>The Queens College Incubator</h1>Kissena Boulevard, Flushing, New York</div>
            <div>
              <p>
                Located in a residential area of Flushing in the borough of Queens—America’s most ethnically diverse county—Queens College has students from more than 150 nations. Recognized as one of the most affordable public colleges in the country, Queens College offers a first-rate education to talented people of all backgrounds and financial means.
              </p>
              <p>
                The beautiful campus consists of 80 acres lined with trees surrounding grassy open spaces and a traditional quad. The college boasts state-of-the-art computer and science laboratories, a spectacular music building, and the six-story Rosenthal Library. The major classroom building, Powdermaker Hall, has the latest technology throughout.
              </p>
              <p>
                Queens College boasts a fitness center that features cardiovascular machines (elliptical cross trainers, stair steppers, cycles, treadmills and the new ARC trainer), a free weight area and a Cybex selectorized weight circuit. Trained recreation staff members are available to offer assistance with all of the equipment. Personal Training or Group Training sessions can be scheduled for those who want more personal attention.
              </p>
              <p>
                 Queens College features on-campus housing in The Summit.  Located in the heart of the campus, just south of Fitzgerald Gymnasium, the low-rise, U-shaped, 506-bed building has three wings of varying stories to complement the heights of the surrounding buildings.
              </p>
              <p>
                The Incubator seeks to carry forward the mission of the college by attracting high tech business to campus and giving them access to the diverse and talented students, staff and faculty of the college. It is the ambition of the incubator to reflect the tremendous diversity and resourcefulness of the many ethnic communities of Queens itself.
              </p>
            </div>
          </div>
        </div><?php include('right-nav.php') ?>
      </div>
    </div>
  </div>
	<?php include('footer.php') ?>
  <!-- /container -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
  <script src="/theme/bootstrap-collapse.js"></script></body>
</html>
