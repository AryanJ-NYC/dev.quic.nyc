<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Queens College</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.ico" type="image/x-icon"/>

    <?php include("css-links.php"); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
    <?php include("./navbar.php"); ?>

    <!-- container -->
    <div class="container" ng-app="QuicApp">

        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Resources</li>
        </ol>

        <div class="row">
            <header class="page-header"><h1 class="page-title">About Queens College</h1></header>
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <p>At its founding in 1937, Queens College was hailed by the people of the borough as “the college of the future.” Now part of the City University of New York (CUNY), Queens College offers a rigorous education in the liberal arts and sciences under the guidance of a faculty dedicated to both teaching and research. Students graduate with the ability to think critically, address complex problems, explore various cultures, and use modern technologies and information resources.</p>
				
				<p>Located in a residential area of Flushing in the borough of Queens—America’s most ethnically diverse county—the college has students from more than 150 nations. A member of Phi Beta Kappa, Queens College is consistently ranked among the leading institutions in the nation for the quality of its academic programs and student achievement. Recognized as one of the most affordable public colleges in the country, Queens College offers a first-rate education to talented people of all backgrounds and financial means.</P>
				
				<P>The beautiful campus consists of 80 acres lined with trees surrounding grassy open spaces and a traditional quad. The college boasts state-of-the-art computer and science laboratories, a spectacular music building, and the six-story Rosenthal Library. The major classroom building, Powdermaker Hall, has the latest technology throughout. An extensive commitment to sustainability has earned Queens College inclusion in the Princeton Review’s first-ever Guide to 322 Green Colleges.</P>
				
				<P>Academic programs are organized into four divisions, which offer both day and evening courses: Arts and Humanities; Mathematics and the Natural Sciences; the Social Sciences; and Education (Queens College educates more teachers than any other college in the New York City region). The college offers several new undergraduate and graduate majors, including a BA in Chinese, a BA in Classics, a Bachelor of Business Administration degree, an MFA in Creative Writing and Translation, an MS in Photonics, and an MS in Risk Management.</P>
				
				<P>Queens College participates in CUNY’s Macaulay Honors College, a challenging program open to the most academically gifted students. It also offers qualified students its own honors programs in the arts and humanities, sciences, and social sciences. An Honors Center with lounges and labs is available for students participating in the college’s various honors programs.</P>
				
				<P>The college’s centers and institutes serve students and the larger community by addressing society’s most important challenges—including cancer, pollution, and racism—as well as celebrating the borough’s many ethnic communities. Its arts scene is vibrant, thanks to the Kupferberg Center for the Visual and Performing Arts, which brings together the college’s academic departments in the arts (Music, Drama, Theatre & Dance, Art, and Media Studies) and its museums (the Godwin-Ternbach Museum, the Queens College Art Center, and the Louis Armstrong House Museum). The celebrated Evening Readings Series has brought some of the world’s most acclaimed writers to campus.</P>
				
				<P>The college’s administration is committed to making the campus a home away from home for its students with over 100 clubs and teams, from the Science Organization of Minority Students to clubs for theatre, fencing, environmental science, and martial arts. The only CUNY college that participates in NCAA Division II sports, Queens sponsors men’s and women’s teams and has some of the finest athletics facilities in the metropolitan area. The college continues to open new cafes, dining areas, and lounge areas; improve the Student Union and other buildings; and embark on a variety of beautification projects to enhance students’ experience on campus.</P>
				
				<P>Queens College opened its first residence hall, The Summit, in fall 2009. Now known as Summit Apartments, it houses approximately 500 students. Summit earned LEED Gold certification, a ranking established by the U.S. Green Building Council, thanks to its green design and use of sustainable strategies for water and energy.</P>
				</p>
              </article> <!-- /Article -->

            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="widget">
                    <quick-links></quick-links>
                </div>
            </aside>       
        </div>
    </div>  <!-- /container -->
    

    <!-- footer -->
    <?php include("./footer.php"); ?>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">    </script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/apps/app.js"></script>
</body>
</html>