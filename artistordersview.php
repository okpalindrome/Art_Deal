<?php
if (isset($_GET['Aorid'])) {
	include('dbcon.php');
	$iid=$_GET['Aorid'];
	$acceptq=mysql_query("update orders set status='Ready to move' where id='$iid'");
	if ($acceptq) {
		?>
		<script type="text/javascript">
			alert('Order is accepted, the customer details will be sent to your mail, please update the delivery status time to time');
		</script>
		<?php
	}
}
elseif (isset($_GET['Rorid'])) {
	$iid1=$_GET['Rorid'];
	include('dbcon.php');
    $fetq=mysql_query("select * from orders where id='$iid1'") or die(mysql_error());
    $fetqr=mysql_fetch_array($fetq);
    $paintingid=$fetqr['paintings_id'];
    $upq=mysql_query("update paintings set status='Approved' where paintings_id='$paintingid'");
	$rejectq=mysql_query("update orders set status='Artist rejected' where id='$iid1'");
	if($rejectq){
		?>
		<script type="text/javascript">
			alert('Your not ready to deliver or sale, okay!');
		</script>
		<?php
	}
}
else {
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Art Deal.com</title>		
		<link rel="icon" href="images/artdeallogo.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css"><!-- <link href="cartstyles.css" rel='stylesheet' type='text/css' /> -->


<style type="text/css">

#s123 {
	background-color: white;
	border-radius: 3px;
   border: 2px solid grey;
   height: 25px;
   width: 60px;
   cursor: pointer;
   margin-left: 10px;
}
</style>
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
	<?php include('artistheader.php'); ?>
	<div class="wrap" style="width:90%">
	<table>
	<tr style="background-color: #dddddd;font-size: 20px">
	<th><b>S.no<b></th>
	<th><b>Customer Name</b></th>
	<th><b>Email id</b></th>
	<th><b>Item name/portrait</b></th>
	<th><b>Action/Status</b></th>
	<tr>
	

<?php 
     include('dbcon.php');
     $sno=1;
     $varr=$_SESSION['login_artist'];
     $q=mysql_query("select * from orders where artist_id='$varr' and status!='Artist rejected' order by id desc");
     if (mysql_num_rows($q)<=0) {
         echo '<p style="font-size:50px;color:grey" align="center">No orders yet</p><br>';
     }
     while($row1=mysql_fetch_array($q)){
     $paintid=$row1['paintings_id'];
     $pwtid=$row1['pwtid'];
     $order_id = $row1['id'];
    $ostatus=$row1['status'];
    $userid=$row1['user_id'];
    $ptype="";
    $paintname="";
    $orderdate=$row1['ordered_date'];
    if ($pwtid=='0') {
        $qury1=mysql_query("select * from paintings where paintings_id='$paintid'");
     $row2=mysql_fetch_array($qury1);
     $paintname=$row2['paint_name'];

    }
    else
    {
        $qury2=mysql_query("select * from pwt where id='$pwtid'");
        $row4=mysql_fetch_array($qury2);
        $ptype=$row4['type'];
    }
     

     	   
     	$uquery=mysql_query("select * from user where user_id='$userid'");
     	while($row3=mysql_fetch_array($uquery)){

     	$fname=$row3['first_name'];
     	$lname=$row3['last_name'];
     	$add=$row3['address'];
     	$city=$row3['city'];
     	$email=$row3['emailid'];
     	?>
     	<tr>
     		<td><?php echo $sno;?></td>
     		<td><?php echo $fname." ".$lname; ?></td>
     		<td><?php echo $email; ?></td>
            <?php
            if($pwtid=='0')
            {
                echo'<td>'.$paintname.'</td>';
            }
            else
            {
                echo'<td>'.$ptype.'</td>';
            }
            ?>
     		
     		<?php if ($ostatus=='Ready to move' || $ostatus=='Ready to dispatch' || $ostatus=='Shipped') {
     		?>
     		<td><form method="post"> 
     			<input type="hidden" name="doid" value="<?php echo $order_id; ?>">
     			<select name="dstatus1">
     			<?php if ($ostatus=='Ready to move') {
     				?>
                    <option value="Ready to move" >Ready to move</option>
     				<option value="Ready to dispatch" >Ready to dispatch</option>
     				<option value="Shipped">Shipped</option>
     				<option value="Delivered">Delivered</option>
     				<?php
     			}
                elseif ($ostatus=='Ready to dispatch') {
                   ?>
                    
                    <option value="Ready to dispatch" >Ready to dispatch</option>
                    <option value="Shipped">Shipped</option>
                    <option value="Delivered">Delivered</option>
                    <?php
                }
     			elseif ($ostatus=='Shipped') {
     				?>
     				<option value="<?php echo $ostatus ?>">Shipped</option>
     				<option value="Delivered">Delivered</option>
     				<?php
     			}
     			elseif($ostatus=='Delivered'){
     				?>
     				<option value="Delivered">Delivered</option>
     				<?php
     			}
     			 ?>  
     			}
     			<input type="submit" id="s123" name="ss" value="update">
     		</select>
     		</form>
<?php
include('dbcon.php');
if(isset($_POST['ss'])) {
	$doid=$_POST['doid'];
	$ds1=$_POST['dstatus1'];
	$dsq1=mysql_query("update orders set status='$ds1' where id='$doid'");
	if ($dsq1) {
    $qc1=mysql_query("Select * from orders where id='$doid'");
    $rc1=mysql_fetch_array($qc1);
    $varuserid=$rc1['user_id'];
    $qc=mysql_query("Select * from user where user_id='$varuserid'");
    $rc=mysql_fetch_array($qc);
    $uc=$rc['contact'];
    
    include('way2sms-api.php');
    $client = new WAY2SMSClient();
   
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="Your order is '".$ds1."'. From ArtDeal.com'";
    $client->send($uc,$message);

    sleep(1);
    $client->logout();
		header("location:artistordersview.php");
	}
}
?>
</td>
     		<?php
     		} 

     		elseif ($ostatus=='Delivered') {
     			echo '<td>Delivered: <a href="artistviewreviews.php">View review</a></td>';
     		}
     		else {
     			?>
     		<center><td class="popup" onclick="myFunction<?php echo $order_id; ?>(this.id)">Decide
     		<span class="popuptext" id="myPopup<?php echo $order_id; ?>">
     			<a href="artistordersview.php?Aorid=<?php echo $order_id; ?>" style="color: white">Accept - </a>
     			<a href="artistordersview.php?Rorid=<?php echo $order_id; ?>" style="color: white">Reject</a>
     		</span></td></center></tr> <?php } ?>
     		
<script>
// When the user clicks on div, open the popup
function myFunction<?php echo $order_id; ?>() {
    var popup = document.getElementById("myPopup<?php echo $order_id; ?>");
   // alert(<?php echo $order_id; ?>);
    popup.classList.toggle("show");
}
</script>
     	
     	
     	<?php
     	 $sno=$sno+1;
     	// }
     }
 }?>

	



</table>

     		
</div>


</body>
</html>
