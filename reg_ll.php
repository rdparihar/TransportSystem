<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*
http://localhost/DADOTS/home/Proj/register.php?name=&father_name=&mobile=&address=&no_of_cylender=&class=&type_of_body=&engine_no=&maker_classification=&action=
*/
include("header.php");
//fetch code



$rto=$_GET["rto"];
$name=$_GET["name"];
$father_name=$_GET["father_name"];
$mobile=$_GET["mobile"];
$address=$_GET["address"];
$qualification=$_GET["qualification"];
$gender=$_GET["gender"];
$v=$_GET["vehicle"];
$ap_date=$_GET["apdate"];
$llt="LL";
$status="sumitted";
//check of the data in the  

if ( $name == "" || $father_name == "" || $mobile == ""|| $address == "")
{
	echo'<div class="container"><div class="row"><div class="col s12 "><div class="card  red darken-4 z-depth-2"><div class="card-content white-text center"><i class="medium material-icons">report_problem</i><br/><span class="card-title">All fields are empty</span></div></div></div></div></div>';
	exit;
}
else{
    
   
    $sql = "INSERT INTO `license` (`id`,`rto`, `name`, `father_name`, `mobile`, `address`, `qualification`, `gender`, `vehicle`, `apdate`,  `status`, `tracking_id`, `license_no`) VALUES ('','$rto', '$name', '$father_name ', '$mobile', '$address', '$qualification', '$gender', '$v', '$ap_date',  '$status', '', '');";
    

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

    
    $last_id = mysqli_insert_id($con);
$tracking_id=$llt.''.$last_id;
    ?>


<div class="container">
<div class="row">
        <div class="col s12 ">
          <div class="card  blue darken-4 z-depth-2">
            
              <div class="card-content white-text center">
            <i class="medium material-icons">info_outline</i><br/>
                  <span class="card-title">Your Request Submitted Successfully</span><br/>
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
//$_SESSION['ids'] =$last_id;
}

//generate the unique id no



//show the massage to user 


    
 //update the database

$insert = "UPDATE license SET tracking_id='$tracking_id' WHERE id='$last_id'";
if (!mysqli_query($con,$insert)) {
  die('Error: ' . mysqli_error($con));
}
echo "your tid is" .$tracking_id;

?>