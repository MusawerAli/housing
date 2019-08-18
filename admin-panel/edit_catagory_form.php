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
$categoryid = $_REQUEST['categoryid'];
include "header/header.php";
$sql = "SELECT * FROM `category` where categoryid = '$categoryid';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
?>

<div class = "container">
<h4>Botique category Edit</h4>
<div class="row">
 <div class = "col-md-6" >
<form name="form1" action="update_bottique_catagory.php?categoryid=<?php echo $_REQUEST['categoryid'];?>" role = "form"  method = "post" enctype="multipart/form-data">
    <div class = "form-group">
      <label for = "name">categoryid</label>
	    <input type = "text" name="categoryid" class = "form-control" value="<?php echo $row['categoryid']; ?>" placeholder = "enter categoryid">
   </div>
   <div class = "form-group">
      <label for = "name">catrgoryname</label>
	    <input type = "text" name="catrgoryname" class = "form-control" value="<?php echo $row['catrgoryname']; ?>" placeholder = "enter catrgoryname ">
   </div>
     <div class = "form-group">
      <label for = "name">Select image to upload</label>
      <input type="file" name="file_upload" id="fileToUpload">
   </div>
   
   <button name="submit" type = "submit" class = "btn btn-default">Submit</button>
</form>

</div>
    <div class = "col-md-6" >cute
        <img src="<?php echo $row['image']; ?>">
    </div>









</div>

</body>
</html>
