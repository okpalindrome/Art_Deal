<?php
// session_start();


if(isset($_GET['success'])==1)
{
?>
<script type="text/javascript">
	alert('successfully submitted the painting, wait for the admit approval');
	</script>
	<?php

}?>
<!DOCTYPE html>
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
.register-grids form select {
   	border: 1px solid #EEE;
	outline-color: #E45D5D;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
	font-family: 'Open Sans', sans-serif;
}
#spanstyle{
    color: #08080B;
    font-weight: 700;
    font-size: 0.875em;
    padding-bottom: 0.2em;
    display: block;
    text-transform: uppercase;
    float: left;
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
			<?php include('artistheader.php') ?>
			<!---//End-header---->
		<!--- start-content---->
		<div class="wrap" style="width:90%">
		<div class="content login-box">
			<div class="login-main">
				
					<h1 style="font-size:30px">Add a new painting to your gallery</h1>
					<div class="register-grids">
						<form method="post" enctype="multipart/form-data" action="insertpaintdb.php?a_id=<?php echo $_SESSION['login_artist'] ?>"> 
								<div class="register-top-grid">
										
										<div id="gridd">
											<span>Title of the painting<label>*</label></span>
											<input type="text" name="paintname" required> 
										</div>
										<div id="gridd">
											<span>Date of the painting<label>*</label></span>
											<input type="date" name="paintdate"  id="dobb" onchange="caldob()" required>
									
										</div>
										
										<div id="gridd">
											<span>Type of painting<label>*</label></span>
											<input type="text" pattern="[a-z A-Z]+" name="painttype" required> 
										</div>
										<div id="gridd">
											<span>Price<label>*</label></span>
											<input type="text" pattern="[0-9]+" maxlength="5" name="paintprice" required> 
										</div>
										<div id="gridd">
										 <span>Upload the first image of painting<label>*</label></span>
										 <input type="file" value="Upload image" name="paint1" accept="image/*" required> 
										</div>
										<div id="gridd">
										 <span>Upload the second image of painting<label>*</label></span>
										 <input type="file" value="Upload image" name="paint2" accept="image/*" required> 
										</div>
										<div id="gridd">
										<span>Upload the last image of painting<label>*</label></span>
										<input type="file" value="Upload image" name="paint3" accept="image/*" required> 
										</div>
										<div class="clear"> </div>
										<div class="clear"> </div>
								</div>
								<div class="text2"><br clear="both">
									<span id="spanstyle">Description<label>*</label></span>
				                   <textarea name="paintdes"></textarea>
				                </div>
										
								<div class="clear"> </div>
								<input type="submit" value="Submit the painting" name="submitbtn" />
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
					if (date1<date2) {
						alert('Date is not proper');
						document.getElementById("dobb").value = "";
					}		

			}
		</script>
<br><br>
		<!---//End-wrap---->
	</body>
</html>