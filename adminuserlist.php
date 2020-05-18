<?php 

        
if (isset($_GET['varid'])) {
    $vh= $_GET['varid'];
    include('dbcon.php');
    ?>
    <script type="text/javascript">
        var r = confirm("Are sure you want to delete this customer account");
    var a="<?php echo $vh; ?>";
        if (r==true) {
            window.location='d.php?b='+a;           
            
        }
     else{
        alert('failed to deleted the customer account');
            window.location='adminuserlist.php';
        }

    </script>
    <?php
}
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Deal.com</title>
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
			<link href="css/style.css" rel='stylesheet' type='text/css' />
	</head>
	<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-left: 200px;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
	<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	th{
		font-style: bold;
	}
	td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding-top: 8px;

	}
	tr:nth-child(even){
		background-color: #dddddd;
	}
	</style>
	<body>
		<?php include('adminheader.php'); ?>
<br>
<div class="wrap" style="width:90%">

	<?php 
     include('dbcon.php');
     $sno=1;
     $q=mysql_query("Select * from user");
     if (mysql_num_rows($q)>0) {
   echo '<table align="center">
	<tr style="background-color: #dddddd;font-size: 20px">
	<th><b>S.no<b></th>
	<th><b>User_id</b></th>
	<th><b>Customer Name</b></th>
	<th><b>Email id</b></th>
	<th><b>Contact</b></th>
	<th><b>Action</b></th>
	<tr>';
     while ($qr=mysql_fetch_array($q)) {
     	$usrid=$qr['user_id'];
     	$ufname=$qr['first_name'];
     	$ulname=$qr['last_name'];
     	$uemailid=$qr['emailid'];
     	$ucont=$qr['contact'];
     	?>
     	<tr>
     		<td><?php echo $sno; ?></td>
     		<td><?php echo $usrid; ?></td>
     		<td><?php echo $ufname." ".$ulname; ?></td>
     		<td><?php echo $uemailid; ?></td>
     		<td><?php echo $ucont; ?></td>
     		<td><a href="adminuserprofileview.php?varid=<?php echo $usrid; ?>">View Profile</a> | <a href="adminuserlist.php?varid=<?php echo $usrid; ?>">Delete</a></td>
     	</tr>


     	<?php
     	$sno=$sno+1;
     	}
     }
     else{
     	echo'<p style="font-size:35px;color:#808080" align="center">Users are</p>
     	<center><img src="NotAvailable.png"></center>';
     }
	 ?>
</table>
<script>
// When the user clicks on div, open the popup
function myFunction<?php echo $order_id; ?>() {
    var popup = document.getElementById("myPopup<?php echo $usrid; ?>");
   // alert(<?php echo $order_id; ?>);
    popup.classList.toggle("show");
}
</script>
	</div>
	</body>
	</html>