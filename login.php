<?php

session_start();
require("dbconnection.php");
					

if($_POST['role'] == "Admin")
{

	$password=$_POST['password'];
	$dec_password=md5($password);
//$dec_password=$password;
	$useremail=$_POST['email'];
	$ret= mysqli_query($con,"SELECT * FROM admin WHERE email='$useremail' and password='$dec_password'");
	$line=mysqli_fetch_array($ret);
	
	
	
	
	if($line>0)
	{

		

		$extra="index.php";
		$_SESSION['loginAdmin']=$_POST['email'];

		$_SESSION['name']=$line['name'];
		$_SESSION['email']=$line['email'];
	
		$_SESSION['staffNo']=$line['staffNo'];
		
		
		//this creates a session for students who are at res o not
		
	

		//$host=$_SERVER['HTTP_HOST'];
		//$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		echo  "<script>alert('Welcome To School Bus');</script>";
		//return to index page
		echo '<script language="javascript">
			document.location="admin/booking";
		</script>';
		
		exit();
	}
	else
	{
	   
	echo  "<script>alert('incorrect login details');</script>";
	
	echo $email.' '.$dec_password;
	$extra="index.php";
	$host  = $_SERVER['HTTP_HOST'];
	$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	//header("location:http://$host$uri/$extra");
	 echo '<script language="javascript">
			document.location="signin";
		</script>';
		
	exit();
	}


}else if($_POST['role'] == "Student"){
	$password=$_POST['password'];
	$dec_password=md5($password);
//$dec_password=$password;
	$useremail=$_POST['email'];
	$ret= mysqli_query($con,"SELECT * FROM student WHERE email='$useremail' and password='$dec_password'");
	$line=mysqli_fetch_array($ret);
	
	
	
	
	if($line>0)
	{

		

		$extra="index.php";
		$_SESSION['login']=$_POST['email'];

		$_SESSION['name']=$line['name'];
		$_SESSION['email']=$line['email'];
	
		$_SESSION['stdNumber']=$line['stdNumber'];
		
		
		//this creates a session for students who are at res o not
		
	

		//$host=$_SERVER['HTTP_HOST'];
		//$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		echo  "<script>alert('Welcome To School Bus');</script>";
		//return to index page
		echo '<script language="javascript">
			document.location="book";
		</script>';
		
		exit();
	}
	else
	{
	   
	echo  "<script>alert('incorrect login details');</script>";
	
	echo $email.' '.$dec_password;
	$extra="index.php";
	$host  = $_SERVER['HTTP_HOST'];
	$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	//header("location:http://$host$uri/$extra");
	 echo '<script language="javascript">
			document.location="signin";
		</script>';
		
	exit();
	}
}

							

					?>