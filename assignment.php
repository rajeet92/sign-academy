<!DOCTYPE html>
<html lang="en">
	<head>
       <title>Sign Academy</title>
		<?php
		require_once("extfiles.php");
		?>
		 </head>
	<body style="background-color:whitesmoke;">
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
							<li>Assignment</li>
						</ul>
						<h1 class="white-text">Assignments</h1>

					</div>
				</div>
			</div>

		</div>
		    <div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					  <?php
                    require_once("connection.php");
                  $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
                  $q = "select * from addassignment";
                    $res=mysqli_query($conn,$q) or die(mysqli_error($conn));
              $count=mysqli_affected_rows($conn);
              mysqli_close($conn);
              if($count==0)
              {
                print "There is no Assignment.";
              }
              else
              {
                while($x=mysqli_fetch_array($res))
                {
                  ?>
                  <table class="table-bordered" style="width: 100%;">
                    <tr>
                    <td class="p-2" style="width: 90%;"><?php print "$x[1]" ?></td>
                    <td class="p-2"><button class="btn btn-secondary" onclick="">Download</button></td>
                  </tr>
                  </table>
                    <?php
                         }
                  }
          ?>
            
				</div>
			</div>
			<!-- /container -->

		</div>

		<?php
 require_once("footer.php");
?>
</html>