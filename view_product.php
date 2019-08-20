<?php 
include "header/header.php";

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




//$sql = "SELECT * FROM `boutique_product`";
//$result = $conn->query($sql);
?>
<?php 
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `product` where id = '$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
?>
 
<div class = "container">
<h4>Botique product</h4>



<div class="row">
    <hr>
</div>
<div class="row">
<?php
$sql = "SELECT * FROM `product` ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="col-md-3">
        <?php echo $row["productname"]; ?><br><img height="100" width="100" src="http://localhost/rabia/<?php echo $row['image']; ?>">
    </div>
    

    <?php }
}?>
</div>