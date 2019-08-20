
<?php


include "vendor_header.php";
require_once "../db.php";

?>
 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Products</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Posts</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
<!-- First Photo Grid-->

<div class="w3-row-padding">
<?php
$sql = "SELECT * FROM `boutique_post` where `vendor_id`= '".$d['id']."' order by `id` DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
    // output data of each row
     
?>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="http://localhost/front-site/assets/prd_images/<?=$row['prd_image'];?>" alt="Norway" style="width:100%" class="w3-hover-opacity ">
      <div class="w3-container w3-white">
      <h3><b><?= $row['prd_name']?></b></h3>
      
        <h6 class="w3-opacity">From <i class="fa fa-dollar" aria-hidden="true"></i>  <?=$row['prd_price']?></h6>
        <h6 class="w3-opacity">Quality <i class="w3-text-red fa-2x fa fa-pied-piper-alt" aria-hidden="true"></i>  <?=$row['prd_quality']?></h6>
        <p class="w3-wide"><i class="fa w3-text-orange fa-location-arrow" aria-hidden="true"></i> <?=$row['vendor_city']?></p>
        <p class="w3-wide w3-opacity"><i class="fa fa-phone w3-text-green" aria-hidden="true"></i> <?=$row['vendor_contact']?></p>
        <p>Avail. <?=$row['prd_qty']?></p>
        
        <p><?=$row['prd_desc']?></p>
      </div>
    </div>
   
    <?php endwhile; endif?>
  </div>
