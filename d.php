<?php
include 'dbcon.php';
if (isset($_GET['a'])) {
	
	$vh=$_GET['a'];
	$selectq=mysql_query("select * from artist where artist_id='$vh'");
	$row=mysql_fetch_array($selectq);
	$varcontact=$row['contact'];
	
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
    
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="Your account has been removed by the admin. From ArtDeal.com";
    $client->send($varcontact,$message);

    sleep(1);
    $client->logout();
			
			
			$qu=mysql_query("delete from artist where artist_id='$vh'");
			$qu1=mysql_query("delete from prices where artist_id='$vh'");
			$qu2=mysql_query("delete from paintings where artist_id='$vh'");
			$qu3=mysql_query("delete from pwt where artist_id='$vh' and status!='finalaccept'");

			echo "<script> alert('Successfully deleted the artist account');
			window.location='adminartistlist.php';</script>";
		}
		elseif (isset($_GET['b'])) {
			$vh1=$_GET['b'];
	$selectq1=mysql_query("select * from user where user_id='$vh1'");
	$row1=mysql_fetch_array($selectq1);
	$varcontact1=$row1['contact'];
	
	include('way2sms-api.php');
    $client = new WAY2SMSClient();
    
    $client->login('9739709481', 'Nc9739709481Nc');
    $message="Your account has been removed by the admin. From ArtDeal.com";
    $client->send($varcontact1,$message);

    sleep(1);
    $client->logout();
			$qq1=mysql_query("delete from user where user_id='$vh1'");
			$qq2=mysql_query("delete from cart where user_id='$vh1'");

			echo "<script> alert('Successfully deleted the customer account');
			window.location='adminuserlist.php';</script>";
		}
		elseif (isset($_GET['c'])) {
			$vh2=$_GET['c'];
			$qqq1=mysql_query("delete from sitefeedback where id='$vh2'");

			echo "<script> alert('Successfully deleted the feedback');
			window.location='adminfeedbackview.php';</script>";
		}
		
?>