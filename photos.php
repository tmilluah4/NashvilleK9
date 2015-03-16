<?php
	$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not specified.');
	$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Album name not specified.'); 
	$page_title = "{$album_name} Photos";
?>
<!DOCTYPE html>
<html lang="en">
<head> 
     <?php include('partials/head.html');?> 	  
	   <style>
	  .photo-thumb{ 
	  width:214px;  height:214px;  float:left; border: 5px solid #d1d1d1; margin:0 1em 1em 0;border-radius: 3px 3px;  
	  }
div#blueimp-gallery div.modal {   
 overflow: visible;  
 }
	<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="Bootstrap-Image-Gallery-3.1.1/css/bootstrap-image-gallery.min.css"> 
	 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
	 <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	 <script src="Bootstrap-Image-Gallery-3.1.1/js/bootstrap-image-gallery.min.js"></script>

	 <!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	 <![endif]--> 
</style>
</head>
<body>
    <?php include('partials/header.html');?> 
	<div class="main">
		<div class="container">
		 	<?php 
				$json_link = "http://graph.facebook.com/{$album_id}/photos?fields=source";
				$json = file_get_contents($json_link);

				$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

				$photo_count = count($obj['data']);
	
				for($x=0; $x<$photo_count; $x++){

				    $source = $obj['data'][$x]['source'];

				    echo "<a href='{$source}' data-gallery>";
				        echo "<div class='photo-thumb' style='background: url({$source}) 50% 50% no-repeat;'>";

				        echo "</div>";
				    echo "</a>"; 
				}
			?>
		</div>
  	</div>
<?php include('partials/footer.html');?> 
<?php include('partials/lightbox.html');?> 
</body>
</html>