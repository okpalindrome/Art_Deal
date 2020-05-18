<!DOCTYPE HTML>
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
		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/menu_jquery.js"></script>
		<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.80); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #E6E6FA;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 45%;
    height: 380px;
    font-size: 30px;
    border-radius: 6px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
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
		
	</head>
	<body><!---start-header---->
			<div class="header">
				<div class="top-header">
					<div class="wrap" style="width:90%">
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<script type="text/javascript">
									$(function(){
									    var $cart = $('#cart');
									        $('#clickme').click(function(e) {
									         e.stopPropagation();
									       if ($cart.is(":hidden")) {
									           $cart.slideDown("slow");
									       } else {
									           $cart.slideUp("slow");
									       }
									    });
									    $(document.body).click(function () {
									       if ($cart.not(":hidden")) {
									           $cart.slideUp("slow");
									       } 
									    });
									    });
								</script>
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="cartdisplaypage.php"><span id="clickme"> </span></a></li>
								<!---start-cart-bag---->
								<div id="cart">Your Cart<span>(0)</span></div>
								<!---start-cart-bag---->
								
							</ul>
						</div>
						<div align="center" class="top-header-center" >
							<a href="index.php" style="color:white">Art Deal</a>
							<div class="clear"> </div>
						</div>
						<div class="top-header-right">
							<ul>
								<?php
								if(isset($_SESSION['user']))
								{
									echo'
									<li><a href="userprofile.php"><i class="fa fa-user-circle-o" aria-hidden="true" title="Profile"></i></a><span> </span></li>
									<li><a href="logout.php">logout</a><span> </span></li>
									';
								}
								else if(isset($_SESSION['artist']))
								{
									echo'
									<li><a href="artistprofile.php"><i class="fa fa-user-circle-o" aria-hidden="true" title="Profile"></i></a><span> </span></li>
									<li><a href="logout.php">logout</a><span> </span></li>
									';
								}
								else if(isset($_SESSION['Admin']))
								{
									echo'
									<li><a href="admininterface.php"><i class="fa fa-user-circle-o" aria-hidden="true" title="Profile"></i></a><span> </span></li>
									<li><a href="logout.php">logout</a><span> </span></li>
									';
								}
								else
								{
									echo'<li><a href="login.php">Login</a><span> </span></li>
								<li><a style="cursor:pointer"id="myBtn">Join</a></li>';
								}
								?>
								
							</ul>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <div>
    <span class="close">&times;</span>
    <p align="center" style="font-size: 50px">Join as an</p>
</div>

<div style="float:left; margin:50px">
<div align="center">
<a href="register.php"><img src="ii.png" width="150px" height="180px" style="margin-left:36px"></a>
<p style="margin-left:35px">Artist</p>
</div></div>
<div style="float:left;margin:50px">
<div align="center">
<a href="userregister.php" style="float:left"><img src="iiii.png" width="150px" height="180px" style="margin-left:26px"></a>
<p style="margin-left:30px">User</p>
</div></div>
	</div>

</div><script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap" style="width:90%">
						<div class="mid-grid-left">
							<form method="post">
								
						<input type="text" name="inputsearch" placeholder="What Are You looking For?" />
						<input type="submit" name="search" id="btn-search" value="&#9906;">
								
							</form>
						</div>
						<div class="mid-grid-right">
							<a href="index.php"><img src="images/artdeallogo.png" width="85px" height="90px"></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
				<!----start-bottom-header---->
				<div class="header-bottom">
					<div class="wrap" style="width:90%">
					<!-- start header menu -->
							<ul class="megamenu skyblue">
								<li class="grid"><a class="color1" href="index.php">HOME</a></li>

								<li class="grid"><a class="color2" href="artistslist.php" title="Find the artists">ARTIST</a>
									<!--<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>popular</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">login</a></li>
													</ul>	
												</div>
								
											
										</div>
									</div>-->
									</li>
					  				<li class="grid"><a class="color4" href="portraitartistlist.php" title="Find the portrait artists">PORTRAIT ARTIST'S</a></li>
		
									<li class="grid"><a class="color5" href="wallpainters.php" title="Find the artists who can paint on ur house wall's">WALL ARTIST'S</a></li>

									<li class="grid"><a class="color5" href="teacherslist.php" title="FIND THE ARTIST WHO CAN SHAPE YOUR ART SKILLS">Tutor</a></li></ul>

					</div>
				</div>
				</div>
				<!----//End-bottom-header---->
			<!---//End-header---->
<?php 
if (isset($_POST['search'])) {
	$v=$_POST['inputsearch'];
	if ($v=='') {
		?>
		<script type="text/javascript">
			alert('Please enter something');
		</script>
		<?php
	}
	else{
		header('Location:search_res.php?sinp='.$v);
	}

}
 ?>
</body>
</html>