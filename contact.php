<?php
session_start();
if(isset($_POST['submitbtn'])) {
 	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("art_deal",$con) or die("db not found");

 	$varname=($_POST['username']);
 	$varemail=($_POST['email']);
 	$varsubject=($_POST['subject']);
 	$varmessage=($_POST['message']);

 	$query=mysql_query("insert into sitefeedback(`user_name`, `emailid`, `subject`, `message`) values('$varname','$varemail','$varsubject','$varmessage')");
 
 if($query)
{
	?><script type="text/javascript">
	alert('Thanks for your feedback!');
	</script>
	<?php
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
		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/menu_jquery.js"></script>
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


#styleidd {
   border: 1px solid #EEE;
    outline-color: #E45D5D;
    width: 400px;
    font-size: 1em;
    padding: 0.5em;
}
#messagebox {
   border: 1px solid #EEE;
    outline-color: #E45D5D;
    width: 885px;
    height: 200px;
    font-size: 1em;
    padding: 0.5em;
    font-family: 'Open Sans', sans-serif;
}
#subbtn{
    background: #E45D5D;
    margin: 20px;
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
    float: right;
}
	</style>
	<body>
		
			<!---start-header---->
			<?php include('header.php'); ?>
			<!---//End-header---->
		
					<!--<div class="map">
					 	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
					 </div>-->

<div class="wrap" style="width:90%">
		<div class="content login-box">
			<div class="login-main">
				
					<h1 style="font-size:30px">CONTACT US | GIVE FEEDBACK</h1>
					
						<form method="post"> 
								<div class="register-top-grid">
										<h3>MESSAGE WILL SENT DIRECTLY TO THE WEBSITE ADMIN</h3>
										<div id="gridd">
											<span>Full Name<label>*</label></span>
											<input type="text" id="styleidd" name="username" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>
										<div id="gridd">
											<span>Subject<label>*</label></span>
											<input type="text" id="styleidd" name="subject" pattern="[a-z A-Z]+" title="Only Letters" required> 
										</div>

										<div id="gridd">
											<span>Email Address<label>*</label></span>
											<input type="Email" id="styleidd" name="email" required> 
										</div>
										<br clear="both">
								<div id="gridd">
									<span>Message<label>*</label></span>
				                   <textarea name="message" id="messagebox" maxlength="300" required></textarea>
				                </div>
				                <br clear="both">
				                <input type="submit" id="subbtn" value="Submit" name="submitbtn" />
								</div>
						</form>
					
			</div>
		</div>
</div>	 
					
		
		
		<!---- //End-bottom-grids---->
		<!---start-footer---->
<?php include('footer.php') ?>
		<!---//End-footer---->
		<!--- //End-content---->
		<!---//End-wrap---->
	</body>
</html>

