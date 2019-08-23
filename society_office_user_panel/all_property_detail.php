<?php
include "vendor_header.php";
require_once "../db.php";

$d=$_SESSION['uid'];
$login_id =  $d['login_id'];
if(isset($_REQUEST['action'])){
    switch($_REQUEST['action']){
        case"block":
           $sql = " update `login` set status = 'blocked' where login_id = '".$_REQUEST['id']."';";
           $conn->query($sql);
           break;
      
        case"delete":
            
            $sql = "delete from `property_detail` where plot_no = '".$_REQUEST['plot_no']."';";
            $conn->query($sql);
           break;
    }
}      
        
   
?>
<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Property</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Detail</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
<div class="container mt-3">
  <h2>Custom Search</h2>
  <p>Type something in the input field</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-responsive" id="Table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Property Title</th>
        <th>Unit</th>
        <th>Desc</th>
        <th>PlotNo#</th>
        <th>City</th>
        <th>Location</th>
        <th>Purpose</th>
        <th>Type</th>
        <th>Price</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody id="myTable">
      
    <?php
$sql = "SELECT * from property_detail";
$result = $conn->query($sql);
if ($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
    // output data of each row
     
?>
   
      <tr>
        <td><img src="../assets/dataimg/<?=$row['image']?>" width="100px" height="100px" /></td>
        <td><?=$row['property_title']?></td>
        <td><?=$row['unit_qty']?> <?=$row['property_unit']?></td>
        <td><?=$row['property_desc']?></td>
        <td><?=$row['plot_no']?></td>
        <td><?=$row['property_city']?></td>
        <td><?=$row['purpose']?></td>
        <td><?=$row['property_location']?></td>
         <td><?=$row['property_type']?></td>
         <td><?=$row['price']?></td>
        
        <td><div class = "dropdown">
   
                <button type = "button" class = "btn dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown">
                   Action
                   <span class = "caret"></span>
                </button>
   
                <ul class = "dropdown-menu" role = "menu" aria-labelledby = "dropdownMenu1">
                   <li role = "presentation">
                      <a role = "menuitem" class="btn btn-warning" data-toggle="modal"  data-target="#myModal" tabindex = "-1" >Transfer Property</a>
                   </li>
                   <li role = "presentation" class = "divider"></li>
                  
                   
                   
                   <li role = "presentation" class = "divider"></li>
                   <li role = "presentation">
                      <a role = "menuitem" class="btn btn-danger" tabindex = "-1" href = "?action=delete&plot_no=<?=$row['plot_no']?>&id=<?=$row['id']?>" onclick="return confirmAction();">
                         Delete
                      </a>
                   </li> 
                </ul>
   
            </div></td>
        

      </tr>
  <?php endwhile;endif;?>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script>
    function confirmAction(){
        if(confirm("Are you sure to complete the action?")){
            return true;
        }else{
            return false;
        }
    }
$(document).ready(function(){
    var orderdataTable = $('#Table').DataTable({
				"columnDefs":[],
			});
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

 <!-- The Modal -->
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Transfer Property</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col">

              <form id="form_data" >
              <div class="row">
              <input type="hidden" value="<?=$login_id?>" name="id" id="id">
              <div class="col-sm-4">
              <div class="w3-panel w3-blue w3-card-4"> Transfer Plot no#</div>
              <input type="text" name="plotno" autocomplete="off" class="w3-input w3-animate-input w3-text-red"  id="plotno"  placeholder="Your Plot No#" style="width:70%">
              </div>
              <div class="col-sm-4">
              <br>
              <br>
              <a class=" w3-circle fa-2x w3-orange"><span class="fa fa-exchange"></span></a>
              </div>
              <div class="col-sm-4">
              <div class="w3-panel w3-green w3-card-4"> Transfer to</div>
             
                <select class="form-control" id="reciver_id" name="reciver_id">
                <?php                    
    
    $sql = "SELECT * FROM `login` where `status` ='Active'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    {
        ?><option value="<?php echo $row['login_id']; ?>">  <?php echo $row['name'];?> / <?php echo $row['type'];?></option> 
    <?php }?>
                </select>
              </div>
              </div>

              <div class="row">
              <div class="col-sm-4">
              <div class="w3-panel w3-orange w3-card-4"> Confirm your Password</div>
              <input class="w3-input w3-animate-input w3-text-red" type = "password" id="password" name="password" placeholder="*******" style="width:70%">
              </div>
              </div>
              <br>
              <button type="submit" name="submit" id="submit" class="w3-btn w3-orange">Process....</button>
              </form>
              </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
    <script>
       $(document).on('submit','#form_data',function(event){
    event.preventDefault();
  
   var form_data = $(this).serialize();
	var id=$('#id').val();

  var plot_no = $('#plotno').val();
  var reciver_id = $('#reciver_id').val();
   var password = $('#password').val();
    swal({
  title: "Are you sure to transfer your Propert",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, transfer it",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false,
  showLoaderOnConfirm: true
},
function(isConfirm) {
  if (isConfirm) {
    setTimeout(function () {
      $.ajax({
            url: "transfer_process.php",
            method:"POST",
            data:{plot_no:plot_no,reciver_id:reciver_id,password:password,reciver_id:reciver_id,id:id},
            success:function(data)
            {
             
              swal(data, "Your imaginary file has been deleted.", "success");
              $('#form_data')[0].reset();
                        $('#myModal').modal('hide');
                        location.reload();
               
            }
            })
    
  }, 2000);
  
    
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
   

});
</script>

  