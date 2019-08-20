<?php
require_once "db.php";
$user_id    =   $_REQUEST['id'];

$customer_name    =   $_REQUEST['customer_name'];
$prd_image    =   $_REQUEST['prd_img'];
 $user_address    =   $_REQUEST['address'];
 $user_cnic    =   $_REQUEST['cnic'];
 $user_contact    =   $_REQUEST['mobile_number'];
 $prd_name    =   $_REQUEST['prd_name'];
 $vendor_city    =   $_REQUEST['vendor_city'];
 $vendor_id    =   $_REQUEST['vendor_id'];
 $prd_price    =   $_REQUEST['prd_price'];
 $prd_quality    =   $_REQUEST['prd_quality'];
 $prd_qty    =   $_REQUEST['prd_qty'];
 $prd_desc    =   $_REQUEST['prd_desc'];
 $vendor_contact    =   $_REQUEST['vendor_contact'];
 $total     =   $prd_qty*$prd_price;

 $sql = "INSERT INTO cart (user_id,vendor_id,prd_image, customer_name,user_cnic, address,user_contact,prd_name,vendor_city,prd_price,prd_quality,prd_qty,prd_desc,vendor_contact,total)
            VALUES ('$user_id', '$vendor_id','$prd_image','$customer_name', '$user_cnic','$user_address','$user_contact','$prd_name','$vendor_city','$prd_price','$prd_quality','$prd_qty','$prd_desc','$vendor_contact','$total')";

if ($conn->query($sql) === TRUE){
    
        
        header('location:user_panel/index.php');
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
?>