<?php 
include "header/header.php";
?>
Add New customer
<form name="form1" action="insert_botique_customer.php" role = "form"  method = "post">

   <div class = "form-group">
      <label for = "name">customer_name</label>
      <input type = "text" class = "form-control" name = "customer_name" placeholder ="enter customer_name">
   </div>
   
   <div class = "form-group">
      <label for = "name">cnic</label>
      <input type = "text" class = "form-control" name = "cnic" placeholder = "enter cnic">
   </div>
      <div class = "form-group">
      <label for = "name">address</label>
      <input type = "text" class = "form-control" name = "address" placeholder = "enter address">
   </div>
   <div class = "form-group">
      <label for = "name">mobile_number</label>
      <input type = "text" class = "form-control" name = "mobile_number" placeholder = "enter mobile_number">
   </div>
   <div class = "form-group">
      <label for = "name">email</label>
      <input type = "text" class = "form-control" name = "email" placeholder = "enter email">
   </div>
   <div class = "form-group">
      <label for = "name">password</label>
      <input type = "text" class = "form-control" name = "password" placeholder = "enter password">
   </div>
   <button type = "submit" class = "btn btn-default">Submit</button>
</form>








</div>

</body>
</html>
