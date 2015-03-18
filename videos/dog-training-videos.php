<!DOCTYPE html>
<html>
<head> 
     <?php include('../partials/head.html');?> 	   
	  
		<style> 
			.switcher-content { display: none;}
		</style>
		<script type="text/javascript" src="/Nashvillek9/js/jquery.content-panel-switcher.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
				jcps.fader(300, '#switcher-panel');
			});
			$(function() {
				  $('ul li').click( function() {
					 $(this).addClass('active').siblings().removeClass('active');
				  });
			});
		</script> 
</head> 	
<body>  
    <?php include('../partials/header.html');?> 	 
    <div class="main" >
        <div class="container"> 
				<div class="row">   
					<div class="col-md-3" style="margin-left:30px;margin-right:40px" >
						 <div class="row"> 
							<div class="image-random">
								 <img src="/Nashvillek9/images/random-3.jpg" class="random"/> 
							</div> 
						 </div> 
						<!--<img src="/NashvilleK9/images/dog-footer.png" style="padding-right:10px">  -->
						 <div class="row" style="margin-top:0px"> 
						 <ul  class="list-group" style="cursor: pointer;">
							  <li id="content1" class="list-group-item switcher active"> WHY WE ARE BETTER! </li>
							  <li id="content2" class="list-group-item switcher">WHAT ARE CLIENTS ARE SAYING</li>
							  <li id="content3" class="list-group-item switcher">SOME OF OUR DOGS</li>
							  <li id="content4" class="list-group-item switcher">DOG OBEDIENCE</li>
							  <li id="content5" class="list-group-item switcher">4 WEEK BOARD AND TRAIN</li>
							  <li id="content6" class="list-group-item switcher">DOG PROTECTION </li>
							  <li id="content7" class="list-group-item switcher">SEARCH AND RESCUE </li>
							  <li id="content8" class="list-group-item switcher">DOG AGILITY</li>
							  <li id="content9" class="list-group-item switcher">DEMONSTRATIONS</li>
							  <li id="content10" class="list-group-item switcher">PET FIRST AID</li>
							  <li id="content11" class="list-group-item switcher">RING SPORT</li>
							  <li id="content12" class="list-group-item switcher">COMMERCIALS</li>
							</div>
					 
					</div>
					<div class="col-md-1" style="margin-left:-20px" ></div>
					<div class="col-md-8"    > 
						<h3>DOG TRAINING VIDEOS</h3>
						<div id="switcher-panel" style="padding-top:20px;">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/90429741?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="200px" class="video-background" src="/Nashvillek9/images/training_videos/new.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"   href="http://player.vimeo.com/video/111309544?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="200px" class="video-background" src="/Nashvillek9/images/training_videos/WhyWereBetter.png"> 
										</div>  
									</div>
								</div>  
							</div>
						</div>
						<!-- WHY WE ARE BETTER -->
						<div id="content1-content" class="switcher-content ">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/90429741?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="200px" class="video-background" src="/Nashvillek9/images/training_videos/new.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"   href="http://player.vimeo.com/video/111309544?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="200px" class="video-background" src="/Nashvillek9/images/training_videos/WhyWereBetter.png"> 
										</div>  
									</div>
								</div>  
							</div>
						</div> 
						<!-- CLIENTS -->
						<div id="content2-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/39101759?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/client-1.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/24117768?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/client-2.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/37906485?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/client-3.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/37906770?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/client-4.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/37906769?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/client-5.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/37906486?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/client-6.png"> 
										</div>  
									</div>
								</div> 
								</br>								
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/37906488?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/client-7.png">							
										</div>  
									</div>
									 
								</div>  
							</div>
						</div>
						<!-- SOME OF OUR DOGS -->
						<div id="content3-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/35155573?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-1.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/35486063?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-2.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe"  href="http://player.vimeo.com/video/34060120?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-3.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/36014594?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-4.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/36014621?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-5.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/34436397?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-6.png"> 
										</div>  
									</div>
								</div> 
								</br>								
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/36014621?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-7.png">							
										</div>  
									</div>
									 <div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/34436397?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/dogs-8.png">							
										</div>  
									</div>
								</div>  
							</div>
						</div>
						<!-- DOG OBEDIENCE -->
						<div id="content4-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/19304189?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="200px" class="video-background" src="/Nashvillek9/images/training_videos/obedience-1.png">							
										</div>  
									</div> 
								</div>  
							</div>
						</div>
						<!-- 4 WEEK BOARD AND TRAIN -->
						<div id="content5-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe"  href="http://player.vimeo.com/video/16292500?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/ammo2.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/75062264?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/ammo3.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/75062264?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/ammo4.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/16293303?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/ammo5.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/83517858?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/ammo6.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/83517107?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/ammo7.png"> 
										</div>  
									</div>
								</div> 
								 
							</div>
						</div>
						<!-- DOG PROTECTION -->
						<div id="content6-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/90429741?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/protection-1.png"> 							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/23885197?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/protection-2.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/23885159?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/protection-3.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/23885064?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/protection-4.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/23885094?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/protection-5.png">							
										</div>  
									</div>
								 
								</div> 
							</div> 	 
						</div>
						<!-- SEARCH AND RESCUE -->
						<div id="content7-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/19303955?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/rescue-1.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/12879147?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/rescue-2.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/12877190?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/rescue-3.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe" href="http://player.vimeo.com/video/12877441?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/rescue-4.png"> 
										</div>  
									</div>
								</div>  
							</div> 	 
						</div>
						<!-- DOG AGILITY -->
						<div id="content8-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/19283538?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="200px" class="video-background" src="/Nashvillek9/images/training_videos/agility.png">							
										</div>  
									</div>
									 
								</div>  
							</div>
						</div>
						<!-- DEMONSTRATIONS -->
						<div id="content9-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/29877188?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-1.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/12877596?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-2.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/12877551?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-3.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/12877744?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-4.png"> 
										</div>  
									</div>
								</div>  
								</br>
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/12878501?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-5.png">							
										</div>  
									</div>
									<div class="col-md-4">
										<div class="video-box"> 
											<a class="various fancybox.iframe"  href="http://player.vimeo.com/video/12878501?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-6.png"> 
										</div>  
									</div>
								</div> 
								</br>								
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe"  href="http://player.vimeo.com/video/12878254?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-7.png">							
										</div>  
									</div>
									 <div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/12878568?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="230px" class="video-background" src="/Nashvillek9/images/training_videos/demonstration-8.png">							
										</div>  
									</div>
								</div>  
							</div>
						</div>
						<!-- PET FIRST AID -->
						<div id="content10-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										<div class="video-box"> 
											<a class="various  fancybox.iframe" href="http://player.vimeo.com/video/75864879?fs=1&amp;autoplay=1">
												<img src="/Nashvillek9/images/play-icon.png" class="playOverlay" />  
											</a> 
											<img height="200px" class="video-background" src="/Nashvillek9/images/training_videos/first-aid.png">							
										</div>  
										</br>
										<ul class="overview-list-items">
										  <li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/84483590?fs=1&amp;autoplay=1"> NBC WSMV American Red Cross </a></span></li>
										  <li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/84483589?fs=1&amp;autoplay=1"> CBS WTVF American Red Cross  </a></span></li>
										  <li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/84483588?fs=1&amp;autoplay=1"> ABC WKRN American Red Cross  </a></span></li>
										  <li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/20217548?fs=1&amp;autoplay=1"> ABC NEWS 2  American Red Cross </a></span></li>
										  <li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/17107658?fs=1&amp;autoplay=1"> CBS NEWS 5 American Red Cross</a></span></li>
										  <li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/17102786?fs=1&amp;autoplay=1"> FOX NEWS 17 American Red Cross </a></span></li>
										</ul>
									</div> 
								</div>  
							</div>
						</div> 
						
							<!-- RING SPORT -->
						<div id="content11-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										 <ul class="overview-list-items">
											<li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/12895557?fs=1&amp;autoplay=1"> Belgian Malinois Hurdle Jump </a></span></li>
											<li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/12895546?fs=1&amp;autoplay=1">Belgian Malinois Wall Jump  </a> </span></li>
											<li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/12895482?fs=1&amp;autoplay=1">Belgian Malinois Protection (leg bite)</a></span></li>
											<li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/12895434?fs=1&amp;autoplay=1">Belgian Malinois Protection (leg bite)</a></span></li>
										 </ul> 
									</div> 
								</div>  
							</div>
						</div>
						
						<!-- COMMERCIALS -->
						<div id="content12-content" class="switcher-content">
							<div class="container">
								<div class="row">    
									<div class="col-md-4"> 
										 <ul class="overview-list-items">
											<li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/19689518?fs=1&amp;autoplay=1"> K-9 Roxy in MONA music video </a> </span></li>
											<li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/63131201?fs=1&amp;autoplay=1"> Grady in Oreck Commercial </a> </span></li>
											<li><span class="text"> <a class="video"  title="" href="http://player.vimeo.com/video/3245803?fs=1&amp;autoplay=1"> Tennessee Lottery Commercial</a> </span></li>
											<li><span class="text"> <a class="video"  title="" href="//www.youtube.com/embed/emnKi7Hd0rw?feature=player_detailpage"> Florida Georgia Line - Sun Daze</a> </span></li> 
										 </ul> 
									</div> 
								</div>  
							</div>
						</div>
					</div>  
				</div>
			</div> 
        </div>
    </div>	 
	  
	<?php include('../partials/footer.html');?> 	
   
</body>
</html>