<?php
   $con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("art_deal",$con) or die("db not found");
   session_start();
   
   $user_check = $_SESSION['login_artist'];
   
   $ses_sql = mysql_query("select artist_id,first_name from artist where first_name = '$user_check' ");
   
   $row = mysql_fetch_array($ses_sql);
   
   $login_session = $row['first_name'];
   $login_artist_id=$row['artist_id'];
   
   if(!isset($_SESSION['login_artist'])){
      header("location:login.php");
   }
?>