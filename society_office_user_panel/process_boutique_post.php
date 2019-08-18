<?php
require_once "../db.php";
 $vendor_id    =   $_REQUEST['vendor_id'];
 $vendor_name  =   $_REQUEST['vendor_name'];
 $vendor_city  =   $_REQUEST['vendor_city'];
 $prd_desc  =   $_REQUEST['desc'];
 $prd_quality  =   $_REQUEST['prd_quality'];
 $category_id    =   $_REQUEST['category_id'];
 $prd_image      =   $_FILES['prd_image']['name'];
 $prd_qty    =   $_REQUEST['prd_qty'];
 $prd_price  =   $_REQUEST['prd_price'];
 $prd_name  =   $_REQUEST['prd_name'];
 $vendor_contact    =   $_REQUEST['vendor_contact'];
 $target_dir = "../assets/prd_images/";
 $target_file = $target_dir . basename($_FILES["prd_image"]["name"]);
 $uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$image_info = getimagesize($_FILES["prd_image"]["tmp_name"]);
//$image_info = getimagesize($target_file);
$image_width = $image_info[0];
$image_height = $image_info[1];

    // ****Check if image file is a actual image or fake image****//

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["prd_image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

        // **** Check file size ****//
        if ($_FILES["prd_image"]["size"] > 100000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
            // **** Validate Image Size ****//
            if ($image_width != 1920 and $image_height != 1080)
                    {
                        echo "<script>
                            alert('Sorry, your image size must 1920X1080.');
                        </script>";
                       
                        $uploadOk = 0;
                        
                    }

         //****/ Allow certain file formats ****//
         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }

         // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else 
            {
                if (move_uploaded_file($_FILES["prd_image"]["tmp_name"], $target_file)) {
                   
                    
                    $sql = "INSERT INTO boutique_post (category_id,prd_image, prd_name,prd_price,prd_qty,vendor_city,vendor_id,vendor_name,prd_desc,prd_quality,vendor_contact)
                    VALUES ('$category_id', '$prd_image', '$prd_name','$prd_price','$prd_qty','$vendor_city','$vendor_id','$vendor_name','$prd_desc','$prd_quality','$vendor_contact')";
        
                    if ($conn->query($sql) === TRUE){
                        header('location:post.php');
                        
                        
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                        $conn->close();
                
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    
                }
            }

?>