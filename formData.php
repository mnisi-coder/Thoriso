<?php

session_start();
require "dbconnection.php";



                            $stdNum = $_SESSION['stdNumber'];
							$email= $_SESSION['email'];
							$name=$_SESSION['name'];
							$originCampus= $_POST['originCampus'];
                            $destCampus=$_POST['destCampus'];
							$a=$_POST['date'];
							$time=$_POST['time'];
							
							$time = substr($time,0,2);
							$status ="Pending";

                            $t=time();
                            $today=date('Y-m-d');
                            $ref =  $stdNum."".$t."".$today;


							$checkDate = "SELECT * FROM booking WHERE time = '$time' AND bookingDate='$a' AND origin='$originCampus'";
							$query  = mysqli_query($con,$checkDate);
							$rowNum = mysqli_num_rows($query);
							
							
							if($a<$today)
							{
								echo "<script>alert('booking can not be made for dates that have passed');</script>";
							}else{
								
								if($rowNum<2)
								{
                                                                                                                                                                                
									$msg=mysqli_query($con,"insert into booking(id,stdNumber,email,name,origin,bookingDate,time,destination, reference, status) values('', '$stdNum', '$email', '$name', '$originCampus', '$a','$time', '$destCampus', '$ref','$status')");
														
														if($msg)
														{
															echo "<script>alert('booking made Successfully');</script>";
															echo'<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong>Session Successfully Booked for -</strong></span><span>'.$time.':00</span></div>';
															echo'<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signin" href="#">';
														
                                                            echo '<script language="javascript">document.location="profile";</script>';
                                                        }
														else
														{
															echo "<script>alert('Booking was not successful');</script>";
                                                            echo '<script language="javascript">document.location="book";</script>';

                                                           
														}
								}else{
									echo "<script>alert('Please try booking another time slot, the bus for ".$time.":00 Oclock from ".$originCampus." on this date: ".$a." is full');</script>";
								}
							
							}
								
						
					
					
					
				?>