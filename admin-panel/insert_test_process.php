<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Could not connect: ' . $conn->mysql_error());
}

$sql = "INSERT INTO `test1`(`id`, `projectowner`, `project`, `subject`) VALUES (NULL,'".$_POST['projectowner']."','".$_POST['project']."','".$_POST['subject']."')";

if ($conn->query($sql) === TRUE) {
     header("Location:listing_test_screen.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

   