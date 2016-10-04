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
$mobile=$_GET["mobile"];
$ll_no=$_GET["ll_no"];
$ap_date=$_GET["apdate"];
$dlt="DL";
$status="sumitted";
//check of the data in the  

if ( $rto == "" || $mobile == "" ||   $ap_date == "")
{
	echo'<div class="container"><div class="row"><div class="col s12 "><div class="card  red darken-4 z-depth-2"><div class="card-content white-text center"><i class="medium material-icons">report_problem</i><br/><span class="card-title">All fields are empty</span></div></div></div></div></div>';
	exit;
}
else{
    
   
    $sql = "INSERT INTO `license_dl` (`id`, `mobile`,`apdate`,  `status`, `tracking_id`, `ll_license_no`,`license_no`, `rto`) VALUES ('','$mobile',  '$ap_date',  '$status','', '$ll_no', '', '$rto');";
    

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

    
    $last_id = mysqli_insert_id($con);
$tracking_id=$dlt.''.$last_id;
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

$insert = "UPDATE license_dl SET tracking_id='$tracking_id' WHERE id='$last_id'";
if (!mysqli_query($con,$insert)) {
  die('Error: ' . mysqli_error($con));
}
echo "your tid is" .$tracking_id;

?>