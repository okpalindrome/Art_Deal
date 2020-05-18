
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


img.hover-shadow {
  transition: 0.3s
}
a.hover-shadow {
  transition: 0.3s
}
.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 10px rgba(0, 0, 0, 0.19)
}

</style>

	</head>
	<body>
	
		<!-- The header starts here-->
			<!---start-header---->
	<?php include('artistheader.php'); ?>
		<!-- the header ends here-->
<div class="clear:both"></div>
<?php 
include('dbcon.php');
$varr=$_SESSION['login_artist'];
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
$vv3=$_SESSION['login_artist'];
$fromcq=mysql_query("Select * from paintings inner join orders on orders.paintings_id=paintings.paintings_id where paintings.artist_id='$vv3' and orders.status='Delivered'");
$soldcount=mysql_num_rows($fromcq);
?>	
<li align="center" style="color:grey;font-size:20px">Sold Paintings</li>
<li align="center" style="color:grey"><?php echo $soldcount; ?></li>
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
    echo '<li align="center" style="color:grey"><p>No rank yet</p></li>';
}
 ?>


</ul>
</div>
<div  style="position:absolute;top:475px;left:795px" class="profilebtn">
<ul>
<li align="center" style="color:grey;font-size:20px">Website</li>
<li align="center" style="color:grey"><a href="#" style="color:grey"><?php echo $varweblink;?></a></li>
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
  <div class="clear:both"></div>
<!-- Images used to open the lightbox -->
<h2 style="font-size:35px;color:grey" align="center" >Gallery</h2>
<br>
<br>
<div class="row" align="center">
<?php
include('dbcon.php');
$query1=mysql_query("select * from paintings where artist_id='$varartistid'");
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
}
?></div>


</div>
<!---start-footer---->
<?php include('footer.php'); ?>
		<!---//End-footer---->
				</body>
				</html>

