<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



include("header.php");
//fetch code




$tracker_id=$_GET["tid"];
   $query2  = "select * from register where tracking_id ='".$tracker_id. "'" ;
        $results2  = mysqli_query($con, $query2);
 

//check of the data in the  

        
?>


<div class="container">
<div class="row">
        <div class="col s12 ">
          <div class="card  blue darken-4 z-depth-2">
            
              <div class="card-content white-text center">
            <i class="medium material-icons">info_outline</i><br/>
                  <?php 
                   while($row = mysqli_fetch_array($results2)) {
                  ?>
                  <span class="card-title">Status: <?php echo $row['status']; ?></span><br/>
              <?php $stt= $row['status']; ?>
                  
                  
                 
                  
                  
            </div>
             
              <div class="card-action center  blue darken-2">
                  
                  
                  
                 <div class="chip">Tracker id : <?php echo $row['tracking_id']; ?></div>
                  <?php  } ?>
    
  </div>
   

  
              </div>
          </div>
        </div>
      </div>
    





