<?php
session_start();

$con=mysqli_connect("localhost","root","","ddts");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$tid  = $_GET['tid'];
if ($tid==''){
  
    header("Location: error.php");
    
    
}

include("header.php");
//fetch code

 
   


?>
 

<?php



//table of all the new click on registration load form accordeina and varify or reject
//radio button

 
        $query2  = "select * from register where tracking_id ='".$tid. "'" ;
        $results2  = mysqli_query($con, $query2);
    $_SESSION['trkid'] =$tid;
 
	      
	          
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
 <div class="row">
        <div class="col ">
            <form action="register.php" method="get">
              <div class="col s12 m12 l12">
                  <div class="card-panel ">
                    <h4 class="header2">Enter Details</h4>
                    <div class="row">
                      
                        <div class="row">
                          
                           
                            <div class="input-field col s12">
                            <input name="source" type="text">
                            <label for="source">enter the Source name </label>
                          </div>
                            <div class="input-field col s12">
                            <input name="dest" type="text">
                            <label for="dest">enter the Destination name </label>
                          </div>
                            <div class="input-field col s12">
                            <input name="regno" type="text" value="<?php echo $row['tracking_id']; ?>" readonly>
                            <label for="regno">enter the registration no </label>
                          </div>
                            <div class="input-field col s12">
                            <input name="route" type="text">
                            <label for="route">enter the route name </label>
                          </div>
                     <div class="input-field col s12">
                      <label for="scope">enter the scope name </label>    
                         <p>
      <input name="scope" type="radio" id="state" value="state" />
      <label for="state">State</label>
    
      <input name="scope" type="radio" id="national" value="national" />
      <label for="national">National</label>
    </p>
                         
                            
                           
                          </div>
                            <div class="input-field col s12">
                            <input name="type" type="text">
                            <label for="type">enter the type name </label>
                          </div>
                   
                       
                                                </div>
 </div>
                  </div>
                </div>
            <div class="row center">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>   
            </form>
        </div> 
      </div>       
</div>
       

      <div class="col s12 m8 ">

         
                <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                  <li class="">
                    <div class="collapsible-header light-blue light-blue-text text-lighten-5"><i class="mdi-communication-business"></i>
                        Owner Details </div>
                    <div class="collapsible-body light-blue lighten-5" style="display: none;">
                     
                       <div class="portlet box orange">
                        <div class="table-scrollable">
                         <table class="hoverable ">
                            <thead>
                                <tr>
                                  <th>id</th>
                                  <th>Name</th>
                                  <th>Father Name</th>
                                  <th>Mobile No</th>
                                  <th>Address</th>
                                </tr>
                            </thead>
			                 <tbody>
                                 
                                <tr>
                                  <td><?php echo $row['id']; ?></td>  
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['father_name']; ?></td>
                                  <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                </tr>
                             
                            </tbody>
				        </table>
                
                           </div></div>


                    
                     
            
                                 
                                 
                    
                    </div>
                  </li>
                  <li class="">
                    <div class="collapsible-header light-blue light-blue-text text-lighten-5"><i class="mdi-action-perm-contact-cal
"></i>
                       Technical Details</div>
                    <div class="collapsible-body light-blue lighten-5" style="display: none;">
                      
                        <div class="portlet box orange">
                        <div class="table-scrollable">
                         <table class="hoverable ">
                            <thead>
                                <tr>
                                    <th>No of Cylender</th>
                                  <th>Class</th>
                                  <th>Type of Body</th>
                                  <th>Engine No</th>
                                  <th>Maker Classification</th>
                                </tr>
                            </thead>
			                 <tbody>
                                 
                                <tr>
                                  <td><?php echo $row['no_of_cylender']; ?></td>  
                                  <td><?php echo $row['class']; ?></td>
                                  <td><?php echo $row['type_of_body']; ?></td>
                                  <td><?php echo $row['engine_no']; ?></td>
                                    <td><?php echo $row['maker_classification']; ?></td>
                                </tr>
                             
                            </tbody>
				        </table>
                
                           </div></div>
                        
                        
                        
                    </div>
                  </li>
                  <li class="">
                    <div class="collapsible-header light-blue light-blue-text text-lighten-5"><i class="mdi-action-assignment
"></i> Tyre and Size Detail</div>
                    <div class="collapsible-body light-blue lighten-5" style="display: none;">
                      
                        
                        <div class="portlet box orange">
                        <div class="table-scrollable">
                         <table class="hoverable ">
                            <thead>
                                <tr>
                                  <th>Tyre Size</th>
                                  
                                  <th>Type Front</th>
                                  <th>Type Back</th>
                                </tr>
                            </thead>
			                 <tbody>
                                 
                                <tr>
                                  <td><?php echo $row['tyre_size']; ?></td>  
                                  <td><?php echo $row['type_front']; ?></td>
                                  <td><?php echo $row['type_back']; ?></td>
                                  
                                </tr>
                             
                            </tbody>
				        </table>
                
                           </div></div>
                        
                    </div>
                  </li>
                    <li class="">
                    <div class="collapsible-header light-blue light-blue-text text-lighten-5"><i class="mdi-action-receipt"> </i>
                        Purchase Details</div>
                    <div class="collapsible-body light-blue lighten-5" style="display: none;">
                      
                        <div class="portlet box orange">
                        <div class="table-scrollable">
                         <table class="hoverable ">
                            <thead>
                                <tr>
                                  <th>Name of Dealer</th>
                                  
                                  <th>E-Mail</th>
                                  <th>Dealer Address</th>
                                </tr>
                            </thead>
			                 <tbody>
                                 
                                <tr>
                                  <td><?php echo $row['name_dealer']; ?></td>  
                                  <td><?php echo $row['d_email']; ?></td>
                                  <td><?php echo $row['dealer_address']; ?></td>
                                  
                                </tr>
                             <?php }?>
                            </tbody>
				        </table>
                
                           </div></div>
                        
                        
                        
                    </div>
                  </li>
                    
                </ul>
       

              </div>
        
          
</div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
 
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
    