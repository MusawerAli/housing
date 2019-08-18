<?php
//print_r($_GET);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Could not connect: ' . $conn->mysql_error());
}

$sql = "INSERT INTO `teacher`(`id`, `teacher`, `cnic`, `teachername`) VALUES (NULL,'".$_POST['teacher']."','".$_POST['cnic']."','".$_POST['teachername']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>