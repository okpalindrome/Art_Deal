<?php
session_start();
?>
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
</head>
		<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.80); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #E6E6FA;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 45%;
    height: 55%;
    font-size: 30px;
    border-radius: 6px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
	<style type="text/css">
		.newartist{
	width: 140px;
	height: 180px;
	border: 5px solid white;
	border-radius: 100px;
}
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
</style>
<body>
<?php $var=$_GET['sinp']; ?>
<!---start-header---->
			<div class="header">
				<div class="top-header">
					<div class="wrap" style="width:90%">
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<script type="text/javascript">
									$(function(){
									    var $cart = $('#cart');
									        $('#clickme').click(function(e) {
									         e.stopPropagation();
									       if ($cart.is(":hidden")) {
									           $cart.slideDown("slow");
									       } else {
									           $cart.slideUp("slow");
									       }
									    });
									    $(document.body).click(function () {
									       if ($cart.not(":hidden")) {
									           $cart.slideUp("slow");
									       } 
									    });
									    });
								</script>
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="cartdisplaypage.php"><span id="clickme"> </span></a></li>
								<!---start-cart-bag---->
								<div id="cart">Your Cart<span>(0)</span></div>
								<!---start-cart-bag---->
								
							</ul>
						</div>
						<div align="center" class="top-header-center" >
							<a href="index.php" style="color:white">Art Deal</a>
							<div class="clear"> </div>
						</div>
						<div class="top-header-right">
							<ul>
								<?php
								if(isset($_SESSION['user']))
								{
									echo'
									<li><a href="userprofile.php"><i class="fa fa-user-circle-o" aria-hidden="true" title="Profile"></i></a><span> </span></li>
									<li><a href="logout.php">logout</a><span> </span></li>
									';
								}
								else if(isset($_SESSION['artist']))
								{
									echo'
									<li><a href="artistprofile.php"><i class="fa fa-user-circle-o" aria-hidden="true" title="Profile"></i></a><span> </span></li>
									<li><a href="logout.php">logout</a><span> </span></li>
									';
								}
								else
								{
									echo'<li><a href="login.php">Login</a><span> </span></li>
								<li><a style="cursor:pointer"id="myBtn">Join</a></li>';
								}
								?>
								
							</ul>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <div>
    <span class="close">&times;</span>
    <p align="center">Join as a</p>
</div>

<div style="float:left; margin:50px">
<div align="center">
<a href="register.php"><img src="ii.png" width="150px" height="180px" style="margin-left:36px"></a>
<p style="margin-left:35px">Artist</p>
</div></div>
<div style="float:left;margin:50px">
<div align="center">
<a href="userregister.php" style="float:left"><img src="iiii.png" width="150px" height="180px" style="margin-left:26px"></a>
<p style="margin-left:30px">User</p>
</div></div>
	</div>

</div><script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap" style="width:90%">
						<div class="mid-grid-left">
							<form method="post">
								
						<input type="text" value="<?php echo $var; ?>" name="inputsearch" placeholder="What Are You looking For?" />
						<input type="submit" name="search" id="btn-search" value="&#9906;">
								
							</form>
						</div>
						<div class="mid-grid-right">
							<a href="index.php"><img src="images/artdeallogo.png" width="85px" height="90px"></a>
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
								<li class="grid"><a class="color1" href="index.php">HOME</a></li>

								<li class="grid"><a class="color2" href="artistslist.php" title="Find the artists">ARTIST</a>
									<!--<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>popular</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">login</a></li>
													</ul>	
												</div>
								
											
										</div>
									</div>-->
									</li>
					  				<li class="grid"><a class="color4" href="portraitartistlist.php" title="Find the portrait artists">PORTRAIT ARTIST'S</a></li>
		
									<li class="grid"><a class="color5" href="wallpainters.php" title="Find the artists who can paint on ur house wall's">WALL ARTIST'S</a></li>

									<li class="grid"><a class="color5" href="teacherslist.php" title="FIND THE ARTIST WHO CAN SHAPE YOUR ART SKILLS">Tutor</a></li></ul>

					</div>
				</div>
				</div>
				<!----//End-bottom-header---->
			<!---//End-header---->
<?php 
if (isset($_POST['search'])) {
	$v=$_POST['inputsearch'];
	if ($v=='') {
		?>
		<script type="text/javascript">
			alert('Please enter something');
		</script>
		<?php
	}
	else{
		header('Location:search_res.php?sinp='.$v);
	}

}
 ?>
<!-- The header ends here -->

<div class="wrap" style="width: 90%">
<br>
<?php $var=$_GET['sinp']; ?>
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
	echo'<br>
	<br>
	<br>
	<br>
	<br><p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;color:red"></i>
	Didn&#39t matched any artist profile. Try again..&#9785;</p>';
}
$q2=mysql_query("select * from paintings where 
	paint_name like '$var%' or 
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
	description like '$var%_%_%'");
if (mysql_num_rows($q2)>0) {
	
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
						<div onclick="location.href='productdetail.php?varid=<?php echo $varpaintingid; ?>';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><img src="paint1/<?php echo $imagename;?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><?php echo $paintname;?></a>
								<span><?php echo $fname1;?> <?php echo $lname1;?></span></p>
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
echo '<br clear="both"><br><p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;"></i>
	That&#39s it..&#9786;</p><br><br>';
}
else{
	echo'
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="center" style="font-size:25px;color:#808080">
	<i class="fa fa-bullhorn" aria-hidden="true" style="font-size:30px;color:red"></i>
	Didn&#39t matched any paintings sorry. Try again..&#9785;</p>';
}
 ?>

</div>
</body>
</html>