<?php
include("header.php");
?>
 
<div class="container">

    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center ">Renew Registration</a>
     </div>
    </nav>
    </div>

<div class="container amber ">
    <div class="row  ">
        
         <div class="col s3 ">&nbsp;</div>
         <div class="col s6  ">
    
        
            <form action="renewR.php" method="get">
                
             
                
                
         <div class="col s12 m12 l12  ">
                  <div class="card-panel z-depth-2">
                    <h4 class="header2">Renew Application</h4>
                    <div class="row">
                      
                        <div class="row">
                          <div class="input-field col s12">
                            <input name="reg" type="text">
                            <label for="license">Registration </label>
                          </div>
                        </div>
                        <p>
                            <label for="date">Appointment Date</label>
                          <input name="date" type="date" class="datepicker">
                          
                        </p>
                        





                   
                    </div>
                  </div>
                </div>
            
            

                
                <div class="row center">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light " type="submit" >Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>   
            </form>
        </div> 
      </div>
    </div>
            
</div>

  


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
