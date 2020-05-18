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
</style>
	</head>
	<body>
		<!---start-wrap---->

		<!-- The header starts here-->
			<?php include('header.php') ?>
				<!-- the header ends here-->

				<!-- the content starts here-->
				<div class="wrap" style="width:90%">
				<BR>
				<BR>
				<p style="font-size:25px;color:#808080" align="center"> EXPLORE GREAT ARTISTS</p>
				<BR>
				<BR>
 <?php 
include('dbcon.php');
$query=mysql_query("select * from artist where acc_status='Approved' order by rank_review desc");
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
	for ($i=0; $i < 11; $i++) { 
		
echo '<div style="margin:40px;float:left">
	<a  href="#" align="center"><img class="newartist" src="ii.png"></a>
	<p align="center" ><a class="product-rate" href="#"> <label> </label></a> <span> </span></p>
	<p style="font-size:20px" align="center"> <b>Mr. XYZ</b></p>
</div>';
}
}
?>
</div>
<div class="clear"> </div>

<!-- the content ends here-->

<!---start-footer---->
<?php include('footer.php'); ?>
		<!---//End-footer---->
				</body>
				</html>
