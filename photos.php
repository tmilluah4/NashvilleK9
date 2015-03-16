<?php
	$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not specified.');
	$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Album name not specified.'); 
	$page_title = "{$album_name} Photos";
?>
<!DOCTYPE html>
<html lang="en">
<?php include('partials/head.html');?>  
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