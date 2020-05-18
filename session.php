<?php
include('dbcon.php');
   session_start();
   
   // $user_check = $_SESSION['login_user'];
   
   // $ses_sql = mysql_query("select * from admin where admin_id = '$user_check' ");
   
   // $row1 = mysql_fetch_array($ses_sql);
   
   // $login_session = $row1['name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:adminlogin.php");
   }
?>