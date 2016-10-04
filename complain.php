<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



include("header.php");
//fetch code

$msg="Complain Submitted Successfully ";

$name=$_GET["name"];


$mobile=$_GET["mobile"];
$complaint=$_GET["complaint"];
$email=$_GET["email"];
$type=$_GET["type"];
$status="sumitted";
//check of the data in the  

if ( $name == "" || $mobile == ""|| $complaint == ""|| $email == ""|| $status == "")
{
	echo'<div class="container"><div class="row"><div class="col s12 "><div class="card  red darken-4 z-depth-2"><div class="card-content white-text center"><i class="medium material-icons">report_problem</i><br/><span class="card-title">All fields are empty</span></div></div></div></div></div>';
	exit;
}
else{
    
   
    $sql = "INSERT INTO `ddts`.`complain` (`id`, `name`,  `mobile`, `complainT`,`type`, `email`,  `status`, `tracking_id`) VALUES ('', '$name',  '$mobile', '$complaint', '$type', '$email',  '$status', '');";
    

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

    $rto="CMPLN";
    $last_id = mysqli_insert_id($con);
$tracking_id=$rto.''.$last_id;
    ?>


<div class="container">
<div class="row">
        <div class="col s12 ">
          <div class="card  blue darken-4 z-depth-2">
            
              <div class="card-content white-text center">
            <i class="medium material-icons">info_outline</i><br/>
                  <span class="card-title">Your Complain Submitted Successfully</span><br/>
              <p>Kindly note the Traker ID for Further Reference</p>
            </div>
              <div class="card-action center  blue darken-2">
                 <div class="chip">Tracker id : <?php echo $tracking_id;?></div> 
    
  </div>
   

  
              </div>
          </div>
        </div>
      </div>
    </div>



<?php

}



$insert = "UPDATE complain SET tracking_id='$tracking_id', msg='$msg'  WHERE id='$last_id'";
if (!mysqli_query($con,$insert)) {
  die('Error: ' . mysqli_error($con));
}


?>