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

$sql = "INSERT INTO `receipt`(`receiptid`, `customerid`,`orderid`,`due-date`, `issudate`, `totalamount` ) VALUES (NULL,'".$_POST['customerid']."','".$_POST['orderid']."','".$_POST['due-date']."', '".$_POST['issudate']."','".$_POST['totalamount']."')";

if ($conn->query($sql) === TRUE) {
     header("Location:recepit_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>