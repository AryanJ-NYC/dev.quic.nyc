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
        background-size: cover;
      } 
		  .container {
			  height: 100%;
		  }
      .front_page {
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

  <body>
  <?php include 'header.php';?>
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="span9">
            <div class="body">
              <div class="content-title">
                <h1>The Queens College Incubator</h1>
                  Kissena Boulevard, Flushing, New York
              </div>
              <div>
                <p>The Incubator seeks to carry forward the mission of the college by attracting high tech business to campus and
                giving them access to the diverse and talented students, staff and faculty of the college. It is the ambition of the
                incubator to reflect the tremendous diversity and resourcefulness of the many ethnic communities of Queens itself.</p>
              </div>
            </div>
          </div>
          <?php include('right-nav.php') ?>
        </div>
      </div>
    </div>

    
  <!-- /container -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
  <script src="/theme/bootstrap-collapse.js"></script>
  </body>
</html>
