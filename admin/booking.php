<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();


if(isset($_GET['id']))
{
	$adminid=$_GET['id'];
	$msg=mysqli_query($con,"delete from complaints where id='$adminid'");
	if($msg)
	{
		echo "<script>alert('Data deleted');</script>";
	}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Booking</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	  
	  
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 
	  
	  
	  
  </head>
<?php
	include("nav.php");
	?>
      <section id="main-content">
          <section class="wrapper">
          	<h3 align="center"><i class="fa fa"></i>BUS BOOKINGS</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-"></i> All Bookings</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Queue No.</th>
                                  <th>name</th>
                                  <th class="hidden-phone">Student Number</th>
                                  <th>Booking Date</th>
                                  <th>Origin</th>
                                  <th>Destination</th>
                                  <th>Time</th>
                                  <th>Reference</th>
                                  <th>email</th>
                                  <th align="center">status</th>
                                  <th align="center">Change status</th>
								  
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from booking ");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                              <td><?php echo $row['name'];?></td>
                                  <td><?php echo $row['stdNumber'];?></td>
                                  <td><?php echo $row['bookingDate'];?></td>
                                  <td><?php echo $row['origin'];?></td>
                                  <td><?php echo $row['destination'];?></td>
								  <td><?php echo $row['time'];?></td>
								  <td><?php echo $row['reference'];?></td>
								  <td><?php echo $row['email'];?></td>
								  
								 
								 
								   <?php if($row['status'] == "Boarded" ||$row['status'] == "boarded" || $row['status'] == "BOARDED")
								  {
								  	echo '<td style="color: aliceblue; background: green;">'.$row['status'].'</td>';
								  }else{
								  		echo '<td style="color: aliceblue; background: red;">'.$row['status'].'</td>';
							  } ?>
						
                                  <td align="center">
                                     <a href="deleteBook.php?id=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button>
									  </a>
                                     <a href="updateBooking.php?uid=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i></button>
									  
									  </a>
                                     
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
					  
					  <div id="chart_div" style="width: 400px; height: 400px;"></div>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
