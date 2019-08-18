<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Could not connect: ' . $conn->mysql_error());
}
if(isset($_REQUEST['action'])){
	//echo "i am there to dele";
	$sql = "DELETE FROM `test1` WHERE `id` = '".$_REQUEST['id']."'";

	$conn->query($sql);
}




$sql = "SELECT * FROM `test1` ";
$result = $conn->query($sql)or die("ops");

?>
<!DOCTYPE html>
<html>
<head>
   <title>Try v1.2 Bootstrap Online</title>
   <link href="https://www.tutorialspoint.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://www.tutorialspoint.com/scripts/jquery.min.js"></script>
   <script src="https://www.tutorialspoint.com/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class = "container">
<div class="row">
 <div class = "col-md-6 right" ><a href = "insert_test_form.html" class="btn btn-default">Add New project</a></div>
</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
         <th>project</th>
		 <th>projectowner</th>
        
         <th>Subject</th>
		 <th>Action</th>
		 
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["project"]; ?></td>
         <td><?php echo $row["projectowner"]; ?></td>
		 <td><?php echo $row["subject"]; ?></td>
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

   