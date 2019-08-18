<?php
print_r($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Could not connect: ' . $conn->mysql_error());
}

$sql = "INSERT INTO `project`(`id`, `project`, `cnic`, `projectname`) VALUES (NULL,'".$_POST['project']."','".$_POST['cnic']."','".$_POST['projectname']."')";

if ($conn->query($sql) === TRUE) {
    header("Location:view-project.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>