<!DOCTYPE html>
<html>
<head> 
    <title>Nashville K-9</title>
    <meta name="viewport" http-equiv="Content-Type" content="width=device-width, intitial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/overrides.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/img-hover-effect.css" rel="stylesheet"> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	 <!-- blue imp gallery -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="Bootstrap-Image-Gallery-3.1.1/css/bootstrap-image-gallery.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="Bootstrap-Image-Gallery-3.1.1/js/bootstrap-image-gallery.min.js"></script>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

    <style>
    .photo-thumb{
        width:214px;
        height:214px;
        float:left;
        border: 5px solid #d1d1d1;
        margin:0 1em 1em 0;
		border-radius: 3px 3px;
    }

    div#blueimp-gallery div.modal {
        overflow: visible;
    }
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
	
    <?php include('partials/header.html');?> 	
     
    <div class="main">
        <div class="container">
            <div class="row">
	
               <div class="col-md-6 pull-left ">  
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/21218268?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1"></iframe>
					</div>  
               </div>

                <div class="col-md-6 pull-right mainText">
					<div class="row">
						<div class="col-md-12" style="padding-left:40px;line-height: 1.8em; font-size:17px "> 
							  We cover a wide variety of needs at Nashville K-9: search and rescue, executive protection; we even train dogs for law enforcement agencies. However, the most important thing we do is address the needs of your house pets.  From day one we implement techniques like luring, imprinting, and proofing to make sure your new family member starts out with a strong foundation of obedience and trainability.  Our techniques are practical, fun, and will impress your neighbors.  With a lifetime guarantee, you can rest assured that we stand behind our training. 
						 </div>
					</div> 
                </div>
            </div>
        </div>
    </div>	
	
	<?php include('partials/lower-main.html');?> 	
	<?php include('partials/footer.html');?> 	
   
</body>
</html>