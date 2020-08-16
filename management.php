<!DOCTYPE html>
<html lang="en">
	<head>
       <title>Sign Academy</title>
		<?php
		require_once("extfiles.php");
		?>
</head>
<body>
        <!-- Header -->
		<?php
           require_once("header.php")
		?>
	<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./Img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li>Management</li>
						</ul>
						<h1 class="white-text">Our Management</h1>

					</div>
				</div>
			</div>

		</div>
		    <div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<h3 class="text-center">Our Faculties</h3>
						<div class="row">
                          <table style="width: 100%;">
						<?php
				            require_once("connection.php");
					        $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
					        $q = "select * from addfaculty  limit 4";
				            $res=mysqli_query($conn,$q) or die(mysqli_error($conn));
							$count=mysqli_affected_rows($conn);
							mysqli_close($conn);
							if($count==0)
							{
								print "There is no Faculty Added";
							}
							else
							{
								while($x=mysqli_fetch_array($res))
								{
									?>
						
							<tr class="text-black">
											<td style="width: 20%;" class="p-2"><?php print "<img src='adminuploads/faculty/$x[6]' alt='' width='150px' style='border-radius:100px;'>"  ?></td>
										
							          <td><h3 class="font-weight-bold m-0"><?php print "$x[1]" ?></h3><br />
							         <?php print "$x[2]" ?> (Specialization)<br />
						             <?php print "$x[3]" ?><?php print "$x[5]" ?></td>
						          </tr>

						<?php
                         }
       				    }
					?>
						</table>

					</div>
				</div>
			</div>
		</div>

	</body>
		<?php
 require_once("footer.php");
?>
</body>
</html>
