<?php 
include "header/header.php";
?>
Add New order_product
<form name="form1" action="insert_order_product.php" role = "form"  method = "post">

   <div class = "form-group">
      <label for = "name">orderid</label>
      <input type = "text" class = "form-control" name = "orderid" placeholder = "enter orderid">
   </div>
   <div class = "form-group">
      <label for = "name">productid</label>
      <input type = "text" class = "form-control" name = "productid" placeholder = "enter productid">
   </div>
   <div class = "form-group">
      <label for = "name">quantity</label>
      <input type = "text" class = "form-control" name = "quantity" placeholder = "enter quantity">
   </div>
   
   <div class = "form-group">
      <label for = "name">totalprice</label>
      <input type = "text" class = "form-control" name = "totalprice" placeholder = "enter totalprice ">
   </div>
   
   <button type = "submit" class = "btn btn-default">Submit</button>
</form>








</div>

</body>
</html>
