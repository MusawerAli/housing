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

if(isset($_REQUEST['action'])){
	//echo "i am there to delete";bottique_owner
$sql = "DELETE FROM `bottiqueowner` WHERE `bo_id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}

?>
<div class="row">
    <div class="col-md-12">
        <h2>Products from Botique</h2>
    </div>
</div>
<div class="row">
    <hr>
</div>
<div class="row">
<?php
$sql = "SELECT * FROM `product` where `bo_id` = '".$_REQUEST['id']."' ;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="col-md-3">
        <?php echo $row["productname"]; ?><br>
        <img height="100" width="100" src="http://localhost/front-site/<?php echo $row['image']; ?>">
        <br><br>
        <a href = "view_product.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">Buy Now</a>
    </div>

    <?php }
}?>
</div>

