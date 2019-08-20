<?php

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
 $login_cnic 	= 	test_input($_POST['login_cnic']); 



		// Check if Already plot Exit
$query_db="SELECT plot_no FROM property_detail WHERE `plot_no`='$plot_no'";
        $query=$conn->query($query_db);
        $numrow=$query->num_rows;
        if($numrow<=0){
           


           // Insert Into Db
            $sql = "
                
            INSERT INTO `property_detail` (`login_id`, `purpose`, `property_type`, `property_title`, `property_unit`, `unit_qty`,`price`,`property_desc`,`plot_no`,`property_city`,`property_location`,`login_cnic`) 
            VALUES ('$login_id', '$purpose', '$property_type', '$property_title', '$property_unit','$unit_qty','$price','$property_desc','$plot_no','$property_city','$property_location','$login_cnic');

            ";

            if ($conn->query($sql) === TRUE){
                header('location:society_office_user_panel/index.php');
               
                }
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
                $conn->close();  
        }
        else{
            ?>
                    <script>
                    alert("!!This Plot no already post");
                    window.open('index.php','_self');
                    </script>
                        <?php
                        
        }
?>