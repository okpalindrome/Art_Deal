
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
  width: 74%;
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
	
	<?php include('userprofileheader.php'); ?>
		<!-- the header ends here-->
<!-- The main content starts here -->
<br>
  <div class="wrap" style="width: 90%">
  	<?php 
  	$varuserid=$_SESSION['uid'];
  	 include('dbcon.php');
  	 $query=mysql_query("select * from user where user_id='$varuserid'");
  	 if ($r=mysql_fetch_array($query)) {
  	 	$varfname=$r['first_name'];
  	 	$varlname=$r['last_name'];
  	 	$varcontact=$r['contact'];
  	 	$varemail=$r['emailid'];
  	 	$varaddr=$r['address'];
  	 	$varcity=$r['city'];
  	 	$varprofileimg=$r['profile_img'];
  	 }
  	 ?>
<div class="row">

<div class="column" style="background-image: url(images/userprofile_bg.jpg);">
   <div align="center">
   	<br>
   	<?php 
   	if ($varprofileimg=='') {
   		echo '<img src="ii.png" style="width: 110px;height: 150px;
border: 2px solid white;border-radius: 100px">
<p style="color:#FFFFFF;font-size:22px">'.$varfname." ".$varlname.'</p>';
   	}else{
   		echo'<img src="userprofiles/'.$varprofileimg.'" style="width: 110px;height: 150px;
border: 2px solid white;border-radius: 100px">
<p style="color:#FFFFFF;font-size:22px">'.$varfname." ".$varlname.'</p>';
   	}

?>
<br>
<p style="color:#FFFFFF;font-size:13px"><?php echo $varcontact ?></p>

<p style="color:#FFFFFF;font-size:13px"><?php echo $varemail ?></p>
  </div>
</div>
	

	<div class="column" style="width: 23%">
    <div class="card">
      <div class="container">
        <h2 style="font-weight: 400;font-size: 15px; text-transform: uppercase;" align="center">Address and city</h2>
        <hr>
        <p style="color:grey;font-size: 13px" ><?php echo $varaddr ?></p>
         <p style="color:grey;margin-top: 5px;font-size: 13px" ><?php echo $varcity ?></p>
      </div>
    </div>
    
    
    <div class="card" style="margin-top: 11px">
      <div class="container">
      <h2 style="font-weight: 400;font-size: 15px; text-transform: uppercase;" align="center">My Orders</h2>
        <hr>
        <a href="userordersview.php"><p align="center" style="font-size: 13px;color:grey">View all orders</p></a>
      </div>
    </div>
  
    
    <div class="card" style="margin-top: 11px">
      <div class="container">
      <h2 style="font-weight: 400;font-size: 15px; text-transform: uppercase;" align="center">My cart</h2>
        <hr>
        
        <a href="cartdisplaypage.php"><p align="center" style="font-size: 13px;color:grey">View all items</p></a>
      </div>
    </div>
	</div>
</div>

<br>
</div>
  <!-- main content ends here -->
<!---start-footer---->
<?php include('footer.php'); ?>
		<!---//End-footer---->
				</body>
				</html>

