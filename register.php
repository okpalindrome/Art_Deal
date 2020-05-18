<?php 
if(isset($_POST['submitbtn'])){
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("art_deal",$con) or die("db not found");


	$varport= mysql_real_escape_string(isset($_POST['isportrait']));
	$varteacher= mysql_real_escape_string(isset($_POST['isteacher']));
	$varwallp= mysql_real_escape_string(isset($_POST['iswallpainter']));
if($varport=="off"){
	$varport="on";
}
if($varteacher=="off"){
	$varteacher="on";
}
if($varwallp=="off"){
	$varwallp="on";
}
	$varfirstname= mysql_real_escape_string($_POST['fname']);
	$varlastname= mysql_real_escape_string($_POST['lname']);
	$varemail= mysql_real_escape_string($_POST['emailid']);
	$vardob= mysql_real_escape_string($_POST['dob']);
	$varcontact= mysql_real_escape_string($_POST['contnum']);
	$varquali= mysql_real_escape_string($_POST['quali']);
	$varaddr= mysql_real_escape_string($_POST['addr']);
	$varcity= mysql_real_escape_string($_POST['city']);
	$varweblink= mysql_real_escape_string($_POST['weblink']);
	if($varweblink==''){
		$varweblink="null";
	}
	$varexper= mysql_real_escape_string($_POST['exper']);
	
	$varfirstpass= mysql_real_escape_string($_POST['firstpass']);
	$varsecondpass= mysql_real_escape_string($_POST['secondpass']);
	
	$filename1=$_FILES['samplepaint1']['name'];
	$tmpname1=$_FILES['samplepaint1']['tmp_name'];
	$target1='samplepaints/';

	$filename2=$_FILES['samplepaint2']['name'];
	$tmpname2=$_FILES['samplepaint2']['tmp_name'];
	$target2='samplepaints/';




if ($varfirstpass==$varsecondpass) {
	
$query=mysql_query("insert into artist(`first_name`, `last_name`, `dob`, `emailid`, 
		`contact`, `address`, `city`, `qualification`, `sample_paint1`,`sample_paint2`,`profile_img`, `experience`, 
		`website_link`, `acc_status`, `rank_review`,
	 `is_portrait`, `is_teacher`, `is_wallpainter`, `notification`,`description`, `password`)
	values('$varfirstname','$varlastname','$vardob','$varemail','$varcontact',
    '$varaddr','$varcity','$varquali','$filename1','$filename2','','$varexper','$varweblink','fresh','','$varport','$varteacher',
    '$varwallp','','','$varsecondpass')") or die(mysql_error($con));
if($query)
{
	move_uploaded_file($tmpname1, $target1.$filename1);
	move_uploaded_file($tmpname2, $target2.$filename2);
	?><script type="text/javascript">
	alert('successfully registered');
	window.location='login.php';
	</script>
	<?php
}
}
else{
	echo '<script>alert("The password is not matching try again")</script>';
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
	
.register-grids form input[type="file"] {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}
#emailid{
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}
#urlid {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}
.register-grids form input[type="date"] {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}
.register-grids form select {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}</style>
<style type="text/css">
	#gridd{
	width: 46%;
	float: left;
	margin: 0.5em;
}
</style>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<?php include('header.php') ?>
			<!---//End-header---->
		<!--- start-content---->
		<div class="wrap" style="width:90%">
		<div class="content login-box">
			<div class="login-main">
				
					<h1 style="font-size:30px">CREATE AN ARTIST ACCOUNT</h1>
					<div class="register-grids">
						<form method="post" enctype="multipart/form-data"> 
								<div class="register-top-grid">
										<h3>PERSONAL AND LOGIN INFORMATION</h3>
										<div id="gridd">
											<span>First Name<label>*</label></span>
											<input type="text" name="fname" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>
										<div id="gridd">
											<span>Last Name<label>*</label></span>
											<input type="text" name="lname" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>
										<div id="gridd">
											<span>Email Address<label>*</label></span>
											<input type="Email" id="emailid" name="emailid" required> 
										</div>
										<div id="gridd">
											<span>Date of birth<label>*</label></span>
											<input type="date" name="dob" id="dobb" onchange="caldob()" required> 
										</div>
										
										<div id="gridd">
											<span>Contact number<label>*</label></span>
											<input type="text" name="contnum" pattern="(7|8|9)\d{9}" title="Only Mobile number starting from either 9 or 8 or 7"  required> 
										</div>
										<div id="gridd">
											<span>Qualification<label>*</label></span>
											<input type="text" name="quali" required> 
										</div>
										<div id="gridd">
											<span>Address<label>*</label></span>
											<input type="text" pattern="[a-z A-Z 0-9]+" name="addr" required> 
										</div>
										<div id="gridd">
											<span>City<label>*</label></span>
											<input type="text" name="city" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>
										
									
										<div id="gridd">
											<span>Your website URL(optional)<label>*</label></span>
											<input type="URL" id="urlid" title="Match the format: http://..." name="weblink"> 
										</div>	
										<div id="gridd">
											<span>Experience<label>*</label></span>
											<select name="exper" required>
												<option value="1">1</option><option value="2">2</option><option value="3">3</option>
												<option value="4">4</option><option value="5">5</option><option value="Above 5">5+</option>
											</select> 
										</div>
										<div id="gridd">
											<span>Sample paint one to authenticate yourself<label>*</label></span>
											<input type="file" value="Upload images" name="samplepaint1" accept="image/*" required> 
										</div>
										<div id="gridd">
											<span>Sample paint two to authenticate yourself<label>*</label></span>
											<input type="file" value="Upload images" name="samplepaint2" accept="image/*" required> 
										</div>
										<div class="clear"> </div>

											<p class="news-letter" >
												<label class="checkbox">
												<input type="checkbox" name="isportrait" value="off">
												<i> </i>I'm ready to do the client's portrait</label>
											</p>
											<p class="news-letter" >
												<label class="checkbox">
												<input type="checkbox" name="isteacher" value="off">
												<i> </i>I'm ready to teach my art skills to the requested user's</label>
											</p>
											<p class="news-letter" >
												<label class="checkbox">
												<input type="checkbox" name="iswallpainter" value="off" >
												<i> </i>I'm ready to paint on wall's for the requested client</label>
											</p>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										
										<div id="gridd">
											<span>Password<label>*</label></span>
											<input style="border: 1px solid #EEE;outline-color: #E45D5D;
											width: 96%;font-size: 1em;padding: 0.5em;" type="password" name="firstpass" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required >
										</div>
										<div id="gridd">
											<span>Confirm Password<label>*</label></span>
											<input style="border: 1px solid #EEE;outline-color: #E45D5D;
											width: 96%;font-size: 1em;padding: 0.5em;" type="password" name="secondpass" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="UpperCase, LowerCase and Number" minlength="10" required>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="Register" name="submitbtn" />
								<br>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			function caldob()
			{
					var date1 = new Date();
					var  dob= document.getElementById("dobb").value;
					var date2=new Date(dob);
					
					var y1 = date1.getFullYear(); //getting current year
					var y2 = date2.getFullYear(); //getting dob year
					var age = y1 - y2;           //calculating age 
					
					if(age < 18)
					{
						alert('Age should be 18 or above');
						document.getElementById("dobb").value = "";
					}
					

			}
		</script>

		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
<?php include('footer.php'); ?>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>

