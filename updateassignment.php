<?php
session_start();
	$assign_id=$_GET["assign_id"];
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="select * from addassignment where assign_id='$assign_id'";
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	if(isset($_POST["sub"]))
	{
	$as_cs=$_POST["assign_class"];
	//$up_as=$_POST["upload_assignment"];
	 $err = $_FILES["upload_assignment"]["error"];
	  if($err == 0)
	  {
	  	//$date = date_create();
	  	//$tstamp=date_timestamp_get($date);
        $tname=$_FILES["upload_assignment"]["tmp_name"];
	    $assgname=$_FILES["upload_assignment"]["name"];
		move_uploaded_file($tname,"adminuploads/assignments/$assgname");
	  }
	  else
		{
			$assgname="There is no Assignment Available";
		}
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="update addassignment set upload_assignment='$assgname' ,assign_class='$as_cs' where assign_id='$assign_id'";
	mysqli_query($conn,$q) or die(mysqli_error($conn));
    $count=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($count==1)
	{
		header("location:managenotes.php");
	}
	else
	{
		$msg="Assignment not Updated successfully!!!";
	}
	}
?>
<html>
<head>
<title>Sign Academy</title>
<?php
require_once("extfiles.php");
?>
</head>
<body>
	</body>
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
						<h1 class="white-text">Update Assignment</h1>
                    </div>
				</div>
			</div>

		</div>
		<div id="about" class="section">
   <div class="container display">
		<div class="col-md-7 contact-form">
	
          <form name="form1"  method="post">
		<input type="text" name="assign_class" placeholder="Class" class="input" value="<?php print $x[1]; ?>" required="">

				<?php
				print "$x[2]";
				?><p class="text-black">Update Assignment, If you want to change?</p>
		        <input type="file" name="upload_assignment" required=""> 
				<button class="main-button icon-button mt-2" name="sub">Update Assignment</button>
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