<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
include("nav.php");
check_login();
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from student where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>

  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.main-container {
  padding: 30px;
}

/* HEADING */

.heading {
  text-align: center;
}

.heading__title {
  font-weight: 600;
}

.heading__credits {
  margin: 10px 0px;
  color: #888888;
  font-size: 25px;
  transition: all 0.5s;
}

.heading__link {
  text-decoration: none;
}

.heading__credits .heading__link {
  color: inherit;
}

/* CARDS */

.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  margin: 20px;
  padding: 20px;
  width: 500px;
  min-height: 200px;
  display: grid;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__link,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

.card__link::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

.card__link:hover::after {
  width: 100%;
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
}

.card__apply {
  grid-row: 4/5;
  align-self: center;
}

/* CARD BACKGROUNDS */

.card-1 {
  background: radial-gradient(#1fe4f5, #3fbafe)  !important
  ;
}

.card-2 {
  background: radial-gradient(#fbc1cc, #fa99b2) !important;
}

.card-3 {
  background: radial-gradient(#76b2fe, #b69efe) !important;
}

.card-4 {
  background: radial-gradient(#60efbc, #58d5c9) !important;
}

.card-5 {
  background: radial-gradient(#f588d8, #c0a3e5);
}

/* RESPONSIVE */

@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
}

  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Accept Booking</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>
	<?php
	include("nav.php");
	?>

      <!-- 

GRADIENT BANNER DESIGN BY SIMON LURWER ON DRIBBBLE:
https://dribbble.com/shots/14101951-Banners

-->
<div class="main-container">
  <div class="heading">
    
  </div>
  <div class="cards">
    <div class="card card-1" data-toggle="modal" data-target="#exampleModal">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">Accept Bus Bording</h2>
      
    </div>
    <!-- <div class="card card-2" data-toggle="modal" data-target="#exampleModal">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
      <p class="card__apply">
        <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
      </p>
    </div> -->

  
  </div>

  <?php 
                              
                              if(isset($_POST['submit']))
                              {
                              
                              $ret=mysqli_query($con,"select * from booking Where stdNumber = '".$_POST['stdNum']."'  AND bookingDate ='".date("Y-m-d")."'");
							  $cnt=1;
							  $row=mysqli_fetch_array($ret);

                              
                              if($row)
							  {?>
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
								  
                  
								 
								   <?php if($row['status']== "Boarder" ||$row['status']== "boarded" || $row['status']== "BOARDED")
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
                              <?php $cnt=$cnt+1; 
                              }
                            }
                        ?>
                             
                              </tbody>
                          </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        
      </div>
      <div class="modal-body">
         <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Student Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="stdNum" placeholder="Enter Student Number">
                <small id="emailHelp" class="form-text text-muted">Enter student Number to board a student.</small>
            </div>
            
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>



        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        
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

    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
  </body>
</html>
