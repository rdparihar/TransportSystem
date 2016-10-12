<html>
	<head>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body style="margin:25px;">
	<!--php code for random generation of id -->
		<?php 
			$x = 1; 
			$y = 2;
			$z=1;
			while($z <= 5) {
		?>
	    <input type="checkbox" id="<?php echo $x;?>" checked />
	   	 Do you want to remove <?php echo $z;?>
	    <br/>
		<div id="<?php echo $y;?>" style="display: none">
	    	<button id="hidc" class="btn btn-danger">Remove</button>
	  
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
	        $("#<?php echo $x;?>").click(function () {
	            if ($(this).not(":checked")) {   
	                $("#<?php echo $y;?>").show();
	            } if ($(this).is(":checked")) {
	                $("#<?php echo $y;?>").hide();
	            }
	        });
	    });
		</script>
		<?php
		    $x= $x+2;
		    $y= $y+2;
		    $z++;
			}
		 ?>
	</body>
</html>


