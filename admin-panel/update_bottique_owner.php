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

if(move_uploaded_file($_FILES['file_upload']['tmp_name'], "../".$uploaddir .basename($picture_name))){
    $sql = "UPDATE `bottiqueowner` "
         . " SET `image` = '".$uploaddir.$picture_name."' "
         . " WHERE `id` = '".$_REQUEST['id']."';";
    $conn->query($sql);
}

  $sql = "UPDATE `bottiqueowner` SET "
         . " `id` = '".$_POST['id']."', "
         . " `name` = '".$_POST['name']."', "
         . " `cnic` = '".$_POST['cnic']."',"
         . " `address` = '".$_POST['address']."',"
          . " `phoneno` = '".$_POST['phoneno']."'"
         . " WHERE `id` = '".$_REQUEST['id']."';";

if ($conn->query($sql) === TRUE) {
     header("Location:butique_owner_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>