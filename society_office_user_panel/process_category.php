<?php
require_once "../db.php";
 $category_name=$_POST['category_name'];
 $user_id=$_POST['user_id'];
 $type=$_POST['type'];

 $sql = "INSERT INTO category (category_name, user_id, user_type)
VALUES ('$category_name', '$user_id', '$type')";

if ($conn->query($sql) === TRUE) {
    header('location:category.php');

} else {
    echo " <script>
    alert('Some Internal Error');
    window.open('login.php','_self');
        </script>";
    header('location:category.php');
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>