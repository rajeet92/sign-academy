<?php
session_start();

?>
<html>
<head>
<title>Admin Panel-Sign Academy</title>
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
						<h1 class="white-text">Admin Panel</h1>
                    </div>
				</div>
			</div>

		</div>
<div id="about" class="section">
	<div class="container">
		<div class="col-md-12">
				<table class='table table-bordered table-stripped m-0'>
					<tr>
		<th><a href="addadmin.php"><center><i class="fa fa-user"></i><br/><h4>Add Admin</h4></center></a></th>
		<th><a href="addnotes.php"><center><i class="fa fa-cubes"></i><br/><h4>Add Notes</h4></center></a></th>
		<th><a href="addassignment.php"><center><i class="fa fa-cubes"></i><br/><h4>Add Assignment</h4></center></a></th>
        <th><a href="addfaculty.php"><center><i class="fa fa-users"></i><br/><h4>Add Faculties</h4></center></a></th>
	</tr>
</table>
	    </div>
	    <div class="col-md-12">
	    <table class='table table-bordered table-stripped m-0'>
					<tr>
        <th><a href="manageadmin.php"><center><i class="fa fa-user"></i><br/><h4>Manage Admin</h4></center></a></th>
        <th><a href="managenotes.php"><center><i class="fa fa-cubes"></i><br/><h4>Manage Notes</h4></center></a></th>
		<th><a href="manageassignment.php"><center><i class="fa fa-cubes"></i><br/><h4>Manage Assignment</h4></center></a></th>
		<th><a href="managefaculty.php"><center><i class="fa fa-users"></i><br/><h4>Manage Faculties</h4></center></a></th>
		

	</tr>
</table>
		</div>
	</div>
</div>
</body>
</html>