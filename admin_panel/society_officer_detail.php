<?php 

include "admin_header.php";
require_once "../db.php";

if(isset($_REQUEST['action'])){
    switch($_REQUEST['action']){
        case"block":
           $sql = " update `login` set status = 'blocked' where login_id = '".$_REQUEST['id']."';";
           $conn->query($sql);
           break;
        case"approve":
           $sql = " update `login` set status = 'Active' where login_id = '".$_REQUEST['id']."';";
           $conn->query($sql);
           break;
        case"delete":
            $sql = " delete from `login` where login_id = '".$_REQUEST['id']."';"
                . " ";
            $conn->query($sql);
            $sql = "delete from `users_details` where login_id = '".$_REQUEST['id']."';";
            $conn->query($sql);
           break;
    }
}

$d=$_SESSION['uid'];

        
        
   
?>
<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Society System User</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Detail</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
<div class="container mt-3">
  <h2>Custom Search</h2>
  <p>Type something in the input field</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered" id="Table">
    <thead>
      <tr>
        <th> Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Cont#</th>
        <th>CNIC</th>
        <th>User Type</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
    <?php
$sql = "SELECT *, login.login_id as id FROM `login` "
        . " LEFT JOIN users_details ON users_details.login_id = login.login_id"
        . " where type in('society_officer','admin') "
        . ";";
$result = $conn->query($sql);
if ($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
    // output data of each row
     
?>
   
        <tr <?php if($row['status'] =="blocked")echo"class='danger'";?>>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['mobile_number']?></td>
        <td><?=$row['cnic']?></td>
        <td><?=$row['type']?></td>
        <td><?=$row['status']?></td>
        <td>
            <div class = "dropdown">
   
                <button type = "button" class = "btn dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown">
                   Action
                   <span class = "caret"></span>
                </button>
   
                <ul class = "dropdown-menu" role = "menu" aria-labelledby = "dropdownMenu1">
                   <li role = "presentation">
                      <a role = "menuitem" tabindex = "-1" href = "?action=approve&id=<?=$row['id']?>" onclick="return confirmAction();">Approve</a>
                   </li>
                   <li role = "presentation" class = "divider"></li>
                   <li role = "presentation">
                      <a role = "menuitem" tabindex = "-1" href = "?action=block&id=<?=$row['id']?>" onclick="return confirmAction();">Block</a>
                   </li>
                   <li role = "presentation" class = "divider"></li>
                   <li role = "presentation">
                       <a role = "menuitem" tabindex = "-1" href = "?action=edit&id=<?=$row['id']?>" >
                         Edit
                      </a>
                   </li>
                   <li role = "presentation" class = "divider"></li>
                   <li role = "presentation">
                      <a role = "menuitem" tabindex = "-1" href = "?action=delete&id=<?=$row['id']?>" onclick="return confirmAction();">
                         Delete
                      </a>
                   </li> 
                </ul>
   
            </div>
        </td>

      </tr>
  <?php endwhile;endif;?>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script>
    function confirmAction(){
        if(confirm("Are you sure to complete the action?")){
            return true;
        }else{
            return false;
        }
    }
$(document).ready(function(){
    
    
    
    var orderdataTable = $('#Table').DataTable({
				"columnDefs":[],
			});
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>