<!-- this php is displayed in the admin part, where it list's out the new paintings that have been added by the artist-->
<!DOCTYPE html>
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
		<style>
.newartist{
	width: 190px;
	height: 170px;
	border: 2px solid grey;
border-radius: 10px;
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
<?php include('adminheader.php'); ?>
<div class="wrap" style="width:90%">

<?php 
include('dbcon.php');
$query=mysql_query("select * from paintings where status='wait'");
if (mysql_num_rows($query)>0) {
while ($row=mysql_fetch_array($query)) 
{
	$varpaintingid=$row['paintings_id'];
	$varartistid=$row['artist_id'];
	$varpaintimage=$row['paint_image1'];
	$artistid=$row['artist_id'];
	$query1=mysql_query("select * from artist where artist_id='$varartistid'");
	while ($row1=mysql_fetch_array($query1)) {
		$fname=$row1['first_name'];
		$lname=$row1['last_name'];
	?>

  <div class="column" style="float:left" align="center">
   <a href="newpaintingsview.php?varpaintid=<?php echo $varpaintingid; ?>"> <img src="paint1/<?php echo $varpaintimage ;?>" class="hover-shadow" style="width:250px;height:180px"></a>
    <p align="center"><?php echo $fname;?> <?php echo $lname;?></p>
  </div>
  

<?php
}
}
}
else{
	echo'<p style="font-size:35px;color:#808080" align="center">New Paintings</p>
	<center><img src="NotAvailable.png"></center>';
}
?>
</div>
<br clear="both">
</body>
</html>