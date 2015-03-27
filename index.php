 
<html>
<head> 
     <?php include('partials/head.html');?> 	  
	    <style>
  
  </style>
</head>
<body>
  
	<!-- Facebook Likebox SDK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=716149938482243&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script> 	
	<!-- end -->
	 <script type="text/javascript">  
		function setActive()	{ 
			 document.getElementById('homeli').className='active'; 
		}
		window.onload = setActive;
	</script>
  
	
   
	<div class="container-fluid"  style="margin-top:40px; " >			
		<div class="row grad"  >
			<div class="col-md-2"></div>	
			<div class="col-md-8"  >
				<div class="row">
					 <?php include('partials/header.html');?> 	 
				</div>
				<div class="row"> 	
				 
               <div class="col-md-6">  
						<div class="embed-responsive embed-responsive-16by9" style=" -moz-box-shadow: 0 0 10px #000; -webkit-box-shadow: 0 0 10px #000; box-shadow: 0 0 10px #000; ">
						  <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/21218268?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1"></iframe>
						</div>  
               </div>
               <div class="col-md-6 mainText"> 
						  We cover a wide variety of needs at Nashville K-9: search and rescue, executive protection; we even train dogs for law enforcement agencies. However, the most important thing we do is address the needs of your house pets.  From day one we implement techniques like luring, imprinting, and proofing to make sure your new family member starts out with a strong foundation of obedience and trainability.  Our techniques are practical, fun, and will impress your neighbors.  With a lifetime guarantee, you can rest assured that we stand behind our training. 
               </div>
				 
            </div>
				<div class="row lower-main">
					<?php include('partials/lower-main.html');?> 	
				</div>
        </div>
		  <div class="col-md-2">   </div>
		  
    </div>	
	
	
	<?php include('partials/footer.html');?> 	
   
</body>
</html>