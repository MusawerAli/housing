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
	$sql = "DELETE FROM `order_product` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}




$sql = "SELECT * FROM `order_product`";
$result = $conn->query($sql);
   
?> 
<?php
include "header/header.php";?>

<div class = "container">
<div class="row">
<form name="form1" action="update_order_product.php?id=<?php echo $_REQUEST['id'];?>" role = "form"  method = "post">

 <div class = "col-md-6 right" ><a href = "add_order_product.php" class="btn btn-default">Add New Botique order_product</a></div>
</div>
</div>
<div class="row">
 

<DIV class = "col-md-4" style="background-color: PINK; height: 120px;">ffff</DIV>&nbsp
<DIV class = "col-md-4" style="background-color: PINK; height: 120px;">ffff</DIV>&nbsp
</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
          <th>id </th>   
      <th>orderid</th>
		 <th>productid</th>
		 <th>quantity</th>
		 <th>totalprice</th>
		 <th>Action</th>
		 
		 
      </tr>
   </thead>
   
   <body>
   
   <?php if ($result->num_rows> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
	 <td><?php echo $row["id"]; ?></td> 
         <td><?php echo $row["orderid"]; ?></td>
         <td><?php echo $row["productid"]; ?></td>
         <td><?php echo $row["quantity"]; ?></td>
         <td><?php echo $row["totalprice"]; ?></td>
         
		<td>
		<a href = "edit_order_product.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">Edit</a>
		 <a onclick="return confirm('Are you sure you want to delete this item?');" href = "?action=delete&id=<?php echo $row["id"]; ?>" class="btn btn-default">Delete</a>
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
