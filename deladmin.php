
<?php
$admail=$_GET["admail"];
require_once("connection.php");
$conn=mysqli_connect(dbhost,dbuser,dbpass,dbname) or die(mysqli_connect_error());
$q="delete from adminlogin where admail='$admail'";
mysqli_query($conn,$q) or die(mysqli_error($conn));
$count=mysqli_affected_rows($conn);
mysqli_close($conn);
if($count==1)
{
	
	header("location:manageadmin.php");
}
?>