<?php  
// date_default_timezone_set("Asia/Kolkata");
// $t=date("g:i:s ");
// echo $t."<br>";
// $tt=date("g:i:s",time()+1800);
// echo $tt."<br>";
// $deadline=strtotime("+15 minutes", strtotime($tt));
// echo (date("g:i:s",$deadline));
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		
		<style type="text/css">
.login-right input[type="password"] {
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
						<h3 style="font-size:20px">Enter new password</h3>
						<form method="post">
							<div>
								<span>Password<label>*</label></span>
								<input type="password" name="firstpass" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required> 
							</div>
							<div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="secondpass" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required> 
							</div>
							<p style="color: grey">The passowrd will be reset to your account.</p>
							<br>
							<input type="submit" name="rvbtn" value="Reset" style="float: right">
						</form>
					</div>
				</div>
			</div>
		</div>
</body>
<?php 
$id=$_GET['u'];
$accidd=$_GET['id'];
include('dbcon.php');
if (isset($_POST['rvbtn'])) {
	$pass1=$_POST['firstpass'];
	$pass2=$_POST['secondpass'];
	if ($pass1==$pass2) {
		if ($id=='A') {
			$query=mysql_query("update artist set password='$pass2' where artist_id='$accidd'");
			?>
			<script type="text/javascript">
				alert('Successfully changed the password');
				window.location="login.php";
			</script>
			<?php
		}
		elseif ($id=='C') {
			$query=mysql_query("update user set password='$pass2' where user_id='$accidd'");
			?>
			<script type="text/javascript">
				alert('Successfully changed the password');
				window.location="login.php";
			</script>
			<?php
		}
		elseif ($id=='Ad') {
			$query=mysql_query("update admin set password='$pass2' where admin_id='$accidd'");
			?>
			<script type="text/javascript">
				alert('Successfully changed the password');
				window.location="login.php";
			</script>
			<?php
		}
	}
}
 ?>
</html>
