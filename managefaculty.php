<?php
session_start();
?>
<html>
<head>
<title>Sign Academy</title>
<?php
require_once("extfiles.php");
?>
<script>
function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return (true);
  else
    return (false);
}

</script>
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
						<h1 class="white-text">Manage Faculties</h1>
                    </div>
				</div>
			</div>

		</div>
<div id="about" class="section">
   <div class="container display">
		<div class="col-md-12 contact-form">
	


					<?php
					require_once("connection.php");
					$conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
					$q="select * from addfaculty";
					$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
					$count=mysqli_affected_rows($conn);
					mysqli_close($conn);
					if($count==0)
					{
						print "No Categories Found";
					}
					else
					{
						print "<table class='table table-bordered table-stripped'>
                               <tr>
                               <th class='text-center'>Faculty Profile</th>
                               <th class='text-center'>Faculty Name</th>
						        <th class='text-center'>Faculty Specialization</th>
						        <th class='text-center'>Faculty Qualification</th>
						        <th class='text-center'>Qualification Location</th>
						        <th class='text-center'>Faculty Teaching</th>
						        <th class='text-center'>Update</th>
						        <th class='text-center'>Delete</th>
						</tr>";
						
						while($x=mysqli_fetch_array($res))
						{
							print "<tr align='center'>
							<td><img src='adminuploads/faculty/$x[6]' height='100'></td>
							<td>$x[1]</td>
							<td>$x[2]</td>
							<td>$x[3]</td>
							<td>$x[4]</td>
							<td>$x[5]</td>
							<td><a href='updatefaculty.php?fid=$x[0]'>Update</a></td>
							<td><a href='delfaculty.php?fid=$x[0]' onclick='return ConfirmDelete()'>Delete</a></td>
							</tr>";
						}
						print "</table>";
					}
					?>
			<!-- //Modal content-->
</div>
</div>
</div>
</body>
</html>