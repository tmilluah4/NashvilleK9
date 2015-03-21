<!DOCTYPE html>
<html>
<head> 
     <?php include('partials/head.html');?>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
	 
	<script src="js/imgLiquid-min.js"></script>
		<script type="text/javascript"> 
			jQuery(document).ready(function($){
					  $(".imgLiquid").imgLiquid();
					   
					});
		</script>
</head>
<body   > 
	<script type="text/javascript">  
		function setActive()
		{  document.getElementById('dogsli').className='active'; }
		window.onload = setActive;
	</script>
    <?php include('partials/header.html');?> 	
      
    <div class="main">
        <div class="container">
			<div class="row" style="height:300px">
				<div class="page-dog-title" >
					 <span class="glyphicon glyphicon-bookmark  red" aria-hidden="true" ></span>Antrax
				</div> 	
				<div class="section-dog-header"> 
           			<?php 
						$antrax = "http://graph.facebook.com/10154986213510596/photos?fields=source";
						$json = file_get_contents($antrax);
						$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
						$photo_count = 5;		
				
						for($x=0; $x<$photo_count; $x++){
							$source = $obj['data'][$x]['source'];
							 
							echo "<div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:200px; height:200px'>";  
			                	echo "<img   src='{$source}'   alt=''>"; 
					        echo "</div>";
					 
						}
					?>
				</div>
			</div>
			
			<div class="row" style="height:300px">
				<div class="page-dog-title" >
					 <span class="glyphicon glyphicon-bookmark  red" aria-hidden="true" ></span>Hurricane
				</div> 	
				<div class="section-dog-header"> 
           			<?php 
						$antrax = "http://graph.facebook.com/10154540915460596/photos?fields=source";
						$json = file_get_contents($antrax);
						$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
						$photo_count = 5;		
				
						for($x=0; $x<$photo_count; $x++){
							$source = $obj['data'][$x]['source'];
							echo "<div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:200px; height:200px'>";  
			                	echo "<img   src='{$source}'   alt=''>"; 
					        echo "</div>";
						}
					?>
				</div>
			</div>
        </div>
    </div>	
	
 	
	<?php include('partials/footer.html');?> 	
   
</body>
</html>