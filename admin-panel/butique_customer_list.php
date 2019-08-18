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
	$sql = "DELETE FROM `customer` WHERE `customer`.`id` = '".$_REQUEST['id']."'";

	$conn->query($sql);
}




$sql = "SELECT * FROM `customer`";

$result = $conn->query($sql);

   
?>
<?php 
include "header/header.php";?>


<div class="row">
 

<div class = "col-md-12 right" ><a href = "add_botique_customer_form.php" class="btn btn-default">Add New customer</a></div>

</div>
<div class="row">
 

<DIV class = "col-md-12" style="background-color: gray; height: 120px;">ffff</DIV>

</div>

<table class = "table table-striped">
  
   
   <thead>
      <tr>
         <th>ID</th>
		 <th>customer_name</th>
		 <th>cnic</th>
		 <th>address</th>
		 <th>mobile_number</th>
		 <th>email</th>
		 <th>password</th>
		 <th>Action</th>
		 
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["customer_name"]; ?></td>
         <td><?php echo $row["cnic"]; ?></td>
         <td><?php echo $row["address"]; ?></td>
         <td><?php echo $row["mobile_number"]; ?></td>
         <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["password"]; ?></td>
		
		<td>
		 <a href = "edit_botique_customer_form.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">Edit</a>
		 <a onclick="return confirm('Are you sure you want to delete this item?');" href = "?action=delete&id=<?php echo $row["id"]; ?>" class="btn btn-default">Delete</a></td>
     </td>
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
