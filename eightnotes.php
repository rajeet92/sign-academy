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
							<li>Notes</li>
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
					<table class="table-bordered text-center" style="width: 100%;">
                  	<tr>
                     <th class="p-1 text-center">Topic Name</th>
                     <th class="p-1 text-center">Uploaded Notes</th>
                     <th class="p-1 text-center">Uploaded On</th>
                     <th class="p-1 text-center">Download</th>
                  	</tr>
					  <?php
                    require_once("connection.php");
                  $conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
                  $q = "select * from addnotes where notes_class = 'VIII Foundation'";
                    $res=mysqli_query($conn,$q) or die(mysqli_error($conn));
              $count=mysqli_affected_rows($conn);
              mysqli_close($conn);
              if($count==0)
              {
                print "<tr><td class='text-black text-center p-2' colspan='4'>There is no Notes.</td></tr>";
              }
              else
              {	
                while($x=mysqli_fetch_array($res))
                {
                  ?>
                  <tr>
                    <td class="p-2" style="width: 30%;"><?php print "$x[2]" ?></td>
                    <td class="p-2" style="width: 30%;"><?php print "$x[3]" ?></td>
                    <td class="p-2" style="width: 30%;"><?php print "$x[4]" ?></td>
                    <td class="p-2"><a href="adminuploads/notes?notes_id='$notes_id'">Download</a></td>
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