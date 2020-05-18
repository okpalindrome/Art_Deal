<?php 

        
if (isset($_GET['varid'])) {
    $vh= $_GET['varid'];
    include('dbcon.php');
    ?>
    <script type="text/javascript">
        var r = confirm("Are sure you want to delete this feedback");
    var a="<?php echo $vh; ?>";
        if (r==true) {
            window.location='d.php?c='+a;           
            
        }
     else{
        alert('failed to deleted the feedback');
            window.location='adminfeedbackview.php';
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
	.dell:hover{
		font-color: red;
	}
	</style>
	<body>
		<?php include('adminheader.php'); ?>
<br>
<div class="wrap" style="width:90%">

	<?php 
     include('dbcon.php');
     $sno=1;
     $q=mysql_query("Select * from sitefeedback");
     if (mysql_num_rows($q)>0) {
     	echo'<table align="center">
	<tr style="background-color: #dddddd;font-size: 20px;color:#4169E1">
	<th><b>S.no<b></th>
	<th><b>Id</b></th>
	<th><b>Full Name</b></th>
	<th><b>Email id</b></th>
	<th><b>Subject</b></th>
	<th><b>Message</b></th>
	<th><b>Action</b></th>
	<tr>';
     while ($qr=mysql_fetch_array($q)) {
     	?>
     	<tr>
     		<td><?php echo $sno; ?></td>
     		<td><?php echo $qr['id']; ?></td>
     		<td><?php echo $qr['user_name']; ?></td>
     		<td><?php echo $qr['emailid']; ?></td>
     		<td><?php echo $qr['subject']; ?></td>
     		<td><?php echo $qr['message']; ?></td>
     		<td>
     			<a href="adminfeedbackview.php?varid=<?php echo $qr['id']; ?>"  name="del" class="dell">Delete</a>
     		</td>
     	</tr>
     	<?php
     	$sno=$sno+1;
     	}
     }
     else{
     	echo'<p style="font-size:35px;color:#808080" align="center">Currently feedbacks are</p>
     	<center><img src="NotAvailable.png"></center>';
     }
	 ?>
</table>
	</div>
	</body>
	</html>