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
	$sql = "delet FROM `bottiqueowner` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}
?>
<?php
$id = $_REQUEST['id'];
include "header/header.php";
$sql = "SELECT * FROM `bottiqueowner` where id = '$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
?>

<div class = "container">
<h4>Botique Owner Edit</h4>
<div class="row">
 <div class = "col-md-6" >
<form name="form1" action="update_bottique_owner.php?id=<?php echo $_REQUEST['id'];?>" role = "form"  method = "post" enctype="multipart/form-data">

   
    <div class = "form-group">
      <label for = "name">id</label>
	    <input type = "text" name="id" class = "form-control" value="<?php echo $row['id']; ?>" placeholder = "enter id">
   </div>
   <div class = "form-group">
      <label for = "name">name</label>
	    <input type = "text" name="name" class = "form-control" value="<?php echo $row['name']; ?>" placeholder = "enter name ">
   </div>
    <div class = "form-group">
      <label for = "name">cnic</label>
	    <input type = "text" name="cnic" class = "form-control" value="<?php echo $row['cnic']; ?>" placeholder = "enter cnic ">
    <div class = "form-group">
      <label for = "name">address</label>
	    <input type = "text" name="address" class = "form-control" value="<?php echo $row['address']; ?>" placeholder = "enter address ">
   </div>
   <div class = "form-group">
      <label for = "name">phoneno</label>
	    <input type = "text" name="phoneno" class = "form-control" value="<?php echo $row['phoneno']; ?>" placeholder = "enter phoneno">
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
