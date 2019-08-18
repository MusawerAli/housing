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

 $sql = "INSERT INTO `boutique_order`"
        . "(`orderid`"
        . ", `bo_id`, `customerid`,"
        . "`amount` ,"
        . "`date`,"
        . " `status`)"
        . " VALUES "
        . "(NULL,'"
        .$_POST['bo_id']."',"
        . "'".$_POST['customerid']."',"
        . "'".$_POST['amount']."',"
        . "'".$_POST['date']."',"
        . "'".$_POST['status']."')"
        . ";";

if ($conn->query($sql) === TRUE) {
        header("Location:butique_order_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>