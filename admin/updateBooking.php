<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
include("nav.php");
check_login();
if(isset($_POST['Submit']))
{
	$id=$_GET['uid'];
	
	$Status=$_POST['Status'];
	

	
	mysqli_query($con,"UPDATE booking SET  status='$Status' where id='".$_GET['uid']."'");
$_SESSION['msg']="Booking Updated successfully";
}
?>

<!DOCTYPE html>

      
	  <?php 
	  $ret=mysqli_query($con,"select * from booking WHERE id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))
	  
	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['name'];?>'s Booking Information</h3>
             	
				<div class="row">    
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
						  
						  
						  
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Student Number </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="stdNum" value="<?php echo $row['stdNumber'];?>" readonly>
                              </div>
                          </div>
         
							 
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Full name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"readonly >
                              </div>
                          </div>
                          
						  
							   <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Reference</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="cellPhone" value="<?php echo $row['reference'];?>"readonly >
                              </div>
                          </div>
							   
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Bus Time </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="time" value="<?php echo $row['time'];?>:00" readonly>
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Origin </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="sessionDetails" value="<?php echo $row['origin'];?>" readonly >
                              </div>
                          </div>
							   
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Travel Date</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="postedDate" value="<?php echo $row['bookingDate'];?>" readonly >
                              </div>
                          </div>

							  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Destination</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Mentor" value="<?php echo $row['destination'];?>" readonly>
                              </div>
                          </div> 
							   
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Status </label>
                              <div class="col-sm-10">
                                   <select class="form-control" name="Status">
									  <?php
	   										if($row['status'] == "Approved")
											{
												
												echo '<option value="'.$row['status'].'" hidden="">'. strtoupper($row['status']) .'</option>';
												echo '<option value="Pending">PENDING</option>';
                                                echo '<option value="Cancel">Cancel</option>';
											}
	   										else
											{
												
												echo '<option value="'.$row['status'].'" hidden="">'. strtoupper($row['status']) .'</option>';
												echo '<option value="Boarded">Boarded</option>';
                                                echo '<option value="Cancel">Cancel</option>';
											}
											?>
									  
									  	
								  </select>
                              </div>
                          </div>
						   
						  

						  
						  
						  
						  
						  
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
      </section></section>
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
