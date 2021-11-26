<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
include("nav.php");
check_login();
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
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

    <title>Admin | Residence News</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	  
	  
	  
	  
	 <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets1/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets1/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets1/css/explorehome.css">
    <link rel="stylesheet" href="assets1/css/footer.css">
    <link rel="stylesheet" href="assets1/css/navstyle.css">
    <link rel="stylesheet" href="assets1/css/promostyle.css">
    <link rel="stylesheet" href="assets1/css/structure.css"> 
  </head>

  
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Users</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <!--<table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Topic</th>
                                  <th class="hidden-phone">First Name</th>
                                  <th> Last Name</th>
                                  <th> Email Id</th>
                                  <th>Contact no.</th>
                                  <th>Reg. Date</th>
								  
								  
                              </tr>
                              </thead>
                              <tbody>-->
                                  <div id="explore">
        								<div class="container">
											<h1 align="center">Residence News updates</h1>
											<div class="row">

												<?php


												$news = "SELECT * FROM news";
												$quiry = mysqli_query($con,$news);

												while($row = mysqli_fetch_array($quiry))
												{
													echo '<a href="newsPage.php?id='. $row['id'] .'">';
													echo '<div class="col-lg-4">';
													echo '<h3>'.$row['topic'].'</h3><img class="img-fluid" src="'.$row['img'].'">';
													echo '</a>';
													echo '<p>'.substr($row['story'],0,80).'....'.'</p>';
													//this will help us get data for a specific row

													echo '</div>';
												?>
													 <td>
                                     
                                     					<a href="update-news.php?uid=<?php echo $row['id'];?>"> 
                                     					<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     					<a href="deleteNews.php?id=<?php echo $row['id'];?>"> 
                                     					<button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  					</td>
												<?php 
												}
												
												//perfect no error
												?>

											</div>
										</div>
									</div>
                                 
                              <!--</tr>
                              
                             
                              </tbody>
                          </table>-->
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>


    <script src="assets1/js/jquery.min.js"></script>
    <script src="assets1/bootstrap/js/bootstrap.min.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
