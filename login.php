<?php
include "header/header.php";?>
<!-- <h4>Login</h4>
<form name="form1" action="process_login.php" role = "form"  method = "post">
  
  <div class = "form-group">
    <label for = "name">email</label>
    <input type = "text" class = "form-control" name = "email" placeholder = "enter email" required="">
  </div>
  <div class = "form-group">
    <label for = "name">password</label>
    <input type = "text" class = "form-control" name = "password" placeholder = "enter password" required="">
  </div>
  <button type = "submit" class = "btn btn-default">Submit</button>
</form> -->
<!-- Header -->

<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="<?=$base_url?>assets/img/banner5.jpg" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-theme-l3">
      <button class="w3-bar-item w3-theme-l3 w3-button tablink" onclick="openLink(event, 'login');"><i class="fa fa-user w3-margin-right"></i>login</button>
    </div>
    <script>
    
    </script>
    <!-- Tabs -->
    <div id="login" class="w3-container  w3-opacity-min w3-white w3-padding-16 myLink">
      <h3 class="w3-center">Login</h3>
      <form action="process_login.php" method="POST" name="form1">
        <div class="w3-row-padding " style="margin:0 -16px;">
          <div class="w3-half">
            <label>Email/CNIC</label>
            <input class="w3-input w3-border" name="email" type="email" placeholder="Email/CNIC">
          </div>
          <div class="w3-half">
            <label>Password</label>
            <input class="w3-input w3-border" name="password" type="password" placeholder="********">
          </div>
        </div>
        <p class="w3-padding-16"><button type="submit" class="w3-button w3-dark-grey">Login</button></p>
      </form>
      <a href="<?=$base_url?>register.php" target="_blank" class="w3-ripple w3-theme-d3 w3-right ">Register Account</a>
    </div>
    
    
  </div>
</header>
<?php
include "header/login_footer.php";?>
</div>
<?php
include "header/footer.php";?>