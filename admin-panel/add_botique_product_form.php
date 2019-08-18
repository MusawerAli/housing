<?php 
include "header/header.php";
?>
Add new boutique product

<form name="form1" action="insert_botique_product.php" role = "form"  method = "post">
<div class = "form-group">
      <label for = "name">ID</label>
      <input type = "text" class = "form-control" name = "ID" placeholder = "enter ID">
   </div>
   <div class = "form-group">
      <label for = "name">product name</label>
      <input type = "text" class = "form-control" name = "productname" placeholder = "enter name">
   </div>
     <div class = "form-group">
      <label for = "name">bo_id</label>
      <input type = "text" class = "form-control" name = "bo_id" placeholder = "enter bo_id">
   </div>
   
   <div class = "form-group">
      <label for = "name">description</label>
      <input type = "text" class = "form-control" name = "description" placeholder = "enter description ">
   </div>
   <div class = "form-group">
      <label for = "name">Color</label>
      <input type = "text" class = "form-control" name = "Color" placeholder = "enter Color ">
   </div> 
   <div class = "form-group">
      <label for = "name">uniteprice</label>
      <input type = "text" class = "form-control" name = "uniteprice" placeholder = "enter uniteprice">
   </div>
      <div class = "form-group">
      <label for = "name">catagoryid</label>
      <input type = "text" class = "form-control" name = "catagoryid" placeholder = "enter catagoryid ">
   </div>
   <button type = "submit" class = "btn btn-default">Submit</button>
</form>








</div>

</body>
</html>
