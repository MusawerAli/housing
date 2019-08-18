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
	$sql = "delet FROM `boutique_`receipt` WHERE `receiptid` = '".$_REQUEST['receiptid']."'";
	$conn->query($sql);
}

?>
<?php 
$receiptid = $_REQUEST['receiptid'];
include "header/header.php";
$sql = "SELECT * FROM `receipt` where receiptid = '$receiptid';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
?>
<div class = "container">
<h4>Botique receipt Edit</h4>
<div class="row">
 <div class = "col-md-6" >
<form name="form1" action="update_recepit.php?id=<?php echo $_REQUEST['receiptid'];?>" role = "form"  method = "post" enctype="multipart/form-data">

   <div class = "form-group">
      <label for = "name">receiptid</label>
      <input type = "text" name="receiptid" class = "form-control" value="<?php echo $row['receiptid']; ?>"  placeholder = "enter receiptid">
   </div>
   <div class = "form-group">
      <label for = "name">customerid</label>
      <input type = "text" name="customerid" class = "form-control" value="<?php echo $row['customerid']; ?>"  placeholder = "enter customerid">
   </div>
    <div class = "form-group">
      <label for = "name">order id</label>
      <input type = "text"  class = "form-control" value="<?php echo $row['orderid']; ?>" name="orderid" placeholder = "enter customerid">
   </div>
   <div class = "form-group">
      <label for = "name">due-date</label>
      <input type = "text" name="due-date" class = "form-control" value="<?php echo $row['due-date']; ?>"  placeholder = "enter due-date ">
   </div>
   <div class = "form-group">
      <label for = "name">issudate</label>
      <input type = "text" name="issudate" class = "form-control" value="<?php echo $row['issudate']; ?>"  placeholder = "enter issudate">
   </div>
   <div class = "form-group">
      <label for = "name">totalamount</label>
      <input type = "text" name="totalamount" class = "form-control" value="<?php echo $row['totalamount']; ?>"  placeholder = "enter totalamount ">
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
