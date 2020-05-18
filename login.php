<?php

if(isset($_SESSION['login_artist']))
{
	header('location:artistprofile.php');
}
if(isset($_POST['artistbtn']))
{
	
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("art_deal",$con) or die("db not found");
	$uname= mysql_real_escape_string($_POST['artistemail']);
	$pwd=mysql_real_escape_string($_POST['artistpass']);
	
	$query=mysql_query("select * from artist where emailid='$uname' and password='$pwd'");

	if($r=mysql_fetch_array($query))
	{
		session_start();

         $_SESSION['login_artist'] = $r['artist_id'];
         $_SESSION['artist'] = true;
         
		
	
	header("location:index.php");
		
}
	else
	{
		header("location:login.php?id='error'");
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
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<script src="js/jquery.min.js"></script>
		<!----start-alert-scroller---->
		<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		
		<!-- //End menu -->
		<!---move-top-top---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!---//move-top-top---->
	</head>
	<style type="text/css">
.login-right input[type="email"] {
    border: 1px solid #EEE;
    outline-color: #E45D5D;
    width: 96%;
    font-size: 1em;
    padding: 0.5em;
}
	</style>
	<body>
		<!---start-wrap---->
			<?php include('header.php') ?>
			<!---//End-header---->
		<!--- start-content---->
		<div class="content login-box">
			<div class="login-main" style="border-top: none;">
				<div class="wrap">
					<h1 style="margin-left:50px">LOGIN</h1>
					<div class="login-right">
						<h3 style="font-size:20px">REGISTERED ARTISTS</h3>
						<p>If you have an account with us, please log in.</p>
						<form method="post">
							<div>
								<span>Email Address<label>*</label></span>
								<input type="email" name="artistemail" required> 
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input style="border: 1px solid #EEE;outline-color: #E45D5D;width: 96%;
								font-size: 1em;padding: 0.5em;" type="password" name="artistpass" 
								pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required> 
							</div>
							<p style="color:red">
						<?php 
							if (isset($_GET['id'])=='error') {
								echo "Invalid username or password";
							}
						?> </p>
							<a class="forgot" href="forgotpasspage.php">Forgot Your Password?</a>
							<input type="submit" name="artistbtn" value="Login" />
							<br>
							<br>
							<a class="forgot" href="register.php"><h3>CREATE A ARTIST ACCOUNT</h3></a>
						</form>
					</div>
					<div class="login-right">
						<h3 style="font-size:20px">REGISTERED CUSTOMERS</h3>
						<p>If you have an account with us, please log in.</p>
						<form method="post" action="login_user.php">
							<div>
								<span>Email Address<label>*</label></span>
								<input type="email" name="uname" required> 
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input style="border: 1px solid #EEE;outline-color: #E45D5D;width: 96%;
								font-size: 1em;padding: 0.5em;"type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" name="userpwd" required> 
							</div>
							<p style="color:red">
							<?php 
							if (isset($_GET['id2'])=='error') {
								echo "Invalid username or password";
							}
						?>
						</p>
							<a class="forgot" href="forgotpasspage.php">Forgot Your Password?</a>
							<input type="submit" name="uloginbtn" value="Login" />
							<br>
							<br>
							
							<a class="forgot" href="userregister.php"><h3>CREATE A USER ACCOUNT</h3></a>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
<?php include('footer.php'); ?>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>

