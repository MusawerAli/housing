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

echo $sql = "INSERT INTO `category`("
        . " `categoryid`, `catrgoryname`) "
        . " VALUES (NULL,'".$_POST['catrgoryname']."')";

if ($conn->query($sql) === TRUE) {
     header("Location:buttique_catagory_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>