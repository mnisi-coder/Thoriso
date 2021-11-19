<?php
include "nav.php";


session_start();
require("dbconnection.php");			

		
	
?>

<div class="container rounded bg-transparant color-white mt-5 mb-5">
    <div class="row">
        
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
            <?php
                $qury = mysqli_query($con,"select * from student where email = '".$_SESSION['email']."'");

                $user = mysqli_fetch_array($qury)
                
            ?>


                <form method="POST" action="profileUpdate" style="color:white">
     
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name and suname</label><input type="text" class="form-control" placeholder="first name" name="name" value="<?php echo $user['name'] ?>"></div>
                    
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Student Number</label><input type="text" class="form-control" name="stdNumber" value="<?php echo $user['stdNumber'] ?>"></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>"></div>

                    </div>
                    
                    <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit">Save Profile</button></div>
                
               
                </form>
            </div>
        </div>
        <div class="col-md-6" style="color:white">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Bus tickets</span></div><br>
                <table class="table table-sm" style="color:white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Origin</th>
      <th scope="col">Destinatio</th>
      <th scope="col">Time</th>
      <th scope="col">Ticket No</th>
      <th scope="col">Status</th>
      <th scope="col">cancel</th>
    </tr>
  </thead>
  <tbody>
        <?php
    $find = $_SESSION['stdNumber'];
    $stdExist="SELECT * FROM booking WHERE stdNumber =  ".$find ;
    $queryUser=mysqli_query($con,$stdExist);   
    $count = 0;
   
     
            while($busData=mysqli_fetch_array($queryUser))
            {
                $count++;
                ?>

       
    <tr>
      
     
      <th scope="row"><?php echo $count;?></th>
      <td> <?php echo $busData['origin'];?> </td>
      <td><?php echo $busData['destination']; ?></td>
      <td> <?php echo $busData['time'].':00'; ?></td>
      <td><?php echo $busData['reference'] ;?></td>
      <td><?php echo $busData['status']; ?></td>
      <td>

          <?php
          
          if($busData['status']== "Pending")
          {?>
                <a href="cancel?id=<?php echo $busData['id'];?>"> 
                    <button type="button" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                </a>
         <?php } ?>
    </td>
    </tr>
    <?php
        }
    ?>  
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>