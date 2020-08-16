<html>
<head>
	<title>Sign Academy</title>
<?php
  require_once("extfiles.php");
?>
<style>
.zoom {
  padding-top: 15px;
  transition: transform .2s;
  /*width: 200px;
  height: 200px;*/
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.2); 
}
</style>
</head>
<body style="background-color:whitesmoke;">
<?php
  require_once("header.php");
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
							<li>Gallery</li>
						</ul>
						<h1 class="white-text">Gallery</h1>
                    </div>
				</div>
			</div>

		</div>
	

		<div id="courses" class="section">
                <div class="container">
                    <div id="courses-wrapper">
                        <div class="row">
                          <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<img src="Img/gallery/12.jpg" alt="Gallery" id="myImg">
							</div>
	                    </div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<img src="Img/gallery/5.jpg" alt="Gallery" id="myImg">
								</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<img src="Img/gallery/4.jpg" alt="Gallery" id="myImg">
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/10.jpg" alt="Gallery" >
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
					</div>
					 <div class="row">
                          <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/1.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/8.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/9.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/3.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
					</div>
					<div class="row">
                          <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/6.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/13.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/11.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course zoom">
								<a href="#" class="course-img">
									<img src="Img/gallery/7.jpg" alt="Gallery">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php
 require_once("footer1.php");
?>
</body>
</html>