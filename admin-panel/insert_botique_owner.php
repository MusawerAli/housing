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

$sql = "INSERT INTO `bottiqueowner`"
        . "(`id`,"
        . " `name`, "
        . "`cnic`, "
        . "`address`,"
        . " `phoneno`)"
        . " VALUES"
        . " (NULL,"
        . "'".$_POST['name']."',"
        . "'".$_POST['cnic']."',"
        . "'".$_POST['address']."',"
        . "'".$_POST['phoneno']."')";

if ($conn->query($sql) === TRUE) {
     header("Location:butique_owner_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>