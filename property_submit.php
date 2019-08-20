<?php
require_once "db.php";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//Filter Data

$property_type	= 	test_input($_POST['property_type']); 
$login_id 		=	test_input($_POST['login_id']); 
 $purpose 		= 	test_input($_POST['purpose']); 
 $property_city = 	test_input($_POST['property_city']); 
 $property_location = 	test_input($_POST['property_location']); 
 $property_title = 	test_input($_POST['property_title']); 
 $property_desc = 	test_input($_POST['property_desc']); 
 $property_unit  = 	test_input($_POST['unit']); 
 $unit_qty  			= 	test_input($_POST['unit_qty']); 
 $price 		= 	test_input($_POST['price']); 
 $plot_no 		= 	test_input($_POST['plot_no']); 

$image = $_FILES['fileToUpload']['name'];


$target_dir = "assets/dataimg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// ****Check if file already exists**** //
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
            // **** Check file size ****//
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
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
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            
        }

// 		// Check if Already plot Exit
// $query_db="SELECT * FROM property_detail WHERE `plot_no`='$plot_no'";
//         $query=$conn->query($query_db);
//         $numrow=$query->num_rows;
       
//         if($numrow<=0){
           


//            // Insert Into Db
//             $sql = "
                
//             INSERT INTO `property_detail` (`login_id`, `purpose`, `property_type`, `property_title`, `property_unit`, `unit_qty`,`price`,`property_desc`,`plot_no`,`property_city`,`property_location`) 
//             VALUES ('$login_id', '$purpose', '$property_type', '$property_title', '$property_unit','$unit_qty','$price','$property_desc','$plot_no','$property_city','$property_location');

//             ";

//             if ($conn->query($sql) === TRUE){
//                 header('location:society_office_user_panel/index.php');
               
//                 }
                
//             else {
//                 echo "Error: " . $sql . "<br>" . $conn->error;
//             }
//                 $conn->close();  
//         }
//         else{
//             ?>
//                     <script>
//                     alert("!!This Plot no already post");
//                     window.open('member_panel/index.php','_self');
//                     </script>
//                         <?php
                        
//         }
?>