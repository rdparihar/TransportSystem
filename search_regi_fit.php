 <?php
session_start();
 

include("header.php");
//fetch code

 
   


?>
 <div class=" container orange darken-2 z-depth-1 center white-text"><h4>Search Registration</h4>&nbsp;</div>
    <div class="container row ">
     
      <div class="col s12  white">
 
    
     

 <div class="row  ">
        
         <div class="col s3 ">&nbsp;</div>
         <div class="col s6 ">
            <div class="card-panel hoverable ">
                    <h4 class="header2">Search Registraion for Fitness</h4>
                    <div class="row center">
                      
                      
                    <form action="fitnes.php" method="get">
                        <div class="input-field">
                        <div class="input-field col s8">
                            <input name="tid" type="text">
                            <label for="name">Enter the Registration Details</label>
                        </div>
                        <div class="input-field col s4"><button class="btn cyan waves-effect waves-light " type="submit" name="action"> 
                            <i class="material-icons">search</i> </button>
                        </div>              
                        </div>
                    </form>
                       
                        </div>
                     
                    
                     
                    </div> 
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
