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
	$sql = "DELETE FROM `product` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}




$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);
   
?> 
<?php
include "header/header.php";?>

<div class = "container">
<div class="row">
<form name="form1" action="update_botique_product_form.php?id=<?php echo $_REQUEST['id'];?>" role = "form"  method = "post">

 <div class = "col-md-6 right" ><a href = "add_botique_product_form.php" class="btn btn-default">Add New Botique product</a></div>
</div>
    </div>
<div class="row">
 

<DIV class = "col-md-12" style="background-color: red; height: 120px;">ffff</DIV>

</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
	 
         <th>ID</th>
		 <th>productname</th>
                 <th>bo_id</th>
		 <th>description</th>
		 <th>Color</th>
		 <th>uniteprice</th>
		 <th>catagoryid </th>
		 <th>Action</th>
		 
      </tr>
   </thead>
   
   <body>
   
   <?php if ($result->num_rows> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
	  
         <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["productname"]; ?></td>
          <td><?php echo $row["bo_id"]; ?></td>
		 <td><?php echo $row["description"]; ?></td>
		 <td><?php echo $row["Color"]; ?></td>
         <td><?php echo $row["uniteprice"]; ?></td>
         <td><?php echo $row["catagoryid"]; ?></td>
<td>
	
		<a href = "edit_botique_product_form.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">Edit</a>
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
