<?php
if(isset($_POST["submit"])){
	 
if($_POST["name"]=="" || $_POST["mail"]=="" || $_POST["parent"]=="" ){
 echo "Kindly Fill All the Fields.";
 }
 else{
 	$email=$_POST['mail'];
	if (!filter_var($email, FILTER_SANITIZE_EMAIL)){
		echo "Invalid Sender's Email";
	}else{
	    $to = 'signacademy2017@gmail.com';
     $subject = 'Registered Through Website';
     $headers = "From: $email";
          $nm= $_POST["name"];
	 $em= $_POST["mail"];
	 $parent= $_POST["parent"];
	 $date= $_POST["date"];
	  $gn= $_POST["gender"];
	 $schl= $_POST["school"];
	  $course= $_POST["course"];
	 $board= $_POST["board"];
	 $addr= $_POST["address"];
	  $state= $_POST["state"];
	  $city= $_POST["city"];
	 $cnt= $_POST["contact"];
	 $profile=$_POST["reg_profile"];
			/*$message = $_POST['parent'];*/
			
	 
	 $message = "Name: $nm \r\n";
$message .= "Email: $em \r\n";
$message .= "Parent: $parent \r\n";
$message .= "DOB: $date \r\n";
$message .= "Gender: $gn \r\n";
$message .= "School: $schl \r\n";
$message .= "Course: $course \r\n";
$message .= "Board: $board \r\n";
$message .= "Address: $addr \r\n";
$message .= "State: $state \r\n";
$message .= "City: $city \r\n";
$message .= "Contact: $cnt \r\n";
$message .= "Profile: $profile \r\n";

			/*$headers = 'From:'. $email . "rn";
			$headers .= 'Cc:'. $email . "rn";
			$message = wordwrap($message, 200);*/
				/*if(mail("ashfas05@gmail.com", $subject, $message, $headers, "Name: $nm \n". "$em: $em \n". "Parent: $parent \n". "date: $date \n". "Gender: $gn \n". "School: $schl \n"))	{
					header("location:https://www.google.com/");
				}else{
					echo "<script>alert('Sorry!');</script>";
				}*/
				$sent = mail($to, $subject, $message, $headers);

if($sent) {
    	/*header("location:https://www.google.com/");*/
    echo "<script>alert('You are Registered...');</script>";
}
else {
    echo "<script>alert('Sorry! You are not register. Kindly try again later...');</script>";
}
	}
 }

 } 
 ?>

<?php
/*if(isset($_POST["submit"]))
{
	 $nm= $_POST["name"];
	 $em= $_POST["mail"];
	 $parent= $_POST["parent"];
	 $date= $_POST["date"];
	 $gn= $_POST["gender"];
	 $schl= $_POST["school"];
	 $course= $_POST["course"];
	 $board= $_POST["board"];
	 $addr= $_POST["address"];
	  $state= $_POST["state"];
	  $city= $_POST["city"];
	 $cnt= $_POST["contact"];
	   $err = $_FILES["reg_profile"]["error"];
	  if($err == 0)
	  {
	  	$date = date_create();
	  	$tstamp=date_timestamp_get($date);
        $tname=$_FILES["reg_profile"]["tmp_name"];
	    $fname=$tstamp.$_FILES["reg_profile"]["name"];
		move_uploaded_file($tname,"adminuploads/register/$fname");
	  }
	  else
		{
			$fname="avatar.png";
		}
	 require("connection.php");
	  $conn= mysqli_connect(dbhost, dbuser, dbpass, dbname) or die(mysqli_connect_error());
     $q="insert into register(reg_name,reg_mail, reg_parent, reg_date, reg_gender, reg_school, reg_course, reg_board, reg_address, reg_state, reg_city, reg_contact, reg_profile) values('$nm','$em','$parent','$date','$gn','$schl','$course','$board','$addr','$state','$city','$cnt','$fname')";
	  mysqli_query($conn,$q) or die(mysqli_error($conn));
	  $count= mysqli_affected_rows($conn);
	  mysqli_close($conn);
	  if($count==1){
		$msg="You Are Registered";  
	  }
	  else{
		  $msg="Oops! Please Try Again.";
	  }
	 }*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>
       <title>Sign Academy</title>
		<?php
		require_once("extfiles.php");
		?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 100%;
    margin: auto;
  }
  .carousel{
  	height: 100% !important;
  	overflow: hidden;
  }
  </style>
    </head>
	<body style="background-color: whitesmoke;">
        <!-- Header -->
		<?php
           require_once("header.php")
		?>
		<!-- /Header -->

		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<!--<div class="bg-image bg-parallax overlay" style="background-image:url(Img/banner.jpg)"></div>-->
			<!-- /Backgound Image -->
			<!--<div class="bg-image bg-parallax slideshow-container">

 <div class="mySlides fade">

  <img src="Img/banner/banner1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="Img/banner/banner2.jpg" style="width:100%;">
  
</div>

<div class="mySlides fade">
  
  <img src="Img/banner/banner3.jpg"style="width:100%;">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>-->
<div id="mySidenav" class="col-md-12 sidenav display-end" style="top:46%;">
     <button class="main-button icon-button" id="myBtn">Register</button>
	</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="Img/banner/banner1.jpg" alt="Chania" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="Img/banner/banner2.jpg" alt="Chania" width="460" height="345">
       
      </div>
    
      <div class="item">
        <img src="Img/banner/banner3.jpg" alt="Flower" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="Img/banner/banner4.jpg" alt="Flower" width="460" height="345">
      </div>
       <div class="item">
        <img src="Img/gallery/12.jpg" alt="Flower" width="460" height="345">
      </div>
      <div class="item">
        <img src="Img/gallery/4.jpg" alt="Flower" width="460" height="345">
      </div>
      <div class="item">
        <img src="Img/gallery/7.jpg" alt="Flower" width="460" height="345">
      </div>
  <div class="item">
        <img src="Img/banner/banner5.jpg" alt="Flower" width="460" height="345">
      </div>
      <div class="item">
        <img src="Img/banner/banner6.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
			<div class="home-wrapper">

				<div class="container">
					<div class="row">
						<div class="col-md-12 slider-title" style="/*padding-left: 70px;*/">
						
						<div>
						<h1 class="white-text">Sign Academy </h1>
							<p class="lead white-text">Our aim to provide innovative ways to our students for problem Solving.</p>
							<!--<a class="main-button icon-button" href="#">Get Started!</a>-->
							<!--<button class="main-button icon-button" id="myBtn" style="outline: none !important;">Register</button>-->
						</div>
						</div>
					</div>
				</div>
			</div>

		</div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="col-md-8 modal-content admission-form">
  	<div class="col-md-12 flex-class">
  		<div class="col-md-11">
  	<label class="display modal-title">Register Yourself</label>
  </div>
  <div class="col-md-1 p-0">
    <span class="close">&times;</span>
</div>
    </div>
   <form method="post" enctype="multipart/form-data">
   	<div class="col-md-12 flex-class">
								<div class="col-md-12">
									<div class="col-md-12 flex-class mb-1 p-0">
										<i class="fa fa-user icon"></i>
								<input type="text" placeholder="Name" class="form-input form-control" name="name" required="" maxlength="30"><span class="error"><?php echo $nameErr;?></span>
							</div>
							<div class="col-md-12 flex-class mb-1 p-0">
										<i class="fa fa-envelope icon"></i>
								<input type="email" placeholder="Email" class="form-input form-control" name="mail" required="" maxlength="30"><span class="error"><?php echo $emailErr;?></span>
							</div>
							<div class="col-md-12 flex-class mb-1 p-0">
										<i class="fa fa-user-o icon"></i>
								<input type="text" placeholder="Parent's Name" class="form-input form-control" name="parent" required="" maxlength="30"><span class="error"> <?php echo $nameErr;?></span>
							</div>
							<div class="col-md-12 flex-class mb-1 p-0">
										<i class="fa fa-calendar icon"></i>
								<input type="date" class="form-input" name="date"required="">
							</div>
								<div class="col-md-12 pl-0">
									<label> Gender: </label>
								<label class="pl-1 pr-1"><input type="radio" name="gender" value="Male"> Male</label>
								<label class="pl-1 pr-1"><input type="radio" name="gender" value="Female"> Female</label> <span class="error"><?php echo $genderErr;?></span>
							    </div>
							</div>
							<div class="col-md-12">
							    <div class="col-md-12 flex-class mb-1 p-0">
										<i class="fa fa-graduation-cap icon"></i>
								<input type="text" class="form-input form-control" placeholder="Name of School / College" name="school" required="">
							</div>
								<div class="col-md-12 p-0 mb-1">
									<div class="col-md-6 pr-1 pl-0">
										<i class="fa fa-university icon"></i>
										<input type="text" placeholder="Class & Course" class="form-input form-control" name="course" required="">
							        </div>
							        <div class="col-md-6 pl-1 pr-0">
							        	<i class="fa fa-university icon"></i>
								        <input type="text" placeholder="Board Afilliated" class="form-input form-control" name="board" required="" maxlength="30">
							        </div>
						        </div>
						        <div class="col-md-12 flex-class mb-1 p-0">
										<i class="fa fa-address-book icon"></i>
								<input type="text" placeholder="Address" class="form-input form-control" name="address" required="">
							</div>
								<div class="col-md-12 p-0 mb-1">
									<div class="col-md-6 pr-1 pl-0">
										<i class="fa fa-map-marker icon"></i>
								        <input type="text" placeholder="State" class="form-input form-control" name="state" required="" maxlength="20">
							        </div>
							        <div class="col-md-6 pl-1 pr-0">
							        	<i class="fa fa-map-marker icon"></i>
								        <input type="text" placeholder="City" class="form-input form-control" name="city" required="" maxlength="30">
							        </div>
						        </div>
						       <div class="col-md-12 flex-class mb-1 p-0">
								<i class="fa fa-phone icon"></i>
								<input type="text" placeholder="Contact" class="form-input form-control" name="contact" required="" maxlength="10">
							</div>
						</div>
					</div>
						<div class="col-md-12 flex-class mb-1 mt-2">
							<i class="fa fa-file icon"></i>
								<input type="file" placeholder="Upload your photo" class="form-input form-control" name="reg_profile">
						</div>
						<div class="col-md-12 flex-class mb-1">
								<button name="submit" class="btn btn-info">Submit</button>
						</div>
					  
							</form>
  </div>

</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2>Welcome to Sign Academy</h2>
							<p class="lead">We provide training for medical and engineering students.</p>
						</div>

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>Online Courses </h4>
								<p>Sign Academy also provide Online Courses for all the Students.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Expert Teachers</h4>
								<p>We have expert teachers that help to enhance your skills.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Community</h4>
								<p>Our Community will help the students to grow as noble human being.</p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="Img/about.png" alt="">
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->
			<!--<div id="cta" class="section">

			
			<div class="bg-image bg-parallax overlay" style="background-image:url(Img/cta1-background.jpg)"></div>
			
			<div class="container">

			
				<div class="row">

						<h2 class="white-text">About Us</h2>
						<p class="lead white-text">Our aim to provide our students with innovative ways and time saving methods to solve the problems along with imparting deep knowledge of the concept.</p>
						<a class="main-button icon-button" href="about.php">About us</a>
					

				</div>

			</div>

		</div>-->

		<!-- Courses -->
             <div id="why-us" class="section pt-0">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Our Courses</h2>
					
					</div>
					<div class="col-md-12">
						<div class="col-md-2 course-block-index dropdown">
                             <div class="col-md-12 course-icon">
                               <i class="fa fa-university course-fa-icon"></i>
                             </div>
                              <div class="col-md-12 text-center" style="padding: 10px;">
			                        <a class="dropbtn white-text">IIT / JEE / NEET</a>
									  <div class="dropdown-content drpcnt">
									  	<a href="iit.php">Syllabus</a>
									  	<a href="iitnotes.php">Notes</a>
									  	<a href="iitassignment.php">Assignment</a>
									  </div>
						     </div>
                         </div>
                         <div class="col-md-2 course-block-index dropdown">
                             <div class="col-md-12 course-icon">
                               <i class="fa fa-file-text-o course-fa-icon white-text"></i>
                             </div>
                             <div class="col-md-12 text-center" style="padding: 10px;">
			                        <a class="dropbtn white-text">VIII Foundation</a>
									  <div class="dropdown-content drpcnt">
									  	<a href="eightstd.php">Syllabus</a>
									  	<a href="eightnotes.php">Notes</a>
									  	<a href="eightassignment.php">Assignment</a>
									  </div>
						     </div>
                         </div>
                          <div class="col-md-2 course-block-index dropdown">
                             <div class="col-md-12 course-icon">
                             	<img src="Img/115722-48.png">
                             </div>
                             <div class="col-md-12 text-center" style="padding: 10px;">
			                        <a class="dropbtn white-text">IX Foundation</a>
									  <div class="dropdown-content drpcnt">
									  	<a href="ninestd.php">Syllabus</a>
									  	<a href="ninenotes.php">Notes</a>
									  	<a href="nineassignment.php">Assignment</a>
									  </div>
						     </div>
                         </div>
                         <div class="col-md-2 course-block-index dropdown">
                             <div class="col-md-12 course-icon">
                               <i class="fa fa-lightbulb-o course-fa-icon"></i>
                             </div>
                             <div class="col-md-12 text-center" style="padding: 10px;">
			                        <a class="dropbtn white-text">X Foundation</a>
									  <div class="dropdown-content drpcnt">
									  	<a href="tenstd.php">Syllabus</a>
									  	<a href="tennotes.php">Notes</a>
									  	<a href="tenassignment.php">Assignment</a>
									  </div>
						     </div>
                         </div>
                         <div class="col-md-2 course-block-index dropdown">
                             <div class="col-md-12 course-icon">
                             	<img src="Img/3957677-48.png" class="course-fa-icon">
                             </div>
                             <div class="col-md-12 text-center" style="padding: 10px;">
                              <!--<h5 class="white-text">XI & XII</h5>-->
			                        <a class="dropbtn white-text">XI & XII</a>
									  <div class="dropdown-content drpcnt">
									  	<a href="twelvestd.php">Syllabus</a>
									  	<a href="twelvenotes.php">Notes</a>
									  	<a href="twelveassignment.php">Assignment</a>
									  </div>
						     </div>
						 </div>
					</div>
						                       <!--<div class="col-md-12 display p-2">
						                           <a class="main-button icon-button font-decoration" href="course.php">Know More</a>
						                       </div>-->
						  				</div>
						  			</div>
						  			<!-- /container -->
						  
						  		</div>
						  		<!-- /Courses -->
						  
						  		<!-- Call To Action -->
						  	
						  		<!-- /Call To Action -->
						  
						  		<!-- Why us -->
						  		
						  				<div id="courses" class="section pt-0">
						  
						  			
						  			<div class="container">
						  
						  				
						  				<div class="row">
						  					<div class="section-header text-center">
						  						<h2>Specialized Faculties</h2>
						  							<p class="lead">We provide training for medical and engineering students.</p>
					</div>
				</div>
			

			
				<div id="courses-wrapper">			
					<div class="row display">

						<?php
				            require_once("connection.php");
					        $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
					        $q = "select * from addfaculty  limit 4";
				            $res=mysqli_query($conn,$q) or die(mysqli_error($conn));
							$count=mysqli_affected_rows($conn);
							mysqli_close($conn);
							if($count==0)
							{
								print "There is no Faculty Added";
							}
							else
							{
								while($x=mysqli_fetch_array($res))
								{
									?>
									
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="management.php" class="course-img">
									<?php print "<img src='adminuploads/faculty/$x[6]' alt='' width='200px'>"  ?>
									<!--<img src="./img/course01.jpg" alt="">-->
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								

								<div class="course-details text-center">
									<a class="course-title" href="management.php"><?php print "$x[1]" ?></a>
									<a href="management.php"><span class="green-color text-center"><?php print "$x[2]" ?> (Specialization)</span></a>
									<a href="management.php"><span class="text-center"><?php print "$x[3]" ?></span></a>
									<a href="management.php"><label class="text-center font-normal"><?php print "$x[5]" ?></label></a>
								</div>
							</div>
						</div>
						<?php
                         }
       				    }
					?>
						

					</div>
				
					
				</div>
			

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>

		</div>
		<!-- /Why us -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section" style="background-color: whitesmoke;">

			<!-- Backgound Image -->
			<!--<div class="bg-image bg-parallax overlay" style="background-image:url(Img/cta2-background.jpg)"></div>-->
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">
                <!-- row -->
				<div class="row">
                    <div class="section-header text-center">
						<h2>Self Analysis Test</h2>
						<p class="text-size1">We at Sign Academy, complement your learning process by providing an unlimited pool of practice questions on vivid technologies powered by unmatched analytical reports at your fingertips. Identify your areas of improvement and maximize the return on the invested time is now made easy for you. </p>
					</div>
					<img src="Img/analysis.png">
					<!--<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">For more Details and Doubt Clearence.</p>
						<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
					</div>-->

				</div>
				<!-- /row -->

			</div>
			<div class="row mt-2" style="background-color:#067cb9;">
         <div class="container">
         	<div class="col-md-2 text-center pd-2">
            <i class="fa fa-user-plus white-text text-size2"></i>
            <p class="white-text">100 Questions</p>
           </div>
           <div class="col-md-2 text-center pd-2">
            <i class="fa fa-file white-text text-size2"></i>
            <p class="white-text">Assessments</p>
           </div>
           <div class="col-md-2 text-center pd-2">
            <i class="fa fa-desktop white-text text-size2"></i>
            <p class="white-text">Mock Test</p>
           </div>
           <div class="col-md-2 text-center pd-2">
            <i class="fa fa-bar-chart white-text text-size2"></i>
            <p class="white-text">Brilliant Analysis</p>
           </div>
           <div class="col-md-2 text-center pd-2">
            <i class="fa fa-laptop white-text text-size2"></i>
            <p class="white-text">QA Explanation</p>
           </div>
           <div class="col-md-2 text-center pd-2">
            <i class="fa fa-plus-circle white-text text-size2"></i>
            <p class="white-text">Detailed Explanation</p>
           </div>
         </div>
			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

		
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->

<?php
 require_once("footer.php");
?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>	



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	</body>
</html>
