<?php
session_start();
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

#delacc{
	width: 100%;
	background-color: black;
	font-size: 25px;
	height: 50px;
	color: white;
	border-radius: 5px;
	cursor: pointer;
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
$v=$_GET['varid'];
$query=mysql_query("select * from artist where artist_id='$v'");
$ac=mysql_num_rows($query);
if($ac=='0'){
echo'<br><br><br><p style="font-size:25px;" align="center">This artist account has been deleted just now</p>';
}
else{
if($row=mysql_fetch_array($query)) 
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
$v1=$_GET['varid'];
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
<li align="center" style="color:grey">
<a href="<?php echo $varweblink; ?>" style="color:grey"><?php echo $varweblink;?></a></li>
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
  
  <div class="clear:both"></div>

<br>
<br>

<?php
if (isset($_SESSION['Admin'])) {
	
}
else
{
echo '<h2 style="font-size:35px;color:grey" align="center" >Available</h2>
<br>';
$qqq=mysql_query("select * from prices where artist_id='$v'");
if (mysql_num_rows($qqq)>0) {
	
 while ($rr=mysql_fetch_array($qqq)) {
 	$varrpp=$rr['portrait_price'];
 	$varrwp=$rr['wallpaint_price'];
 	$varrtp=$rr['teaching_price'];
 ?>
<div class="row" align="center">
	<div class="column1">
		<?php  
			if ($varisportrait==1) {
				echo '<a href="portraitrequestpage.php?varrid='.$varartistid.'"><button class="btn"><span>Request for portrait</span></button></a>
				<p>Price:'.$varrpp.'</p>';
			}
			else{
				echo '<button class="btn disable">Request for portrait</button>';
			}
		 ?>
	</div>
	<div class="column1">
		<?php  
			if ($variswallpainter==1) {
				echo '<a href="wallpaintrequestpage.php?varrid='.$varartistid.'"><button class="btn"><span>Request to paint on wall&apos;s</span></button></a><p>Price:'.$varrwp.'</p>';
			}
			else{
				echo '<button class="btn disable">Request to paint on wall&apos;s</button>';
			}
		 ?>
	</div>
	<div class="column1">
		<?php  
			if ($varisteacher==1) {
				echo '<a href="teachingrequestpage.php?varrid='.$varartistid.'"><button class="btn"><span>Request to learn from artist</span></button></a>
				<p>Price:'.$varrtp.'</p>';
			}
			else{
				echo '<button class="btn disable">Request to learn from artist</button>';
			}
		 ?>
	</div>
</div>
<?php 
}
}

else{
	echo '<h2 style="font-size:25px;color:grey" align="center" >The artist is not yet given the price details, sorry </h2>';
}
}
}
 ?>
<br>
<br>
  <div class="clear:both"></div>
<!-- Images used to open the lightbox -->
<h2 style="font-size:35px;color:grey" align="center" >Explore My Gallery</h2>
<br>
<br>
<div class="row" align="center">
<?php
include('dbcon.php');
$query1=mysql_query("select * from paintings where artist_id='$varartistid'");
$count11=mysql_num_rows($query1);
if ($count11=='0') {
	echo '<h2 style="font-size:25px;color:grey" align="center" >No Paintings yet</h2>';
}
while ($row1=mysql_fetch_array($query1)) 
{
  $varpaintingid=$row1['paintings_id'];
  $varpaintimage=$row1['paint_image1'];
  $varprice=$row1['price'];
  $varpaintstatus=$row1['status'];
  ?>

  <div class="column" style="margin-top: 10px">
   <a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"> <img src="paint1/<?php echo $varpaintimage; ?>" class="hover-shadow" style="width:250px;height:180px"></a>
    <p>Price: <?php echo $varprice; ?></p>
    <p>Status: <?php echo $varpaintstatus; ?></p>
  </div>
<?php 
}

?></div>

<?php if (isset($_SESSION['Admin'])) {
	?>
	<br>
	<br>
	<form method="post">
	<center><input type="submit" name="delacco" id="delacc" value="Delete Account"></center>
	</form>
	<?php 
} ?>
</div>
<?php 
include('dbcon.php');
$vh=$_GET['varid'];
if (isset($_POST['delacco'])) {
	
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
    
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="Your account has been removed by the admin. From ArtDeal.com";
    $client->send($varcontact,$message);

    sleep(1);
    $client->logout();
	
	$qu=mysql_query("delete from artist where artist_id='$vh'");
	$qu1=mysql_query("delete from prices where artist_id='$vh'");
	$qu2=mysql_query("delete from paintings where artist_id='$vh'");
	$qu3=mysql_query("delete from pwt where artist_id='$vh' and status!='finalaccept'");

	echo '<script type="text/javascript">
	alert("The artist account deleted successfully ");
    </script>';

	header('location:adminartistlist.php');
}
 ?>
<!---start-footer---->
<?php 
if (isset($_SESSION['Admin'])) {
	echo "<br>";
}
else{
include('footer.php'); 
} 
}?>
		<!---//End-footer---->
				</body>
				</html>

