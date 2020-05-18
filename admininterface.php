
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
    <link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link href="css/style.css" rel='stylesheet' type='text/css' />
		
		
		<style type="text/css">
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
.fake-div {
	width: 100%;
	height: 100%;
	position: absolute;
}
</style>
	</head>
	<body>
		<!---start-wrap---->

		<!-- The header starts here-->
			<!---start-header---->
	<?php include('adminheader.php'); ?>
				<!-- the header ends here-->
				<br>
<div class="wrap" style="width:90%">
<div class="row" align="center">
  <div class="column">
  <a href="newartistapproval.php"> <img src="images/newartistlogo.jpg" class="hover-shadow" width="400px" height="250px"></a>
  <p>New Artists</p>
  </div>
  <div class="column">
    <a href="newpaintings.php"><img src="images/newpaintinglogo1.jpg" class="hover-shadow" width="400px" height="250px"></a>
    <p>New Paintings</p>
  </div>
  <div class="column">
    <a href="userportraits.php"> <img src="images/userportraitlogo.jpg" class="hover-shadow" width="400px" height="250px"></a>
    <p>Customer Portraits</p>
  </div>
  <div class="column">
    <a href="ordersreport.php"> <img src="images/deliverylogo.jpg" class="hover-shadow" width="400px" height="250px"></a>
    
    <p>Orders and status</p>
  </div>
</div>

<br>
<br>
<div class="row" align="center">
	<?php
  	include('dbcon.php');
  	$result = mysql_query("SELECT count(*) from artist;");
  	$result1 = mysql_query("SELECT count(*) from user;");
  	?>
  <div class="column">
  <a href="adminartistlist.php"><div class="hover-shadow" style="width: 260px;height: 230px;"><p style="font-size: 130px;text-align: center;"><?php echo mysql_result($result, 0); ?></p></div>
  </a>
  <p>Number of Artists</p>
  </div>
  <div class="column">
  <a href="adminuserlist.php"><div class="hover-shadow" style="width: 260px;height: 230px;"><p style="font-size: 130px;text-align: center;"><?php echo mysql_result($result1, 0); ?></p></div>
  </a>
  <p>Number of Users</p>
  </div>
  <div class="column">
  <a href="adminfeedbackview.php"> <div class="hover-shadow" style="width: 260px;height: 230px;"><p style="font-size: 50px;text-align: center;    padding: 58px 16px;">Feedback</p></div></a>
    <p>Website Feedback</p>
  </div>

  <!-- <div class="column">
     <div class="fake-div"></div>
     <div id="counter">
     	<div class="counter-value" data-count="300">0</div>
     	<div class="counter-value" data-count="400">100</div>
     	<div class="counter-value" data-count="1500">200</div>
     </div>	
     <div class="fake-div"></div>
    <p>Number of artist</p> 
  </div> -->


</div>
</div>
<!-- <script type="text/javascript">
	var a=0;
	$(window).scroll(function){
		var oTop=$('#counter').offset().top - window.innerHeight;
		if (a==0 && $(window).scrollTop() > oTop) {
			$('.counter-value').each(function(){
				var $this =$(this); 
				countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				},
				{
					duration: 2000,
					easing: 'swing',
					step: function(){
						$this.text(Math.floor(this.countNum))
					},
					complete: function(){
						$this.text(this.countNum);
					}
				}
				);
			});
			a=1;
		}
	}
</script> -->
<br clear="both">
<!---start-footer---->

		<!---//End-footer---->
				</body>
				</html>

