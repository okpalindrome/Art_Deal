
<!DOCTYPE html>
<html>
<head>
	<title>Art Deal.com</title>		
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css"><!-- <link href="cartstyles.css" rel='stylesheet' type='text/css' /> -->
</head>
<body>
    <?php include('artistheader.php'); ?>

<div class="wrap" style="width:90%">

<?php 
include('dbcon.php');
$varartid=$_SESSION['login_artist'];
$q1=mysql_query("select * from paintings where artist_id='$varartid'");
while ($r1=mysql_fetch_array($q1)) {
    $pid=$r1['paintings_id'];
    $pname=$r1['paint_name'];
    $pimg=$r1['paint_image1'];
    $q2=mysql_query("select * from orders where paintings_id='$pid'");
    if($r2=mysql_fetch_array($q2)){
    $user_id1=$r2['user_id'];
    $stat=$r2['status'];
    $ratings=$r2['rating'];
    $comment=$r2['comment'];
    $q3=mysql_query("select * from user where user_id='$user_id1'");
    $r3=mysql_fetch_array($q3);
    $fname=$r3['first_name'];
    $lname=$r3['last_name'];?>

    <div class="column" style="float: left">    
    <div style="float: left">
    <a href="productdetail.php?varid=<?php echo $pid; ?>"><img src="paint1/<?php echo $pimg; ?>" class="hover-shadow" style="width:300px;height:200px;"></a>
    </div>
    <div style="float: left;margin-left: 30px;font-size: 18px">
    <p style="color: grey;">Paint Name: <?php echo $pname; ?></p>
    <p style="color: grey;margin-top: 10px;">Customer Name: <?php echo $fname." ".$lname; ?></p>
    <p style="color: grey;margin-top: 10px;">Status: <span style="color: green"><?php echo $stat; ?></span></p>
    <p style="margin-top: 10px;">
    <?php 
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
     ?></p>
     
     </div>
     <div style="float: left;margin-left: 30px">
         <p>Comment: </p>
         <p style="font-size: 20px;border-color: white;color: grey"><?php echo $comment; ?></p>
     </div>
 </div>
 <br clear="both">
 <br>
     <?php
}
}
 ?>




 <!-- Portriat reviews -->
 <?php 
include('dbcon.php');
$varartid=$_SESSION['login_artist'];
$q1=mysql_query("select * from pwt where artist_id='$varartid' and portrait='1'") or die(mysql_error());
while ($r1=mysql_fetch_array($q1)) {
    $pid=$r1['id'];
    $puimg=$r1['user_img'];
    $ptype=$r1['type'];
    $q2=mysql_query("select * from orders where pwtid='$pid'");
    if($r2=mysql_fetch_array($q2)){
    $user_id1=$r2['user_id'];
    $stat=$r2['status'];
    $ratings=$r2['rating'];
    $comment=$r2['comment'];
    $q3=mysql_query("select * from user where user_id='$user_id1'");
    $r3=mysql_fetch_array($q3);
    $fname1=$r3['first_name'];
    $lname1=$r3['last_name'];?>

    <div class="column" style="float: left">    
    <div style="float: left">
    <a href="productdetail.php?varid=<?php echo $pid; ?>"><img src="userportraitimgs/<?php echo $puimg; ?>" class="hover-shadow" style="width:300px;height:200px;"></a>
    </div>
    <div style="float: left;margin-left: 30px;font-size: 18px">
    <p style="color: grey;">Portrait Type: <?php echo $ptype; ?></p>
    <p style="color: grey;margin-top: 10px;">Customer Name: <?php echo $fname1." ".$lname1; ?></p>
    <p style="color: grey;margin-top: 10px;">Status: <span style="color: green"><?php echo $stat; ?></span></p>
    <p style="margin-top: 10px;">
    <?php 
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
     ?></p>
     
     </div>
     <div style="float: left;margin-left: 30px">
         <p>Comment: </p>
         <p style="font-size: 20px;border-color: white;color: grey"><?php echo $comment; ?></p>
     </div>
 </div>
 <br clear="both">
 <br>
     <?php
}
}
 ?>
</body>
</html>
