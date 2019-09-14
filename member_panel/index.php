<?php
session_start();
include "user_header.php";
require_once "../db.php";
$d=$_SESSION['uid'];

echo $login_id = $d['login_id'];


?>
<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
  <h1 class="w3-jumbo"><b>Member Panel</b></h1>
  
  <hr style="width:50px;border:5px solid red" class="w3-round">
</div>
<!-- First Photo Grid-->
<div class="w3-row-padding">
  <button class="btn btn-primary w3-green" data-toggle="modal" data-target="#myModal">
  <span class="fa fa-plus-circle"></span>
  Add Property
  </button>
  <?php
  $sql = "SELECT * FROM `product` where 1 order by `id` DESC";
  $result = $conn->query($sql);
  if ($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
  // output data of each row
  
  ?>
  
  
  <?php endwhile; endif?>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h1 class="modal-title">Add Property </h1>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <div class="w3-panel bg-info  w3-card-4">
          Property Type and Location
        </div>
        <br>
        <br>
        <form action="<?=$base_url?>property_submit.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" class="was-validated">
          <div class="col w3-padding-32">
            <input type="hidden" name="login_id" value="<?= $login_id;?>">
          
            <!-- First row -->
            <div class="row">
              <!-- Propert Detail -->
              <!-- Purpose -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label><h3>Purpose</h3></label>
                  <div class="w3-tag  w3-green" >
                    <div class="w3-tag w3-green w3-border w3-border-white">
                      <input class="w3-radio" type="radio" name="purpose" required value="sale">
                      <label>Sale</label>
                    </div>
                  </div>
                  <div class="w3-tag w3-round w3-green">
                    <div class="w3-tag w3-green w3-border w3-border-white">
                      <input class="w3-radio" type="radio" name="purpose" value="rent">
                      <label>Rent</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- plot type -->
              <div class="col-sm-8">
                <div class="form-group">
                  <label><h3>Property Type</h3></label>
                  <div class="w3-tag  w3-green" >
                    <div class="w3-tag w3-green w3-border w3-border-white">
                      <input class="w3-radio" type="radio" name="property_type" value="home" required>
                      <label>Home</label>
                    </div>
                  </div>
                  <div class="w3-tag w3-round w3-green">
                    <div class="w3-tag w3-green w3-border w3-border-white">
                      <input class="w3-radio" type="radio" name="property_type" value="commercial" required>
                      <label>commercial</label>
                    </div>
                  </div>
                  <div class="w3-tag  w3-green" >
                    <div class="w3-tag w3-green w3-border w3-border-white">
                      <input class="w3-radio" type="radio" name="property_type" value="plot" required>
                      <label>Plot</label>
                    </div>
                  </div>
                  <div class="w3-tag  w3-green" >
                    <div class="w3-tag w3-green w3-border w3-border-white">
                      <input class="w3-radio" type="radio" name="property_type" value="land" required>
                      <label>Land</label> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Second Row -->
            <!-- Property Detail -->
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="city">City:</label>
                  <input type="text" class="form-control" id="property_city" placeholder="City" name="property_city" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please Enter Your City.</div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="location">Location:</label>
                  <input type="text" class="form-control" id="location" placeholder="1A, Avenue 3rd, xyz Road" name="property_location" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Your Area. XYZ road, near xyz.</div>
                </div>
              </div>
            </div>
            <br>
            <div class="w3-panel bg-info w3-card-4">
 Propert Detail
</div>
            <br>
            
            <div class="row">
              <!-- property title -->
              
              <!-- First col -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="property_title">Property Title:</label>
                  <input type="text" class="form-control" id="property_title" placeholder="Propert Title" name="property_title" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Your Property Title.</div>
                </div>
                <!-- propert Description -->
                <div class="form-group">
                  <label for="property_desc">Propert Description:</label>
                  <textarea class="form-control" rows="3" cols="25" name="property_desc" required id="property_desc"></textarea>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Property Description</div>
                </div>
                
              </div>
              
              
              <!-- second col -->
              <div class="col-sm-4">
                <div class="form-group">
                <label for="property_desc">Land Area :</label>
                <div class="input-group mt-3 mb-3">
                  <div class="input-group-prepend">
                    <div class="form-group">
                      
                      <select class="form-control" name="unit" required id="unit">
                        <option></option>
                        <option value="marla">Marla</option>
                        <option value="acer">Acer</option>
                        <option value="kanal">Kanal</option>
                      </select>
                    </div>
                  </div>
                  <input type="number" class="form-control" placeholder="2 marla ,2 kanal" name="unit_qty" id="unit_qty" required>
                </div>
                </div>
                <div class="form-group">
                  <label for="image">Image of Your properety</label>
                  <div class="custom-file">
        <input type="file" class="custom-file-input w3-padding-16 w3-border" required="true" name="prd_image" id="customFile">
        <label require class="custom-file-label" for="customFile">Choose file</label>
      </div>
                </div>
                
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="property_title">All Inclusinve price (pkr):</label>
                  <input type="number" class="form-control" id="price" placeholder="Price (pkr)" name="price" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Price in (pkr).</div>
                </div>

                <div class="form-group">
                  <label for="property_title">Plot no#</label>
                  <input type="text" class="form-control" id="plot_no" placeholder="plot no#" name="plot_no" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Plot no#</div>
                </div>
              </div>
              
            </div>

            <div class="row">
             
            </div>

          </div>
          <button type="submit" name="submit" class="w3-button w3-center w3-green"> <div class="spinner-grow text-danger"></div> Submit Property</button>
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>