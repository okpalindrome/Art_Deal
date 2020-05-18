<?php
include("dbcon.php");
if(isset($_POST['uloginbtn']))
{
	$uname = $_POST['uname'];
	$pwd = $_POST['userpwd'];

	$sql = mysql_query("SELECT * FROM `user` WHERE emailid='$uname' and password='$pwd'");
	$row = mysql_fetch_array($sql);
	if($row == true)
	{
		session_start();
		$_SESSION['uid'] = $row['user_id'];
		$_SESSION['fname'] = $row['first_name'];
		$_SESSION['user'] = true;
		header("location:index.php");
	}
	else
	{
		header("location:login.php?id2='error'");
	}

}
?>