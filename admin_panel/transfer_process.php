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
 $sql = "UPDATE `property_detail` SET `login_id`='$reciver_id' WHERE `plot_no`='$plot_no'";

if ($conn->query($sql) === TRUE) {
    $sql2 = "INSERT INTO `transfer_history`(`sender_id`, `reciver_id`, `plot_no`) VALUES ('$id','$reciver_id','$plot_no')";
    if ($conn->query($sql2) === TRUE){ 
    //Generate PDF bill
        require_once('../assets/TCPDF/tcpdf.php');
        $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $obj_pdf->SetCreator(PDF_CREATOR);  
            $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
      
            $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
             $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
            $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
            $obj_pdf->SetDefaultMonospacedFont('helvetica');  
            $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
            $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
            $obj_pdf->setPrintHeader(false);  
            $obj_pdf->setPrintFooter(false);  
            $obj_pdf->SetAutoPageBreak(TRUE, 10);  
            $obj_pdf->SetFont('helvetica', '', 12);  
            $obj_pdf->AddPage(); 
             $content = '';
              $content .= '  
            <h3 align="center">Reciept of Transfer Plot</h3><br /><br />  
            <table border="1" cellspacing="0" cellpadding="5">  
                  
            ';  
            $content .= fetch_data($plot_no,$reciver_id);  
            $content .= '</table>';  
             $obj_pdf->writeHTML($content);
             $obj_pdf->Output('sample.pdf', 'I'); }
         
} else {
    echo "Your enter property no# wrong";
}
     }else{
        echo "Password not Correct!";
     }
 
function fetch_data($plot_no,$reciver_id){
	$output = '';
	$connect = mysqli_connect("localhost","root","rootroot","society_db");

	$sql = "SELECT *
FROM ((property_detail
INNER JOIN login ON login.login_id = property_detail.login_id)
INNER JOIN users_details ON users_details.login_id = property_detail.login_id) 
WHERE property_detail.plot_no='$plot_no' AND property_detail.login_id='$reciver_id'";
	$result = mysqli_query($connect,$sql);

	while ($row = mysqli_fetch_array($result)){
                $output .= '
                <tr >
                <td colspan="2" style=" background-color: #f1f1c1;padding:25px;">Reciver Information</td>
                </tr>
                <tr>
                               <th>
                             Property to: 
                               </th>
                               <td>  '.$row['purpose'].'</td>
                               </tr>
                               <tr>
                               <td colspan="2">Reciver Information</td>
                               </tr>
                               <tr>
                                               <th>Transfer TO </th>
               
                                               <td>'.$row['name'].'</td>
                               </tr>
                               <tr>
                                               <th>Mobile number</th>
               
                                               <td>'.$row['mobile_number'].'</td>
                               </tr>
                               <tr>
                                               <th>Cnic</th>
               
                                               <td>'.$row['cnic'].'</td>
                               </tr>
                               
                               <tr>
                               <td colspan="2" style=" text-align:center;background-color: #f1f1c1; padding: 25px;">Property Information</td>
                               </tr>
               
               <tr>
                                               <th rowspan="3">Plot Detail: </th>
                                               <td>'.$row['plot_no'].'</td>
                                              
                               </tr>
                               <tr>
                               <td>'.$row['property_type'].'</td>
                               </tr>
                               <tr>
                              
                               <td>'.$row['unit_qty'].' , '.$row['property_unit'].'</td>
                               </tr>
                               <tr>
                               <th>Address: </th>
               
                                               <td>'.$row['property_location'].', '.$row['property_city'].'</td>
                               </tr>
                               
                               
                       <tr>
                               <th>Price: </th>
               
                                               <td style="background-color: #f1f1c1;">'.$row['price'].'</td>
                               </tr>
		';
	}

	return $output;
}

   


?>