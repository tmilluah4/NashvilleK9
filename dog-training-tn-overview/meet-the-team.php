<!DOCTYPE html>
<html>
<head> 
     <?php include('../partials/head.html');?> 	  
</head>
<body>  
    <?php include('../partials/header.html');?> 	
      
    <div class="main" >
      <div class="container"> 
			<div class="row">   
			
				<div class="col-md-3" class="side-column"  >
					<div class="row"> 
						<div class="image-random">
							 <img src="/NashvilleK9/images/random-3.jpg" class="random"/> 
						</div>
					 </div> 
				  	  <?php include('../partials/overview-sidebar.html');?>  
				</div>
				
				<div class="col-md-9"    >  
					 <?php include('/team-members/ali.html');?> 
					</br>
					</br>
					<?php include('/team-members/damon.html');?> 
					</br>
					</br>
					<?php include('/team-members/jessica.html');?> 
					</br>
					</br>
					<?php include('/team-members/john.html');?> 
					</br>
					</br>
					 <?php include('/team-members/nick.html');?> 
					</br>
					</br>
					<?php include('/team-members/sandy.html');?> 
					</br>
					</br>
					<?php include('/team-members/joey.html');?> 
				</div> 
			</div> 
      </div>
    </div>	 
	  
	<?php include('../partials/footer.html');?> 	
   
</body>
</html>