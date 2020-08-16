<?php
if(isset($_POST["messg"])){
	 
if($_POST["name"]=="" || $_POST["email"]=="" || $_POST["subject"]=="" ){
 echo "Kindly Fill All the Fields.";
 }
 else{
 	$email=$_POST['email'];
	if (!filter_var($email, FILTER_SANITIZE_EMAIL)){
		echo "Invalid Sender's Email";
	}else{
	    $to = 'Signacademy2017@gmail.com';
     $subject = 'Enquiries By Candidates';
     $headers = "From: $email";
          $nm= $_POST["name"];
	 $em= $_POST["email"];
	 $sub= $_POST["subject"];
	 $msg= $_POST["message"];
			/*$message = $_POST['parent'];*/
			
	 
	 $message = "Name: $nm \r\n";
$message .= "Email: $em \r\n";
$message .= "Subject: $sub \r\n";
$message .= "Message: $msg \r\n";
				$sent = mail($to, $subject, $message, $headers);

if($sent) {
    	/*header("location:https://www.google.com/");*/
    echo "<script>alert('we will revert you soon...');</script>";
}
else {
    echo "<script>alert('Sorry! Kindly check your details...');</script>";
}
	}
 }

 } 
 ?>
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
		<!-- /Header -->
<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./Img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li>Contact</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Send A Message</h4>
							<form>
								<input class="input" type="text" name="name" placeholder="Name">
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="text" name="subject" placeholder="Subject">
								<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
								<button class="main-button icon-button pull-right" name="messg">Send Message</button>
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1 text-black" style="font-family:Times New Roman; font-size: 18px;">
						<h4>Contact Information</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>signacademy2017@gmail.com</li>
							<li><i class="fa fa-phone"></i>7208694894 / 8699979075 / 8709633503</li>
							<li><i class="fa fa-map-marker"></i>Behind abdulpurkar managal karyala near big bazaar sat rasta , sobha nagar Solapur ( MAHARASTRA )</li>
						</ul>

						<!-- contact map -->
						<div id="contact-map"></div>
						<!-- /contact map -->

					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>


		<?php
 require_once("footer1.php");
?>
</body>
</html>