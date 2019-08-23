<?php
require_once '../db.php';
require_once('../assets/TCPDF/tcpdf.php');
 $plot_no =  $_POST['plot_no'];
 $id = $_POST['id'];
 $reciver_id = $_POST['reciver_id'];
 $pwd = $_POST['password'];


 $pwd_matcher = "SELECT `password`  FROM login WHERE `login_id` = '$id'";
 $pwd_result = $conn->query($pwd_matcher);
 $row = $pwd_result->fetch_assoc();
     $db_pwd = $row['password'];

     if($db_pwd == $pwd){
 $sql = "UPDATE `property_detail` SET `login_id`='$reciver_id' WHERE `plot_no`='$plot_no'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Your enter property no# wrong";
}
     }else{
        echo "Password not Correct!";
     }
 
 
//Generate PDF bill
     function fetch_data($plot_no){
        $output = '';
        require_once '../db.php';
        
    
        $sql = "SELECT * from property_detail where plot_no='32323'";
        $result = mysqli_query($connect,$sql);
    
        while ($row = mysqli_fetch_array($result)){
            $output .= '<tr>
                    <th>Reciver Id: </th>
    
                    <td>'.$row['login_id'].'</td>
            </tr>
    
    <tr>
                    <th>Plot No: </th>
    
                    <td>'.$row['plot_no'].'</td>
            </tr>
            <tr>
            <th>Address: </th>
    
                    <td>'.$row['property_location'].', '.$row['property_city'].'</td>
            </tr>
            <tr>
            <th>Price: </th>
    
                    <td>'.$row['price'].'</td>
            </tr>
            <tr>
            <th>qty</th>
    
                    <td>'.$row['unit_qty'].', '.$row['property_unit'].'</td>
            </tr>
            ';
        }
    
        return $output;
    }

?>