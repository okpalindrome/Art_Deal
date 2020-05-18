
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
     $q=mysql_query("Select * from orders order by id desc");
     if (mysql_num_rows($q)>0) {
   echo '<table align="center">
	<tr style="background-color: #dddddd;font-size: 20px">
	<th><b>S.no<b></th>
	<th><b>order_id</b></th>
	<th><b>Customer Name</b></th>
	<th><b>Artist Name</b></th>
	<th><b>Order Status</b></th>
	<tr>';
     while ($qr=mysql_fetch_array($q)) {
     	$id=$qr['id'];
        $uid=$qr['user_id'];
        $aid=$qr['artist_id'];
        $status=$qr['status'];
        $q1=mysql_query("select * from user where user_id='$uid'");
        $qr1=mysql_fetch_array($q1);
     	$ufname=$qr1['first_name'];
     	$ulname=$qr1['last_name'];
        
        $q3=mysql_query("select * from artist where artist_id='$aid'");
        $qr2=mysql_fetch_array($q3);
        $aufname=$qr2['first_name'];
        $aulname=$qr2['last_name'];
     	?>
     	<tr>
     		<td><?php echo $sno; ?></td>
     		<td><?php echo $id; ?></td>
     		<td><?php echo $ufname." ".$ulname; ?></td>
            <td><?php echo $aufname." ".$aulname; ?></td>
     		<td><?php echo $status; ?></td>
     		
     	</tr>

     	<?php
     	$sno=$sno+1;
     	}
     }
     else{
     	echo'<p style="font-size:35px;color:#808080" align="center">Orders are</p>
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