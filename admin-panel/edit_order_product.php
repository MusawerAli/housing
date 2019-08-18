<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bottique";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_REQUEST['action'])){
	//echo "i am there to delet";
	$sql = "delet FROM `boutique_`order_product` WHERE `orderid` = '".$_REQUEST['orderid']."'";
	$conn->query($sql);
}

?>
<?php 
$id = $_REQUEST['id'];
include "header/header.php";
$sql = "SELECT * FROM `order_product` where id = '$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
//echo "rabi is cute";
?>
<div class = "container">
<h4>Botique order_product Edit</h4>
<div class="row">
 <div class = "col-md-6" >
<form name="form1" action="update_order_product.php?id=<?php echo $_REQUEST['id'];?>" role="form"  method = "post" enctype="multipart/form-data">

   <div class = "form-group">
      <label for = "name">orderid</label>
      <input type = "text" name="orderid" class = "form-control" value="<?php echo $row['orderid']; ?>" name="orderid" placeholder = "enter orderid">
   </div>
   <div class = "form-group">
      <label for = "name">productid</label>
      <input type = "text" name="productid" class = "form-control" value="<?php echo $row['productid']; ?>" name="productid" placeholder = "enter productid">
   </div>
   <div class = "form-group">
      <label for = "name">quantity</label>
      <input type = "text" name="quantity" class = "form-control" value="<?php echo $row['quantity']; ?>" name="phoneno" placeholder = "enter quantity ">
   </div>
   
   <div class = "form-group">
      <label for = "name">totalprice</label>
      <input type = "text" name="totalprice" class = "form-control" value="<?php echo $row['totalprice']; ?>" name="address" placeholder = "enter totalprice ">
   </div>
   <div class = "form-group">
      <label for = "name">Select image to upload</label>
      <input type="file" name="file_upload" id="file_upload">
   </div>
   
   <button name="submit" type = "submit" class = "btn btn-default">Submit</button>
</form>

</div>
    <div class = "col-md-6" >
        <img src="<?php echo $row['image']; ?>">
    </div>
</div>








</div>

</body>
</html>
