<!DOCTYPE html>
<html lang="en">
	<head>
       <title>Sign Academy</title>
		<?php
		require_once("extfiles.php");
		?>
		 </head>
	<body style="background-color:whitesmoke;">
        <!-- Header -->
		<?php
           require_once("header.php")
		?>
	<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./Img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li>Courses</li>
						</ul>
						<h1 class="white-text">Courses</h1>

					</div>
				</div>
			</div>

		</div>
		    <div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="col-md-12 display">
						<div class="col-md-3 course-block">
                          	<a href="iit.php" class="font-decoration">
                             <div class="col-md-12 course-icon">
                               <i class="fa fa-university course-fa-icon"></i>
                             </div>
                             <div class="col-md-12 text-center">
                              <h5>IIT / JEE / NEET</h5>
                             </div>
                         </a>
                         </div>
                         <div class="col-md-3 course-block">
                         	<a href="eightstd.php" class="font-decoration">
                             <div class="col-md-12 course-icon">
                               <i class="fa fa-file-text-o course-fa-icon"></i>
                             </div>
                             <div class="col-md-12 text-center">
                              <h5>VIII Foundation</h5>
                             </div>
                         </a>
                         </div>
                          <div class="col-md-3 course-block">
                          	<a href="ninestd.php" class="font-decoration">
                             <div class="col-md-12 course-icon">
                             	<img src="Img/physics1.png">
                               <!--<i class="fa fa-user-md course-fa-icon"></i>-->
                             </div>
                             <div class="col-md-12 text-center">
                              <h5>IX Foundation</h5>
                             </div>
                           </a>
                         </div>
                     </div>
                     <div class="col-md-12 display">
                         <div class="col-md-3 course-block">
                         	<a href="tenstd.php" class="font-decoration">
                             <div class="col-md-12 course-icon">
                               <i class="fa fa-lightbulb-o course-fa-icon"></i>
                             </div>
                             <div class="col-md-12 text-center">
                              <h5>X Foundation</h5>
                             </div>
                         </a>
                         </div>
                         <div class="col-md-3 course-block">
                         	<a href="twelvestd.php" class="font-decoration">
                             <div class="col-md-12 course-icon">
                             	<img src="Img/chemistry1.png" class="course-fa-icon">
                               <!--<i class="fa fa-pie-chart course-fa-icon"></i>-->
                             </div>
                             <div class="col-md-12 text-center">
                              <!--<h5>XI & XII</h5>-->
                         
                             </div>
                         </a>
                         </div>
                       <!--<div class="col-md-3 course-block">
                         	<a href="assignment.php" class="font-decoration">
                             <div class="col-md-12 course-icon">
                             	<img src="Img/assignment.png" class="course-fa-icon">
                             </div>
                             <div class="col-md-12 text-center">
                              <h5>Assignments</h5>
                             </div>
                         </a>
                         </div>-->
                     </div>
				</div>
			</div>
			<!-- /container -->

		</div>

		<?php
 require_once("footer.php");
?>
</html>