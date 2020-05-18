<?php
include('dbcon.php');

if (isset($_POST['r']))
{
	$varuserid=$_POST['uid'];
	$ooid=$_POST['oid'];
	$com = $_POST['com'];
	$qc=mysql_query("select * from orders where user_id='$varuserid' and id='$ooid'");
	$count=mysql_fetch_array($qc);
		$artid=$count['artist_id'];
		$oid=$count['id'];
		$rating=$count['rating'];
		
		if ($rating=='0') {
			$rate = mysql_real_escape_string($_POST['rate']);
			$uq=mysql_query("update orders set rating='$rate',comment='$com' where id='$oid'") or die(mysql_error());
			if ($uq) {
				$cc='0';
				$star='0';
				$cal1=mysql_query("select * from orders where artist_id='$artid' and rating != '0'");
				while($rres = mysql_fetch_array($cal1))
				{

					$star = $star+$rres['rating'];
					$cc=$cc+1;
				}
				$avg=$star/$cc;
				$updater=mysql_query("update artist set rank_review='$avg' where artist_id='$artid'");
				?>
				<script type="text/javascript">
					alert('Thanks for review.');
					window.location='givingreview.php';
				</script>
				<?php
			}
		}
		else {
			?>
				<script type="text/javascript">
					alert('You already gave the review on this painting.');
					window.location='givingreview.php';
				</script>
				<?php
		}
	}


?>