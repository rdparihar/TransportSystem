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
   $query2  = "select * from license where tracking_id ='".$tracker_id. "'" ;
        $results2  = mysqli_query($con, $query2);
 

//check of the data in the  

        
?>


<div class="container">
<div class="row">
        <div class="col s12 ">
          <div class="card  blue darken-4 z-depth-2">
            
              <div class="card-content white-text center">
           <table>
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="id">Name</th>
              <th data-field="name">Mobile</th>
              <th data-field="price">Tracking Id</th>
              <th data-field="price">License No</th>
          </tr>
        </thead>

        <tbody>
          <tr>
              
              
              <?php 
                   while($row = mysqli_fetch_array($results2)) {
                  ?>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['tracking_id']; ?></td>
            <td><?php echo $row['license_no']; ?></td>
          </tr>
        
        </tbody>
      </table> 
                  
            
                  
                 <?php

                   }
?>
                    
                  
            </div>
              
     
                  
                  
                
  </div>
   

  
              </div>
          </div>
        </div>
      </div>
    





