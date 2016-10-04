<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
include("header.php");
        $query2  = "select * from notice"  ;
        $results2  = mysqli_query($con, $query2);
?>
 <div class=" container orange darken-2 z-depth-1 center white-text"><h4>Notice</h4>&nbsp;</div>
    <div class="container row  blue darken-4  ">
        <div class="col s2">&nbsp;</div>
      <div class="col s10">
          <ul class="collapsible" data-collapsible="accordion">
              <?php
              while($row = mysqli_fetch_array($results2)) {
              ?>
                <li>
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>
                      <?php echo $row['subject'];?> 
                    </div>
                  <div class="collapsible-body white">
                      <p> <?php echo $row['notice'];?> </p>
                </div>
                </li>
             <?php }?>
          </ul>
        </div>
      </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          

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
    