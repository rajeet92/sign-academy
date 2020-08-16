<?php
session_start();
if(isset($_POST["save"]))
{
	 $cl_nt= $_POST["clas"];
	  $tc_nt= $_POST["topic"];
	 //$up_as= $_POST["upload_assignment"];
	// $fileExtensionsAllowed = ['pdf','doc','docx'];   && $fileExtensionsAllowed == true
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
			$ntname="There is no Notes Available";
		}
		date_default_timezone_set("Asia/Kolkata");
    $currdt=date("Y-m-d");
	 require("connection.php");
	  $conn= mysqli_connect(dbhost, dbuser, dbpass, dbname) or die(mysqli_connect_error());
     $q="insert into addnotes(notes_class,notes_topic,upload_notes, currdt) values('$cl_nt','$tc_nt','$ntname','$currdt')";
	  mysqli_query($conn,$q) or die(mysqli_error($conn));
	  $count= mysqli_affected_rows($conn);
	  mysqli_close($conn);
	  if($count==1){
		$msg="Notes uploaded successfully";  
	  }
	  else{
		  $msg="Notes Not Uploaded. Try Again!";
	  }
	 }
?>
<html>
<head>
	<title>Upload Notes</title>
<?php
  require_once("extfiles.php");
?>
</head>
<body>
<?php
require_once("adminheader.php")
?>
		<div class="hero-area section m-0">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<h1 class="white-text">Upload Notes</h1>
                    </div>
				</div>
			</div>

		</div>
<div id="about" class="section">
   <div class="container display">
		<div class="col-md-7 contact-form">
			<form method="post" enctype="multipart/form-data">
						<div class="col-md-12 flex-class">
							<select class="input" name="clas">
							<option>Choose Class</option>
						    <option>IIT / JEE / NEET</option>
						    <option>VIII Foundation</option>
						    <option>IX Foundation</option>
						    <option>X Foundation</option>
						    <option>XI & XII</option>
						    </select>
						   </div>
				<div class="col-md-12 flex-class">
				    <input type="text" name="topic" class="input" placeholder="Topic Name">
			    </div>
				<div class="col-md-12 flex-class">
					<input type="file" name="upload_notes" class="input">
				</div>
			<button class="main-button icon-button mt-2" name="save">Upload</button>
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