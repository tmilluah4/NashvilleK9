
<!DOCTYPE html>
<html>
<?php include('partials/head.html');?> 
	<body>
	   <?php include('partials/header.html');?> 
		<div class="main">	
			<div class="container">
				 <?php  
			
					$fb_page_id = "283654260595"; 
					$json_link = "http://graph.facebook.com/283654260595/albums?fields=id,name,description,link,cover_photo,count";
					$json = file_get_contents($json_link);
					$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
					$album_count = count($obj['data']);
				
					for($x=0; $x<$album_count; $x++){

					    $id = $obj['data'][$x]['id'];
					    $name = $obj['data'][$x]['name'];
					    $description = $obj['data'][$x]['description'];
					    $link = $obj['data'][$x]['link'];
					    $cover_photo = $obj['data'][$x]['cover_photo'];
					    $count = $obj['data'][$x]['count'];

					    // if you want to exclude an album, just add the name on the if statement
					    if(
					        $name!="Profile Pictures" &&
					        $name!="Cover Photos" &&
					        $name!="Timeline Photos"
					    ){
			
					        $show_pictures_link = "photos.php?album_id={$id}&album_name={$name}";

					        echo "<div class='col-md-3'  >";
								echo "<div class='thumbnail' >";
					            	echo "<a href='{$show_pictures_link}'  >";
					                	echo "<img class='img-responsive' src='https://graph.facebook.com/{$cover_photo}/picture' alt=''>";
					            		echo "</a>"; 
			
									echo "<div class='caption'  >";
					            		echo "<a  href='{$show_pictures_link}'>{$name}</a>"; 
					 				echo "</div>";
								echo "</div>";
					        echo "</div>";
					    }
					}
				?>
			</div>
		</div>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
 
	</body>
</html>