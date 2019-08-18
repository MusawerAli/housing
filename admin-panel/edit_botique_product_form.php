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
	//echo "i am there to dele";
	$sql = "DELETE FROM `boutique_`product` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
	
}


//$sql = "SELECT * FROM `boutique_product`";
//$result = $conn->query($sql);
?>
<?php 
$id = $_REQUEST['id'];
include "header/header.php";
$sql = "SELECT * FROM `product` where id = '$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
?>
 
<div class = "container">
<h4>Botique product Edit</h4>
<div class="row">
 <div class = "col-md-6" >
<form name="form1" action="update_botique_product_form.php?id=<?php echo $_REQUEST['id'];?>" role = "form"  method = "post" enctype="multipart/form-data">
<div class = "form-group">
      <label for = "name">id</label>
      <input type = "text" name="id" class = "form-control" value="<?php echo $row['id']; ?>" name = "id" placeholder = "enter id">
   </div> 
   <div class = "form-group">
      <label for = "name">productname</label>
      <input type = "text"name="productname" class = "form-control" value="<?php echo $row['productname']; ?>" name = "productname" placeholder = "enter producte">
   </div>
    <div class = "form-group">
      <label for = "name">bo_id</label>
      <input type = "text"name="bo_id" class = "form-control" value="<?php echo $row['bo_id']; ?>" name = "bo_id" placeholder = "enter bo_id">
   </div>
    <div class = "form-group">
      <label for = "name">description</label>
      <input type = "text" name="description" class = "form-control" value="<?php echo $row['description']; ?>" name = "description" placeholder = "enter description">
   </div> 
   <div class = "form-group">
      <label for = "name">Color	</label>
      <input type = "text" name="Color" class = "form-control" value="<?php echo $row['Color']; ?>" name = "Color" placeholder = "enter Color">
   </div> 
   <div class = "form-group">
      <label for = "name">uniteprice</label>
      <input type = "text" name="uniteprice" class = "form-control" value="<?php echo $row['uniteprice']; ?>" name = "uniteprice" placeholder = "enter uniteprice ">
   </div> 
   <div class = "form-group">
      <label for = "name">catagoryid</label>
      <input type = "text" name="catagoryid" class = "form-control" value="<?php echo $row['catagoryid']; ?>" name = "catagoryid" placeholder = "enter catagoryid">
   </div>
   
   <div class = "form-group">
      <label for = "name">Select image to upload</label>
      <input type="file" name="file_upload" id="fileToUpload">
   </div>
   
   <button name="submit" type = "submit" class = "btn btn-default">Submit</button>
</form>

</div>
    <div class = "col-md-6" >
        <img src="../<?php echo $row['image']; ?>">
    </div>
</div>
</div>

</body>
</html>
