<?php
// this is wrong file that we need to delete
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
	//echo "i am there to delete";
	$sql = "DELETE FROM `boutique_order` WHERE `orderid` = '".$_REQUEST['orderid']."'";
	$conn->query($sql);
}

//$sql = "SELECT * FROM `boutique_order`";
//$result = $conn->query($sql);
?>
<?php 
include "header/header.php";
if(isset($_REQUEST['orderid'])){
    $orderid = $_REQUEST['orderid'];
    $sql = "SELECT * FROM `boutique_order` where orderid = '$orderid';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    print_r($row);
}else{
    
}
?>
 
<div class = "container">
<h4>Botique Order</h4>
<form name="form1" action="update_bottique_order_form.php?orderid=<?php echo $_REQUEST['orderid'];?>" role = "form"  method = "post" enctype="multipart/form-data">


   <div class = "form-group">
      <label for = "name">orderid</label>
    <input type = "text" name="orderid" class = "form-control" value="<?php echo $row['orderid']; ?>" name = "orderid" placeholder = "enter orderid ">
   </div>
   <div class = "form-group">
      <label for = "name">bo_id</label>
      <input type = "text" name="bo_id" class = "form-control" value="<?php echo $row['bo_id']; ?>" name = "bo_id" placeholder = "enter bo_id ">
   </div>
    <div class = "form-group">
       <label for = "name">customerid</label>
       <input type = "text" name="customerid" class = "form-control" value="<?php echo $row['customerid']; ?>" name = "customerid" placeholder = "enter customerid">
   </div>
      <div class = "form-group">
      <label for = "name">amount</label>
      <input type = "text" name="amount" class = "form-control" value="<?php echo $row['amount']; ?>" name = "amount" placeholder = "enter amount">
   </div>
   <div class = "form-group">
      <label for = "name">date</label>
     <input type = "text" name="date" class = "form-control" value="<?php echo $row['date']; ?>" name = "date" placeholder = "enter date ">
   </div>
   <div class = "form-group">
       <label for = "name">status</label>
       <input type = "text" name="status" class = "form-control" value="<?php echo $row['status']; ?>" name = "status" placeholder = "enter status">
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
