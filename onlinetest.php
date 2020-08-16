<?php
if(isset($_POST["upload"]))
{
	 $cname= $_POST["course_name"];
	 $cdesc= $_POST["course_description"];
	 require("connection.php");
	  $conn= mysqli_connect(dbhost, dbuser, dbpass, dbname) or die(mysqli_connect_error());
     $q="insert into addcourse(course_name,course_description) values('$cname','$cdesc')";
	  mysqli_query($conn,$q) or die(mysqli_error($conn));
	  $count= mysqli_affected_rows($conn);
	  mysqli_close($conn);
	  if($count==1){
		$msg="Course Uploaded successfully";  
	  }
	  else{
		  $msg="Course Not Uploaded.";
	  }
	 }
?>
<html>
<head>
	<title>Add Course</title>
<?php
  require_once("extfiles.php");
?>
</head>
<body>

		<div class="hero-area section m-0">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<h1 class="white-text">Add Mock Test / Course</h1>
                    </div>
				</div>
			</div>

		</div>
<div id="about" class="section">
   <div class="container" style="display:flex; justify-content: center;">
		<div class="col-md-6 contact-form">
			<form method="post">
			<input type="text" placeholder="Enter Test/ Course Name" name="course_name" class="input">
			<input type="text" placeholder="Description" name="course_description" class="input">
			<button class="main-button icon-button" name="upload">Upload</button>
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