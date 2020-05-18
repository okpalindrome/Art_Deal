<?php
session_start();
if(isset($_SESSION['Admin']))
{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
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
				<p align="center" style="color:#FFFFFF">Art Deal</p>
			</div>
			</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap" style="width:90%">
						
						<div class="mid-grid-left">
							<form method="post" >
								
						<input type="text" name="inputsearch1" placeholder="What Are You looking For?" />
						<input type="submit" name="search" id="btn-search" value="&#9906;">
								
							</form>
								<?php 
include('dbcon.php');
$aa=$_SESSION['Admin'];
$sql=mysql_query("select * from admin where admin_id='$aa'");
if ($r=mysql_fetch_array($sql)) {
	$name=$r['name'];
}
?>
								<br><br>
								<h1 style="font-size:25px"><?php echo "Welcome ".$name; ?>
									<a href="adminprofiledit.php" style="color:black"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></h1>
								
							
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
			<!---//End-header---->
<?php 
if (isset($_POST['search'])) {
	$v=$_POST['inputsearch1'];
	if ($v=='') {
		?>
		<script type="text/javascript">
			alert('Please enter something');
		</script>
		<?php
	}
	else{
		header('Location:adminsearch.php?inputsearch1='.$v);
	}

}
 ?>
		</body>
			</html>
			<?php
		}
		else
		{
			header("location:adminlogin.php");
		}
		?>