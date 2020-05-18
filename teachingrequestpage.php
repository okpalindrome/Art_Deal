
<?php
session_start();
if(isset($_SESSION['user']))
{
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
		<style >
	#newartist{
	width: 160px;
	height: 200px;
	border: 5px solid white;
	border-radius: 100px;
	}
	.profilebtn{
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px;
		background-color: white;
		width: 200px;
		height: 50px;
		box-shadow: none;
		border-color: white;
	}

#s123 {
    background: #E45D5D;
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
.wrap form input[type="file"] {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}
.wrap form select {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}

.card {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 1px rgba(0, 0, 0, 0.19)
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

/*gallery styles */

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 23%;
}
.column1 {
  float: left;
  width: 33%;
}


img.hover-shadow {
  transition: 0.3s
}
a.hover-shadow {
  transition: 0.3s
}
.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 10px rgba(0, 0, 0, 0.19)
}
.btn{
	background-color: black;
	border:none;
	color: white;
	padding: 15px, 32px;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	cursor: pointer;
	transition: all 0.5s;
}
.btn span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
}
.btn span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -20px;
	transition: 0.5s;
}
.btn:hover span{
	padding-right: 25px;
}
.btn:hover span:after{
	opacity: 1;
	right: 0;
}

.disable{
	opacity: 0.6;
	cursor: not-allowed;
}
</style>

	</head>
	<body>
	
		<!-- The header starts here-->
			<!---start-header---->
	<?php include('header.php'); ?>
		<!-- the header ends here-->
<div class="clear:both"></div>
<?php 
include('dbcon.php');
$varr=$_GET['varrid'];
$query=mysql_query("select * from artist where artist_id='$varr'");

while ($row=mysql_fetch_array($query)) 
{
  $varfname=$row['first_name'];
  $varartistid=$row['artist_id'];
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
  $varstatus=$row['acc_status'];
  $varprofile=$row['profile_img'];
  $vardes=$row['description'];
  $rank=$row['rank_review'];
 
 $qqq=mysql_query("select * from prices where artist_id='$varr'");
 while ($rr=mysql_fetch_array($qqq)) {
 	$varrpp=$rr['portrait_price'];
 	$varrwp=$rr['wallpaint_price'];
 	$varrtp=$rr['teaching_price'];
 
  ?>

  
<!-- the main content starts here -->
<div class="wrap" style="width:90%">

<div>
<img  class="profilebg" src="images/userbg.jpg" style="position:relative;top:0;left:0">
<?php  
if ($varprofile=='') {

  echo '<div align="center" style="position: absolute;top:260px;left:600px">
<img src="ii.png" style="width: 110px;height: 150px;
border: 5px solid white;border-radius: 100px">
<p style="color:#FFFFFF;font-size:22px">'.$varfname.' '.$varlname.'</p></div>
</div>';
}
else
{
  echo '<div align="center" style="position: absolute;top:260px;left:600px">
<img src="artistprofiles/'.$varprofile.'" style="width: 110px;height: 150px;
border: 5px solid white;border-radius: 100px">
<p style="color:#FFFFFF;font-size:22px">'.$varfname.' '.$varlname.'</p></div>
</div>';
}
?>

<div  style="position:absolute;top:475px;left:135px" class="profilebtn">
<ul>
<li align="center" style="color:grey;font-size:20px">Experience</li>
<li align="center" style="color:grey"><?php echo $varexp;?> year</li>
</ul>
</div>
<div  style="position:absolute;top:475px;left:355px" class="profilebtn">
<ul>
	<?php 
$v1=$_GET['varrid'];
$cq=mysql_query("select * from orders where artist_id='$v1' and status='Delivered'");
$c=mysql_num_rows($cq)
 ?>
<li align="center" style="color:grey;font-size:20px">Sold Paintings</li>
<li align="center" style="color:grey"><?php echo $c; ?></li>
</ul>
</div>
<div  style="position:absolute;top:475px;left:575px" class="profilebtn">
<ul>
<li align="center" style="color:grey;font-size:20px">Rank</li>
<?php 
if ($rank>'0' && $rank<'1') {
		echo '<li align="center" style="color:grey"><img src="images/0.5.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='1' && $rank<'1.5') {
	echo '<li align="center" style="color:grey"><img src="images/1.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='1.5' && $rank<'2') {
	echo '<li align="center" style="color:grey"><img src="images/1.5.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='2' && $rank<'2.5') {
	echo '<li align="center" style="color:grey"><img src="images/2.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='2.5' && $rank<'3') {
	echo '<li align="center" style="color:grey"><img src="images/2.5.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='3' && $rank<'3.5') {
	echo '<li align="center" style="color:grey"><img src="images/3.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='3.5' && $rank<'4') {
	echo '<li align="center" style="color:grey"><img src="images/3.5.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='4' && $rank<'4.5') {
	echo '<li align="center" style="color:grey"><img src="images/4.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank>='4.5' && $rank<'5') {
	echo '<li align="center" style="color:grey"><img src="images/4.5.png" width="90px" height="19px" > ('.$rank.')</li>';
}
elseif ($rank =='5') {
	echo '<li align="center" style="color:grey"><img src="images/5.png" width="90px" height="19px" > ('.$rank.')</li>';
}
else{
    echo '<li align="center" style="color:grey"><img src="images/0.png" width="92px" height="21px" > ('.$rank.')</li>';
}
 ?>
</ul>
</div>
<div  style="position:absolute;top:475px;left:795px" class="profilebtn">
<ul>
<li align="center" style="color:grey;font-size:20px">Website</li>
<li align="center" style="color:grey"><a href="<?php echo $varweblink;?>" style="color:grey"><?php echo $varweblink;?></a></li>
</ul>
</div>
<div  style="position:absolute;top:475px;left:1015px" class="profilebtn">
<ul>
<li align="center" style="color:grey;font-size:20px">Acc Status</li>
<li align="center" style="color:grey"><a href="#" style="color:grey"><?php echo $varstatus;?></a></li>
</ul>
</div>
<div class="clear:both"></div>

<br>
<br>
  
    <div class="card">
      <div class="container">
        <h2 style="font-size:25px" align="center">About me!</h2>
        <br>
        <p style="color:grey" ><?php echo $vardes; ?></p>
        <br>
        
      </div>
    </div>
  <br>

  <div class="clear:both"></div>
<h2 style="font-size:35px;color:grey" align="center" >What kind of training you want?</h2>
<br>
  <div class="clear:both"></div>
<!-- Images used to open the lightbox -->


<?php 
}
}
?>
</div>
</div>
<br>
<div class="wrap" style="width: 90%" align="center">
<form method="post" enctype="multipart/form-data">

								<div class="register-top-grid">
								<div id="gridd" style="width: 30%">
											<span>Price:<label>*</label></span>
											<b><input type="text" name="p_portrait" value="<?php echo $varrtp ?>" style="border:none;" readonly ></b>
								</div>
								<div id="gridd" style="width: 30%">
								<span style="margin-left: 2%">Course<label>*</label></span>
								<select name="stype">
								<option value="Colored Pencil drawing">Colored Pencil drawing</option>
								<option value="Pen and Ink painting">Pen and Ink painting</option>
								<option value="Portrait Drawing">Portrait Drawing</option>
								<option value="Acrylic Painting">Acrylic Painting</option>
								<option value="Pastel Landscape Mastery">Pastel Landscape Mastery</option>
								<option value="Oil Painting">Oil Painting</option>
								<option value="Watercolor Painting">Watercolor Painting</option>
								<option value="Creative Mixed Media">Creative Mixed Media</option>
								</select> 
								</div>
								
								</div>
								<br clear="both">
								<br>
							<input type="submit" id="s123" value="Request" name="tbtn" style="float: right;" />	
			</form>
</div>
<br clear="both">
<?php
if (isset($_POST['tbtn'])) {
	include('dbcon.php');
 	
	$varr=$_GET['varrid'];
	$varuid=$_SESSION['uid'];
	$vartype=$_POST['stype'];
	
    
	$prq=mysql_query("INSERT INTO `pwt`(`artist_id`, `user_id`,`portrait`,`wallpaint`,`teach`,`type`, `user_img`, `price`,`status`) 
		VALUES ('$varr','$varuid','','','1','$vartype','','$varrtp','Accept')");
	if ($prq) {
		
		?>
		<script type="text/javascript">
			alert('Successfully Request to the artist');
		</script><?php
	}
}
?>
<!---start-footer---->
<?php include('footer.php'); ?>
<?php
}
else
{
	echo"
	<script>
	alert('Please login-in with a registered user account');
	window.location='login.php';
	</script>
	";
}
?>
		<!---//End-footer---->
				</body>
				</html>

