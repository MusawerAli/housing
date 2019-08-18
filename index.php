<?php

require_once "db.php";
include "header/header.php";

if(isset($_SESSION['uid'])){
    $d=$_SESSION['uid'];
 
  }
    else{
      echo "<marquee><span class='w3-red w3-wide'>Notice! You are Not Login. You are Visitor </span></marquee>";
    }
?>
<br><br>
<!-- Project Section -->
<div class="w3-container w3-padding-32" id="projects">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Casuals</h3>
</div>
<!-- Product grid -->
<div class="w3-row">

 
</div>

<!-- The Modal -->
<div  class="modal fade " id="Modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Modal Heading</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div id="result">

          </div>
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
  $('.btn_cart').click(function(){
    var id = $(this).attr('id');
    var prd_img = $(this).attr('img');
   
    $.ajax({
                url: "http://localhost/front-site/cart.php",
                method: "POST",
                data: {id:id,prd_img:prd_img},
                success: function(data)
                {
                
                $('#result').html(data);
                // Display the Bootstrap modal
                $('#Modal').modal('show');
                }
        });
  });
   
 });
</script>



<?php
include "header/footer.php";