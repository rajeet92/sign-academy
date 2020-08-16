<?php
session_start();
if(isset($_POST["sub"]))
{
	$currp=$_POST["currpswd"];
	$newp=$_POST["npswd"];
	$cnewp=$_POST["cnpswd"];
	$uname=$_SESSION["un"];
	if($newp==$cnewp)
	{
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="update adminlogin set adpswd='$newp' where admail='$uname' and adpswd='$currp'";
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$count = mysqli_affected_rows($conn);
	mysqli_close($conn);
				if($res==1)
				{
					$msg="<center><font color='white'>Password Changed Successfully.";
				}
				else 
				{
					$msg="Current Password is incorrect!";
				}
	}
else
	{
		$msg="New Password does not match!</font></center>";
	}
}
?>
<html>
<head>
<title>Change Password-Sign Academy</title>
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
						<h1 class="white-text">Change Password</h1>
                    </div>
				</div>
			</div>

		</div>
<div id="about" class="section">
   <div class="container display">
		<div class="col-md-7 contact-form">
					<form name="form1" method="post">
						<div class="col-md-12 flex-class">
			          <input type="password" name="currpswd" placeholder="Current Password" class="input" required="" maxlength="10">
			      </div>
			      <div class="col-md-12 flex-class">
				      <input type="password" name="npswd" placeholder="New Password" class="input" required="" maxlength="10">
				  </div>
				  <div class="col-md-12 flex-class">
				      <input type="password" name="cnpswd" placeholder="Confirm New Password" class="input" required="" maxlength="10">
				  </div>
				      <button class="button1 main-button icon-button mt-2" name="sub">Change Password</button>
				<?php
					if(isset($msg))
					{
						print $msg;
					}
					
					?>
			</form>

				</div>
				</div>
				<div class="clearfix"></div>
				</div>
				</div>
				</div>
				</div>

<?php
include_once("footer.php");
?>
</body>
</html>