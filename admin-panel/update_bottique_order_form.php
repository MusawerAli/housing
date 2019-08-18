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
$path_parts = pathinfo($_FILES["file_upload"]["name"]);
$extension = $path_parts['extension'];

$uploaddir = '../images/';

$picture_name = $_FILES['file_upload']['name'];
$picture_name = str_replace(" ","-",$picture_name);
$picture_name = str_replace(".","-",$picture_name);
$picture_name = $picture_name.".".$extension;

if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $uploaddir .basename($picture_name))){
    $sql = "UPDATE `boutique_order` "
         . " SET `image` = '".$uploaddir.$picture_name."' "
         . " WHERE `orderid` = '".$_REQUEST['orderid']."';";
    $conn->query($sql);
}
 $sql = "UPDATE `boutique_order` "
         . " SET `orderid` = '".$_POST['orderid']."', "
         . " `bo_id` = '".$_POST['bo_id']."', "
         . " `customerid` = '".$_POST['customerid']."', "
         . " `amount` = '".$_POST['amount']."', "
         . " `date` = '".$_POST['date']."', "
         . " `status` = '".$_POST['status']."' "
         . " WHERE `orderid` = '".$_REQUEST['orderid']."';";

if ($conn->query($sql) === TRUE) {
     header("Location:butique_order_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>