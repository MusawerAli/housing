<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bottique";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php 
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM `customer` where email = '$email' and password = '$password';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(!empty($row['email'])){
	echo "welcome ".$row['customer_name'];
}else{
	echo "Invalid user name/password.";
}
?>

