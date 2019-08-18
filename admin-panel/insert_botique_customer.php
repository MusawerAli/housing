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
$sql =" INSERT INTO `customer,"
        . " (`id`, "
        . "`customer_name`,"
        . " `cnic`,"
        . " `address`, "
        . "`mobile_number`,"
        . " `email`, "
        . "`password`)"
        . " VALUES "
        . "(NULL,"
        . "'".$_POST['customer_name']."',"
        . "'".$_POST['cnic']."',"
        . "'".$_POST['address']."',"
        . "'".$_POST['mobile_number']."',"
        . "'".$_POST['email']."',"
        . "'".$_POST['password']."')";
        
if ($conn->query($sql) === TRUE) {
     header("Location:butique_customer_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>