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
    $sql = "UPDATE `receipt` "
         . " SET `image` = '".$uploaddir.$picture_name."' "
         . " WHERE `receiptid` = '".$_REQUEST['receiptid']."';";
    $conn->query($sql);
}
 $sql = "UPDATE `receipt` "
         . " SET `receiptid` = '".$_POST['receiptid']."', "
         . " `customerid` = '".$_POST['customerid']."', "
         . " `orderid` = '".$_POST['orderid']."', "
         . " `due-date` = '".$_POST['due-date']."', "
         . " `issudate` = '".$_POST['issudate']."', "
         . " `totalamount` = '".$_POST['totalamount']."' "
         . " WHERE `receiptid` = '".$_REQUEST['receiptid']."';";

if ($conn->query($sql) === TRUE) {
     header("Location:recepit_list.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>