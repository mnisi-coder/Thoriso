<?php
session_start();
require ('dbconnection.php');


	
	mysqli_query($con,"UPDATE booking SET  status='CANCELLED' where id =".$_GET['id']."");
$_SESSION['msg']="Profile Updated successfully";
	header("location:profile");

?>