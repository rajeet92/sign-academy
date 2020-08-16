<?php
session_start();
if(isset($_POST["add"]))
{
	 $name= $_POST["name"];
	 $sub= $_POST["subject"];
	 $qul= $_POST["studies"];
	 $teach= $_POST["teach"];
	 $loc= $_POST["location"];
	  $err = $_FILES["faculty_pic"]["error"];
	  if($err == 0)
	  {
	  	$date = date_create();
	  	$tstamp=date_timestamp_get($date);
        $tname=$_FILES["faculty_pic"]["tmp_name"];
	    $fname=$tstamp.$_FILES["faculty_pic"]["name"];
		move_uploaded_file($tname,"adminuploads/faculty/$fname");
	  }
	  else
		{
			$fname="avatar.png";
		}
	 require("connection.php");
	  $conn= mysqli_connect(dbhost, dbuser, dbpass, dbname) or die(mysqli_connect_error());
     $q="insert into addfaculty(faculty_name,faculty_spec,faculty_qual,faculty_teach,faculty_loc,faculty_pic) values('$name','$sub','$qul','$teach','$loc','$fname')";
	  mysqli_query($conn,$q) or die(mysqli_error($conn));
	  $count= mysqli_affected_rows($conn);
	  mysqli_close($conn);
	  if($count==1){
		$msg="Faculty Added successfully";  
	  }
	  else{
		  $msg="Faculty Not Added. Try Again!";
	  }
	 }
?>
<html>
<head>
	<title>Add Faculty</title>
<?php
  require_once("extfiles.php");
?>
</head>
<body>
<?php
require_once("adminheader.php");
?>
		<div class="hero-area section m-0">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<h1 class="white-text">Add Faculty</h1>
                    </div>
				</div>
			</div>

		</div>
<div id="about" class="section">
   <div class="container display">
		<div class="col-md-6 contact-form">
			<form method="post" enctype="multipart/form-data">
			<input type="text" placeholder="Faculty Name" name="name" class="input">
			<input type="text" placeholder="Faculty Specialization" name="subject" class="input">
			<input type="text" placeholder="Faculty Qualification" name="studies" class="input">
			<input type="text" placeholder="Faculty Teaching Subject" name="teach" class="input">
			<input type="text" placeholder="Faculty Qualification Location" name="location" class="input">
			<input type="file" name="faculty_pic" class="input">
			<button class="main-button icon-button" name="add">Add</button>
			<?php
					
					if(isset($msg))
					{
						print $msg;
					}
					?>
			</form>
        </div>
    </div>
</div>
</body>
</html>