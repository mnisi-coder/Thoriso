<?php
session_start();
require("dbconnection.php");			


		
	$find = $_POST['email'];
		   $stdExist="SELECT * FROM student WHERE stdNumber =  ".$find ;
		   $queryUser=mysqli_query($con,$stdExist);   
		   
		   if(mysqli_fetch_array($queryUser)){
			   echo '<script>alert("Account already exist")</script>';
		   }else{
			 
			   if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
				   {
				       
					   
					if( $_POST['stdNumber'] )
					{
							$name = strip_tags(htmlspecialchars($_POST['name']));
	
	                    
						$email_address = strip_tags(htmlspecialchars($_POST['email']));
						
						$password = strip_tags(htmlspecialchars($_POST['password']));
						$enc_password = md5($password);
						$date = date("Y-m-d");
						$StdNumber = strip_tags(htmlspecialchars($_POST['stdNumber']));

						$insert= "insert into student values('','$StdNumber','$name','$email_address','$enc_password','$date')";
						$query_Insert = mysqli_query($con,$insert);
						
						
						if($query_Insert)
						{
							
							    	echo '<script>alert("Successfully Registered")</script>';
							    	
							    	 echo '<script language="javascript">
                                            document.location="index";
                                        </script>';
							
						}else{
						    echo $name." ".$email_address." ".$phone." ".$enc_password." ".$notice."".$date;
						}
						
					}else{
						echo '<script>alert("Invalid Student Number")</script>';
					}
				   }else{
					   echo '<script>alert("Invalid email")</script>';
				   }
				   
				   
		   	   
		   
		   }
	
				
	
?>