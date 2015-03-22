<!DOCTYPE html>
<html>
<head> 
     <?php include('../partials/head.html');?>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
	 
	<script src="../js/imgLiquid-min.js"></script>
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
	
    <?php include('../partials/header.html');?> 	
      
    <div class="main">
        <div class="container">
				<div class="page-dog-title-single" >
					<span class="glyphicon glyphicon-bookmark  red" aria-hidden="true" ></span>	 
					Argo Avodar, BH, IPO I, Level I Personal Protection Dog
				</div>
			<div class="section-dog-header-single">
				<div class="row" > 
					 
						
					<div class="col-md-5"> 
						<div class="row">  
							<div class="col-md-3 dog-single-left-price">Price</div>
							<div class="col-md-9 dog-single-right-price">  $24,000 </div> 
						</div>
						<div class="row">  
							<div class="col-md-3 dog-single-left">Breed</div>
							<div class="col-md-9 dog-single-right"> Doberman Pinscher  </div> 
						</div>
						<div class="row">  
						  	<div class="col-md-3 dog-single-left">Date of Birth:</div>
							<div class="col-md-9 dog-single-right"> March 7, 2010   </div> 
						</div>
						<div class="row">  
						  	<div class="col-md-3 dog-single-left">Sire</div>
							<div class="col-md-9 dog-single-right"> Dixon Gumby, ZM, ZVV1, SchH1, IPO3, FPr2 </div>
					   </div>    
						</br>
					   <div class="row">
							<span class="watch-video-play " style="background:white">		
								<span class="glyphicon glyphicon-film " aria-hidden="true"  ></span> 
								 <a  class="various  fancybox.iframe"  title="" href="http://player.vimeo.com/video/34436397?fs=1&amp;autoplay=1">
									 	Argo
								 </a>
							</span>
						</div>
						<div class="row"> 
							<ul class="dog-list-items"> 
						        <li class="child"><span class="text">JCH CZ, CH CZ, CR Grand Champion  </span></li>
						        <li class="child"><span class="text">2009 National Champion, 2x Regional winner  </span></li>
						        <li class="child"><span class="text">DKKO/O, ECG-Negative </span></li>
						        <li class="child"><span class="text">The most successful working Doberman MSDK 2008</span></li>
						        <li class="child"><span class="text">2008 7x BOB – breed champion</span></li>
						        <li class="child"><span class="text">Candidate for the Polish and Slovak championships</span></li>
						        <li class="child"><span class="text">Interchampion Candidate</span></li>
						        <li class="parent"><span class="text">Dam: Lorraine Halit Pasa, IPO 3, ZZO, ZM, ZOP, ZPU1, BH, ZTP SG 1</span></li>
						        <li class="child"><span class="text">Many times CAC, R. CAC, JCH CZ</span></li>
						        <li class="child"><span class="text">DKKO/O, ECG-Negative</span></li>
						        <li class="child"><span class="text">Club Winner 2008, 2009</span></li>
						      </ul>
						</div>
					</div>
					<div class="col-md-7">
				 		
	           			<?php 
							$antrax = "http://graph.facebook.com/10152268881640596/photos?fields=source";
							$json = file_get_contents($antrax);
							$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
							$photo_count = count($obj['data']);		

							for($x=0; $x<$photo_count; $x++){
								$source = $obj['data'][$x]['source'];

								echo "<div class='imgLiquid' 
								style=' -moz-box-shadow:0px 0px 2px #666; -webkit-box-shadow: 0px 0px 2px #666; box-shadow:0px 0px 2px #666; display: inline-block; margin-right: 10px;width:190px; height:200px'>";  
									echo "<a href='{$source}' rel='gallery1'  class='fancybox' data-gallery>";
										echo "<img   class='photo-thumb' src='{$source}'   alt=''>"; 

					            	echo "</a>";
				                 
						        echo "</div>"; 
							}
							 
						?>
				 </div>
			 	</div>
			</div> 
		 
        </div>
    </div>	
	
 	
	<?php include('../partials/footer.html');?> 	
   
</body>
</html>