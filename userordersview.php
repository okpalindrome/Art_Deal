
<!--  -->
<!DOCTYPE html>
<html>
<head>
	<title>Art Deal.com</title>		
		 <link rel="icon" href="images/artdeallogo.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
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
  width: 50%;
  margin-top: 25px;
  margin-left: 10px;
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

#s123 {
	background-color: white;
	border-radius: 3px;
   border: 2px solid grey;
   height: 35px;
   width: 180px;
   cursor: pointer;
   margin-top: 10px;
   
}
.wrap input[type="button"] {
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

<div class="wrap" style="width:90%">

<?php 
include('dbcon.php');
$varuserid=$_SESSION['uid'];
$deliverycharge=50;
$query=mysql_query("select * from orders where user_id='$varuserid'");
if (mysql_num_rows($query)>0) {
while ($row=mysql_fetch_array($query)) 
{
	$oid=$row['id'];
	$varpaintingid=$row['paintings_id'];
  $pwtid=$row['pwtid'];
	$varstatus=$row['status'];
  if ($pwtid=='0') {
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
    if ($varstatus=='Delivered') {
      echo '<a href="givingreview.php"><input type="button" value="Give Review" name="gr"></a>';
    }
    else{
      echo '<a href="userordersview.php?canceloid='.$oid.'"><input type="submit" id="s123" name="cancelo" value="Cancel Order"></a>';
    }
  
}
    ?>

    </div>
   </div>
    <?php
  }
  else{
	$query1=mysql_query("select * from pwt where id='$pwtid'") or die(mysql_error());
	while ($row12=mysql_fetch_array($query1)) {
		$varpaintimage12=$row12['user_img'];
		$artistid12=$row12['artist_id'];
    $ptype=$row12['type'];
		$price12=$row12['price'];
		$artistq2=mysql_query("select * from artist where artist_id='$artistid12'");
		$row32=mysql_fetch_array($artistq2);
		$fname32=$row32['first_name'];
		$lname32=$row32['last_name'];
		$varcont32=$row32['contact'];?>

  

    <div class="column" style="float: left">	
  	<div style="float: left">
  		
  	<img src="userportraitimgs/<?php echo $varpaintimage12 ;?>" class="hover-shadow" style="width:300px;height:200px;">
	</div>
	<div style="float: left;margin-left: 30px;font-size: 18px">
  	<p style="color: grey;">Portrait type: <?php echo $ptype;?></p>
  	<p style="color: grey;margin-top: 10px;">Artist Name: <?php echo $fname32." ".$lname32; ?></p>
  	<p style="color: grey;margin-top: 10px;">Artist contact: <?php echo $varcont32; ?></p>
  	<p style="color: grey;margin-top: 10px;">Total price: <?php echo $price12+$deliverycharge; ?></p>
  	<p style="color: grey;margin-top: 10px;font-size: 22px">Status :<span style="color: green"><?php echo $varstatus; ?></span></p>
  	<?php 
  	if ($varstatus=='Delivered') {
  		echo '<a href="givingreview.php"><input type="button" value="Give Review" name="gr"></a>';
  	}
  	else{
  		echo '<a href="userordersview.php?canceloid='.$oid.'"><input type="submit" id="s123" name="cancelo" value="Cancel Order"></a>';
  	}
  	?>

    </div>
   </div>
  

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

</div>

<?php
include('dbcon.php');
if (isset($_GET['canceloid'])) {
$caoid=$_GET['canceloid'];
$varusid=$_SESSION['uid'];
  $fetchq=mysql_query("select * from orders where id='$caoid'");
  $fetchqr=mysql_fetch_array($fetchq);
  $paintid=$fetchqr['paintings_id'];
  $Cancelq=mysql_query("delete from orders where id='$caoid'") or die(mysql_error());
  $paintstatusq=mysql_query("update paintings set status='Approved' where paintings_id='$paintid'");
  if ($Cancelq) {
    
    $qc=mysql_query("Select * from user where user_id='$varusid'");
    $rc=mysql_fetch_array($qc);
    $uc=$rc['contact'];
    include('way2sms-api.php');
    $client = new WAY2SMSClient();
   
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="Order cancelled successfully. The order id is '".$caoid."'. From ArtDeal.com'";
    $client->send($uc,$message);

    sleep(1);
    $client->logout();
    
    ?>
    <script type="text/javascript">
      alert('Successfully cancelled the order.');
      window.location='userordersview.php';
    </script>

    <?php

  }
}
?>
<br clear="both">
<br>
</body>
<html>