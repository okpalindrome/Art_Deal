<!DOCTYPE html>
<html>
<head>
	<title>Art Deal.com</title>
	<link rel="icon" href="images/artdeallogo.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />


<!-- start menu -->
		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/menu_jquery.js"></script>

		<!-- //End menu -->

			<link rel="stylesheet" href="css/slippry.css">

		<link rel="stylesheet" href="css/imagestyles.css">
<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
</head>
	<style type="text/css">
		.newartist{
	width: 140px;
	height: 180px;
	border: 5px solid white;
	border-radius: 100px;
}

</style>

<body>

<div class="header">
			<div style="background-color:black">
			<div class="wrap" style="width:90%">
				<p align="center" style="color:#FFFFFF">Art Deal</p>
			</div>
			</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap" style="width:90%">
						
						<div class="mid-grid-left">
							<form method="post" action="adminsearch.php">
								
						<input type="text" name="inputsearch1" placeholder="What Are You looking For?" />
						<input type="submit" name="search" id="btn-search" value="&#9906;">
								
							</form>
								
							
						</div>
						<div class="mid-grid-right">
							<a href="#"><img src="images/artdeallogo.png" width="85px" height="90px"></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
				<!----start-bottom-header---->
				<div class="header-bottom">
					<div class="wrap" style="width:90%">
					<!-- start header menu -->
							<ul class="megamenu skyblue">
							<li><a class="color1" href="admininterface.php">HOME</a></li>
					  		<li class="grid"><a class="color4" href="newartistapproval.php">NEW ARTIST'S</a></li>

							<li><a class="color5" href="newpaintings.php">NEW PAINTINGS</a></li>

							<li><a class="color6" href="userportraits.php">USER PORTRAIT'S</a></li>

							<li><a class="color7" href="ordersreport.php">DELIVERY STATUS</a></li>
							
							<li><a class="color8" href="adminfeedbackview.php">FEEDBACKS</a></li>
							
							<li><a class="color1" href="logout.php">Sign Out</a></li></ul>

					</div>
				</div>
				</div>
				<!----//End-bottom-header---->



<div class="wrap" style="width: 90%">
<br>
<?php $var=$_GET['inputsearch1']; ?>
<p style="font-size:15px;color:#808080"> Showing results for '<span style="color: green;font-size: 20px"><?php echo $var; ?></span>'  <i class="fa fa-flag" aria-hidden="true"></i></p>
<br>
<br>
<?php 
include('dbcon.php');
$q1=mysql_query("select * from artist where 
first_name like '%$var' or 
first_name like '$var%' or 
first_name like '%$var' or
first_name like '%$var%' or 
first_name like '$var%_%_%' or

last_name like '%$var' or
last_name like '$var%' or 
last_name like '%$var' or
last_name like '%$var%' or 
last_name like '$var%_%_%' or

description like '$var%' or 
description like '%$var' or
description like '%$var%' or 
description like '$var%_%_%'");
if (mysql_num_rows($q1)>0) {
echo'<p style="font-size:30px;color:grey" align="center"> <b>Artists Accounts</b></p>';
	while ($row1=mysql_fetch_array($q1)) {
		$artid=$row1['artist_id'];
		$fname=$row1['first_name'];
		$lname=$row1['last_name'];
		$rank1=$row1['rank_review'];
		$profileimg=$row1['profile_img'];
		if ($profileimg=='') {
echo'<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$artid.'" align="center">
	<img class="newartist" src="ii.png"></a>
	<p align="center" style="color:grey">';
	}
	else{
		echo '<div style="margin:40px;float:left">
	<a  href="userartistprofileview.php?varid='.$artid.'" align="center"><img class="newartist" src="artistprofiles/'.$profileimg.'"></a>
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

	echo'<p style="font-size:20px" align="center"> <b>'.$fname.' '.$lname.'</b></p></p>
</div>';
}
}
else{
	echo'
	<br><p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;color:red"></i>
	Didn&#39t matched any artist profile. Try again..&#9785;</p>';
}
$q2=mysql_query("select * from paintings where 
	(status='Wait') and 
	(paint_name like '$var%' or 
	paint_name like '%$var' or
	paint_name like '%$var%' or 
	paint_name like '$var%_%_%' or 

	paint_type like '$var%' or 
	paint_type like '%$var' or
	paint_type like '%$var%' or 
	paint_type like '$var%_%_%' or

	description like '$var%' or 
	description like '%$var' or
	description like '%$var%' or 
	description like '$var%_%_%')");
if (mysql_num_rows($q2)>0) {
echo'<br clear="both">
<div class="wrap" style="width:90%"><br><br>
<p style="font-size:30px;color:grey" align="center"> <b>Paintings</b></p>';
while ($row=mysql_fetch_array($q2)) 
{
	$varpaintingid=$row['paintings_id'];
	$artistid=$row['artist_id'];
	$imagename=$row['paint_image1'];
	$paintname=$row['paint_name'];
	$varprice=$row['price'];

	$query1=mysql_query("select * from artist where artist_id='$artistid'");
	$row12=mysql_fetch_array($query1);
		$fname1=$row12['first_name'];
		$lname1=$row12['last_name'];
	
	?>
<center>
	<div class="product-grids" align="center">
	<div align="center">
						<div onclick="location.href='newpaintingsview.php?varpaintid=<?php echo $varpaintingid; ?>';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="newpaintingsview.php?varpaintid=<?php echo $varpaintingid; ?>"><img src="paint1/<?php echo $imagename;?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="newpaintingsview.php?varpaintid=<?php echo $varpaintingid; ?>"><?php echo $paintname;?></a>
								<span><?php echo $fname1;?> <?php echo $lname1;?></span></p>
							</div>
							<!-- <div class="product-info">
								<div class="product-info-cust" style="font-size:25px;width:50%">
									<a href="newpaintingsview.php?varpaintid=<?php  $varpaintingid; ?>" style="float:left">&#x20a8; <?php $varprice;?></a>
								</div>
								<div class="clear"> </div>
							</div> -->
							
						</div>
	</div>
	</div></center></div>
<?php
}
echo '<br clear="both"><br><p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;"></i>
	That&#39s it..&#9786;</p><br><br>';
}
else{
	echo'
	<br clear="both">
	<br>
	<br>
	<br>
	<br>
	<p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;color:red"></i>
	Didn&#39t matched any paintings that are not yet approved sorry. Try again..&#9785;</p>';
}

$qu=mysql_query("select * from user where 
first_name like '%$var' or 
first_name like '$var%' or 
first_name like '%$var' or
first_name like '%$var%' or 
first_name like '$var%_%_%' or

last_name like '%$var' or
last_name like '$var%' or 
last_name like '%$var' or
last_name like '%$var%' or 
last_name like '$var%_%_%'");
if (mysql_num_rows($qu)) {
echo'<br clear="both"><div class="wrap" style="width:90%"><br><br>
<p style="font-size:30px;color:grey" align="center"> <b>Customers Accounts</b></p>';
while ($row1=mysql_fetch_array($qu)) {
		$uid=$row1['user_id'];
		$fname=$row1['first_name'];
		$lname=$row1['last_name'];
		$profileimg=$row1['profile_img'];
		if ($profileimg=='') {
echo'<div style="margin-right:40px;margin-top:40px;float:left">
	<a  href="adminuserprofileview.php?varid='.$uid.'" align="center">
	<img class="newartist" src="iiii.png"></a>
	<p align="center" style="color:grey">';
	}
	else{
		echo '<div style="margin-right:40px;margin-top:40px;float:left">
	<a  href="adminuserprofileview.php?varid='.$uid.'" align="center">
	<img class="newartist" src="userprofiles/'.$profileimg.'"></a>
	<p align="center" style="color:grey">';
	}
	echo'<p style="font-size:20px" align="center"> <b>'.$fname.' '.$lname.'</b></p></p>
</div></div>';
}
echo '<br clear="both"><br><br><p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;"></i>
	That&#39s it..&#9786;</p><br><br>';
}
else{
	echo'<br>
	<br>
	<br>
	<br>
	<br><p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;color:red"></i>
	Didn&#39t matched any user profile. Try again..&#9785;</p><br>';
}
 ?>
<br>


</div>
</body>
</html>
