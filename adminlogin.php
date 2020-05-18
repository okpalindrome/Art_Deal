<?php
session_start();
if(isset($_SESSION['Admin']))
{
	header('location:admininterface.php');
}
if(isset($_POST['adminsubmit']))
{
	
	include('dbcon.php');
	$uname1= mysql_real_escape_string($_POST['uname']);
	$pwd1=mysql_real_escape_string($_POST['pwd']);
	
	$query=mysql_query("select * from admin where emailid='$uname1' and password='$pwd1'");
	$row=mysql_fetch_array($query);
	// $dbuname=$row['name'];
	// $dbpass=$row['password'];
	
	if($row)
	{
		
         $_SESSION['Admin'] = $row['admin_id'];
		
		header('location:admininterface.php');
		
	}
	else
	{
		header("location:adminlogin.php?id='error'");
	}

}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
	</head>
	<style type="text/css">
#emailidd{
    border: 1px solid #EEE;
    outline-color: #E45D5D;
    width: 96%;
    font-size: 1em;
    padding: 0.5em;
}
	</style>
	<body>
		<!---start-wrap---->
			
			<!---//End-header---->
		<!--- start-content---->
	<div class="wrap" style="width:90%">
		<br>
		<br>
		<br>
		<br>
		<div class="content login-box">
			<div class="login-main" style="border-top:none; ">
					
					<div class="login-right" style="margin:0 180px 0 0">
						<h3 style="font-size:20px">ADMINISTRATOR</h3>
						<form method="post">
							<div>
								<span>User name<label>*</label></span>
								<input type="email" id="emailidd" name="uname" required> 
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input  style="border: 1px solid #EEE;outline-color: #E45D5D;width: 96%;
								font-size: 1em;padding: 0.5em;" type="password" name="pwd" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required minlength="10"> 
							</div>
							<p style="color:red">
						<?php 
							if (isset($_GET['id'])=='error') {
								echo "Invalid username or password";
							}
						?> </p>
							<input type="submit" name="adminsubmit" value="Login" style="float: right;">
						</form><a class="forgot" href="forgotpasspage.php">Forgot Your Password?</a>
						
					</div>
					</div>
					</div>
					</div>


</body>
</html>
