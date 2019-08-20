<?php

require_once "../db.php";
include "vendor_header.php";

$sql = "SELECT * FROM `category` where `user_id`= '".$d['id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0):
    // output data of each row
     
?>
<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h3 class="w3-center w3-padding-48" style=" font-family:Inconsolata"><span class="w3-tag w3-wide">Post Your Product Here!</span></h3>
    
    <img src="http://localhost/front-site/assets/img/img.jpg" class="w3-image" style="width:100%">
    <hr class="w3-red">
    <span class="w3-tag w3-red">Note!</span><p><strong>For Earn More Revenue! Experience Trying to Provide Good Services to your Customers!</strong></p>
    
    <br><hr class="w3-red">
    <form action="process_boutique_post.php" method="POST" enctype="multipart/form-data">
      <p><input class="w3-input w3-padding-16 w3-border"  type="text" readonly="true" value="<?=$d['id']?>" id="user_id" name="vendor_id"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" readonly="true" value="<?=$d['customer_name']?>" id="vendor_name" name="vendor_name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" readonly="true" value="<?=$d['mobile_number']?>" id="vendor_contact" name="vendor_contact"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" readonly="true" value="<?=$d['city']?>" id="vendor_city" name="vendor_city"></p>
      <p><div class="form-group">
        <label for="category_id">Select Category:</label>
        <select class="form-control" required name="category_id" id="category_id">
          <option></option>
        <?php while($row = $result->fetch_assoc()):?>
          <option value="<?=$row['id']?>"><?=$row['category_name']?></option>
        <?php endwhile;endif?>
       
        </select>
      </div></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Product Name" required name="prd_name"></p>
      
      <p><input class="w3-input w3-padding-16 w3-border" required type="text" placeholder="Quality...... A / B /C or good,bad" required name="prd_quality"></p>
      <p><textarea class="w3-input w3-padding-16 w3-border" required type="text" rows="5"  placeholder="Description....." required name="desc"></textarea></p>
      <p> <div class="custom-file">
        <input type="file" class="custom-file-input w3-padding-16 w3-border" required="true" name="prd_image" id="customFile">
        <label require class="custom-file-label" for="customFile">Choose file</label>
      </div></p>
      <p><div class="input-group mb-3">
        <!-- <div class="input-group-prepend">
          <span class="input-group-text">Person</span>
        </div> -->
        <input type="number" required class="form-control" placeholder="Quantity" name="prd_qty" id="qty">
        <input type="number" class="form-control" required placeholder="Price: (PKR)" name="prd_price" id="price">
      </div></p>
      <p><button class="w3-button w3-black" type="submit" id="submit" name="submit">Add</button></p>
    </form>
  </div>
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
var fileName = $(this).val().split("\\").pop();
$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>