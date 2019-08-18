<?php
include "header/login_header.php";?>
<!-- <br>
<h4>Create New Account</h4>
<br>
<form name="form1" action="process_register.php" role = "form"  method = "post">
  
  <div class = "form-group">
    <label for = "name">name</label>
    <input type = "text" class = "form-control" name = "customer_name" placeholder = "enter name " required="">
  </div>
  <div class = "form-group">
    <label for = "name">cnic</label>
    <input type = "text" class = "form-control" name = "cnic" placeholder = "enter cnic " required="">
  </div>
  <div class = "form-group">
    <label for = "name">address</label>
    <input type = "text" class = "form-control" name = "address" placeholder = "enter address">
  </div>
  <div class = "form-group">
    <label for = "name">phoneno</label>
    <input type = "text" class = "form-control" name = "mobile_number" placeholder = "enter phoneno" required="">
  </div>
  <div class = "form-group">
    <label for = "name">email</label>
    <input type = "text" class = "form-control" name = "email" placeholder = "enter email " required="">
  </div>
  <div class = "form-group">
    <label for = "name">password</label>
    <input type = "text" class = "form-control" name = "password" placeholder = "enter password" required="">
  </div>
  <button type = "submit" class = "btn btn-default">Submit</button>
</form>
<br> -->
<div class="container" >
  
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
      <form name="form1" action="process_register.php" role="form"  method="post" class="was-validated" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-6" style="">
            
            <div class="form-group">
              <label for="fullname">Full Name:</label>
              <input type="text" class="form-control" id="fullname" placeholder="Enter username" name="fullname" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="example@someone.com" name="email" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            
            
          </div>
          <div class="col-sm-6" style="">
            
            
            <div class="form-group">
              <label for="cnic">CNIC:</label>
              <input type="number" class="form-control" maxlength="15" minlength="13" id="cnic" placeholder="CNIC#" name="cnic" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="type">Select Role:</label>
              <select class="form-control" name="type" id="type" required>
                <option></option>
                <option value="member">Member</option>
                <option value="society_officer">Society Officer</option>
              </select>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6" style="">
            
            <div class="form-group">
              <label for="contact">Contact:</label>
              <input type="text" class="form-control" max="13" min="11" id="contact" placeholder="Cell#" name="contact" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="********" name="password" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            
            
          </div>
          <div class="col-sm-6" style="">
            
            
            
            <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" rows="3" cols="25" name="address" required id="address"></textarea>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            
          </div>
        </div>
        <div class="row">
          
          <div class="col-sm-6">
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" placeholder="city" name="city" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
          
        </div>
        <div class="form-group w3-center w3-padding-16">
        <button class="w3-button w3-center w3-bar w3-black" name="submit" type="submit">Register</button>
          
        </div>
        
      </form>
      <!-- <div class="container">
        <h2>Registration</h2>
        <p>You can Register As a <code>Supplier or User</code></p>
        <form action="/action_page.php" class="was-validated">
          <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div> -->
    </div>
    
  </div>
</div>
<!--
</div>
</body>
</html> -->
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<?php
include "header/login_footer.php";?>