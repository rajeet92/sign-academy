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
							<li>Assignment</li>
						</ul>
						<h1 class="white-text">VIII Foundation</h1>

					</div>
				</div>
			</div>

		</div>
		    <div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="col-md-12 mb-4 p-0 display">
                      <div class="col-md-3 text-center p-2 bg-grey mr-1">
                      	<a href="eightstd.php">Syllabus</a>
                      </div>
                      <div class="col-md-3 text-center p-2 bg-grey mr-1">
                      <a href="eightnotes.php">Notes</a>
                      </div>
                      <div class="col-md-3 text-center p-2 bg-grey">
                      <a href="eightassignment.php">Assignment</a>
                      </div>
					</div>
					  <table class="table-bordered" style="width: 100%;">
					  <?php
                    require_once("connection.php");
                  $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
                  $q = "select * from addassignment where assign_class = 'VIII Foundation'";
                    $res=mysqli_query($conn,$q) or die(mysqli_error($conn));
              $count=mysqli_affected_rows($conn);
              mysqli_close($conn);
              if($count==0)
              {
                print "<tr><td class='p-2 text-black text-center' colspan='2'>There is no Assignment.</td><tr>";
              }
              else
              {
                while($x=mysqli_fetch_array($res))
                {
                  ?>
                <tr>
                    <td class="p-2" style="width: 90%;"><?php print "$x[2]" ?></td>
                    <td class="p-2"><a href="adminuploads/assignments?$assign_id='$assign_id'">Download</a></td>
                  </tr>
                    <?php
                         }
                  }
          ?>
            
                  </table>
				</div>
			</div>
			<!-- /container -->

		</div>

		<?php
 require_once("footer.php");
?>
</html>