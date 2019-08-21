<?php
require_once '../db.php';
 $plot_no =  $_POST['plot_no'];
 $id = $_POST['id'];
 $reciver_id = $_POST['reciver_id'];
 $pwd = $_POST['password'];


 $pwd_matcher = "SELECT `password`  FROM login WHERE `login_id` = '$id'";
 $pwd_result = $conn->query($pwd_matcher);
 $row = $pwd_result->fetch_assoc();
     $db_pwd = $row['password'];

     if($db_pwd == $pwd){
 $sql = "UPDATE `property_detail` SET `login_id`=$reciver_id WHERE `plot_no` ='$plot_no'";

if ($conn->query($sql) === TRUE) {
    echo "Property Transfer Successfully";
} else {
    echo "Your enter property no# wrong";
}
     }else{
        echo "Password not Correct!";
     }
 
 



?>