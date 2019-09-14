<?php
require_once 'db.php';

if(isset($_POST["limit"], $_POST["start"]))
{

 $query = "SELECT * FROM property_detail INNER JOIN login ON login.login_id = property_detail.login_id ORDER BY property_detail.id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
 
 <!-- Blog entry -->
  <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        
         <span class="w3-right w3-tag w3-round black w3-border w3-border-orange"><span class="fa fa-star-half-o w3-text-orange"></span> For '.$row['purpose'].'</span>
         <br>
        <hr class="w3-clear">
        <h2 class="w3-wide w3-text-orange">'.$row['property_title'].'</h2>
        <h3 class="w3-opacity">'.$row['unit_qty'].' ' .$row['property_unit'].'</h3>
         <span class="w3-right w3-tag w3-round w3-white w3-border w3-border-green">(pkr) '.$row['price'].' /=</span>
        <h5 class="w3-opacity"> Property no# '.$row['plot_no'].'</h5>
        <h5>'.$row['property_location'].', ' .$row['property_city'].'</h5>

        <img src="<?=$base_url?>assets/dataimg/'.$row['image'].'" style="width:100%" class="w3-margin-bottom">
        <p>"'.$row['property_desc'].'"</p>
        <hr class="w3-clear">
        <h4> '.$row['name'].'</h4> <strong>'.$row['email'].'</strong>
       
      </div> 
  <hr>
  
  ';
 }
}
?>