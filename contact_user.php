<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




include("/header.php");
//fetch code

 
   


?>
 

<?php



//table of all the new click on registration load form accordeina and varify or reject
//radio button

 
        $query2  = "select * from contact_us" ;
        $results2  = mysqli_query($con, $query2);
  
 
	      
	          
 // echo "$subid Refsnes.<br>";
    
    ?>

<br/><hr/>

  <!-- Navbar goes here -->
 <?php
            while($row = mysqli_fetch_array($results2)) {
       ?>
    <!-- Page Layout here -->
    <div class="row">
<div class="col s12 m4 ">
 <div id="flight-card" class="card">
                    <div class="card-header amber darken-2">
                        <div class="card-title center-align">
                            <h4 class="flight-card-title">Contact Us <i class="mdi-av-play-circle-fill small"></i> </h4>
                           
                         
                        </div>
                    </div>
                    <div class="card-content-bg   white-text">
                        <div class="card-content">
                            <div class="col s4 m4 l4 center-align">
                                <img src="images/TS.png" alt="" class="circle responsive-img activator card-profile-image"></div>
                          <div class="row flight-state-wrapper">
                                 
                              <div class="col s8 m8 l8 center-align">
                                     
                                 
                             
                             <div class="collection" style="margin-left:-10px;">
                       
                      <a href="#!" class="collection-item waves-effect"><?php echo $row['name']; ?></a>
                      <a href="#!" class="collection-item waves-effect "><?php echo $row['mobile']; ?></a>
                      <a href="#!" class="  collection-item waves-effect "><?php echo $row['email']; ?></a>
                       
                     
                            </div>    </div>
                            </div></div>
                    </div>
                </div>       
</div>
       

      <?php
            }
        ?>
          
</div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
               <?php 
    
    
    
 

?>

 <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    