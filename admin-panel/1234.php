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

$sql = "SELECT * FROM `teacher` ";
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
 <div class = "col-md-6 right" ><a href = "teacher.html" class="btn btn-default">Add New teacher</a></div>
</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
         <th>ID</th>
		 <th>teacher</th>
         <th>CNIC</th>
         <th>subject</th>
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows > 0)
   {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["id"]; ?></td>
         <td><?php echo $row["teacher"]; ?></td>
         <td><?php echo $row["cnic"]; ?></td>
		 <td><?php echo $row["subject"]; ?></td>
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
