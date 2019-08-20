<?php
session_start();
require_once "db.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM `login` where `email`='$email' and `password` = '$password' and status = 'Active';";
//exit();
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
//exit();
if(!empty($row['email'])){
       $d=$_SESSION['uid'] = $row;
       
       if($d['type'] == "society_officer"){
        header('location:society_office_user_panel/');
    }
    elseif($d['type'] == "admin"){
        header('location:admin_panel/index.php');
    }
    else{
        
        header('location:member_panel/index.php');
    }
}else{
	echo " <script>
    alert('USERNAME/PASSWORD is not valid Or Your account is not approved yet, Please contact society office admin for approval');
    window.open('login.php','_self');
</script>";
}
?>

