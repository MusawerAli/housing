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
	//echo "i am there to dele";
	//$sql = "DELETE FROM `purches` WHERE `purches`.`id` = '"EST['id']."'";.$_REQUEST['id']."'";

	$conn->query($sql);
}



$sql = "SELECT * FROM `purches` ";
$result = $conn->query($sql);
   
?>
<?php
include "header/header.php";?>
<div class="row">
<div class = "col-md-10" ></div>
 <div class = "col-md-6 right" ><a href = "add_botique_purches_form.php" class="btn btn-default">Add New Botique purches</a></div>
</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
         <th>ID</th>
		 <th>shoes_no</th>
         <th>shoes_color</th>
		 <th>Action</th>
		 
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["shoes_no"]; ?></td>
         <td><?php echo $row["shoes_color"]; ?></td>
		 <td>
		 <a href = "edit_botique_purches_form.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">Edit</a>

		 <td><a onclick="return confirm('Are you sure you want to delete this item?');" href = "?action=delete&id=<?php echo $row["id"]; ?>" class="btn btn-default">Delete</a></td>
    
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
