<?php
session_start();
require_once "db.php";
$fullname = $_POST['fullname'];
$cnic = $_POST['cnic'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];
$city = $_POST['city'];


$query_db="SELECT * FROM login WHERE `email`='$email'";
        $query=$conn->query($query_db);
        $numrow=$query->num_rows;
        if($numrow<=0){
           
            $sql = "
                
            INSERT INTO `login` (`login_id`, `name`, `password`, `email`, `type`, `status`) 
            VALUES (NULL, '$fullname', '$password', '$email', '$type', 'blocked');

            ";

            if ($conn->query($sql) === TRUE){
                $id = $conn->insert_id;
                $sql_details="INSERT INTO `users_details` (`id`, `login_id`, `cnic`, `address`, `mobile_number`, `image`) 
                VALUES (NULL, '$id', '$cnic', '$address', '$contact', '');";
                $conn->query($sql_details);
                $d=$_SESSION['uid'] = array(
                    'email'=>$email,
                    'name'=>$fullname,
                    'id'=>$id,
                    'type'=>$type,
                    'image'=>$image,
                    'city'=>$city 
                );
                if($d['type'] == "society_officer"){
                    header('location:society_office_user_panel/index.php');
                }else{
                    header('location:member_panel/index.php');
                }
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
                $conn->close();  
        }
        else{
            ?>
                    <script>
                    alert("!!Email Already Register!");
                    window.open('register.php','_self');
                    </script>
                        <?php
                        
        }

?>

