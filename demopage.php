<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>

<body>
 <!--  <div class="wrap" style="width:90%">

<!-- <div class="card">
      <div class="container" style="margin-top: 5%;" align="center">
        <h2 style="font-size:25px" align="center">About me!</h2>
        <br>
        <p style="color:grey" >khvk</p>
        <br>
        
      </div>
    </div> -->

 <!-- <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom" style="width: 200px">
          <img src="ii.png" alt="New York" style="width:100%" class="w3-hover-opacity" width="200px" height="180px">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="ii.png" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="ii.png" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
   

  </div> --> 









  <!-- <script>
  function mod(id) {
    var n = id.replace( /^\D+/g, ''); 


// Get the modal
var modal = document.getElementById('myModal'+n);

// Get the button that opens the modal
var btn = document.getElementById(id);

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}
</script> -->
<!-- The Modal -->
<!-- <div id="myModal<?php  $order_id; ?>" class="modal"> -->

  <!-- Modal content -->
  <!-- <div class="modal-content"> -->
  
    <!-- <span class="close">&times;</span>
    <p align="center" style="font-size: 40px">New Order</p>

<br>
<div style="float:left; margin:20px">
<div align="center">
<a href="productdetail.php?varid=<?php  $paintid; ?>"><img src="paint1/<?php  $paintimg ?>" width="250px" height="180px" style="margin-left:16px"></a>
<p style="color: grey"><?php  $paintname; ?></p>
</div>
</div>
<div style="float:left;margin:15px">
<div style="color:grey;font-size: 20px" >
  <p style="font-size: 30px" align="center">Customer Details</p>
  <p>Name: <?php  ; ?></p>
  <p>Address: <?php $add; ?></p>
  <p>City: <?php  $city; ?></p>
  <p>Email id: <?php $email; ?></p>
  <p>Ordered date :<?php  $orderdate; ?></p>
</div>
</div>
<div style="float: left">
<form method="post">
<input type="submit" name="accept" value="Accept" style="float: right;">
<input type="submit" name="reject" value="Reject" style="float: right;margin-left: 100px">
</form>
</div>
</div>
</div>
<input type="button" id="myBtn<?php  $order_id; ?>" onclick="mod<?php  $order_id; ?>(this.id)" value="Decide"> --> 





while($count=mysql_fetch_array($qc)){
    $oid=$count['id'];
    $rating=$count['rating'];
    
    if ($rating=='') {
      $uq=mysql_query("update orders set rating='$rate' where id='$oid'");
      if ($uq) {
        ?>
        <script type="text/javascript">
          alert('Thank for review.');
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
</body>
</html>