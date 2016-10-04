<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



include("header.php");
//fetch code



$name=$_POST["name"];
$father_name=$_POST["father_name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$no_of_cylender=$_POST["no_of_cylender"];
$class=$_POST["class"];
$type_of_body=$_POST["type_of_body"];
$engine_no=$_POST["engine_no"];
$maker_classification=$_POST["maker_classification"];
$tyre_size=$_POST["tyre_size"];
$type_front=$_POST["type_front"];
$type_back=$_POST["type_back"];
$name_dealer=$_POST["name_dealer"];
$d_email=$_POST["d_email"];
$dealer_address=$_POST["dealer_address"];
$rto=$_POST["rto"];
$status="sumitted";
//check of the data in the

if ( $name == "" || $father_name == "" || $mobile == ""|| $address == ""|| $no_of_cylender == ""|| $class == ""|| $type_of_body == ""|| $engine_no == ""|| $maker_classification == ""|| $tyre_size == ""|| $type_front == ""|| $name_dealer == ""|| $d_email == ""|| $dealer_address == ""|| $rto == ""|| $status == "")
{
	echo'<div class="container"><div class="row"><div class="col s12 "><div class="card  red darken-4 z-depth-2"><div class="card-content white-text center"><i class="medium material-icons">report_problem</i><br/><span class="card-title">All fields are empty</span></div></div></div></div></div>';
	exit;
}
else{


    $sql = "INSERT INTO `ddts`.`register` (`id`, `name`, `father_name`, `mobile`, `address`, `no_of_cylender`, `class`, `type_of_body`, `engine_no`, `maker_classification`, `tyre_size`, `type_front`, `type_back`, `name_dealer`, `d_email`, `dealer_address`, `rto`, `status`, `tracking_id`) VALUES ('', '$name', '$father_name ', '$mobile', '$address', '$no_of_cylender', '$class', '$type_of_body', '$engine_no', '$maker_classification', '$tyre_size', '$type_front', '$type_back', '$name_dealer', '$d_email', '$dealer_address', '$rto', '$status', '');";


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}


    $last_id = mysqli_insert_id($con);
$tracking_id=$rto.''.$last_id;
    ?>


<div class="container">
<div class="row">
        <div class="col s12 ">
          <div class="card  blue darken-4 z-depth-2">

              <div class="card-content white-text center">
            <i class="medium material-icons">info_outline</i><br/>
                  <span class="card-title">Your Request Submitted Successfully</span><br/>
              <p>Kindly note down the Traker ID for future Reference</p>
              Reference no sent via email to :<span class="new badge green"><?php echo $email;?></span>
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

$insert = "UPDATE register SET tracking_id='$tracking_id' WHERE id='$last_id'";
if (!mysqli_query($con,$insert)) {
  die('Error: ' . mysqli_error($con));
}
//echo "your tid is" .$tracking_id;

  require_once "phpmailer/class.phpmailer.php";

$message = '<html><head>
              <title>Email Verification</title>
              <style>
              span { paddin:15px; border-radius: 16px;
    background-color: #e4e4e4; }
              </style>
              </head>
              <body>';

      $message .= '<h2>Hi ' . $name . '!</h2>';
      $message .= '<p>We have recieved your request Successfully Kindly note the Traker ID for Further Reference</p>';
      $message .='<h3>Tracker id :<mark> '. $tracking_id .' </mark></h3>';
      $message .= "</body></html>";


      // php mailer code starts
      $mail = new PHPMailer(true);
      $mail->IsSMTP(); // telling the class to use SMTP

      $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
      $mail->SMTPAuth = true;                  // enable SMTP authentication
      $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
      $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
      $mail->Port = 465;                   // set the SMTP port for the GMAIL server

      $mail->Username = 'raj.dreamwish@gmail.com';  //jis ke through bhejana hai
      $mail->Password = 'rdp.india';  //uska pwd asliwala

      $mail->SetFrom('raj.dreamwsih@gmail.com', 'TransportSystem');
      $mail->AddAddress($email);

      $mail->Subject = trim("Reference Number - TransportSystem");
      $mail->MsgHTML($message);

      try {
        $mail->send();
        $msg = "An email has been sent for verfication.";
        $msgType = "success";
      } catch (Exception $ex) {
        $msg = $ex->getMessage();
        $msgType = "warning";
      }




?>
