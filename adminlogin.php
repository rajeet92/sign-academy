<?php
session_start();
if(isset($_POST["sub"]))
{
	$n=$_POST["adname"];
	$un=$_POST["em"];
	$pswd=$_POST["pswd"];
	require_once("connection.php");
    $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
	$q="select * from adminlogin where adname='$n' and admail='$un'";
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$count= mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($count==1)
	{
		$x=mysqli_fetch_array($res);
	    $_SESSION["n"]=$x["adname"];
	    $_SESSION["un"]=$x["admail"];
		if($x["usrtype"]=="admin")
		{
			$_SESSION["utype"]="admin";
			header("location:adminpanel.php");
		}
		print $_SESSION["utype"];
	}
	else
	{
		$msg=">Wrong Username/Password";
		
	}
}
?>
<html>
<head>
<title>Login Page-Sign Academy</title>
<?php
require_once("extfiles.php");
?>
</head>
<body>
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg); background-position: top;"></div>
	<div id="about" class="section">
      <div class="container display">
		<div class="col-md-7 contact-form" style="background-color: white; border-radius:5px; padding: 30px;">
			<div class="section-header text-center m-0 pb-1">
				<h3 class="text-black mb-0">Admin Login</h3>
                <label class="text-black">Only Admin has access to login...</label>
			</div>
				<form  method="post">
			    
			     <div class="col-md-12 flex-class">
			          <input type="text" name="adname" placeholder="Admin Name" class="input">
		         </div>
		         <div class="col-md-12 flex-class">
			           <input type="email" name="em" placeholder="Username(Email)" class="input"  required="">
			     </div>
			     <div class="col-md-12 flex-class">
				<input type="password" name="pswd" placeholder="Password" class="input" pattern="*\d*[a-z]*[A-Z]*[@#$%]*[8,15]" required="" maxlength="10">
			    </div>
			    <div class="col-md-12 flex-class">
				<button class="button1 main-button icon-button mt-2" name="sub">Login</button>
			    </div>
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