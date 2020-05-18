
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		
		<style type="text/css">
.login-right input[type="Email"] {
    border: 1px solid #EEE;
    outline-color: #E45D5D;
    width: 96%;
    font-size: 1em;
    padding: 0.5em;
}


.login-right {
    /*float: right;*/
    width: 63%;
    margin-right: 0;
    border: 1px solid #EEE;
    padding: 1em 1.5em;
}
</style>
</head>
<body>
		
		<!--- start-content----><br clear="both"><br>
			<br><br clear="both">
		<div class="wrap" style="width:90%">
			
		<div class="content login-box" >
			<div class="login-main" style="border-top: none;">
				
					<h1 align="center" style="font-size: 20px">Forgot your password don't worry </h1>
					<div class="login-right" >
						<h3 style="font-size:20px">Registered Account</h3>
						<form method="post">
							<div>
								<span>I Am<label>*</label></span>
								<input type="radio" name="r" value="C">Customer
								<input type="radio" name="r" value="A">Artist
								<input type="radio" name="r" value="Ad">Admin
							</div>
							<div>
								<span>Email Id<label>*</label></span>
								<input type="Email" name="emailid" title="Incorrect email id" required> 
							</div>
							<div>
								<span>Contact no<label>*</label></span>
								<input type="text" name="contno" pattern="(7|8|9|6)\d{9}" title="Only Mobile number starting from either 9 or 8 or 7" maxlength="12" minlength="10" required> 
							</div>
							<p style="color: grey">Please enter the contact number associated with account. Confirmation code will be sent to your number.</p>
							<br>
							<input type="submit" name="fpbtn" value="Proceed" style="float: right">
						</form>
					</div>
				</div>
			</div>
		</div>
<?php 
include('dbcon.php');
date_default_timezone_set("Asia/Kolkata");
if (isset($_POST['fpbtn'])) {
	$em=$_POST['emailid'];
	$co=$_POST['contno'];
	$user=$_POST['r'];

if($user=='A'){
	$q=mysql_query("select * from artist where emailid='$em' and contact='$co'") or die(mysql_error());
	if (mysql_num_rows($q)>0) {
		$row=mysql_fetch_array($q);
		$artid=$row['artist_id'];
		$opt=rand();
		$time=date("g:i:s");
		$ver=mysql_query("INSERT INTO `verify`(`acc_id`, `otp`, `time`) VALUES ('$artid','$opt','$time')") or die(mysql_error());
	
	if ($ver) {
	$co1=$_POST['contno'];
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
    
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="OTP number:'".$opt."'.";
    $client->send($co1,$message);

    sleep(1);
    $client->logout();
    
    $fvid=mysql_query("select * from verify where time='$time'");
	$rowv=mysql_fetch_array($fvid);
	$vvid=$rowv['id'];

    ?>
    <script>
    	alert("The OTP number has been sent to your number. Please verify within 10 minutes.");
    	window.location="otprecieve.php?vid=<?php echo $vvid; ?>&&user=<?php echo $user; ?>&&nu=<?php echo $co; ?>&&fpuid=<?php echo $artid; ?>";
    </script><?php
    // header('location:otprecieve.php?vid='.$vvid.'&&user='.$user);
	}
	}
	else{
		echo '<script type="text/javascript">
			alert("The email id or contact number is incorect");
		</script>';
		
	}
}
if ($user=='C') {
$q1=mysql_query("select * from user where emailid='$em' and contact='$co'")or die(mysql_error());
if (mysql_num_rows($q1)>0) {
	$row=mysql_fetch_array($q1);
	$uid=$row['user_id'];
	$opt=rand();
	$time=date("g:i:s");
	$ver=mysql_query("INSERT INTO `verify`(`acc_id`, `otp`, `time`) VALUES ('$uid','$opt','$time')") or die(mysql_error());
	
	if ($ver) {
	$co2=$_POST['contno'];
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
    
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="OTP number:'".$opt."'.";
    $client->send($co2,$message);

    sleep(1);
    $client->logout();
    
    $fvid=mysql_query("select * from verify where time='$time'");
	$rowv=mysql_fetch_array($fvid);
	$vvid=$rowv['id'];

    ?>
    <script>
    alert("The OTP number has been sent to your number. Please verify within 10 minutes.");
    window.location="otprecieve.php?vid=<?php echo $vvid; ?>&&user=<?php echo $user; ?>&&nu=<?php echo $co; ?>&&fpuid=<?php echo $uid; ?>";
	</script>
	<?php
    //header('location:otprecieve.php?vid='.$vvid.'&&user='.$user);
	}
	}
	else{
		echo '<script type="text/javascript">
			alert("The email id or contact number is incorect");
		</script>';
		
	}
}
if ($user=='Ad') {
	$q2=mysql_query("select * from admin where emailid='$em' and contact='$co'") or die(mysql_error());
	if (mysql_num_rows($q2)>0) {
	$row=mysql_fetch_array($q2);
	$aid=$row['admin_id'];
	$opt=rand();
	$time=date("g:i:s");
	$ver=mysql_query("INSERT INTO `verify`(`acc_id`, `otp`, `time`) VALUES ('$aid','$opt','$time')") or die(mysql_error());
	
	if ($ver) {
	$co3=$_POST['contno'];
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
    
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="OTP number:'".$opt."'.";
    $client->send($co3,$message);

    sleep(1);
    $client->logout();
    
    $fvid=mysql_query("select * from verify where time='$time'");
	$rowv=mysql_fetch_array($fvid);
	$vvid=$rowv['id'];

   ?>
   <script>
   alert("The OTP number has been sent to your number. Please verify within 10 minutes.");
   window.location="otprecieve.php?vid=<?php echo $vvid; ?>&&user=<?php echo $user; ?>&&nu=<?php echo $co; ?>&&fpuid=<?php echo $aid; ?>";
</script>
<?php
    // header('location:otprecieve.php?vid='.$vvid.'&&user='.$user);
	}
	}
	else{
		echo '<script type="text/javascript">
			alert("The email id or contact number is incorect");
		</script>';
		
	}
}
}
 ?>
</body>
</html>
