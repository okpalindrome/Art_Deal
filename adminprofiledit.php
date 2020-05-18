<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
			<link href="css/style.css" rel='stylesheet' type='text/css' />
		
	</head>
	<style type="text/css">
#submitid {
   	border: 1px solid black;
	outline-color: black;
	width: 45%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
	cursor: pointer;
	float: right;
}
#emailidd{
    border: 1px solid #EEE;
    outline-color: #E45D5D;
    width: 96%;
    font-size: 1em;
    padding: 0.5em;
    font-family: 'Open Sans', sans-serif;
}
	</style>
	<body>
		<?php include('adminheader.php'); ?>
		<br>

<?php 
include('dbcon.php');
$aa=$_SESSION['Admin'];
$sql=mysql_query("select * from admin where admin_id='$aa'");
if ($r=mysql_fetch_array($sql)) {
	$name=$r['name'];
	$email=$r['emailid'];
	$cont=$r['contact'];
	$addr=$r['address'];
	$pass=$r['password'];
}
?>
<div class="wrap" style="width:90%">
		<form method="post" enctype="multipart/form-data">

								<div class="register-top-grid">
									<br>
										<div id="gridd">
											<span>Full Name<label>*</label></span>
											<input type="text" name="fname" value="<?php echo $name; ?>" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>
										
										<div id="gridd">
											<span>Email id<label>*</label></span>
											<input type="Email" id="emailidd" name="emailid" value="<?php echo $email; ?>"> 
										</div>
										<div id="gridd">
											<span>Contact Number<label>*</label></span>
											<input type="text" name="contnum" value="<?php echo $cont; ?>" pattern="(7|8|9)\d{9}" title="Only Mobile number starting from either 9 or 8 or 7"  required>
									
										</div>
										
										<div id="gridd">
											<span>Address<label>*</label></span>
											<input type="text" name="addr" value="<?php echo $addr; ?>" pattern="[a-z A-Z 0-9]+" name="addr" required> 
										</div>
										
										<div id="gridd">
											<span>Password<label>*</label></span>
											<input style="border: 1px solid #EEE;outline-color: #E45D5D;
											width: 96%;font-size: 1em;padding: 0.5em;" type="password" name="firstpass" value="<?php echo $pass; ?>" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required>
										</div>
										<div id="gridd">
											<span>Confirm Password<label>*</label></span>
											<input style="border: 1px solid #EEE;outline-color: #E45D5D;
											width: 96%;font-size: 1em;padding: 0.5em;" type="password" 
											name="secondpass" value="<?php echo $pass; ?>" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required>
										</div>
										<div class="clear"> </div>
										<div class="clear"> </div>
								</div>

								<input type="submit" id="submitid" value="Done" name="updatebtn" style="float: left" />
								<br>
						</form></div>
						<?php
	if (isset($_POST['updatebtn'])) {
		include('dbcon.php');
		$aa1=$_SESSION['Admin'];
		$vfullname=mysql_real_escape_string($_POST['fname']);
		$vemail=mysql_real_escape_string($_POST['emailid']);
		$vaddr= mysql_real_escape_string($_POST['addr']);
		$vc=mysql_real_escape_string($_POST['contnum']);
		$vpass1=mysql_real_escape_string($_POST['firstpass']);
		$vpass2=mysql_real_escape_string($_POST['secondpass']);
		if ($vpass1==$vpass2) 
		{			
			$sqlq=mysql_query("update admin set name='$vfullname', contact='$vc', address='$vaddr', emailid='$vemail', password='$vpass2' where admin_id='$aa1'");
			if ($sqlq) {
				?>
				<script type="text/javascript">
					alert('Successfully updated');
					window.location='admininterface.php';
				</script><?php
			}
		}
		else {
			?>
				<script type="text/javascript">
					alert('The password is not matching');
					window.location='adminprofiledit.php';
				</script><?php
		}
		
	}
	 ?>
	</body>
	</html>
	