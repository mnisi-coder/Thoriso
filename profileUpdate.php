<?php
session_start();
include'dbconnection.php';



	$stdNum=$_POST['stdNumber'];
	$name = $_POST['name'];
	$email = $_POST['email'];



	mysqli_query($con,"UPDATE student SET name='$name' ,stdNumber='$stdNum',email='$email' where email = '".$_POST['email']."'");
$_SESSION['msg']="Booking Updated successfully";
header("location:profile");

?>