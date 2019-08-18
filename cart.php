<?php
session_start();
require_once 'db.php';
$prd_id=$_REQUEST['id'];
$prd_img=$_REQUEST['prd_img'];
  

if(isset($_SESSION['uid']))
    {
        $d=$_SESSION['uid'];
        if($d['type']=="user"){
            ?>
         
            <div class="card" style="font-family:Georgia">
        <div class="card-header"> <i class="fa fa-cart-plus fa-2x" aria-hidden="true"> <strong>Confirm Order</strong></i> </div>
        <div class="card-body">
          <form name="form1" action="cart_process.php" role="form"  method="post" class="was-validated" enctype="multipart/form-data">
          <input type="hidden"  name="prd_img" id="prd_img" value="<?= $prd_img; ?>">
            <div class="row row w3-padding-64">
            <div class="w3-container w3-amber w3-center w3-hover-orange"
   style="bottom:10%;opacity:0.7;width:100%;">
  <h2>USER Detail</h2>
</div>
            <hr>
            </div>
            <div class="row">
              <div class="col-sm-6" style="">
              
    
    
  
                <div class="form-group">
                  <label for="customer_name">Full Name:</label>
                  <input type="text" class="form-control" readonly="true" value="<?=$d['customer_name']?>" id="customer_name" name="customer_name" required>
                  <input type="text" class="form-control" hidden="true" value="<?=$d['id']?>" id="id" name="id" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <textarea class="form-control" rows="3" cols="25"  name="address" required id="address">"<?=$d['address']?>"</textarea>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                
                
              </div>
              <div class="col-sm-6" style="">
                
                <div class="form-group">
                  <label for="cnic">CNIC</label>
                  <input type="text" class="form-control" readonly="true" id="cnic" value="<?=$d['cnic']?>" name="cnic" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="contact">Contact:</label>
                  <input type="text" class="form-control" max="13" min="11" readonly="true" value="<?=$d['mobile_number']?>" id="mobile_number"  name="mobile_number" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                
                
              </div>
            </div>
            <div class="row w3-padding-64">
            <div class="w3-container w3-blue w3-center w3-hover-orange"
   style="bottom:10%;opacity:0.7;width:100%;">
  <h2><address>Product Detail</address></h2>
</div>
            <hr>
            </div>
            <div class="row">
            
            <?php 
            $sql = "SELECT * FROM `boutique_post` where `id`= '".$prd_id."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0):
            while($row = $result->fetch_assoc()): ?>
              <div class="col-sm-6" style="">
               
                <div class="form-group">
                  <label for="prd_name">Product Name</label>
                  <input type="text" class="form-control" readonly="true" value="<?=$row['prd_name'];?>"  id="prd_name"  name="prd_name" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="pwd">Seller City</label>
                  <input type="text" class="form-control" readonly="true" value="<?=$row['vendor_city'];?>" id="vendor_city" name="vendor_city" required>
                 
                  <input type="hidden" class="form-control" value="<?=$row['vendor_id'];?>" id="vendor_id" name="vendor_id" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
        
                
              </div>
              <div class="col-sm-6" style="">
                
                <div class="form-group">
                  <label for="type">Price:</label>
                  <input type="text" class="form-control" readonly="true" value="<?=$row['prd_price'];?>" id="prd_price" name="prd_price" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="type">Quality</label>
                  <input type="text" class="form-control" readonly="true" value="<?=$row['prd_quality'];?>" id="prd_quality" name="prd_quality" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                
                
                
              </div>

              
             
            </div>
            <div class="row">
              <div class="col-sm-6">
              
                
              
                <div class="form-group">
                  <label for="type">Quality</label>
                  <input type="text" class="form-control" readonly="true" value="<?=$row['prd_quality'];?>" id="prd_quality" name="prd_quality" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                <div class="form-group">
                  <label for="type">Quantity</label>
                  <input type="text" class="form-control"  placeholder="Quantity" id="prd_qty" name="prd_qty" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                
                
                
              </div>
              <div class="col-sm-6">
              <div class="form-group">
                  <label for="prd_desc">Product Desc.:</label>
                  <textarea class="form-control" rows="3" cols="25" readonly="true"  name="prd_desc" required id="prd_desc"><?=$row['prd_desc'];?>"</textarea>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                 <div class="form-group">
                  <label for="vendor_contact">Seller Contact</label>
                  <input type="text" class="form-control" readonly="true" value="<?=$row['vendor_contact'];?>" id="vendor_contact" name="vendor_contact" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                
              </div>
              
            </div>
            <?php endwhile;endif;?>
            <div class="form-group w3-center w3-padding-16">
            <button class="w3-button w3-center w3-bar w3-black" name="submit" type="submit"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Confirm Order</button>
              
            </div>
            
          </form>
         
        </div>
        
      </div>
            
            <?php
        }
        else
        {
            echo '<div class="w3-tag w3-round w3-red" style="padding:3px">
            <div class="w3-tag w3-round w3-orange w3-border w3-border-white">
              You can`t replace order because you are '.$d["type"].'
            </div>
            
          </div>
          <a href="http://localhost/front-site/vendor_panel/post.php"><button class="btn w3-wide btn-primary">
          <span class="spinner-grow spinner-grow-lg text-danger"></span>
          Profile
        </button></a>
         
         
          ';
        }
       
    }
    else
        {
           ?>
           <div id="login" class="w3-container">
      <h3 class="w3-center w3-wide">Login First</h3>
      <form action="process_login.php" method="POST" name="form1">
        <div class="w3-row-padding " style="margin:0 -16px;">
          <div class="w3-half">
            <label>Email</label>
            <input class="w3-input w3-border" name="email" type="email" placeholder="Email">
          </div>
          <div class="w3-half">
            <label>Password</label>
            <input class="w3-input w3-border" name="password" type="password" placeholder="********">
          </div>
        </div>
        <p class="w3-padding-16"><button type="submit" class="w3-button w3-dark-grey">Login</button></p>
      </form>
      <a href="http://localhost/front-site/register.php" target="_blank" class="w3-ripple w3-red w3-right ">Register Account</a>
    </div>
           <?php
         }


?>