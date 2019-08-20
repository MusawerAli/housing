<?php 
require_once "../db.php";
include "vendor_header.php"; print_r($d);

?>

<?php
$sql = "SELECT * FROM `category` where `user_id`= '".$d['id']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     
?>
    <div class="col-md-3">
       
    </div>
    

    <?php 
}?>
<div class="container">

<div class="container mt-3">
  <h2>Category <a href="#" class="w3-bar-item w3-button"><i class=" w3-text-green fa fa-plus-square" data-toggle="modal" data-target="#myModal"></i></a></h2> 
  <p>Search your Category.....</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
     
      <tr>
     
        <th>id</th>
        <th>user id</th>
        <th>Category</th>
        
      </tr>

    </thead>
    <tbody id="myTable">
    <?php while($row = $result->fetch_assoc()):?>
      <tr>
        <td> <?=$row["id"];?></td>
        <td> <?=$row["user_id"];?></td>
        <td> <?=$row["category_name"];?></td>
      </tr>
      <?php endwhile;?>
      
    </tbody>
  </table>
  

</div>

 <!-- Button to Open the Modal -->


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Category Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="process_category.php" method="POST">
  
  <div class="form-group">
    <label for="name">Name</label>
    <input type="hidden" name="user_id" value="<?=$d['id']?>">
    <input type="hidden" name="type" value="<?=$d['type']?>">
    <input type="text" class="form-control" id="category_name" placeholder="Category Name" name="category_name">
  </div>
  
  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</div>