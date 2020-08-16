<?php
session_start();
	$fid=$_GET["fid"];
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="select * from addfaculty where fid='$fid'";
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	if(isset($_POST["update"]))
	{
	$fc_nm=$_POST["faculty_name"];
	$fc_sp=$_POST["faculty_spec"];
	$fc_ql=$_POST["faculty_qual"];
	$fc_th=$_POST["faculty_teach"];
	$fc_lc=$_POST["faculty_loc"];
	$err=$_FILES["faculty_pic"]["error"];
	if($err==0)
	{
	$date=date_create();
	$tstamp=date_timestamp_get($date);
    $tname=$_FILES["faculty_pic"]["tmp_name"];
    $fname=$tstamp.$_FILES["faculty_pic"]["name"];
	move_uploaded_file($tname,"adminuploads/faculty/$fname");
	}
	else
	{
		$fname="$x[2]";
	}
	
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="update addfaculty set faculty_name='$fc_nm' ,faculty_spec='$fc_sp',faculty_qual='$fc_ql', faculty_teach='$fc_th', faculty_loc='$fc_lc', faculty_pic='$fname' where fid='$fid'";
	mysqli_query($conn,$q) or die(mysqli_error($conn));
    $count=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($count==1)
	{
		header("location:managefaculty.php");
	}
	else
	{
		$msg="Faculty not Updated successfully!!!";
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
						<h1 class="white-text">Update Faculty</h1>
                    </div>
				</div>
			</div>

		</div>
		<div id="about" class="section">
   <div class="container display">
		<div class="col-md-7 contact-form">
	
          <form method="post">
		<input type="text" name="faculty_name" placeholder="Faculty Name" class="input" value="<?php print $x[1]; ?>" required="">
        <input type="text" name="faculty_spec" placeholder="Faculty Specialization" class="input" value="<?php print $x[2]; ?>" required="">
        <input type="text" name="faculty_qual" placeholder="Faculty Qualification" class="input" value="<?php print $x[3]; ?>" required="">
        <input type="text" name="faculty_loc" placeholder="Qualification Location" class="input" value="<?php print $x[5]; ?>" required="">
        <input type="text" name="faculty_teach" placeholder="Faculty Teaching" class="input" value="<?php print $x[4]; ?>" required="">
				<?php
				print "<img src='adminuploads/faculty/$x[6]' height='100'>";
				?><p class="text-black">Update Image, If you want to change?</p>
		        <input type="file" name="faculty_pic" required=""> 
				<button class="main-button icon-button mt-2" name="update">Update Faculty</button>
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