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
	//echo "i am there to dele";`receipt`
$sql = "DELETE FROM `receipt` WHERE `receiptid` = '".$_REQUEST['receiptid']."'";
	$conn->query($sql);
}




$sql = "SELECT * FROM `receipt` ";
$result = $conn->query($sql);
   
?>
<?php 
include "header/header.php";?>
<div class="row">
<div class = "col-md-10" ></div>
 <div class = "col-md-2 right" ><a href = "add.receipt.php" class="btn btn-default">Add New Botique receipt</a></div>
</div>
<div class="row">
 

<DIV class = "col-md-12" style="background-color: blue; height: 120px;">ffff</DIV>

</div>

<table class = "table table-striped">
  
   
   <thead>
      <tr>
         <th>receiptid</th>
		 <th>customerid</th>
		 <th>orderid</th>
		 <th>due-date</th>
		 <th>issudate</th>
         <th>totalamount</th>
		 <th>Action</th>
		 
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["receiptid"]; ?></td>
		 <td><?php echo $row["customerid"]; ?></td>
		 <td><?php echo $row["orderid"]; ?></td>
		 <td><?php echo $row["due-date"]; ?></td>
         <td><?php echo $row["issudate"]; ?></td>
         <td><?php echo $row["totalamount"]; ?></td>
		 <td>
	
		  <a href = "edit-receipt.php?receiptid=<?php echo $row["receiptid"]; ?>" class="btn btn-default">Edit</a>
		 <a onclick="return confirm('Are you sure you want to delete this item?');" href = "?action=delete&receiptid=<?php echo $row["receiptid"]; ?>" class="btn btn-default">Delete</a></td>
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
