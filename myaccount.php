<?php 
include "header/header.php";

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

if(isset($_REQUEST['action'])){
	//echo "i am there to delete";bottique_owner
$sql = "DELETE FROM `bottiqueowner` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}

?>
<div class="row">
    <div class="col-md-12">
        <h2>My Account </h2>
    </div>
</div>
<div class="row">
    <hr>
</div>

