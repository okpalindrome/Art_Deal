<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
    <link rel="icon" href="images/artdeallogo.png" type="image/png">
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
.card1 {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 1px rgba(0, 0, 0, 0.19)
}

.container1 {
  padding: 0 16px;
}
/* buttons styles the form tag also*/
.twogrid input[type="submit"]{
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
</style>
<style type="text/css">
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
			<?php include('header.php') ?>
				<!-- the header ends here-->


				<!-- the content starts here-->
<div class="wrap" style="width:90%;height:50px">

			<div class="product-details">
					<ul class="product-head">
						<li><a href="index.php">Home</a> <span>::</span></li>
						<li class="active-page"><a href="productdetail.php">Product Page</a></li>
					</ul>
			</div>
</div>
<div class="clear:both"></div>
	<div>
<?php 
include('dbcon.php');
$varproductid=$_GET['varid'];
$query=mysql_query("select * from paintings where paintings_id='$varproductid'");

while ($row=mysql_fetch_array($query)) 
{
	$varpaintingid=$row['paintings_id'];
	$artistid=$row['artist_id'];
	$varpaitingname=$row['paint_name'];
	$imagename1=$row['paint_image1'];
	$imagename2=$row['paint_image2'];
	$imagename3=$row['paint_image3'];
	$varpainttype=$row['paint_type'];
	$varpaintdate=$row['paint_date'];
	$vardescription=$row['description'];
	$paintname=$row['paint_name'];
	$varprice=$row['price'];
  $cviews=$row['count_view'];
  $status=$row['status'];

	$query1=mysql_query("select * from artist where '$artistid'=artist_id");
	while ($row1=mysql_fetch_array($query1)) {
		$fname=$row1['first_name'];
		$lname=$row1['last_name'];
    $profile=$row1['profile_img'];
    $rank=$row1['rank_review'];
	
	?>
	<div class="wrap" style="width:90%">
<p style="font-size:25px;color:#808080">Title: <?php echo $paintname;?></p></div>
<br>
			<!-- Container for the image gallery -->

<div class="wrap" style="width:90%">
	<div class="twogrid">
		<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    
      <img src="paint1/<?php echo $imagename1;?>" style="width:700px;height:380px">
  </div>

  <div class="mySlides">
  
      <img src="paint2/<?php echo $imagename2;?>" style="width:700px;height:380px">
  </div>

  <div class="mySlides">
   
      <img src="paint3/<?php echo $imagename3;?>" style="width:700px;height:380px">
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
      <img class="demo cursor" src="paint1/<?php echo $imagename1;?>" style="width:250px;height:150px" onclick="currentSlide(1)" >
    </div>
    <div class="column"> 
      <img class="demo cursor" src="paint2/<?php echo $imagename2;?>" style="width:250px;height:150px" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="paint3/<?php echo $imagename3;?>" style="width:250px;height:150px" onclick="currentSlide(3)" >
    </div>
  </div>
</div>
</div>


	<div  class="twogrid">
<p align="right" style="color: grey"><img src="images/view.png" height="25px" width="28px"><br><span style="margin-top: 0px;"><?php echo $cviews+1; ?></span></p>
 <div align="center">
	<a  href="userartistprofileview.php?varid=<?php echo $artistid;?>" align="center">
<?php 
if ($profile=='') {
  echo'<img class="newartist" src="ii.png">';
}
else{
  echo'<img class="newartist" src="artistprofiles/'.$profile.'">';
}
 ?>
   </a>
	<p style="font-size:20px" align="center"> <b><?php echo $fname;?> <?php echo $lname;?></b></p>
  <p><?php 
if ($rank>'0' && $rank<'1') {
    echo '<img src="images/0.5.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='1' && $rank<'1.5') {
  echo '<img src="images/1.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='1.5' && $rank<'2') {
  echo '<img src="images/1.5.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='2' && $rank<'2.5') {
  echo '<img src="images/2.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='2.5' && $rank<'3') {
  echo '<img src="images/2.5.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='3' && $rank<'3.5') {
  echo '<img src="images/3.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='3.5' && $rank<'4') {
  echo '<img src="images/3.5.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='4' && $rank<'4.5') {
  echo '<img src="images/4.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank>='4.5' && $rank<'5') {
  echo '<img src="images/4.5.png" width="90px" height="19px" > ('.$rank.')';
}
elseif ($rank =='5') {
  echo '<img src="images/5.png" width="90px" height="19px" > ('.$rank.')';
}
else{
    echo '<img src="images/0.png" width="92px" height="21px" >('.$rank.')';
}
 ?></p>
</div>
<br>
	<div style="margin-left:40px">
<BR>
<p style="font-size:18px;color:#808080">THE TYPE OF PAINTING: <?php echo $varpainttype;?> </p>
<BR>
<p style="font-size:18px;color:#808080">THE DATE OF PAINTING: <?php echo $varpaintdate;?> </p>
<BR>
<?php
if ($status=='Approved') {
  $displaystatus='Stock';
}
}
?>
<p style="font-size:18px;color:#808080">STATUS: <?php echo $displaystatus; ?></p>
<br>
<p style="font-size:18px;color:#808080">PRICE: <?php echo $varprice;?> </p>
<br>

<?php
if(isset($_SESSION['artist']))
{
echo'<br><p style="font-size:25px;color:#808080" align="center">You are an artist, you cant buy..</p>'; 
}
else if (isset($_SESSION['Admin'])) {
  echo'<br><p style="font-size:25px;color:#808080" align="center">You are an admin, you cant buy..</p>';
}
else if(isset($_SESSION['user']))
{
   $sessu=$_SESSION['uid'];
   $cviews=$cviews+1;
   $cvupdate=mysql_query("update paintings set count_view ='$cviews' where paintings_id='$varproductid'") or die(mysql_error());
  ?>
  <form method="post" action="chk_cart.php?cart=session&&vuid=<?php echo $sessu;?>&&pid=<?php echo $varproductid;?>&&for=">
    <?php
if ($status=='Approved') {
  
  ?>
  <input type="submit" value="Add to cart" style="float:right" name="forcart" />
  <input type="submit" value="Buy now" name="forbuy" style="float:right" />
  </form>
  <?php
}
    ?>
  
<?php
}
else
{
   $cviews=$cviews+1;
   $cvupdate=mysql_query("update paintings set count_view ='$cviews' where paintings_id='$varproductid'") or die(mysql_error());
  if ($status=='Approved') {
  ?>
  <form method="post" action="chk_cart.php?cart=not_session">
  <input type="submit" value="Add to cart" name="forcart" style="float:right" />
  <input type="submit" value="Buy now" name="forbuy" style="float:right" />
  </form>
  <?php
}
}
?>


	</div>
	</div>

<div class="clear:both"></div>
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
</div>

<br clear="both">
<div class="clear:both"></div>

<div class="wrap" style="width:90%">
<br>
<br>  <div class="card1">
      <div class="container1">
        <h2 style="font-size:25px" align="center">About Painting!</h2>
        <br>
        <p style="color:grey" ><?php echo $vardescription;?></p>
        <br> 
   	   </div>
</div>
<br>
<a href="userartistprofileview.php?varid=<?php echo $artistid;?>"><p style="color:grey" align="center">See more paintings of this Artist</p></a>
</div>
<br>
<br>
</div>
</div>
						<?php

}

?>
			<!-- the content ends here-->
<div class="clear:both"></div>		
<!---start-footer---->
<?php include('footer.php'); ?>
		<!---//End-footer---->
				</body>
				</html>
