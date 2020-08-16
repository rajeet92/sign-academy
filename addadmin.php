<?php
session_start();
if(isset($_POST["add"]))
{
	$nm=$_POST["name"];
	$newad=$_POST["newad"];
	$newp=$_POST["npswd"];
	$cnewp=$_POST["cnpswd"];
	$uname=$_SESSION["un"];
	   if($newp==$cnewp)
	    {
				require_once("connection.php");
				$conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
				$q="insert into adminlogin(adname,admail,adpswd,usrtype) values('$nm','$newad', '$newp','admin')";
				$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
				$count = mysqli_affected_rows($conn);
				mysqli_close($conn);
				if($res==1)
				{
					$msg="New Admin added Successfully.";
				}
				else 
				{
					$msg="Current Password is incorrect!";
				}
		}
		else
		{
			$msg="New Password does not match!";
		}
	}
?>
<html>
<head>
	<title>Add Admin</title>
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
						<h1 class="white-text">Add Admin</h1>
                    </div>
				</div>
			</div>
		</div>
<div id="about" class="section">
   <div class="container display">
		<div class="col-md-7 contact-form">
                <form  method="post">
                	<div class="col-md-12 flex-class">
				    <input type="text" name="name" class="input" placeholder="Admin Name" required="" maxlength="30">
			        </div>
			        <div class="col-md-12 flex-class">
				      <input type="email" name="newad" placeholder="New Admin(email)" class="input" required="" maxlength="30">
				    </div>
				  
			        <div class="col-md-12 flex-class">
				      <input type="password" name="npswd" placeholder="New password" class="input" required=""  pattern="*\d*[a-z]*[A-Z]*[@#$%]*[8,15]" required="" maxlength="10">
				      </div>
			        <div class="col-md-12 flex-class">
				      <input type="password" name="cnpswd" placeholder="Confirm New Password" class="input" required=""  pattern="*\d*[a-z]*[A-Z]*[@#$%]*[8,15]" required="" maxlength="10">
				      </div>
			        <button class="main-button icon-button mt-2" name="add">Add</button>
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
</div>
</body>
</html>