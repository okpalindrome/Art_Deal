
<!DOCTYPE html>
<html>
<head>
	<title>Art Deal.com</title>
	<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="js/jquery.min.js"></script>
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
		<!---slider---->
		<link rel="stylesheet" href="css/slippry.css">

		<link rel="stylesheet" href="css/imagestyles.css">

		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
	
		<!----//End-pricerage-seletion---->
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
		<style>

</style>
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
.register-grids form input[type="date"] {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}
#emailidd, #urlid {
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
#newartist{
	width: 160px;
	height: 200px;
	border: 5px solid white;
	border-radius: 100px;
	}
	#new{
	width: 160px;
	height: 200px;
	border: 5px solid white;
	border-radius: 100px;
	}
	#abc{
	width: 160px;
	height: 200px;
	border: 5px solid white;
	border-radius: 100px;
	/*display: none;*/	
	}
	#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
}

/*Update btn */
#s123 {
    background: #E45D5D;
    color: #FFF;
    font-size: 0.8em;
    padding: 0.7em 1.2em;
    border-radius: 5px;
    border-bottom: 4px solid #B93838;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    display: inline-block;
    font-family: 'Open Sans', sans-serif;
    cursor: pointer;
    outline: none;
    text-transform: uppercase;
    border-right: none;
    border-left: none;
    border-top: none;
    float: left;
}

.wrap span {
    color: #08080B;
    font-weight: 700;
    font-size: 0.875em;
    padding-bottom: 0.2em;
    display: block;
    text-transform: uppercase;
    float: left;
}
</style>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<?php include('artistheader.php') ?>
			<!---//End-header---->
		<!--- start-content---->
		<div class="wrap" style="width:90%">
		<div class="wrap" style="width:90%">
		 
<?php 
include('dbcon.php');
$varr=$_SESSION['login_artist'];
$query=mysql_query("select * from artist where artist_id='$varr'");

$row=mysql_fetch_array($query);
  $varfname=$row['first_name'];
  $varlname=$row['last_name'];
  $varemailid=$row['emailid'];
  $varcontact=$row['contact'];
  $varaddress=$row['address'];
  $varcity=$row['city'];
  $varquali=$row['qualification'];
  $varexp=$row['experience'];
  $varweblink=$row['website_link'];
  $varisportrait=$row['is_portrait'];
  $variswallpainter=$row['is_wallpainter'];
  $varisteacher=$row['is_teacher'];
  $varprofile=$row['profile_img'];
  $vardescribe=$row['description'];
 $pass=$row['password'];
  ?>
  <h1 style="font-size:30px">Edit profile information</h1>
  <div>
						<form method="post" enctype="multipart/form-data"> 
							
					
					<?php 
					if ($varprofile=='') {
							echo '<img src="ii.png" id="newartist">';
							echo'<label for="upload-photo" style="font-size: 26px;margin-left: 0px;cursor: pointer;"><i class="fa fa-folder-open"></i></label>
							<input type="file" name="profileimg" id="upload-photo" onchange="previewFile()" accept="image/*">
							<br>
							<br>
							<center><input type="submit" id="s123" value="Update image" name="upimg" /></center>';
							}
					else
					{
						echo '<img src="artistprofiles/'.$varprofile.'" id="newartist">';
						echo'<label for="upload-photo" style="font-size: 26px;margin-left: 0px;cursor: pointer;"><i class="fa fa-folder-open"></i></label>
						
							<input type="file" name="profileimg" id="upload-photo"  onchange="previewFile()" accept="image/*">
							<br>
							<br>
							<center><input type="submit" id="s123" value="Update image" name="upimg" /></center>';
					}
					?>
					
							<!-- <img src="" id="abc"> -->
							
						
</form>

						<br>
							<script>
							function previewFile(){
							var preview = document.getElementById('newartist');

							var file    = document.querySelector('input[type=file]').files[0]; //sames as here

							var reader  = new FileReader();
							
							reader.onloadend = function () {
							preview.src = reader.result;

							}

							if (file) {
							reader.readAsDataURL(file); //reads the data as a URL
							} // else {
							// reader.readAsDataURL(<?php //echo $varprofile; ?>);  
							// }
							}

							// previewFile();  //calls the function named previewFile()
							</script>
							</div>
							<br clear="both">
						<form method="post" enctype="multipart/form-data">

								<div class="register-top-grid">
									<br>
										<div id="gridd">
											<span>First Name<label>*</label></span>
											<input type="text" name="fname" value="<?php echo $varfname ?>" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>
										<div id="gridd">
											<span>Last Name<label>*</label></span>
											<input type="text" name="lname" value="<?php echo $varlname ?>" pattern="[a-z A-Z]+" title="Only Letters" required>
									
										</div>
										<div id="gridd">
											<span>Email id<label>*</label></span>
											<input type="Email" id="emailidd" name="emailid" value="<?php echo $varemailid ?>" required> 
										</div>
										<div id="gridd">
											<span>Contact Number<label>*</label></span>
											<input type="text" name="contnum" value="<?php echo $varcontact ?>" pattern="(7|8|9)\d{9}" title="Only Mobile number starting from either 9 or 8 or 7"  required>
									
										</div>
										
										<div id="gridd">
											<span>Address<label>*</label></span>
											<input type="text" name="addr" value="<?php echo $varaddress ?>" pattern="[a-z A-Z 0-9]+" required> 
										</div>
										<div id="gridd">
											<span>City<label>*</label></span>
											<input type="text" name="city" value="<?php echo $varcity ?>" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>
										<div id="gridd">
											<span>Website url<label>*</label></span>
											<input type="url" id="urlid" name="weblink" value="<?php echo $varweblink ?>"> 
										</div>
										<div id="gridd">
											<span>Qualification<label>*</label></span>
											<input type="text" name="quali" value="<?php echo $varquali ?>" required> 
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
							<?php 
							if($varisportrait==1){
								echo '<p class="news-letter" >
												<label class="checkbox">
												<input type="checkbox" name="isportrait" checked>
												<i> </i>I&apos;m ready to do the client&apos;s portrait</label>
								</p>';
							}
							else
							{

								
								echo '<p class="news-letter" >
												<label class="checkbox">
												<input type="checkbox" name="isportrait" value="off">
												<i> </i>I&apos;m ready to do the client&apos;s portrait</label>
								</p>';
							}?>
											<?php
											if($varisteacher == 1)
											{
												echo '
												<p class="news-letter" >
												<label class="checkbox">	
												<input type="checkbox" name="isteacher" checked>
												<i> </i>I&apos;m ready to teach my art skills to the requested user&apos;s</label>
											</p>';
											}
											else
											{
												echo '
												<p class="news-letter" >
												<label class="checkbox">	
												<input type="checkbox" name="isteacher" value="off">
												<i> </i>I&apos;m ready to teach my art skills to the requested user&apos;s</label>
											</p>';
											}
											?>
											<!-- <p class="news-letter" >
												<label class="checkbox">	
												<input type="checkbox" name="isteacher" value="off">
												<i> </i>I'm ready to teach my art skills to the requested user's</label>
											</p> -->
							<?php 
							if($variswallpainter==1)
							{
								echo '<p class="news-letter" >
												<label class="checkbox">
												<input type="checkbox" name="iswallpainter" checked >
												<i> </i>I&apos;m ready to paint on wall&apos;s for the requested client</label>
											</p>';
							}
							else{
											echo'<p class="news-letter" >
												<label class="checkbox">
												<input type="checkbox" name="iswallpainter" value="off" >
												<i> </i>I&apos;m ready to paint on wall&apos;s for the requested client</label>
											</p>';
								} ?>

								<div class="text2">
									<br>
									<br>

									<span>Describe Youself</span>
				                   <textarea  name="des" required><?php echo $vardescribe; ?></textarea>
				                </div>

								<input type="submit" id="s123" value="Done" name="updatebtn" />
								<br><br>
								<h2 style="font-size:35px;color:grey" align="center" >The pricing details</h2>
								<br>
						</form>
				<?php 
if (isset($_POST['upimg'])) {
	
	$filename11=$_FILES['profileimg']['name'];
	$tmpname11=$_FILES['profileimg']['tmp_name'];
	$target11='artistprofiles/';

	if ($filename11=='') {
		?>
<script type="text/javascript">
	alert('Select the image');
	</script>
	<?php
	}
	else{
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("art_deal",$con) or die("db not found");
	$varartistid=$_SESSION['login_artist'];

	

	$q=mysql_query("update artist set profile_img='$filename11' where artist_id='$varartistid'");
	if ($q) {
		move_uploaded_file($tmpname11, $target11.$filename11);
		?>
<script type="text/javascript">
	alert('successfully updated');
	window.location='artistprofileedit.php';
	</script>
	<?php
	}
}
}


if(isset($_POST['updatebtn']))
{
	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("art_deal",$con) or die("db not found");

	$varartistid=$_SESSION['login_artist'];
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
	
	$varcontact= mysql_real_escape_string($_POST['contnum']);
	$varquali= mysql_real_escape_string($_POST['quali']);
	$varaddr= mysql_real_escape_string($_POST['addr']);
	$varcity= mysql_real_escape_string($_POST['city']);
	$vardes= mysql_real_escape_string($_POST['des']);
	$varweblink= mysql_real_escape_string($_POST['weblink']);
	if($varweblink==''){
		$varweblink="null";
	}
	
	
	$varfirstpass= mysql_real_escape_string($_POST['firstpass']);
	$varsecondpass= mysql_real_escape_string($_POST['secondpass']);
	if ($varfirstpass==$varsecondpass) 
	{

$query=mysql_query("update artist set first_name='$varfirstname', last_name='$varlastname',emailid='$varemail', 
contact='$varcontact', qualification='$varquali', address='$varaddr', city='$varcity', 
website_link='$varweblink', is_portrait='$varport', is_teacher='$varteacher',
is_wallpainter='$varwallp',password='$varsecondpass',description='$vardes' where artist_id='$varartistid'") or die(mysql_error($con));
}

if($query)
{
	?>
<script type="text/javascript">
	alert('successfully updated');
	window.location='artistprofileedit.php';
	</script>
	<?php
}
}
?>	
				
			</div>
		</div>
		<br clear="both">
		
		<div class="wrap" style="width: 90%">
			<form method="post" enctype="multipart/form-data">

								<div class="register-top-grid">
									<br>
		<?php
		include('dbcon.php')  ;
		$varartistid=$_SESSION['login_artist'];
		$qq=mysql_query("select * from prices where artist_id='$varartistid'");
		$rr=mysql_fetch_array($qq);
		$varrport=$rr['portrait_price'];
		$varrwall=$rr['wallpaint_price'];
		$varrt=$rr['teaching_price'];
		if ($varisportrait=='1') {
			echo '<div id="gridd" style="width: 30%">
											<span>Price for one portrait<label>*</label></span>
											<input type="text" name="p_portrait" value="'.$varrport.'" required pattern="[0-9]+"> 
										</div>';
		}
		?>
		<?php 
		if ($variswallpainter=='1') {
			echo '<div id="gridd" style="width: 30%">
											<span>Price for wall painting<label>*</label></span>
											<input type="text" name="p_wallpaints" value="'.$varrwall.'" required pattern="[0-9]+">
										</div>';
		}
		?>
		<?php 
		if ($varisteacher=='1') {
			echo '<div id="gridd" style="width: 30%">
											<span>Monthly price to teach your art skills<label>*</label></span>
											<input type="text" name="p_teaching" value="'.$varrt.'" required pattern="[0-9]+"> 
										</div>';
		}
		?>
										
										
								</div>
								<br clear="both">
								<br>
								<input type="submit" id="s123" value="Update the price details" name="pricebtn" />
			</form>
		</div>
		<br clear="both">

<?php 
include('dbcon.php');
if (isset($_POST['pricebtn'])) {
	

$varartistid=$_SESSION['login_artist'];
$pricep=$_POST['p_portrait'];
$pricew=$_POST['p_wallpaints'];
$pricet=$_POST['p_teaching'];
$qprice=mysql_query("select * from prices where artist_id='$varartistid'");
$row = mysql_fetch_array($qprice);
if ($row==true) {
	$qupdateprice=mysql_query("update prices set portrait_price='$pricep', wallpaint_price='$pricew',teaching_price='$pricet' where artist_id='$varartistid'");
	?>
	<script type="text/javascript">
		alert("successfully updated the price details");
		window.location="artistprofileedit.php";
	</script><?php
}
else{
	$priceinsert=mysql_query("INSERT INTO `prices`(`artist_id`, `portrait_price`, `wallpaint_price`, `teaching_price`) VALUES ('$varartistid','$pricep','$pricew','$pricet')");
	?>
	<script type="text/javascript">
		alert("successfully inserted the price details");
		window.location="artistprofileedit.php";
	</script><?php
}
}
?>

		<!---- start-bottom-grids---->

		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
<br>
<br>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>