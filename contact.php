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
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->    

	   
	    <script src="email/validation.js" type="text/javascript"></script>
</head>
<body> 
 <script type="text/javascript">  
		function setActive()
		{  document.getElementById('contactli').className='active'; }
		window.onload = setActive;
	</script>
    <?php include('partials/header.html');?> 	
     
    <div class="main">
        <div class="container">
	
           <div class="row">
				<div class="col-md-4" class="side-column" >
					<div class="row" class="side-column-contact" > 
					  
						 <div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:180px; height:180px'>
		                 	<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-ali.jpg">
				         </div>
						 <div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:180px; height:180px'>
		                 	<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-damon.jpg">
				         </div>
						 <div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:180px; height:180px'>
		                 	<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-john.jpg">
				         </div>
						 <div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:180px; height:180px'>
		                 	<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-jessica.jpg">
				         </div>
						 <div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:180px; height:180px'>
		                 	<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-nick.jpg">
				         </div>
					 	 <div class='imgLiquid'  style=' -moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:180px; height:180px'>
		                 	<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-sandy.jpg">
				         </div>
					 </div> 
				</div>
			 
				<div class="col-md-4"    >
					<div class="page-section-title-no-pic " >
						 <span class="glyphicon glyphicon-bookmark  red" aria-hidden="true" ></span>contact us
					</div> 
				 
				<div class="section-sub-header"> 
				
					<h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
					  <hr>
	<div style="margin-left:-15px;  margin-top:-60px">
					<form name="enq" method="post" action="email/" onsubmit="return validation();">
						<fieldset>
							<div class="input-group input-group-lg ">
							  <input type="text" name="name" id="name" value=""  class="form-control contact" placeholder="Name">
							</div>
						</br>
							<div class="input-group input-group-lg ">
							  <input type="text" name="email" id="email" value=""  class="form-control contact" placeholder="Email">
							</div>	</br>
							<div class="input-group input-group-lg ">
								<textarea rows="11" name="message" style="height:200px" id="message" class="form-control contact" placeholder="Comments"></textarea>
							</div> 	</br>
							<div class="actions">
							    <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull    -right" style="width:270px; background:#465C85" title="Click here to submit your message!" />
							</div>	 
						</fieldset>
				  	</form>  				 
				    <!--End Contact form -->
				 </div>
					</br>
					</div>
				</div>
				<div class="col-md-2"    ></div>	
				<div class="col-md-4" style="padding-left:40px">
						<div class="row">
							Nashville K-9 Main Office: </br>(615) 438-2602
						</div></br>
					 
					 
					 
						<div class="row">
							Davidson Co. K-9 Emergency Assistance: </br> (615) 943-4743
						</div></br>
						<div class="row">
							Overton Co. K-9 Emergency Assistance: </br> (931) 783-3653
						</div>
				</div>
		 
        </div>
    </div>	
	 </div>	
 	
	<?php include('partials/footer.html');?> 	
   
</body>
</html>