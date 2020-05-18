<?php
session_start();
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Art Deal.com</title>		
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css"><!-- <link href="cartstyles.css" rel='stylesheet' type='text/css' /> -->

</head>
<style type="text/css">
.card,.card-2{
	box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
	display: grid;
  grid-template-columns: 220px 340px;
  grid-gap: 10px;
  padding: 10px;
  width: 45%;
  float: left;
  margin: 5px;
}
.card-4,.hover-shadow:hover{
	box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)
}
.panel{
	padding:0.01em 16px
	}
	.panel{
		margin-top:16px;margin-bottom:16px
	}
	.card > div{
		text-align: left;
  		padding: 10px 0;
	}

.btn{
	background-color: black;
	border:none;
	color: white;
	padding: 15px, 32px;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	cursor: pointer;
	transition: all 0.5s;
}
.btn span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
}
.btn span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -20px;
	transition: 0.5s;
}
.btn:hover span{
	padding-right: 25px;
}
.btn:hover span:after{
	opacity: 1;
	right: 0;
}
#s123 {
   	border: 1px solid black;
	outline-color: black;
	width: 200px;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
	cursor: pointer;
	float: left;
}

#t123 {
    border: 1px solid #EEE;
    outline-color: #E45D5D;
    width: 96%;
    font-size: 1em;
    padding: 0.5em;
}
.wrap span {
    color: #08080B;
    font-weight: 700;
    font-size: 0.875em;
    padding-bottom: 0.2em;
    display: block;
    text-transform: uppercase;
}
</style>
<body>
<?php include('header.php'); ?>
<br>
<div class="wrap" style="width:90%">
<h2 style="font-size:35px;color:grey" align="center" >Items in your cart</h2>
<br>
<?php 
include('dbcon.php');
$varuid=$_SESSION['uid'];
$subtotal=0;
$q=mysql_query("select * from cart where user_id='$varuid'");
while ($r=mysql_fetch_array($q)) {
	$cid=$r['cart_id'];
	$pid=$r['paintings_id'];
	$q1=mysql_query("select * from paintings where paintings_id='$pid'");
	$r1=mysql_fetch_array($q1);
	$varpn=$r1['paint_name'];
	$varaid=$r1['artist_id'];
	$varpaintimg=$r1['paint_image1'];
	$varprice=$r1['price'];
	$q2=mysql_query("select * from artist where artist_id='$varaid'");
	$r2=mysql_fetch_array($q2);
	$fname=$r2['first_name'];
	$lname=$r2['last_name'];
	$qqq3=mysql_query("select * from user where user_id='$varuid'");
	$r3=mysql_fetch_array($qqq3);
	$ufname=$r3['first_name'];
	$ulname=$r3['last_name'];
	$uadd=$r3['address'];
	$ucity=$r3['city'];
	?>

<div class="panel card">
	<div align="center">
	<a href="productdetail.php?varid=<?php echo $pid; ?>"><img src="paint1/<?php echo $varpaintimg; ?>" width="200px" height="200px" ></a></div>
	<div style="color:grey;font-size:18px">
	<p >Cart id: <?php echo $cid; ?></p>
	<br>
	<p >Title: <?php echo $varpn; ?></p><br>
	<p >Artist: <?php echo $fname." ".$lname; ?></p></p><br>
	<p >Price: <?php echo $varprice; $subtotal=$subtotal+$varprice;?></p><br>
	</div>
	<p></p>
	<div style="margin-right: 10px;">
	<form method="post">
		<input type="hidden" name="removeid" value="<?php echo $cid; ?>">
	   <button type="submit" id="s123" name="removebtn" class="btn" style="float: right;width: 50%"><span style="color: white">Remove</span></button>
	</form>
	</div>
	
</div>


<?php
}

 ?>

</div>
<?php
if (isset($_POST['removebtn'])) 
{
include('dbcon.php');
$rid = $_POST['removeid'];
$qu1=mysql_query("delete from cart where cart_id='$rid'");
if($qu1)
{
	header('location:cartdisplaypage.php');
}
}

?>
<br clear="both">
<?php
$checkcart=mysql_query("select * from cart where user_id='$varuid'");

if (mysql_num_rows($checkcart)>0) {
?>
<div class="wrap" style="width:90%">
	<br>
	<h2 style="font-size:35px;color:grey" align="center" >Cart Total</h2>
	<br>
	<br>
<div style="font-size:20px;float: left;">
	
	<table>
	<tr>
		<th style="color:grey;width: 300px;font-size: 25px">Items/Description</th>
		<th style="padding: left:10px;color:grey;font-size: 25px">Price</th>
	</tr>
	<?php
	include('dbcon.php');
	$varuid=$_SESSION['uid'];
	$c=0;
	$q=mysql_query("select * from cart where user_id='$varuid'");
	while ($r=mysql_fetch_array($q)) {
	$cid=$r['cart_id'];
	$pid=$r['paintings_id'];
	$q1=mysql_query("select * from paintings where paintings_id='$pid'");
	$r1=mysql_fetch_array($q1);
	$varpn=$r1['paint_name'];
	$varaid=$r1['artist_id'];
	$varprice=$r1['price'];
	$q12=mysql_query("select * from artist where artist_id='$varaid'");
	$r12=mysql_fetch_array($q12);
	$fname=$r12['first_name'];
	$lname=$r12['last_name'];
	$varacont=$r12['contact'];
	?>

	<tr>
	<td>
	<p><?php echo $varpn; ?></p>
    </td>
    <td>
	<i class="fa fa-inr" aria-hidden="true"></i><?php echo $varprice; ?>
    </td></tr>

	<?php
	$c=$c+50;
}
	?>


	<tr><td>Sub Total</td> <td><i class="fa fa-inr" aria-hidden="true"></i><?php echo $subtotal; ?></td></tr>
	 <tr><td>Delivery charges</td><td> <i class="fa fa-inr" aria-hidden="true"></i><?php echo $c; ?></td></tr>
	 </table>
	 <hr>
	 <h1 style="color: black">Total Amount: <i class="fa fa-inr" aria-hidden="true" style="padding-left: 170px"></i><?php echo $c+$subtotal; ?></h1>
	 <br><br>
	 <br>
</div>
<div style="float: left;margin-left: 15%;color:grey;font-size:20px;">
 <h1><p style="font-size: 25px">Shipped to:</p><p style="color: black"><?php echo $ufname." ".$ulname; ?></p>
 	<p style="color: black"><?php echo $uadd." ".$ucity; ?></p>

 	<a href="cartdisplaypage.php?ch=changeadd" name="change" style="color:grey;font-size:15px;">Change or Edit</a>
 	
 	<p><form method="post">
 		<input type="submit" id="s123" value="Place order" name="placeorderbtn" />
 		</form>
 	</p></h1>
 </div>
 <div style="float: left;margin-left: 15%;color:grey;font-size:20px;">
 	<h1 style="font-size: 25px">Payment option</h1>
 	<p>Cash on Delivery</p>
 </div>
</div>
<?php
}
else{
?>
<center><img src="images/cartEMPTY.png"></center>
<center><h2 style="font-size:25px;color:grey" align="center" >Looks like you have no paintings in your cart. click <a href="index.php">here </a>to continue shopping.</h2></center>
<?php
}
?>
<br>
<br clear="both">
<?php 

?>
</body>
</html>
<?php
//$v=$_GET['ch'];
$uuid=$_SESSION['uid'];
if (isset($_GET['ch'])) {
	$qq2=mysql_query("select * from user where user_id='$uuid'");
	$rrrr=mysql_fetch_array($qq2);
	$rauadd=$rrrr['address'];
	$raucity=$rrrr['city'];
	$varcontact=$rrrr['contact'];
	echo '<div class="wrap" style="width:90%">
						<form method="post">
							<div>
								<span>Address<label>*</label></span>
								<input type="text" id="t123" pattern="[a-z A-Z 0-9]+" name="newuadd" value="'.$rauadd.'"> 
							</div>
							<br>
							<div>
							<span>City<label>*</label></span>
								<input type="text" id="t123" name="newucity" pattern="[a-z A-Z]+" title="Only Letters" value="'.$raucity.'"> 
							</div>
							<br>
			<input type="submit" id="s123" value="Update this address" name="updateadd" />
			</form></div><br><br>';
}
?>
<br>
<br>
<div class="wrap" style="width:90%;font-size:20px;color:grey">
<h2 style="font-size:35px;color:grey" align="center" >Terms and Conditions</h2>
<br clear="both">
<ul style="list-style-type: circle;">
	<li>This website acts just as a middle man between artist/seller and buyer.</li>
	<li>Any kind of commission or charge is not taken from any user.</li>
	<li>The painting you buy from this website, will keeps the record of each transaction.</li>
	<li>The responsibility of delivering the painting is taken by the respected artist.</li>
	<li>We don't support online payment.</li>
	<li>Only cash on delivery option is available.</li>
	<li>The delivery of the painting may be done through the courier or by himself/herself, it depends on the artist.</li>
	<li>The ordered painting delivery status will be sent to the ordered customer.</li>
	<li>If the painting is not delivered properly, the customer can give the feedback to the website admin.</li>
	<!-- <li>The customer request to the artist for the portrait draw or wall painting or to teach</li> -->
</ul>
</div>
<br clear="both">
<?php
if (isset($_POST['updateadd'])) {
	include('dbcon.php');
	$uuid=$_SESSION['uid'];
	$newadd=$_POST['newuadd'];
	$newcity=$_POST['newucity'];
	$upqq=mysql_query("update user set address='$newadd', city='$newcity' where user_id='$uuid'");
	if ($upqq) {
		?>
		<script type="text/javascript">
			alert('Shipping address has been changed, please confirm by the shipping details');
			window.location='cartdisplaypage.php';
		</script><?php

	}
}
?>

<?php
if (isset($_POST['placeorderbtn'])) {

	$poq1=mysql_query("select * from cart where user_id='$uuid'");
	while ($rows=mysql_fetch_array($poq1)) {
		$cartpid=$rows['paintings_id'];
		$fetchart=mysql_query("select * from paintings where paintings_id='$cartpid'");
		$fetchrow=mysql_fetch_array($fetchart);
		$artistid=$fetchrow['artist_id'];
		$poq2=mysql_query("INSERT INTO `orders`(`user_id`,`artist_id`, `pwtid`, `paintings_id`, `ordered_date`, `status`,`rating`,`comment`) VALUES ('$uuid','$artistid','0','$cartpid',now(),'Getting ready','','')");
		$delcart=mysql_query("delete from cart where paintings_id='$cartpid'");
		$paintstatusq=mysql_query("update paintings set status='Sold' where paintings_id='$cartpid'");
	}
	if($poq2)
	{
        $qc=mysql_query("Select * from user where user_id='$uuid'");
        $rc=mysql_fetch_array($qc);
        $uc=$rc['contact'];
        $uname=$rc['first_name']+" "+$rc['last_name'];
        $uemail=$rc['emailid'];
        $uaddr=$rc['address'];
        $ucity=$rc['city'];
		include('way2sms-api.php');
		$client = new WAY2SMSClient();
		$otamt=$c+$subtotal;
		$client->login('9739709481', 'Nc9739709481Nc');
		$message="Order placed. The item will be delivered by '".$fname."' '".$lname."', contact no: '".$varacont."' . Total amt:'".$otamt."' . From ArtDeal.com'";
		$client->send($uc,$message);

		sleep(1);
		$client->logout();

		// $mailq=mysql_query("select * from orders where user_id='$uuid'");
		// $mailrow=mysql_fetch_array($mailq);
		// $artid=$mailrow['artist_id'];
		// $mailqa=mysql_query("select * from artist where artist_id='$artid'");
		// $rowa=mysql_fetch_array($mailqa);
		// $artimail=$rowa['emailid'];
		// $name=$rowa['first_name']+" "+$rowa['last_name'];

		// require 'PHPMailer-master/PHPMailerAutoload.php';

		// $mail = new PHPMailer;
		// $mail->isSMTP();
		// $mail->Host = 'smtp.gmail.com';
		// $mail->SMTPAuth = true;
		// $mail->Username = 'nitinchoudharyn14@gmail.com';
		// $mail->Password = 'nitinchoudharyn14';
		// $mail->SMTPSecure = 'ssl';
		// $mail->Port = 587;
		// $mail->From = 'nitinchoudharyn14@gmail.com';
		// $mail->FromName = 'Nitin';
		// $mail->addAddress('pandunaik18.pn@gmail.com', 'Pandu');
		 
		// $mail->addReplyTo('nitinchoudharyn14@gmail.com', 'Nitin Choudhary');
		 
		// $mail->WordWrap = 50;
		// $mail->isHTML(true);
		 
		// $mail->Subject = 'Approval';
		// $mail->Body    = 'Hello';
		//  // Customer Name:'. $uname .' \n Email id: '.$uemail.'\n Address: '.$uaddr.'\n City: '.$ucity.'\n Contact no: '.$uc.'\n Art Deal.com
		// if(!$mail->send()) {
		//    echo 'Message could not be sent.';
		//    echo 'Mailer Error: ' . $mail->ErrorInfo;
		//    exit;
		// }
		 
		//         echo "<script>alert('Mail sent Successfully!!'); window.location='pagelink';</script>";


		echo '
		<script>
		alert("Successfully placed the order. You will get order updates notification. Thank you for shopping, enjoy...");
		window.location="cartdisplaypage.php";
		</script>';

	}
		
}
?>

<?php
}
else
{
	echo"
	<script>
	alert('Please login-in with a registered user account');
	window.location='login.php';
	</script>
	";
}
?>