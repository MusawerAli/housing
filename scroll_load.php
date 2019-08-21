<?php
require_once 'db.php';

if(isset($_POST["limit"], $_POST["start"]))
{

 $query = "SELECT * FROM property_detail ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
 
 <!-- Blog entry -->
  <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="http://localhost/housing/assets/dataimg/'.$row['image'].'" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">32 min</span>
        <h4>Angie Jane</h4><br>
        <hr class="w3-clear">
        <p>Have you seen this?</p>
        <img src="http://localhost/housing/assets/dataimg/'.$row['image'].'" style="width:100%" class="w3-margin-bottom">
        <p>"'.$row['property_desc'].'"</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div> 
  <hr>
  <hr />
  ';
 }
}
?>