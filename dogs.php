
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
<body>
 
    <div class="container"  style="  " >

        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">
                <?php include('partials/header.html');?>
					 
					 
                <div class="row main-row"  >

                     <div class="col-xs-4 col-sm-4" >
								
							   <div class="dog dog-first">
								<div class="caption">Argo </div>  
									<div class="dog-image">
										<img  src='http://graph.facebook.com/10152268881715596/picture'   alt=''/> 
									</div>
									<div class="mask">
											<h2>BH, IPO I, Level I Personal Protection Dog</h2>
											<ul class="dog-list">
											  <li class="parent"><span class="text">Breed: Doberman Pinscher  </span></li>
											  <li class="parent"><span class="text">Date of Birth: March 7, 2010 </span></li>
											  <li class="parent"><span class="text">Sire: Dixon Gumby, ZM, ZVV1, SchH1, IPO3, FPr2  </span></li>
											  <li class="child"><span class="text">JCH CZ, CH CZ, CR Grand Champion  </span></li>
											  <li class="child"><span class="text">2009 National Champion, 2x Regional winner  </span></li>
											  <li class="child"><span class="text">DKKO/O, ECG-Negative </span></li>

											</ul>         
										  <a href="dogs/argo.php" class="info">Read More</a>
									</div>
								</div> 
								
							</div>		 
								 
						
                    <div class="col-xs-4 col-sm-4" >
								
							   <div class="dog dog-first">
								<div class="caption">Ammo </div>  
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10154237525855596/photos?fields=source";
										   $json = file_get_contents($antrax);
										   $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											echo "<img   src='{$source}'   alt=''>";  
										 ?>
									</div>
									<div class="mask">
										 <h2>BH, IPO I, Level I Personal Protection Dog</h2>
											<ul class="dog-list">
											  <li class="parent"><span class="text">Breed: Doberman Pinscher  </span></li>
											  <li class="parent"><span class="text">Date of Birth: March 7, 2010 </span></li>
											  <li class="parent"><span class="text">Sire: Dixon Gumby, ZM, ZVV1, SchH1, IPO3, FPr2  </span></li>
											  <li class="child"><span class="text">JCH CZ, CH CZ, CR Grand Champion  </span></li>
											  <li class="child"><span class="text">2009 National Champion, 2x Regional winner  </span></li>
											  <li class="child"><span class="text">DKKO/O, ECG-Negative </span></li>
											 											</ul>
										  <a href="/dogs/argo.html" class="info">Read More</a>
									</div>
								</div> 
								
							</div>		 
<div class="col-xs-4 col-sm-4" >

<div class="dog dog-first">
<div class="caption"> Antrax</div>
<div class="dog-image">
<?php
    $antrax = "http://graph.facebook.com/10154986213510596/photos?fields=source";
    $json = file_get_contents($antrax);
    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
    $source = $obj['data'][0]['source'];
    echo "<img   src='{$source}'   alt=''>";
    ?>
</div>
<div class="mask">
<h2>BH, IPO I, Level I Personal Protection Dog</h2>
<ul class="dog-list">
<li class="parent"><span class="text">Breed: Doberman Pinscher  </span></li>
<li class="parent"><span class="text">Date of Birth: March 7, 2010 </span></li>
<li class="parent"><span class="text">Sire: Dixon Gumby, ZM, ZVV1, SchH1, IPO3, FPr2  </span></li>
<li class="child"><span class="text">JCH CZ, CH CZ, CR Grand Champion  </span></li>
<li class="child"><span class="text">2009 National Champion, 2x Regional winner  </span></li>
<li class="child"><span class="text">DKKO/O, ECG-Negative </span></li>

</ul>
<a href="/dogs/argo.html" class="info">Read More</a>
</div>
</div>

</div>

					</div>


               <div class="row "  >
						   <div class="col-xs-1 col-sm-1" > </div>



                    <div class="col-xs-4 col-sm-4" >

							  <div class="dog dog-first">
								<div class="caption">Hurricane</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10154540915460596/photos?fields=source";
										   $json = file_get_contents($antrax);
										   $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											echo "<img   src='{$source}'   alt=''>";  
										 ?>
									</div>
									<div class="mask">
										 <h2>BH, IPO I, Level I Personal Protection Dog</h2>
											<ul class="dog-list">
											  <li class="parent"><span class="text">Breed: Doberman Pinscher  </span></li>
											  <li class="parent"><span class="text">Date of Birth: March 7, 2010 </span></li>
											  <li class="parent"><span class="text">Sire: Dixon Gumby, ZM, ZVV1, SchH1, IPO3, FPr2  </span></li>
											  <li class="child"><span class="text">JCH CZ, CH CZ, CR Grand Champion  </span></li>
											  <li class="child"><span class="text">2009 National Champion, 2x Regional winner  </span></li>
											  <li class="child"><span class="text">DKKO/O, ECG-Negative </span></li>
											  											</ul>         
										  <a href="/dogs/argo.html" class="info">Read More</a>
									</div>
								</div> 
								
							</div>		 
							<div class="col-xs-1 col-sm-1" > </div>  					 
							
					</div> 					
					
					
					
					
					
				</div> 
				<div class="clearfix visible-xs-block"></div>
				<div class="col-sm-1"> </div>
			</div>
	</div> 

<?php include('partials/footer.html');?>

</body>
</html>







