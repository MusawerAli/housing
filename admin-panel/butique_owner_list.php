<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bottique";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_REQUEST['action'])){
	//echo "i am there to delete";bottique_owner
$sql = "DELETE FROM `bottiqueowner` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}




$sql = "SELECT * FROM `bottiqueowner` ";
$result = $conn->query($sql);
   
?>
<?php 
include "header/header.php";?>
<div class="row">
<div class = "col-md-10" ></div>
 <div class = "col-md-2 right" ><a href = "add_botique_owner_form.php" class="btn btn-default">Add New Botique Owner</a></div>
 </div>
<div class="row">
 

<DIV class = "col-md-3" style="background-color: GREEN; height: 120px;">ffff</DIV>
<DIV class = "col-md-3 " style="background-color: GREEN; height: 120px; margin-left: 50px;">ffff</DIV>


</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
      <th>ID</th>
	 <th>Name</th>	 
         <th>CNIC</th>
		 <th>address</th>
		 <th>phoneno</th>
                 
		 <th>Action</th>
		 
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["name"]; ?></td>
         <td><?php echo $row["cnic"]; ?></td>
		 <td><?php echo $row["address"]; ?></td>
		 <td><?php echo $row["phoneno"]; ?></td>
                 
		 
		 <td>
	
		  <a href = "edit_botique_owner_form.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">Edit</a>
		 <a onclick="return confirm('Are you sure you want to delete this item?');" href = "?action=delete&id=<?php echo $row["id"]; ?>" class="btn btn-default">Delete</a></td>
      </tr>
  <?php     
  }
} 
$conn->close();
?>
      
   </tbody>
   
</table>





</div>

</body>
</html>
