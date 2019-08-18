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

$sql = "INSERT INTO `product`("
        . " `id`, "
        . " `productname`, "
        . " `bo_id`, "
        . " `description`, "
        . " `Color`,"
        . " `uniteprice`, "
        . " `catagoryid`) "
        . " VALUES "
        . "(NULL,"
        . " '".$_POST['productname']."',"
        . " '".$_POST['bo_id']."',"
        . " '".$_POST['description']."',"
        . " '".$_POST['Color']."',"
        . " '".$_POST['uniteprice']."',"
        . " '".$_POST['catagoryid']."'"
        . ")";

if ($conn->query($sql) === TRUE) {
     header("Location:butique_product_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>