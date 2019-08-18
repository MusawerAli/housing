<!DOCTYPE html>
<html>
<head>
   <title>Try v1.2 Bootstrap Online</title>
   <link href="https://www.tutorialspoint.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://www.tutorialspoint.com/scripts/jquery.min.js"></script>
   <script src="https://www.tutorialspoint.com/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class = "container">
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
