<?php 
date_default_timezone_set("Asia/Kolkata");
include('dbcon.php');
$vtableid=$_GET['vid'];
$user=$_GET['user'];
$uno=$_GET['nu'];
$uid=$_GET['fpuid'];

	$opt=rand();
	$time=date("g:i:s");
	$qdelete1=mysql_query("delete from verify") or die(mysql_error());
	$ver=mysql_query("INSERT INTO `verify`(`acc_id`, `otp`, `time`) VALUES ('$uid','$opt','$time')") or die(mysql_error());
	
	if ($ver) 
    {
	$co2=$_GET['nu'];
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
    
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="OTP number:'".$opt."'.";
    $client->send($co2,$message);

    sleep(1);
    $client->logout();
    ?>
    <script type="text/javascript">
    	alert("The OTP number has been sent again to your number. Please verify within 10 minutes.");
        window.location='otprecieve.php?vid=<?php echo $vtableid; ?>&&user=<?php echo $user; ?>&&nu=<?php echo $uno; ?>&&fpuid=<?php echo $uid; ?>'
    </script>
    <?php
    }

?>