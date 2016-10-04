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




$reg=$_GET["reg"];
$ap_date=$_GET["date"];

//check of the data in the  

if ( $reg == "" || $ap_date == "")
{
	echo'<div class="container"><div class="row"><div class="col s12 "><div class="card  red darken-4 z-depth-2"><div class="card-content white-text center"><i class="medium material-icons">report_problem</i><br/><span class="card-title">All fields are empty</span></div></div></div></div></div>';
	exit;
}
else{
    
    $sql = "INSERT INTO `renew_reg` (`id`, `reg`, `date` ) VALUES ('','$reg', '$ap_date');";
    

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
}
    
    header("Location: index.html");

    ?>


<div class="container">
<div class="row">
        <div class="col s12 ">
          <div class="card  blue darken-4 z-depth-2">
            
              <div class="card-content white-text center">
            <i class="medium material-icons">info_outline</i><br/>
                  <span class="card-title">Your Request Submitted Successfully</span><br/>
            
            </div>
              <div class="card-action center  blue darken-2">
                
    
  </div>
   

  
              </div>
          </div>
        </div>
      </div>
 



