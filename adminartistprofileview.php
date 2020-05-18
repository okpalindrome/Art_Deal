<?php
if (isset($_POST['approvebtn'])) {
	include('dbcon.php');
	$varartistid=$_GET['varartistid'];
	$query=mysql_query("update artist set acc_status='Approved',  notification='1' where artist_id='$varartistid'");
	if ($query) {
	$fecta=mysql_query("select * from artist where artist_id='$varartistid'");
	$rowss=mysql_fetch_array($fecta);
	$uc=$rowss['contact'];

	include('way2sms-api.php');
    $client = new WAY2SMSClient();
   
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="Your account has been approved.";
    $client->send($uc,$message);

    sleep(1);
    $client->logout();
		
		header("location:newartistapproval.php");
		?>
		<script type="text/javascript">
alert("Successfully Approved")
		</script><?php
		
	}
}
elseif (isset($_POST['rejectbtn'])) {
	$varartistid=$_GET['varartistid'];
	include('dbcon.php');

    $fecta=mysql_query("select * from artist where artist_id='$varartistid'");
	$rowss=mysql_fetch_array($fecta);
	$uc=$rowss['contact'];
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
   
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="Your account is rejected because of improper submission of information. From ArtDeal.com";
    $client->send($uc,$message);

    sleep(1);
    $client->logout();

$q=mysql_query("delete from paintings where artist_id='$varartistid'");
$q12=mysql_query("delete from pwt where artist_id='$varartistid'");
$q123=mysql_query("delete from prices where artist_id='$varartistid'");
$query=mysql_query("delete from artist where artist_id='$varartistid'");

header("location:newartistapproval.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
			<link href="css/style.css" rel='stylesheet' type='text/css' />
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
		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/menu_jquery.js"></script>
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
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script>
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
.newartist {
	width: 140px;
	height: 180px;
	border: 5px solid white;
	border-radius: 100px;
}
/* buttons styles the form tag also*/
#s123 {
    background: #E45D5D;
    margin: 20px;
    color: #FFF;
    font-size: 0.8em;
    padding: 0.7em 1.2em;
    border-radius: 5px;
    border-bottom: 4px solid #B93838;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    display: inline-block;
    font-family: 'Open Sans', sans-serif;
    cursor: pointer;
    outline: none;
    text-transform: uppercase;
    border-right: none;
    border-left: none;
    border-top: none;
    float: left;
}
/* the product image display in slideshow*/
	* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
	width:100%;
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
/* Position the "prev button" to the right */
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 33.33%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.twogrid{
	float: left;
	width: 50%;
}
</style>
	</head>
	<body>
		<!---start-wrap---->

		<!-- The header starts here-->
			<!---start-header---->
	
				<!-- the header ends here-->
				
<?php include('adminheader.php'); ?>

<div class="wrap" style="width:90%">
<br>
<?php 
include('dbcon.php');
$varartistid=$_GET['varartistid'];
$query=mysql_query("select * from artist where artist_id='$varartistid'");

while ($row=mysql_fetch_array($query)) 
{
	$varfname=$row['first_name'];
	$varlname=$row['last_name'];
	$vardob=$row['dob'];
	$varemailid=$row['emailid'];
	$varcontact=$row['contact'];
	$varaddress=$row['address'];
	$varcity=$row['city'];
	$varquali=$row['qualification'];
	$varsample_paint1=$row['sample_paint1'];
	$varsample_paint2=$row['sample_paint2'];
	$varexp=$row['experience'];
	$varweblink=$row['website_link'];
	$varisportrait=$row['is_portrait'];
	$variswallpainter=$row['is_wallpainter'];
	$varisteacher=$row['is_teacher'];
	$vardes=$row['description'];
	?>
 	<div class="twogrid">
		<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    
      <img src="samplepaints/<?php echo $varsample_paint1;?>" style="width:700px;height:380px">
  </div>

  <div class="mySlides">
  
      <img src="samplepaints/<?php echo $varsample_paint2;?>" style="width:700px;height:380px">
  </div>



  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <!--<div class="caption-container">
    <p id="caption"></p>
  </div>-->

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="samplepaints/<?php echo $varsample_paint1;?>" style="width:250px;height:150px" onclick="currentSlide(1)" >
    </div>
    <div class="column"> 
      <img class="demo cursor" src="samplepaints/<?php echo $varsample_paint2;?>" style="width:250px;height:150px" onclick="currentSlide(2)" >
    </div>
    
  </div>
</div>
</div>
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  
}</script>

<div  class="twogrid">
<form method="post">
 <div align="center">
	<a  href="artistprofile.php" align="center"><img class="newartist" src="ii.png"></a>
	<p style="font-size:20px" align="center"> <b><?php echo $varfname;?> <?php echo $varlname;?></b></p>
</div>
<br>
	<div style="margin-left:40px">
<BR>
<br>
<p style="font-size:18px;color:#808080">Date of birth: <?php echo $vardob;?> </p>
<BR>
<p style="font-size:18px;color:#808080">Email ID: <?php echo $varemailid;?> </p>
<BR>
<p style="font-size:18px;color:#808080">Contact: <?php echo $varcontact;?></p>
<br>

<input type="submit" id="s123" value="Approve" style="float:right" name="approvebtn" />
<input type="submit" id="s123" value="Reject" style="float:right" name="rejectbtn" />

	</div>
	</form>
</div>
<br clear="both">
<br>
<br>
<p align="center" style="font-size:25px">More Details</p>
<br>
<br>
<p style="font-size:18px;color:#808080">Address: <?php echo $varaddress;?></p>
<br>
<p style="font-size:18px;color:#808080">City: <?php echo $varcity;?></p>
<br>
<p style="font-size:18px;color:#808080">Qualification: <?php echo $varquali;?></p>
<br>
<p style="font-size:18px;color:#808080">Experience: <?php echo $varexp;?></p>
<br>
<p style="font-size:18px;color:#808080">Website/blog link: <?php echo $varweblink;?></p>
<br>
<p style="font-size:18px;color:#808080">Portrait artist: 
<?php if($varisportrait==1){
echo "Yes";
}
else
{
	echo "No";
}?></p> 
<br>
<p style="font-size:18px;color:#808080">Teacher: 
<?php if($varisteacher==1){
echo "Yes";
}
else
{
	echo "No";
}?></p>
<br>
<p style="font-size:18px;color:#808080">Wall painter: 
<?php if($variswallpainter==1){
echo "Yes";
}
else
{
	echo "No";
}?></p>  
<?php 
}
?>
<br>
<?php 
if (isset($vardes)) {
echo'<p style="font-size:18px;color:#808080">Description:'.$vardes.'</p>';
}
?>
</div>
<br clear="both">
<div class="clear:both" ></div>

</body>
</html>