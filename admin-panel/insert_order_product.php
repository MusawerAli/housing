<?php
//print_r($_GET);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bottique";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Could not connect: ' . $conn->mysql_error());
}

$sql = "INSERT INTO `order_product`"
        . "(`orderid`, "
        . "`productid`, "
        . "`quantity`, "
        . "`totalprice` ) "
        . " VALUES"
        . " ('".$_REQUEST['orderid']."',"
        . "'".$_POST['productid']."',"
        . "'".$_POST['quantity']."',"
        . "'".$_POST['totalprice']."')"
        . "";

if ($conn->query($sql) === TRUE) {
     header("Location:order_product.list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>