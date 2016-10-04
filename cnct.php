<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



include("header.php");
//fetch code

$name=$_GET["name"];
$mobile=$_GET["mobile"];
$email=$_GET["email"];
//check of the data in the  

if ( $name == "" || $mobile == ""||  $email == "")
{
	echo'<div class="container"><div class="row"><div class="col s12 "><div class="card  red darken-4 z-depth-2"><div class="card-content white-text center"><i class="medium material-icons">report_problem</i><br/><span class="card-title">All fields are empty</span></div></div></div></div></div>';
	exit;
}
else{
    
   $sql = "UPDATE contact_us SET name='$name', mobile='$mobile', email='$email' WHERE id='1'";
     
    

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

}
?>


<div class="container">
<div class="row">
        <div class="col s12 ">
          <div class="card  blue darken-4 z-depth-2">
            
              <div class="card-content white-text center">
            <i class="medium material-icons">info_outline</i><br/>
                  <span class="card-title">We have recieved all Information Successfully</span><br/>
              <p>we will contact you soon</p>
            </div>
              <div class="card-action center  blue darken-2"><a href="index.html" ><button class="btn red  center ">Back to Home </button></a>
            </div> 
    
  </div>
   

  
              </div>
          </div>
        </div>
      </div>
    </div>









 