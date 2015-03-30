
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
<body   >

    <div class="container"  style="  " >

        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">
                <?php include('partials/header.html');?>
                <div class="row main-row"  >

                    <div class="col-xs-11 col-sm-11">

        <a href="/dogs/argo.php">
            <div class="section-dog-header">
<div class="page-dog-price" >SOLD</div>
                <div class="page-dog-title" >Argo Avodar, BH, IPO I, Level I Personal Protection Dog</div>
                                 </br></br>
                <div class="dog-images">
                <?php
                    $antrax = "http://graph.facebook.com/10152268881640596/photos?fields=source";
                    $json = file_get_contents($antrax);
                    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
                    $photo_count = 7;
        
                    for($x=1; $x<$photo_count; $x++){
                        $source = $obj['data'][$x]['source'];
            
                        echo "<div class='imgLiquid' style=' -moz-box-shadow:0px 0px 2px #666; -webkit-box-shadow: 0px 0px 2px #666; box-shadow:0px 0px 2px #666; display: inline-block; margin-right: 5px;width:120px; height:120px'>";
                        echo "<img   src='{$source}'   alt=''>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </a>

</br>



<a href="/dogs/ammo.php">
<div class="section-dog-header">
<div class="page-dog-price" >SOLD</div>
<div class="page-dog-title" >Ammo, Police Dual Purpose</div>
<div class="page-dog-info" > <i> </i></div>

</br></br>
<div class="dog-images">
<?php
   $antrax = "http://graph.facebook.com/10154237525855596/photos?fields=source";
    $json = file_get_contents($antrax);
    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
    $photo_count = 7;
    
    for($x=1; $x<$photo_count; $x++){
        $source = $obj['data'][$x]['source'];
        
        echo "<div class='imgLiquid' style=' -moz-box-shadow:0px 0px 2px #666; -webkit-box-shadow: 0px 0px 2px #666; box-shadow:0px 0px 2px #666; display: inline-block; margin-right: 5px;width:120px; height:120px'>";
        echo "<img   src='{$source}'   alt=''>";
        echo "</div>";
    }
    ?>
</div>
</div>
</a>





 </br>


<a href="/dogs/antrax.php">
<div class="section-dog-header">
<div class="page-dog-price" >SOLD</div>
<div class="page-dog-title" >Antrax</div>
<div class="page-dog-info" > <i> </i></div>

</br></br>
<div class="dog-images">
<?php
     $antrax = "http://graph.facebook.com/10154986213510596/photos?fields=source";
    $json = file_get_contents($antrax);
    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
    $photo_count = 7;
    
    for($x=1; $x<$photo_count; $x++){
        $source = $obj['data'][$x]['source'];
        
        echo "<div class='imgLiquid' style=' -moz-box-shadow:0px 0px 2px #666; -webkit-box-shadow: 0px 0px 2px #666; box-shadow:0px 0px 2px #666; display: inline-block; margin-right: 5px;width:120px; height:120px'>";
        echo "<img   src='{$source}'   alt=''>";
        echo "</div>";
    }
    ?>
</div>
</div>
</a>




</br>


<a href="/dogs/antrax.php">
<div class="section-dog-header">
<div class="page-dog-price" >SOLD</div>
<div class="page-dog-title" >Hurricane</div>
<div class="page-dog-info" > <i> </i></div>

</br></br>
<div class="dog-images">
<?php
    $antrax = "http://graph.facebook.com/10154540915460596/photos?fields=source";
    $json = file_get_contents($antrax);
    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
    $photo_count = 7;
    
    for($x=1; $x<$photo_count; $x++){
        $source = $obj['data'][$x]['source'];
        
        echo "<div class='imgLiquid' style=' -moz-box-shadow:0px 0px 2px #666; -webkit-box-shadow: 0px 0px 2px #666; box-shadow:0px 0px 2px #666; display: inline-block; margin-right: 5px;width:120px; height:120px'>";
        echo "<img   src='{$source}'   alt=''>";
        echo "</div>";
    }
    ?>
</div>
</div>
</a>














</div>

</div>


<div class="clearfix visible-xs-block"></div>




</div>
</div>

<div class="clearfix visible-xs-block"></div>

<div class="col-sm-1"> </div>

</div>
</div>

</div>


<?php include('partials/footer.html');?>

</body>
</html>







