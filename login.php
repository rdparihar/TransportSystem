<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



include("header.php");
//fetch code




$user=$_POST["user"];
   $query2  = "select * from user where user ='".$user. "'" ;
        $results2  = mysqli_query($con, $query2);
 

 <?php 
                   while($row = mysqli_fetch_array($results2)) {
                       echo $row['email'];
                       
                   } ?>

 




