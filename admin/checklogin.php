<?php
function check_login()
{
	if(strlen($_SESSION['loginAdmin'])==0)
	{	
		$host=$_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="../index"";		
		$_SESSION["login"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>