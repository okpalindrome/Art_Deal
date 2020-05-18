<?php
include('session_artist.php');
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
    height: 60%;
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
		
	</head>
	<body><!---start-header---->
			<div class="header">
			<div style="background-color:black">
			<div class="wrap" style="width:90%">
				<p align="center" style="font-color:#FFFFFF">Art Deal</p>
			</div>
			</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap" style="width:90%">
						<div class="mid-grid-left">
							
							<form method="post" action="search_res.php">
								
						<input type="text" name="inputsearch" placeholder="What Are You looking For?" />
						<input type="submit" name="search" id="btn-search" value="&#9906;">
								
							</form>

								<br>
								<br>
							<?php 
include('dbcon.php');
$varr=$_SESSION['login_artist'];
$query=mysql_query("select * from artist where artist_id='$varr'");

$row=mysql_fetch_array($query);
$varnoti=$row['notification'];
  $varfname=$row['first_name'];
  $varlname=$row['last_name'];
  $varmessage="";

  
  if ($varnoti=='1') {
  	$varmessage="Congratulations, Approved your account registration and impressed by your sample paintings amazing, hope you will enjoy the dealings of your precious work and please update your profile information.";
  }
  ?>




								<h1 style="font-size:25px"> <?php echo $varfname." ".$varlname ?></h1>
							
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
								<li class="grid"><a class="color1" href="index.php">Home</a></li>
					  		<li class="grid"><a class="color4" href="addnewpaintings.php">Add new paintings</a></li>

							<li><a class="color5" href="artistordersview.php">View orders</a></li>

							<li><a class="color6" href="artistprofileedit.php">Edit profile/prices</a></li>

							<li><a class="color7" href="#">request</a>
								<div class="megapanel">
										<div class="row">
											<div class="col1" style="width: 30%">
												<div class="h_nav">
													<h4>For portrait</h4>
													<ul>
<?php 
include('dbcon.php');
$v1=$_SESSION['login_artist'];
$pq=mysql_query("select * from pwt where artist_id='$v1' and portrait='1' order by id desc");
$pmsg="";
while ($pr=mysql_fetch_array($pq)) {
	$pui=$pr['user_id'];
	$id=$pr['id'];
	$pt=$pr['type'];
	$pimg=$pr['user_img'];
	$pq1=mysql_query("select * from user where user_id='$pui'");
	if ($pr1=mysql_fetch_array($pq1)) {
		$puid=$pr1['user_id'];
		$ufname=$pr1['first_name'];
		$ulname=$pr1['last_name']; 
		$pmsg="You have portrait request from ".$ufname." ".$ulname;
		?>
				<li style="color: grey"><?php echo $pmsg; ?>
				<a href="userportraitview.php?pwtuid=<?php echo $puid ?>&&pwtid=<?php echo $id ?>" style="float: right;">View</a>
				</li>
				<br>
<?php
	}
}
?>
			</ul>
														
												</div>							
											</div>
											<div class="col1" style="width: 30%">
												<div class="h_nav">
													<h4>To paint on wall's</h4>
												<ul>
 <?php 
include('dbcon.php');
$v2=$_SESSION['login_artist'];
$wq=mysql_query("select * from pwt where artist_id='$v2' and wallpaint='1' order by id desc");
$wmsg="";
while ($wr=mysql_fetch_array($wq)) {
	$wuid=$wr['user_id'];
	$wid=$wr['id'];
	$wt=$wr['type'];
	$wimg=$wr['user_img'];
	$wq1=mysql_query("select * from user where user_id='$wuid'");
	if ($wr1=mysql_fetch_array($wq1)) {
		
		$wufname=$wr1['first_name'];
		$wulname=$wr1['last_name']; 
		$wmsg="You have wallpainting request from ".$wufname." ".$wulname;
		?>
							<li style="color: grey"><?php echo $wmsg; ?>
					<a href="wallpaintrequestview.php?pwtuid=<?php echo $wuid ?>&&pwtid=<?php echo $wid ?>" style="float: right;">View</a>
							</li><br>
<?php
	}
}
?>
													
												</ul>	
												</div>
											</div>
											<div class="col1" style="width: 30%">
												<div class="h_nav">
													<h4>For Teacher</h4>
												<ul>
  <?php 
include('dbcon.php');
$v3=$_SESSION['login_artist'];
$tq=mysql_query("select * from pwt where artist_id='$v3' and teach='1' order by id desc");
$tmsg="";
while ($tr=mysql_fetch_array($tq)) {
	$tui=$tr['user_id'];
	$tid=$tr['id'];
	$tt=$tr['type'];
	
	$tq1=mysql_query("select * from user where user_id='$tui'");
	if ($tr1=mysql_fetch_array($tq1)) {
		$tufname=$tr1['first_name'];
		$tulname=$tr1['last_name']; 
		$tmsg="You have new student request from ".$tufname." ".$tulname;
		?>
						<li style="color: grey"><?php echo $tmsg; ?>
							<a href="teachingrequestview.php?pwtuid=<?php echo $tui ?>&&pwtid=<?php echo $tid ?>" style="float: right;left:0px">View</a>
						</li>
						<br>
<?php
	}
}
?>
												</ul>	
												</div>
											</div>
									</div>
								</div></li>
								<li><a class="color8" href="#">Notification</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1" style="width:48%">
												<div class="h_nav" >
													<h4>From Admin</h4>
														<ul>
<?php 
  include('dbcon.php');
  $varr=$_SESSION['login_artist'];
  $q=mysql_query("select * from paintings where artist_id='$varr' and status='Approved'") or die(mysql_error());
  $paintmsg="";
  	while($r=mysql_fetch_array($q)){
  	 $vartitle=$r['paint_name'];
  	 $paintmsg="Congratulations, Your painting '".$vartitle."' approved.";
 }
 ?>															
														<li style="color: grey"><?php echo $paintmsg;?></li>
															<br>
														<li style="color: grey"><?php echo $varmessage; ?></li>
														<br>
														
														
													</ul>
												</div>							
											</div>
											<div class="col1" style="width:48%">
												<div class="h_nav">
													<h4>From Customers</h4>
<?php
$vv3=$_SESSION['login_artist'];
$fromcq=mysql_query("select * from orders where artist_id='$vv3' and rating>'0' order by id desc");
$reviewmsg="";
if (mysql_num_rows($fromcq)>0) {
	$reviewmsg="Got review on your delivered painting, check it out";
										echo'<ul>
										<li style="color: grey">'.$reviewmsg.'<a href="artistviewreviews.php" style="float: right;">Here</a></li>
										</ul>';
} ?>		
										</div>
												
										</div>
									</div>
									</div></li>
									<li><a class="color1" href="logout.php">Sign Out</a></li></ul>

					</div>
				</div>
				</div>
				<!----//End-bottom-header---->
			<!---//End-header----></body>
			</html>