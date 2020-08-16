<?php
session_start();
// connect to the database
	/* require("connection.php");
	  $conn= mysqli_connect(dbhost, dbuser, dbpass, dbname) or die(mysqli_connect_error());
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $cl_as= $_POST["clas"];
    $filename = $_FILES['upload_assignment']['name'];

    // destination of the file on the server
    $destination = 'adminuploads/assignments/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['upload_assignment']['tmp_name'];
    //$size = $_FILES['upload_assignment']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } //elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
      //  echo "File too large!";
  //  } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO addassignment (assign_class, upload_Assignment) VALUES ('$cl_as','$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}*/
if(isset($_POST["add"]))
{
	 $cl_as= $_POST["clas"];
	 //$up_as= $_POST["upload_assignment"];
	// $fileExtensionsAllowed = ['pdf','doc','docx'];   && $fileExtensionsAllowed == true
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
	 require("connection.php");
	  $conn= mysqli_connect(dbhost, dbuser, dbpass, dbname) or die(mysqli_connect_error());
     $q="insert into addassignment(assign_class,upload_assignment) values('$cl_as','$assgname')";
	  mysqli_query($conn,$q) or die(mysqli_error($conn));
	  $count= mysqli_affected_rows($conn);
	  mysqli_close($conn);
	  if($count==1){
		$msg="Assignment uploaded successfully";  
	  }
	  else{
		  $msg="Assignment Not Uploaded. Try Again!";
	  }
	 }
?>
<html>
<head>
	<title>Upload Assignment</title>
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
						<h1 class="white-text">Upload Assignment</h1>
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
				<!--<div class="col-md-12 flex-class">
				    <input type="text" name="clas" class="input" placeholder="Class">
			    </div>-->
				<div class="col-md-12 flex-class">
					<input type="file" name="upload_assignment" class="input">
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