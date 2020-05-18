<!DOCTYPE html>
<html>
<head>
	<title>Art Deal.com</title>
  <link rel="icon" href="images/artdeallogo.png" type="image/png">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/rating.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	.wrap textarea{
		border-color: black;
		border-radius: 5px;
		font-size: 15px;
		font-family: 'Open Sans', sans-serif;	
	}
	#s123 {
	background-color: white;
	border-radius: 3px;
   border: 2px solid grey;
   height: 35px;
   width: 180px;
   cursor: pointer;
   margin-top: 10px;
  
}
</style>
<body>

<?php include('userprofileheader.php'); ?>
<br>

<br>
<div class="wrap" style="width: 90%">
<?php 
include('dbcon.php');
$varuserid=$_SESSION['uid'];
$deliverycharge=50;
$query=mysql_query("select * from orders where user_id='$varuserid' and status='Delivered'");
if (mysql_num_rows($query)>0) {
while ($row=mysql_fetch_array($query)) 
{
	$oid=$row['id'];
	$ratings=$row['rating'];
	$comm1=$row['comment'];
	$varpaintingid=$row['paintings_id'];
	$varpwtid=$row['pwtid'];
	$varstatus=$row['status'];
	if ($varpwtid=='0') {
	$query1=mysql_query("select * from paintings where paintings_id='$varpaintingid'") or die(mysql_error());
	while ($row1=mysql_fetch_array($query1)) {
		$varpaintimage=$row1['paint_image1'];
		$pname=$row1['paint_name'];
		$artistid=$row1['artist_id'];
		$price=$row1['price'];
		$artistq=mysql_query("select * from artist where artist_id='$artistid'");
		$row3=mysql_fetch_array($artistq);
		$fname=$row3['first_name'];
		$lname=$row3['last_name'];
		$varcont=$row3['contact'];
	?>

    <div class="column" style="float: left">	
  	<div style="float: left">
  		<a href="productdetail.php?varid=<?php echo $varpaintingid; ?>">
  	<img src="paint1/<?php echo $varpaintimage ;?>" class="hover-shadow" style="width:300px;height:200px;"></a>
	</div>
	<div style="float: left;margin-left: 30px;font-size: 18px">
  	<p style="color: grey;">Paint Name: <?php echo $pname;?></p>
  	<p style="color: grey;margin-top: 10px;">Artist Name: <?php echo $fname." ".$lname; ?></p>
  	<p style="color: grey;margin-top: 10px;">Artist contact: <?php echo $varcont; ?></p>
  	<p style="color: grey;margin-top: 10px;">Total price: <?php echo $price+$deliverycharge; ?></p>
  	<p style="color: grey;margin-top: 10px;font-size: 22px">Status :<span style="color: green"><?php echo $varstatus; ?></span></p>
  	<?php 
  	if ($ratings=='0' && $comm1=='') {
  		?>

  	   	<form method="post" action="ratingstar.php">
  	<!-- <p><input name="rating" value="0" id="rating_star" type="hidden" postID="1" /></p> -->
  	 <fieldset id='demo1' class="rating">
<input type="hidden" name="uid" value="<?php echo $_SESSION['uid']; ?>">

<input class="stars" name="rate" type="radio" id="star53" value="5" />
<label class = "full" for="star53" title="Awesome - 5 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star4half3"  value="4.5" />
     <label class="half" for="star4half3" title="Pretty good - 4.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star43" value="4" />
<label class = "full" for="star43" title="Pretty good - 4 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star3half3"  value="3.5" />
     <label class="half" for="star3half3" title="Meh - 3.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star33"  value="3" />
<label class = "full" for="star33" title="Meh - 3 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star2half3" value="2.5" />
     <label class="half" for="star2half3" title="Kinda bad - 2.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star23" value="2" />
<label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star1half3" value="1.5" />
     <label class="half" for="star1half3" title="Meh - 1.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star13" value="1" />
<label class = "full" for="star13" title="Sucks big time - 1 star"></label>
     
     <input class="stars" name="rate" type="radio" id="starhalf3" value="0.5" />
     <label class="half" for="starhalf3" title="Sucks big time - 0.5 stars"></label>

                    </fieldset>
<?php
  	}
  	else{
  		if ($ratings=='0.5') {
   	echo'<img src="images/0.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='1') {
   		echo'<img src="images/1.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='1.5') {
   	echo '<img src="images/1.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='2') {
   	echo '<img src="images/2.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='2.5') {
   	echo '<img src="images/2.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='3') {
   	echo '<img src="images/3.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='3.5') {
   	echo '<img src="images/3.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='4') {
   	echo '<img src="images/4.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='4.5') {
   	echo '<img src="images/4.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='5') {
   	echo '<img src="images/5.png" width="110px" height="25px" >';
   }
  	}
  	?>
    </div>
   </div>
   <div style="float: left;margin-left: 30px">
<?php if ($comm1=='') {
	echo'<textarea rows="7" cols="40" name="com" placeholder="Comment" style="font-size: 15px" required ></textarea >
	<br clear="both">
	<input type="hidden" name="oid" value="'.$oid.'">
   	<input type="submit" id="s123" name="r" value="Submit">
   	</form>';
} else{
   ?>
   <?php 
   
   ?>
   <p>Comment: </p>

   <p style="font-size: 15px;border-color: white;color: grey"><?php echo $comm1; ?></p>
   <br clear="both">
   
   <?php
   }
   ?>
   
   </div>
   <br clear="both">
   <br>
	<?php 
}
}
	else{

	$query123=mysql_query("select * from pwt where id='$varpwtid'") or die(mysql_error());
	while ($row123=mysql_fetch_array($query123)) {
		$varpaintimage123=$row123['user_img'];
		$pname123=$row123['type'];
		$artistid123=$row123['artist_id'];
		$price123=$row123['price'];
		$artistq123=mysql_query("select * from artist where artist_id='$artistid123'");
		$row312=mysql_fetch_array($artistq123);
		$fname123=$row312['first_name'];
		$lname123=$row312['last_name'];
		$varcont123=$row312['contact'];
	?>

    <div class="column" style="float: left">	
  	<div style="float: left">
  		<!-- <a href="productdetail.php?varid=<?php echo $varpaintingid; ?>"> -->
  	<img src="userportraitimgs/<?php echo $varpaintimage123 ;?>" class="hover-shadow" style="width:300px;height:200px;"><!-- </a> -->
	</div>
	<div style="float: left;margin-left: 30px;font-size: 18px">
  	<p style="color: grey;">Portrait type: <?php echo $pname123;?></p>
  	<p style="color: grey;margin-top: 10px;">Artist Name: <?php echo $fname123." ".$lname123; ?></p>
  	<p style="color: grey;margin-top: 10px;">Artist contact: <?php echo $varcont123; ?></p>
  	<p style="color: grey;margin-top: 10px;">Total price: <?php echo $price123+$deliverycharge; ?></p>
  	<p style="color: grey;margin-top: 10px;font-size: 22px">Status :<span style="color: green"><?php echo $varstatus; ?></span></p>
  	<?php 
  	if ($ratings=='0' && $comm1=='') {
  		?>

  	   	<form method="post" action="ratingstar.php">
  	<!-- <p><input name="rating" value="0" id="rating_star" type="hidden" postID="1" /></p> -->
  	 <fieldset id='demo1' class="rating">
<input type="hidden" name="uid" value="<?php echo $_SESSION['uid']; ?>">

<input class="stars" name="rate" type="radio" id="star53" value="5" />
<label class = "full" for="star53" title="Awesome - 5 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star4half3"  value="4.5" />
     <label class="half" for="star4half3" title="Pretty good - 4.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star43" value="4" />
<label class = "full" for="star43" title="Pretty good - 4 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star3half3"  value="3.5" />
     <label class="half" for="star3half3" title="Meh - 3.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star33"  value="3" />
<label class = "full" for="star33" title="Meh - 3 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star2half3" value="2.5" />
     <label class="half" for="star2half3" title="Kinda bad - 2.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star23" value="2" />
<label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
     
     <input class="stars" name="rate" type="radio" id="star1half3" value="1.5" />
     <label class="half" for="star1half3" title="Meh - 1.5 stars"></label>

<input class="stars" name="rate" type="radio" id="star13" value="1" />
<label class = "full" for="star13" title="Sucks big time - 1 star"></label>
     
     <input class="stars" name="rate" type="radio" id="starhalf3" value="0.5" />
     <label class="half" for="starhalf3" title="Sucks big time - 0.5 stars"></label>

                    </fieldset>
<?php
  	}
  	else{
  		if ($ratings=='0.5') {
   	echo'<img src="images/0.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='1') {
   		echo'<img src="images/1.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='1.5') {
   	echo '<img src="images/1.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='2') {
   	echo '<img src="images/2.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='2.5') {
   	echo '<img src="images/2.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='3') {
   	echo '<img src="images/3.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='3.5') {
   	echo '<img src="images/3.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='4') {
   	echo '<img src="images/4.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='4.5') {
   	echo '<img src="images/4.5.png" width="110px" height="25px" >';
   }
   elseif ($ratings=='5') {
   	echo '<img src="images/5.png" width="110px" height="25px" >';
   }
  	}
  	?>
    </div>
   </div>
   <div style="float: left;margin-left: 30px">
<?php if ($comm1=='') {
	echo'<textarea rows="7" cols="40" name="com" placeholder="Comment" style="font-size: 15px" required ></textarea >
	<br>
	<input type="hidden" name="oid" value="'.$oid.'">
   	<input type="submit" id="s123" name="r" value="Submit">
   	</form>';
} else{
   ?>
   <?php 
   
   ?>
   <p>Comment: </p>

   <p style="font-size: 15px;border-color: white;color: grey"><?php echo $comm1; ?></p >
   <br clear="both">
   
   <?php
   }
   ?>
   
   </div>
   
  
  	<br clear="both"><br>

<?php
}
}
}
}
else{
  echo'<p style="font-size:160px" align="center">&#9785;</p>
  <h2 style="font-size:25px;color:grey" align="center" >Looks like you haven&#39t purchased anything yet. click <a href="index.php">here </a>to continue shopping.</h2>';
}
?>
<!-- This is for the display -->

<script src="jquery.min(1).js"></script>
<!-- <script>
$(document).ready(function () {
$("#demo1 .stars").click(function () {

var label = $("label[for='" + $(this).attr('id') + "']");

$("#feedback").text(label.attr('title'));
$(this).attr("checked");
});
});
</script> -->
</body>
</html>