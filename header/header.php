<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="http://localhost/housing/assets/img/logo.png" type="image/x-icon"/>
    <title>Housing</title>
    <link rel="stylesheet" href="http://localhost/housing/assets/css/bootstrap.min.css">
    <script src="http://localhost/housing/assets/js/jquery.min.js"></script>
    <script src="http://localhost/housing/assets/js/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://localhost/housing/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://localhost/housing/assets/css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-green.css">
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
  </head>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  <body>
    <!-- <div class = "container">
      <div class="row">
        <h1>Online Boutiqe Front Site </h1>
      </div>
      <div class="row">
        &nbsp;
      </div>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Online Boutiqe</a>
              </div>
              <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a></li>
                    
              </ul>
                
            </div> -->
            <!-- <div class="col-md-4">
              <?php //if(isset( $_SESSION['customer'])){?>
              <a href ="myaccount.php">Welcome( <?php //echo  $_SESSION['customer']['customer_name'];?>)</a>&nbsp;|&nbsp;<a href ="logout.php">Logout</a>
              <?php //} else {?>
              <a href ="register.php">register</a>&nbsp;|&nbsp;<a href ="login.php">login</a>
              <?php// } ?>
            </div>
          </div>
        </div>
      </nav> -->
      <!-- Sidebar/menu -->
   
        <!-- Top menu on small screens -->
        <!-- Header -->
        <!-- <header class="w3-container w3-center w3-padding-48 w3-white">
          
          <img src="http://localhost/housing/assets/img/boutique.png" alt="boutique" width="10%"> <h1 class="w3-xxxlarge"><b>Housing Society Management System</b></h1>
          <h6>Welcome Online <span class="w3-tag">Housing Society Management System</span></h6>
          <div class="w3-bar w3-border">
            <a href="http://localhost/housing/index.php" class="w3-bar-item w3-button">Home</a>
            <?php
            
            //       if(isset($_SESSION['uid'])){
            //         $d=$_SESSION['uid'];
            //         echo '
            //         <a href="http://localhost/housing/signout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> signout</a>
                   
            //         ';
            //         if($d["type"]=="user")
            //               {
            //                 echo '<a href="http://localhost/housing/user_panel/index.php" class="w3-bar-item w3-button"><img src="http://localhost/housing/assets/dataimg/'.$d["image"].'"class="rounded-circle" alt="Cinque Terre" width="30px" height="30px"> Profile</a>';
            //               }
            //               else
            //               {
            //                 echo '<a href="http://localhost/housing/vendor_panel/index.php" class="w3-bar-item w3-button"><img src="http://localhost/housing/assets/dataimg/'.$d["image"].'"class="rounded-circle" alt="Cinque Terre" width="30px" height="30px"> Profile</a>';
            //               }
            //       }else{
            //         echo '
            //         <a href="http://localhost/housing/login.php" class="w3-bar-item w3-button w3-light-grey">Login</a>
            // <a href="http://localhost/housing/register.php" class="w3-bar-item w3-button">Register</a>
            //         ';
            //       }
              ?>
            
            
          </div>
        </header> -->
        <!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-l3 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/housing/index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-l4"> <i><img src="http://localhost/housing/assets/img/logo.png" height="40px" style="margin-left: 40px;" alt="Housing Society"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  </div>
  <a href="http://localhost/housing/login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <i class="fa fa-user-circle" aria-hidden="true"></i>
     Account
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>
<header class="w3-container w3-center w3-padding-64 w3-white">
          
          <img src="http://localhost/housing/assets/img/logo.png" alt="Housing" width="10%"> <h1 class="w3-xxxlarge"><b>Housing System</b></h1>
        
        
  </header>
