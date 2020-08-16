<?php
session_start();
	$notes_id=$_GET["notes_id"];
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="select * from addnotes where notes_id='$notes_id'";
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	if(isset($_POST["update"]))
	{
	$ns_cs=$_POST["notes_class"];
	//$up_ns=$_POST["upload_notes"];
	$ns_tc=$_POST["notes_topic"];
	 $err = $_FILES["upload_notes"]["error"];
	  if($err == 0)
	  {
	  	//$date = date_create();
	  	//$tstamp=date_timestamp_get($date);
        $tname=$_FILES["upload_notes"]["tmp_name"];
	    $ntname=$_FILES["upload_notes"]["name"];
		move_uploaded_file($tname,"adminuploads/notes/$ntname");
	  }
	  else
		{
			$assgname="There is no Notes Available";
		}
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="update addnotes set upload_notes='$ntname' ,notes_class='$ns_cs' and notes_topic='$ns_tc' where notes_id='$notes_id'";
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
						<h1 class="white-text">Update Notes</h1>
                    </div>
				</div>
			</div>

		</div>
		<div id="about" class="section">
   <div class="container display">
		<div class="col-md-7 contact-form">
	
          <form method="post">
		<input type="text" name="notes_class" placeholder="Class" class="input" value="<?php print $x[1]; ?>" required="">
        <input type="text" name="notes_topic" placeholder="Topic" class="input" value="<?php print $x[2]; ?>" required="">
				<?php
				print "$x[3]";
				?><p class="text-black">Update Notes, If you want to change?</p>
		        <input type="file" name="upload_notes" required=""> 
				<button class="main-button icon-button mt-2" name="update">Update Notes</button>
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