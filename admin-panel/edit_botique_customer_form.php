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
?>
<?php 
$id = $_REQUEST['id'];
include "header/header.php";
$sql = "SELECT * FROM `customer` where id = '$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
?>

<div class = "container">
    <div class = "col-md-6">
    <form name="form1" action="update_bottique_customer.php?id=<?php echo $_REQUEST['id'];?>" role = "form"  method = "post" enctype="multipart/form-data">

   <div class = "form-group">
      <label for = "name">customer_name</label>
	   <input type = "text"  name="customer_name" class = "form-control" value="<?php echo $row['customer_name']; ?>" placeholder = "enter customer_name">
   </div>
   
   <div class = "form-group">
      <label for = "name">cnic</label>
    
	  <input type = "text" name="cnic" class = "form-control" value="<?php echo $row['cnic']; ?>" placeholder = "enter cnic">
   </div>
      <div class = "form-group">
      <label for = "name">address</label>
  
	  <input type = "text"  name="address" class = "form-control" value="<?php echo $row['address']; ?>"placeholder = "enter address">
	  
   </div>
   <div class = "form-group">
      <label for = "name">mobile_number</label>
  
	  <input type = "text"  name="mobile_number" class = "form-control" value="<?php echo $row['mobile_number']; ?>"placeholder = "enter mobile_number">
	  
   </div>
   
<div class = "form-group">
      <label for = "name">email</label>
  
	  <input type = "text"  name="email" class = "form-control" value="<?php echo $row['email']; ?>"placeholder = "enter email">
	  
   </div>
   <div class = "form-group">
      <label for = "name">password</label>
  
	  <input type = "text"  name="password" class = "form-control" value="<?php echo $row['password']; ?>"placeholder = "enter password">
	  
   </div>
     <div class = "form-group">
      <label for = "name">Select image to upload</label>
      <input type="file" name="file_upload" id="fileToUpload">
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
