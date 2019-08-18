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
	//echo "i am there to delete";category
$sql = "DELETE FROM `categoryid` WHERE `categoryid` = '".$_REQUEST['categoryid']."'";
	$conn->query($sql);
}




$sql = "SELECT * FROM `category` ";
$result = $conn->query($sql);
   
?>
<?php 
include "header/header.php";?>
<div class="row">
<div class = "col-md-10" ></div>
 <div class = "col-md-2 right" ><a href = "add1_catagory_form.php" class="btn btn-default">Add New Botiquet category </a></div>
 </div>
<div class="row">
 

<DIV class = "col-md-3" style="background-color: GREEN; height: 120px;">ffff</DIV>
<DIV class = "col-md-3 " style="background-color: blue; height: 120px; margin-left: 50px;">ffff</DIV>
<DIV class = "col-md-3 " style="background-color: red; height: 120px; margin-left: 50px;">ffff</DIV>

</div>
<table class = "table table-striped">
  
   
   <thead>
      <tr>
     
           <th>categoryid</th>
            <th>catrgoryname</th>
	 <th>action</th>
      </tr>
   </thead>
   
   <tbody>
   
   <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $row["categoryid"]; ?></td>
         <td><?php echo $row["catrgoryname"]; ?></td>
         
		 <td>
	
		  <a href = "edit_catagory_form.php?categoryid=<?php echo $row["categoryid"]; ?>" class="btn btn-default">Edit</a>
		 <a onclick="return confirm('Are you sure you want to delete this item?');" href = "?action=delete&categoryid=<?php echo $row["categoryid"]; ?>" class="btn btn-default">Delete</a></td>
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
