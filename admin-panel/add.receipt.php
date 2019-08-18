<?php 
include "header/header.php";
?>
Add New receipt
<form name="form1" action="insert.receipt.php" role = "form"  method = "post">
   
   <div class = "form-group">
      <label for = "name">customerid</label>
      <input type = "text" class = "form-control" name = "customerid" placeholder = "enter customerid ">
   </div>
   <div class = "form-group">
      <label for = "name">orderid</label>
      <input type = "text" class = "form-control" name = "orderid" placeholder = "enter orderid">
   </div>
   
   <div class = "form-group">
      <label for = "name">due-date	</label>
      <input type = "text" class = "form-control" name = "due-date" placeholder = "enter due-date	 ">
   </div>
    <div class = "form-group">
      <label for = "name">issudate</label>
      <input type = "text" class = "form-control" name = "issudate" placeholder = "enter issudate ">
   </div>
    <div class = "form-group">
      <label for = "name">totalamount</label>
      <input type = "text" class = "form-control" name = "totalamount" placeholder = "enter totalamount ">
   
   </div>
   <button type = "submit" class = "btn btn-default">Submit</button>
</form>








</div>

</body>
</html>
