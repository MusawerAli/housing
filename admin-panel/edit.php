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
	$sql = "delet FROM ``boutique_`purches` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}

?>
<?php 
$id = $_REQUEST['id'];
include "header/header.php";
$sql = "SELECT * FROM `rabia` where id = '$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
print_r($row);
?>