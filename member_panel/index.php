<?php 

include "user_header.php";
require_once "../db.php";
   
$d=$_SESSION['uid'];

        
        
   
?>

<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Member Panel</b></h1>
    
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
<!-- First Photo Grid-->

<div class="w3-row-padding">
<?php
$sql = "SELECT * FROM `product` where 1 order by `id` DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
    // output data of each row
     
?>
    <div class="w3-mobile w3-half	 w3-container w3-margin-bottom">
      <img src="http://localhost/housing/assets/prd_images/" alt="Norway" style="width:100%" class="w3-hover-opacity ">
      <div class="w3-container w3-white">
      <h3><b>test</b></h3>
        <div class="w3-container w3-border">
        <h6 class="w3-opacity w3-red">Price <i class="fa fa-dollar" aria-hidden="true"></i>  price</h6>
        <h6 class="w3-opacity w3-teal">Quantity </h6>
        <h6 class=" w3-black w3-text-red">Total:   Rs</h6>
       </div>
       
        <p class=""><i class="fa w3-text-orange fa-location-arrow" aria-hidden="true"></i> </p>
        <p class="w3-wide w3-opacity"><i class="fa fa-phone w3-text-green" aria-hidden="true"> seller:</i> </p>
        <p class="w3-wide w3-opacity"><i class="fa fa-phone w3-text-red" aria-hidden="true"> Own:</i> </p>
        
        
        <span><i class="fa fa-book" aria-hidden="true"> <h5>  Description:</h5></i></span>
        <p>lll</p>
        <h5><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Order Date:  </h5>
      </div>
    </div>
   
    <?php endwhile; endif?>
  </div>
