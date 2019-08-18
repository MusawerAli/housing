<?php 

include "admin_header.php";
require_once "../db.php";
   
$d=$_SESSION['uid'];

class cout_rows {

  public $tbl_name;
  public $type;
  public $conn;
  public function __construct($tbl_name,$type,$conn) {
     $sql = "SELECT  * FROM ".$tbl_name." WHERE type= '".$type."'";
 $result = $conn->query($sql)or die($sql." ".$conn->error.__LINE__);
 echo $this->rslt = $result->num_rows;
    //$this->param = $param;
  }
}   
        
// SELECT COUNT(id) AS total_users FROM customer WHERE type='seller';
?>

<div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
      <?php
     
      
      $count_data = new cout_rows('login','society_officer',$conn);
       $count_data->rslt; // foobar
     
      ?>
          <h3></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Society Officer</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php
     
      
     $count_data = new cout_rows('login','member',$conn);
      $count_data->rslt; // foobar
    
     ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Members</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php
     
      
     $count_data = new cout_rows('login','admin',$conn);
      $count_data->rslt; // foobar
    
     ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Admin</h4>
      </div>
    </div>
    <!-- <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div> -->
  </div>

