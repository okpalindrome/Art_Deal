<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link href="css/style.css" rel='stylesheet' type='text/css' />

		
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<body>

		<?php 
		include('header.php');
		?>
		<div class="wrap" style="width:90%">
				<div class="product-grids" >
		
<?php 
include('dbcon.php');
$query=mysql_query("select * from paintings where status='Approved'");
if (mysql_num_rows($query)>0) {
	
while ($row=mysql_fetch_array($query)) 
{
	$varpaintingid=$row['paintings_id'];
	$artistid=$row['artist_id'];
	$imagename=$row['paint_image1'];
	$paintname=$row['paint_name'];
	$varprice=$row['price'];

	$query1=mysql_query("select * from artist where artist_id='$artistid'");
	$row1=mysql_fetch_array($query1);
		$fname=$row1['first_name'];
		$lname=$row1['last_name'];
	
	?>
<center>
	<div class="product-grids" align="center">
	<div align="center">
						<div onclick="location.href='productdetail.php?varid=<?php echo $varpaintingid; ?>';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><img src="paint1/<?php echo $imagename;?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"><?php echo $paintname;?></a>
								<span><?php echo $fname;?> <?php echo $lname;?></span></p>
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
}
else{
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("xyz",$con) or die("db not found");
	$quer112=mysql_query("select * from tt ");
	while($rows=mysql_fetch_array($quer112)){
			?>
<center>
	<div class="product-grids" align="center">
	<div align="center">
						<div onclick="location.href='#';" class="product-grid" style="margin:15px;float:left;width:270px" align="center">
							
							<div class="product-pic">
								<a href="#"><img src="demoimages/<?php echo $rows['name'];?>" title="product-name" style="margin-top:18px;width:300px;height:200px" /></a>
								<br>
								<p><a href="#">Hmm</a>
								<span>Mr. XYZ</span></p>
							</div>
							<div class="product-info">
								<div class="product-info-cust" style="font-size:25px;width:50%">
									<a href="#" style="float:left">&#x20a8; <?php echo 2500;?></a>
								</div>
								<div class="clear"> </div>
							</div>
							
						</div>
	</div>
	</div></center>
	<?php
}
}
?></div>
</div>
<br clear="both">
<?php include('footer.php') ?>
	</body></html>