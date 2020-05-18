<?php 

		
if (isset($_GET['varid'])) {
	$vh= $_GET['varid'];
	include('dbcon.php');
	?>
	<script type="text/javascript">
		var r = confirm("Are sure you want to delete this artist account");
	var a="<?php echo $vh; ?>";
		if (r==true) {
			window.location='d.php?a='+a;			
			
		}
	 else{
	 	alert('failed to deleted the artist account');
			window.location='adminartistlist.php';
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
		padding: 8px;
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
     $q=mysql_query("Select * from artist");
     if (mysql_num_rows($q)>0) {
     	echo'<table align="center">
	<tr style="background-color: #dddddd;font-size: 20px">
	<th><b>S.no<b></th>
	<th><b>Artist_id</b></th>
	<th><b>Artist Name</b></th>
	<th><b>Email id</b></th>
	<th><b>Contact</b></th>
	<th><b>Action</b></th>
	<tr>';
     while ($qr=mysql_fetch_array($q)) {
     	$artid=$qr['artist_id'];
     	$fname=$qr['first_name'];
     	$lname=$qr['last_name'];
     	$emailidd=$qr['emailid'];
     	$cont=$qr['contact'];
     	?>
     	<tr>
     		<td><?php echo $sno; ?></td>
     		<td><?php echo  $artid;?></td>
     		<td><?php echo $fname." ".$lname; ?></td>
     		<td><?php echo  $emailidd;?></td>
     		<td><?php echo  $cont;?></td>
     		<td><a href="userartistprofileview.php?varid=<?php echo $artid ?>">View Profile</a> | <a href="adminartistlist.php?varid=<?php echo $artid ?>">Delete</a></td>
     	</tr>
     	<?php
     	$sno=$sno+1;
     	}
     	?>
     </table>
     	<?php
     }
     else{
     		echo'<p style="font-size:35px;color:#808080" align="center">Artists are</p>
     		<center><img src="NotAvailable.png"></center>';
     }
	 ?>
	 
	</div>
	</body>
	</html>