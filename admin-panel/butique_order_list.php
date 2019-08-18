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
	//echo "i am there to delete";
	$sql = "DELETE FROM `boutique_order` WHERE `orderid` = '".$_REQUEST['orderid']."'";

	$conn->query($sql);
}




$sql = "SELECT * FROM `boutique_order`";

$result = $conn->query($sql);

   
?>
<?php 
include "header/header.php";?>
<div class="row">



<div class = "container">
<div class="row">
 <div class = "col-md-8 right" ><a href = "add_botique_order_form.php" class="btn btn-default">Add New bottique order</a></div>
</div>
    <div class="row">
 

<DIV class = "col-md-12" style="background-color: blue; height: 120px;">ffff</DIV>

</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
		 <th>orderid</th>
		 <th>bo_id</th>
		 <th>customerid</th>
		 <th>amount</th>
		 <th>date</th>
                 <th>status</th>
		 <th>Action</th>
		 
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["orderid"]; ?></td>
         <td><?php echo $row["bo_id"]; ?></td>
		 <td><?php echo $row["customerid"]; ?></td>
		 <td><?php echo $row["amount"]; ?></td>
         <td><?php echo $row["date"]; ?></td>
         <td><?php echo $row["status"]; ?></td>
		 <td>
		
		  <a href = "edit_botique_order_form.php?orderid=<?php echo $row["orderid"]; ?>" class="btn btn-default">Edit</a>
		 <td><a onclick="return confirm('Are you sure you want to delete this item?');" href = "?action=delete&orderid=<?php echo $row["orderid"]; ?>" class="btn btn-default">Delete</a></td>
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
