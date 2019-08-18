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

$uploaddir = 'images/';

$picture_name = $_FILES['file_upload']['name'];
$picture_name = str_replace(" ","-",$picture_name);
$picture_name = str_replace(".","-",$picture_name);
$picture_name = $picture_name.".".$extension;

if(move_uploaded_file($_FILES['file_upload']['tmp_name'], "../".$uploaddir .basename($picture_name)))
        {
    $sql = "UPDATE `product` "
         . " SET `image` = '".$uploaddir.$picture_name."' "
         . " WHERE `id` = '".$_REQUEST['id']."';";
    $conn->query($sql);
}
$sql ="UPDATE `product` SET "
        . "`id` = '".$_POST['id']."',"
        . " `productname` = '".$_POST['productname']."',"
        . " `bo_id` = '".$_POST['bo_id']."',"
        . "`description` = '".$_POST['description']."',"
        . "`Color` = '".$_POST['Color']."',"
        . "`uniteprice` = '".$_POST['uniteprice']."',"
        . "`catagoryid` = '".$_POST['catagoryid']."'"
        . " WHERE `product`.`id` = '".$_REQUEST['id']."';";

if ($conn->query($sql) === TRUE) {
     header("Location:butique_product_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

