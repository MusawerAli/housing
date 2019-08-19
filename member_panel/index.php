<?php 

include "user_header.php";
require_once "../db.php";
   
$d=$_SESSION['uid'];
$type=$d->type;
      echo $type;  
        
   
?>

<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Member Panel</b></h1>
    
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
<!-- First Photo Grid-->

<div class="w3-row-padding">
    <button class="btn btn-primary w3-green" data-toggle="modal" data-target="#myModal">
  <span class="fa fa-plus-circle"></span>
  Add Property
</button>
<?php
$sql = "SELECT * FROM `product` where 1 order by `id` DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
    // output data of each row
     
?>
    
   
    <?php endwhile; endif?>
  </div>
