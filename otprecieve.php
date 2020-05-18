<?php 
date_default_timezone_set("Asia/Kolkata");
$user=$_GET['user'];
include('dbcon.php');
if (isset($_POST['vbtn'])) {
	$rotp=$_POST['rrotp'];
	$q=mysql_query("select * from verify where otp='$rotp'");
	if (mysql_num_rows($q)>0) {
		$row=mysql_fetch_array($q);
		$dbtime=$row['time'];
		$accid=$row['acc_id'];
		$deadline1=strtotime("+10 minutes", strtotime($dbtime));
		$deadline2=(date("g:i:s",$deadline1));
		$cur=date("g:i:s");
		if ($deadline2>$cur) {
			?><script type="text/javascript">
				alert("Success");
				window.location="resetpass.php?id=<?php echo $accid; ?>&&u=<?php echo $user; ?>";
			</script>
			<?php
			// header('location:resetpass.php?id='.$accid.'&&u='.$user);
			$del=mysql_query("delete from verify");
		}
		else{
			?><script type="text/javascript">
				alert("Time out, you took more than 10 minutes, sorry try again");
				window.location="forgotpasspage.php";
			</script>
			<?php
			// header('location:forgotpasspage.php');
		}
	}
	else{
		?>
			<script type="text/javascript">
				alert("The OTP number is incorrect. try again");
			</script><?php
	}
	
}
 ?>
<?php  
// include('dbcon.php');
$vtableid=$_GET['vid'];
$user=$_GET['user'];
$uno=$_GET['nu'];
$uid=$_GET['fpuid'];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		
<style type="text/css">
.login-right input[type="text"] {
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
				
					<!-- <h1 align="center" style="font-size: 20px">Forgot your password don't worry </h1> -->
					<div class="login-right" >
						<h3 style="font-size:20px">Enter the OTP Number</h3>
						<form method="post">
							<div>
								<input type="text" pattern="[0-9]+" name="rrotp" title="Only numbers" required> 
							</div>
							<p style="color: grey">If u Haven't recieved OTP sms yet click <a href="resendotp.php?vid=<?php echo $vtableid; ?>&&user=<?php echo $user; ?>&&nu=<?php echo $uno; ?>&&fpuid=<?php echo $uid; ?>">Here.</a></p>
							<br>
							<input type="submit" name="vbtn" value="Proceed" style="float: right">
						</form>
					</div>
				</div>
			</div>
		</div>
</body>

</html>
