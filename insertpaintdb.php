<?php 
if(isset($_POST['submitbtn'])){

	
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


	$con=mysql_connect("localhost","root","") or die("cannot connect!");
	mysql_select_db("art_deal",$con) or die("db not found");


	$aid = $_GET['a_id'];
	$varpaintname= mysql_real_escape_string($_POST['paintname']);
	$varpaintdate= mysql_real_escape_string($_POST['paintdate']);
	$varpainttype= mysql_real_escape_string($_POST['painttype']);
	$varpaintprice= mysql_real_escape_string($_POST['paintprice']);

	$vardescription= mysql_real_escape_string($_POST['paintdes']);
	if ($vardescription=='') {
		$vardescription='';
	}
	$filename1=$_FILES['paint1']['name'];
	$tmpname1=$_FILES['paint1']['tmp_name'];
	$target1='paint1/';

	$filename2=$_FILES['paint2']['name'];
	$tmpname2=$_FILES['paint2']['tmp_name'];
	$target2='paint2/';

	$filename3=$_FILES['paint3']['name'];
	$tmpname3=$_FILES['paint3']['tmp_name'];
	$target3='paint3/';


	
$query=mysql_query("insert into paintings (`artist_id`, `paint_name`, `paint_image1`, `paint_image2`,`paint_image3`, `paint_type`, `paint_date`, `description`, `price`, `count_view`,`status`)
	values('$aid','$varpaintname','$filename1','$filename2','$filename3','$varpainttype','$varpaintdate','$vardescription','$varpaintprice','','wait')") or die(mysql_error($con));
if($query)
{
	move_uploaded_file($tmpname1, $target1.$filename1);
	move_uploaded_file($tmpname2, $target2.$filename2);
	move_uploaded_file($tmpname3, $target3.$filename3);
	?>
	
	<?php
	header('location:addnewpaintings.php?success=1');
}
}
?>