<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_REQUEST['action'])){
	//echo "i am there to dele";
echo	$sql = "DELETE FROM `project` WHERE `project`.`id` = '".$_REQUEST['id']."'";

	$conn->query($sql);
}

$sql = "SELECT * FROM project ";
$result = $conn->query($sql);
   
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
 <div class = "col-md-6 right" ><a href = "project.php" class="btn btn-default">Add New Project</a></div>
</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
         <th>ID</th>
		 <th>Project</th>
         <th>CNIC</th>
         <th>Project Name</th>
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["project"]; ?></td>
         <td><?php echo $row["cnic"]; ?></td>
		 <td><?php echo $row["projectname"]; ?></td>
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
