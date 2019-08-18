<?php 
include "header/header.php";
?>
Add New Boutique Order

<form name="form1" action="insert_botique_order.php" role = "form"  method = "post">

   
   <div class = "form-group">
      <label for = "name">bo_id</label>
      <input type = "text" class = "form-control" name = "bo_id" placeholde  = "enter bo_id">
   </div>
   <div class = "form-group">
      <label for = "name">customerid</label>
      <input type = "text" class = "form-control" name = "customerid" placeholde  = "enter customerid">
   </di
   <div class = "form-group">
      <label for = "name">amount</label>
      <input type = "text" class = "form-control" name = "amount" placeholder = "enter amount">
   </div>
      <div class = "form-group">
      <label for = "name">date</label>
      <input type = "text" class = "form-control" name = "date" placeholder = "enter date">
   </div>
   <div class = "form-group">
      <label for = "name">status</label>
      <input type = "text" class = "form-control" name = "status" placeholder = "enter status">
   </div>
   <button type = "submit" class = "btn btn-default">Submit</button>
</form>








</div>

</body>
</html>
