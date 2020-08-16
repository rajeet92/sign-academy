<?php
	if(!isset($_SESSION["un"]) || $_SESSION["utype"]!="admin")
		header("location:error.php");
?>

<div class="banner-top" id="home">
<div class="header">
	<div class="container">
			
				<div class="col-md-6 mt-2">
					Welcome
                         <?php
				
				if(isset($_SESSION["n"]))
				{
					print $_SESSION["n"];
				}
				else
				{
					print "Admin";
				}
				
				?>
				</div>
	
						<ul>
			<?php
				
				if(isset($_SESSION["n"]))
				{
	print "<div class='col-md-6'>
			
					<nav id='nav'>
					<ul class='main-menu nav navbar-nav navbar-right'>
					<li><a href='adminpanel.php'>Home</a></li>
					<li class='dropdown'>
						  <a class='dropbtn'>Manage</a>
						  <div class='dropdown-content' style='width:240px;'>
						    <a href='manageassignment.php'>Manage Assignment</a>
						     <a href='managenotes.php'>Manage Notes</a>
						     <a href='managefaculty.php'>Manage Faculties</a>
						     <a href='manageadmin.php'>Manage Admin</a>
						   </div>
						</li>
						<li class='dropdown'>
						  <a class='dropbtn'>Add</a>
						  <div class='dropdown-content' style='width:240px;'>
						    <a href='addassignment.php'>Add Assignment</a>
						     <a href='addnotes.php'>Add Notes</a>
						     <a href='addfaculty.php'>Add Faculties</a>
						     <a href='addadmin.php'>Add Admin</a>
						   </div>
						</li>
						<li><a href='changepswd.php'>Change Password</a></li>
					<li><a href='logout.php'>Logout</a></li>

					</ul>
				</nav></div>";
				}
				else
				{
			print"<a href='adminlogin.php'>Login</a>";
				}
			?>
			
					
				</ul>
			</div>
		</div>	
		</div>
