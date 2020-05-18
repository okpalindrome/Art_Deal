<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="css/style.css" rel='stylesheet' type='text/css' />

		<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/main.css" rel="stylesheet" type="text/css">-->

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		
		<!-- //End menu -->
		<!---slider---->
		<link rel="stylesheet" href="css/slippry.css">

		<link rel="stylesheet" href="css/imagestyles.css">

		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
	
		<!----//End-pricerage-seletion---->
		<!---move-top-top---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!---//move-top-top---->
		<style type="text/css">
		.newartist{
	width: 140px;
	height: 180px;
	border: 5px solid white;
	border-radius: 100px;
}
</style>
<style>
/* the top artist card styles*/
.row {
margin: auto;
margin-left: 30px;
width: 100%;
}
.column {
  float: left;
  width: 20%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
<style>
        /* slider styles with jssor slider loading skin double-tail-spin css */

        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>


	</head>
	<body style="margin:auto;">
		<!---start-wrap---->
<div class="clear"> </div>
		<!-- The header starts here-->
			<?php include('header.php') ?>
				<!-- the header ends here-->
				<BR>
<p style="font-size:25px;color:#808080" align="center">FEEL THE BEAUTY OF ART</p>
<BR>
		<!----start-image-slider---->
 <script src="js/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/
            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var MAX_WIDTH = 980;

                    var expectedWidth = containerWidth;

                    if (MAX_WIDTH) {
                        expectedWidth = Math.min(MAX_WIDTH, expectedWidth);
                    }

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
  <center> <div class="wrap" style="width:90%">

<!-- the slide content starts here -->
    <div id="jssor_1" style="position:relative;width:980px;height:580px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="position:relative;top:50%;width:38px;height:38px;" src="images/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:580px;overflow:hidden;">
              	<?php 
include('dbcon.php');
$qqr=mysql_query("select * from artist order by rank_review desc LIMIT 10;");
if (mysql_num_rows($qqr)>0) {
while ($rrs=mysql_fetch_array($qqr)) {
	$artid=$rrs['artist_id'];
$quer=mysql_query("select * from paintings where status='Approved' and artist_id='$artid' LIMIT 2;");

while ($rw=mysql_fetch_array($quer)) 
{
	$varpaintingid=$rw['paintings_id'];
	$imagename1=$rw['paint_image1'];
	
	// $chk=mysql_query("select * from orders where paintings_id!='$varpaintingid'");
	// $chkc=mysql_num_rows($chk);

	?>

            <div>
                <a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><img data-u="image" src="paint1/<?php echo $imagename1; ?>"  /></a>
            </div>
           
            	<?php

}
}
}
else{
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("xyz",$con) or die("db not found");
	$quer11=mysql_query("select * from tt ");
	while($rows=mysql_fetch_array($quer11)){
	?>

            <div>
                <a href="#"><img data-u="image" src="demoimages/<?php echo $rows['name']; ?>"  /></a>
            </div>
           
            	<?php
            }
}
?>
            
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div> <script type="text/javascript">jssor_1_slider_init();</script>
		<div class="clear"> </div>
		<!----//End-image-slider---->
	<br>


	</div>

</center> 
	<!-- From here rank list starts include('artistranklist.php') -->
	<br>
	<br>
	<br>
	<div class="wrap" style="width:90%">
	
	<p  align="center" style="font-size:25px;color:#808080"> TOP ARTISTS</p>
	<br>
	<br>
	<center>
	<div class="row">
<?php 
include('dbcon.php');
$q1=mysql_query("select * from artist order by rank_review desc LIMIT 4;");
if (mysql_num_rows($q1)>0) {

while($row123=mysql_fetch_array($q1)){
	$aid=$row123['artist_id'];
$profileimg=$row123['profile_img'];
$afname=$row123['first_name'];
$alname=$row123['last_name'];
$rank=$row123['rank_review'];
		?>
  <div class="column" style="margin-left:18px">
    <div class="card">
    	<?php if ($profileimg=='') {
    		echo '<img src="images/noimgartist.jpg"  width="300px" height="170px">';
    	}
    	else{
    		echo '<img src="artistprofiles/'.$profileimg.'?>" width="300px" height="170px">';
    	} ?>
      
      <div class="container">
        <h2 style="font-size:25px" align="center"><?php echo $afname." ".$alname; ?></h2>
        <p>
   <?php 
if ($rank>'0' && $rank<'1') {
    echo '<img src="images/0.5.png" width="90px" height="19px" >';
}
elseif ($rank>='1' && $rank<'1.5') {
  echo '<img src="images/1.png" width="90px" height="19px" >';
}
elseif ($rank>='1.5' && $rank<'2') {
  echo '<img src="images/1.5.png" width="90px" height="19px" >';
}
elseif ($rank>='2' && $rank<'2.5') {
  echo '<img src="images/2.png" width="90px" height="19px" >';
}
elseif ($rank>='2.5' && $rank<'3') {
  echo '<img src="images/2.5.png" width="90px" height="19px" >';
}
elseif ($rank>='3' && $rank<'3.5') {
  echo '<img src="images/3.png" width="90px" height="19px" >';
}
elseif ($rank>='3.5' && $rank<'4') {
  echo '<img src="images/3.5.png" width="90px" height="19px" >';
}
elseif ($rank>='4' && $rank<'4.5') {
  echo '<img src="images/4.png" width="90px" height="19px" >';
}
elseif ($rank>='4.5' && $rank<'5') {
  echo '<img src="images/4.5.png" width="90px" height="19px" >';
}
elseif ($rank =='5') {
  echo '<img src="images/5.png" width="90px" height="19px" >';
}
else{
    echo '<img src="images/0.png" width="92px" height="21px" >';
}
 ?></p>
       
        <p style="color:grey">(<?php echo $rank; ?>)</p>
        <p><a href="userartistprofileview.php?varid=<?php echo $aid; ?>"><button class="button">View profile</button></a></p>
      </div>
    </div>
  </div>
<?php }
}
else{
for ($i=0; $i <4; $i++) { 
	echo '<div class="column" style="margin-left:18px">
    <div class="card">
      <img src="images/artist1.jpg" alt="Mike" width="300px" height="170px">
      <div class="container">
        <h2 style="font-size:25px" align="center">Mike Ross</h2>
        <p><a class="product-rate" href="#"> <label> </label></a> <span> </span></p>
        <br>
        
        <p><a href="#"><button class="button">View profile</button></a></p>
      </div>
    </div>
  </div>';
}

}
 ?>


</div>
</center>


	    <!-- End Testimonials -->


		<br style="clear:both">
		<div class="clear"></div>
		<!--- start-content---->
		<br>

<br style="clear:both">
<div class="clear"></div>
			</div>
	<p style="font-size:25px;color:#808080" align="center"> EXPLORE SOME OF THE PAINTINGS</p>
<br style="clear:both">
			<div class="wrap" style="width:90%">
			
				<div class="product-grids" >
					
					
		
<?php 
include('dbcon.php');
$query=mysql_query("select * from paintings where status='Approved' LIMIT 12;");
if (mysql_num_rows($query)>0) {
	
while ($row=mysql_fetch_array($query)) 
{
	$varpaintingid=$row['paintings_id'];
	$artistid=$row['artist_id'];
	$imagename=$row['paint_image1'];
	$paintname=$row['paint_name'];
	$varprice=$row['price'];

	$query1=mysql_query("select * from artist where artist_id='$artistid'");
	$row1=mysql_fetch_array($query1);
		$fname=$row1['first_name'];
		$lname=$row1['last_name'];
	
	?>
<center>
	<div class="product-grids" align="center">
	<div align="center">
						<div onclick="location.href='productdetail.php?varid=<?php echo $varpaintingid; ?>';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><img src="paint1/<?php echo $imagename;?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><?php echo $paintname;?></a>
								<span><?php echo $fname;?> <?php echo $lname;?></span></p>
							</div>
							<div class="product-info">
								<div class="product-info-cust" style="font-size:25px;width:50%">
									<a href="productdetail.php?varid=<?php echo $varpaintingid; ?>" style="float:left">&#x20a8; <?php echo $varprice;?></a>
								</div>
								<div class="clear"> </div>
							</div>
							
						</div>
	</div>
	</div></center>
	<?php

}
}
else{
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("xyz",$con) or die("db not found");
	$quer112=mysql_query("select * from tt ");
	while($rows=mysql_fetch_array($quer112)){
			?>
<center>
	<div class="product-grids" align="center">
	<div align="center">
						<div onclick="location.href='#';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="#"><img src="demoimages/<?php echo $rows['name'];?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="#">Hmm</a>
								<span>Mr. XYZ</span></p>
							</div>
							<div class="product-info">
								<div class="product-info-cust" style="font-size:25px;width:50%">
									<a href="#" style="float:left">&#x20a8; <?php echo 2500;?></a>
								</div>
								<div class="clear"> </div>
							</div>
							
						</div>
	</div>
	</div></center>
	<?php
	}
}
?></div>

<br clear="both">
<br>
<a href="allpaintings.php">
<h2 style="font-size:23px;color:grey" align="center" >See more
	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</h2></a>

</div>

<div class="clear"> </div>
					
				<div class="clear"> </div>

				<!-- List of portrait artists -->
	<div class="wrap" style="width: 90%">
		<br>
		<br>
		<h2 style="font-size:35px;color:grey" align="center" >Portrait Artists</h2>
		<br>
		<br>
		<?php 
include('dbcon.php');
$query=mysql_query("select * from artist where is_portrait='1' order by rank_review desc LIMIT 5;");
if (mysql_num_rows($query)>0) {

while ($row=mysql_fetch_array($query)) {
	$varartistid=$row['artist_id'];
	$varfname=$row['first_name'];
	$varlname=$row['last_name'];
	$varpimg=$row['profile_img'];
	$rank1=$row['rank_review'];
	if ($varpimg=='') {
		echo '<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$varartistid.'" align="center">
	<img class="newartist" src="ii.png"></a>
	<p align="center" style="color:grey">';
	}
	else{
		echo '<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$varartistid.'" align="center"><img class="newartist" src="artistprofiles/'.$varpimg.'"></a>
	<p align="center" style="color:grey">';
}
	if ($rank1>'0' && $rank1<'1') {
    echo '<img src="images/0.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='1' && $rank1<'1.5') {
  echo '<img src="images/1.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='1.5' && $rank1<'2') {
  echo '<img src="images/1.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='2' && $rank1<'2.5') {
  echo '<img src="images/2.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='2.5' && $rank1<'3') {
  echo '<img src="images/2.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='3' && $rank1<'3.5') {
  echo '<img src="images/3.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='3.5' && $rank1<'4') {
  echo '<img src="images/3.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='4' && $rank1<'4.5') {
  echo '<img src="images/4.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='4.5' && $rank1<'5') {
  echo '<img src="images/4.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1 =='5') {
  echo '<img src="images/5.png" width="90px" height="19px" > ('.$rank1.')';
}
else{
    echo '<img src="images/0.png" width="92px" height="21px" > ('.$rank1.')';
}

	echo'<p style="font-size:20px" align="center"> <b>'.$varfname.' '.$varlname.'</b></p></p>
</div>';
	}
}
else{
	for ($i=0; $i < 5; $i++) { 
		
echo '<div style="margin:40px;float:left">
	<a  href="#" align="center"><img class="newartist" src="ii.png"></a>
	<p align="center" ><a class="product-rate" href="#"> <label> </label></a> <span> </span></p>
	<p style="font-size:20px" align="center"> <b>Mr. XYZ</b></p>
</div>';
}
}
?>
<a href="portraitartistlist.php" style="float: right;"><button class="btn"><span>See more</span></button></a>
	</div>	
<br clear="both">
<!-- List of wall painters -->
<div class="wrap" style="width: 90%">
		<br>
		<br>
		<h2 style="font-size:35px;color:grey" align="center" >Wall Painters</h2>
		<br>
		<br>
		<?php 
include('dbcon.php');
$query=mysql_query("select * from artist where is_wallpainter='1' order by rank_review desc  LIMIT 5;");
if (mysql_num_rows($query)>0) {

while ($row=mysql_fetch_array($query)) {
	$varartistid=$row['artist_id'];
	$varfname=$row['first_name'];
	$varlname=$row['last_name'];
	$varpimg=$row['profile_img'];
	$rank1=$row['rank_review'];
	if ($varpimg=='') {
		echo '<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$varartistid.'" align="center"><img class="newartist" src="ii.png"></a>
	<p align="center" style="color:grey">';
	}
	else{
		echo '<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$varartistid.'" align="center"><img class="newartist" src="artistprofiles/'.$varpimg.'"></a>
	<p align="center" style="color:grey">';
	}
if ($rank1>'0' && $rank1<'1') {
    echo '<img src="images/0.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='1' && $rank1<'1.5') {
  echo '<img src="images/1.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='1.5' && $rank1<'2') {
  echo '<img src="images/1.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='2' && $rank1<'2.5') {
  echo '<img src="images/2.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='2.5' && $rank1<'3') {
  echo '<img src="images/2.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='3' && $rank1<'3.5') {
  echo '<img src="images/3.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='3.5' && $rank1<'4') {
  echo '<img src="images/3.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='4' && $rank1<'4.5') {
  echo '<img src="images/4.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='4.5' && $rank1<'5') {
  echo '<img src="images/4.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1 =='5') {
  echo '<img src="images/5.png" width="90px" height="19px" > ('.$rank1.')';
}
else{
    echo '<img src="images/0.png" width="92px" height="21px" > ('.$rank1.')';
}
echo '<p style="font-size:20px" align="center"> <b>'.$varfname.' '.$varlname.'</b></p></p></div>';
}
}
else{
for ($i=0; $i < 5; $i++) { 
		
echo '<div style="margin:40px;float:left">
	<a  href="#" align="center"><img class="newartist" src="ii.png"></a>
	<p align="center" ><a class="product-rate" href="#"> <label> </label></a> <span> </span></p>
	<p style="font-size:20px" align="center"> <b>Mr. XYZ</b></p>
</div>';
}
}
?>
<a href="wallpainters.php" style="float: right;"><button class="btn"><span>See more</span></button></a>
	</div>	

		<br clear="both">
		<!-- List of wall painters -->
<div class="wrap" style="width: 90%">
		<br>
		<br>
		<h2 style="font-size:35px;color:grey" align="center" >Paintings Teachers</h2>
		<br>
		<br>
		<?php 
include('dbcon.php');
$query=mysql_query("select * from artist where is_teacher='1' order by rank_review desc LIMIT 5;");
if (mysql_num_rows($query)>0) {
while ($row=mysql_fetch_array($query)) {
	$varartistid=$row['artist_id'];
	$varfname=$row['first_name'];
	$varlname=$row['last_name'];
	$varpimg=$row['profile_img'];
	$rank1=$row['rank_review'];
	if ($varpimg=='') {
		echo '<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$varartistid.'" align="center"><img class="newartist" src="ii.png"></a>
	<p align="center" style="color:grey">';
	}
	else{
		echo '<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$varartistid.'" align="center"><img class="newartist" src="artistprofiles/'.$varpimg.'"></a>
	<p align="center" style="color:grey">';
	}
if ($rank1>'0' && $rank1<'1') {
    echo '<img src="images/0.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='1' && $rank1<'1.5') {
  echo '<img src="images/1.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='1.5' && $rank1<'2') {
  echo '<img src="images/1.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='2' && $rank1<'2.5') {
  echo '<img src="images/2.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='2.5' && $rank1<'3') {
  echo '<img src="images/2.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='3' && $rank1<'3.5') {
  echo '<img src="images/3.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='3.5' && $rank1<'4') {
  echo '<img src="images/3.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='4' && $rank1<'4.5') {
  echo '<img src="images/4.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1>='4.5' && $rank1<'5') {
  echo '<img src="images/4.5.png" width="90px" height="19px" > ('.$rank1.')';
}
elseif ($rank1 =='5') {
  echo '<img src="images/5.png" width="90px" height="19px" > ('.$rank1.')';
}
else{
    echo '<img src="images/0.png" width="92px" height="21px" > ('.$rank1.')';
}
echo '<p style="font-size:20px" align="center"> <b>'.$varfname.' '.$varlname.'</b></p></p></div>';
}
}
else{
	for ($i=0; $i < 5; $i++) { 
		
echo '<div style="margin:40px;float:left">
	<a  href="#" align="center"><img class="newartist" src="ii.png"></a>
	<p align="center" ><a class="product-rate" href="#"> <label> </label></a> <span> </span></p>
	<p style="font-size:20px" align="center"> <b>Mr. XYZ</b></p>
</div>';
}
}
?>
<a href="wallpainters.php" style="float: right;"><button class="btn"><span>See more</span></button></a>
	</div>

<br clear="both"><br>
<p style="font-size:25px;color:#808080" align="center">Most Viewed Paintings</p>
<br style="clear:both">
			<div class="wrap" style="width:90%">
			
				<div class="product-grids" >
					
					
		
<?php 
include('dbcon.php');
$query=mysql_query("select * from paintings where status='Approved' order by count_view desc LIMIT 8;");
if (mysql_num_rows($query)>0) {
	
while ($row=mysql_fetch_array($query)) 
{
	$varpaintingid=$row['paintings_id'];
	$artistid=$row['artist_id'];
	$imagename=$row['paint_image1'];
	$paintname=$row['paint_name'];
	$varprice=$row['price'];

	$query1=mysql_query("select * from artist where artist_id='$artistid'");
	$row1=mysql_fetch_array($query1);
		$fname=$row1['first_name'];
		$lname=$row1['last_name'];
	
	?>
<center>
	<div class="product-grids" align="center">
	<div align="center">
						<div onclick="location.href='productdetail.php?varid=<?php echo $varpaintingid; ?>';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><img src="paint1/<?php echo $imagename;?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><?php echo $paintname;?></a>
								<span><?php echo $fname;?> <?php echo $lname;?></span></p>
							</div>
							<div class="product-info">
								<div class="product-info-cust" style="font-size:25px;width:50%">
									<a href="productdetail.php?varid=<?php echo $varpaintingid; ?>" style="float:left">&#x20a8; <?php echo $varprice;?></a>
								</div>
								<div class="clear"> </div>
							</div>
							
						</div>
	</div>
	</div></center>
	<?php

}
echo '<a href="allpaintings.php">
<h2 style="font-size:23px;color:grey" align="center" >Explore All
	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</h2></a>';
}
else{
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("xyz",$con) or die("db not found");
	$quer112=mysql_query("select * from tt ");
	while($rows=mysql_fetch_array($quer112)){
			?>
<center>
	<div class="product-grids" align="center">
	<div align="center">
						<div onclick="location.href='#';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="#"><img src="demoimages/<?php echo $rows['name'];?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="#">Hmm</a>
								<span>Mr. XYZ</span></p>
							</div>
							<div class="product-info">
								<div class="product-info-cust" style="font-size:25px;width:50%">
									<a href="#" style="float:left">&#x20a8; <?php echo 2500;?></a>
								</div>
								<div class="clear"> </div>
							</div>
							
						</div>
	</div>
	</div></center>
	<?php
	}
}
?></div>
</div>
	<br clear="both">
		<!--- //End-content---->
		<!---start-footer---->
<?php include('footer.php'); ?>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>

