<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="http://localhost/housing/assets/img/boutique.png" type="image/x-icon"/>
    <title>Housing Society Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  </head>
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
      <nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
        <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">CLOSE</a>
        <div class="w3-container w3-display-container w3-gray w3-padding-16">
          <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
          <img src="http://localhost/housing/assets/img/boutique.png" alt="boutique" width="40%"><h3 class="w3-large"><b>E-BOTIUQUE</b></h3>
        </div>
        
        <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
          
          <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>Lawn</a>
          <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-shirtsinbulk fa-fw"></i>Casuals</a> -->
          <a href="http://localhost/housing/user_panel/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cart-plus fa-fw"></i>Cart</a>
          <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Overview</a> -->
          <a href="http://localhost/housing/user_panel/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
          
        </div>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
        <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a></nav>
        <!-- Top menu on small screens -->
        <header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
          <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
        </header>
        <br>
        <!-- Top menu on small screens -->
        <!-- Header -->
        <header class="w3-container w3-center w3-padding-48 w3-white">
          
          <img src="http://localhost/housing/assets/img/boutique.png" alt="boutique" width="10%"> <h1 class="w3-xxxlarge"><b>Housing Society Management System</b></h1>
          <h6>Welcome Online <span class="w3-tag">Housing Society Management System</span></h6>
          <div class="w3-bar w3-border">
            <a href="http://localhost/housing/index.php" class="w3-bar-item w3-button">Home</a>
            <?php
            
                  if(isset($_SESSION['uid'])){
                    $d=$_SESSION['uid'];
                    echo '
                    <a href="http://localhost/housing/signout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> signout</a>
                   
                    ';
                    if($d["type"]=="user")
                          {
                            echo '<a href="http://localhost/housing/user_panel/index.php" class="w3-bar-item w3-button"><img src="http://localhost/housing/assets/dataimg/'.$d["image"].'"class="rounded-circle" alt="Cinque Terre" width="30px" height="30px"> Profile</a>';
                          }
                          else
                          {
                            echo '<a href="http://localhost/housing/vendor_panel/index.php" class="w3-bar-item w3-button"><img src="http://localhost/housing/assets/dataimg/'.$d["image"].'"class="rounded-circle" alt="Cinque Terre" width="30px" height="30px"> Profile</a>';
                          }
                  }else{
                    echo '
                    <a href="http://localhost/housing/login.php" class="w3-bar-item w3-button w3-light-grey">Login</a>
            <a href="http://localhost/housing/register.php" class="w3-bar-item w3-button">Register</a>
                    ';
                  }
              ?>
            
            
          </div>
        </header>
        <!-- Image header -->
        <header class="w3-display-container w3-wide" id="home">
          <!-- Automatic Slideshow Images -->
          <div class="mySlides w3-display-container w3-center">
            <img src="http://localhost/housing/assets/img/bg4.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
              <h3>You Choice</h3>
              <p><b>We had the best time playing at Venice Beach!</b></p>
            </div>
          </div>
          <div class="mySlides w3-display-container w3-center">
            <img src="http://localhost/housing/assets/img/bg5.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
              <h3>New York</h3>
              <p><b>The atmosphere in New York is lorem ipsum.</b></p>
            </div>
          </div>
          <div class="mySlides w3-display-container w3-center">
            <img src="http://localhost/housing/assets/img/bg6.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
              <h3>Chicago</h3>
              <p><b>Thank you, Chicago - A night we won't forget.</b></p>
            </div>
          </div>
          <div class="mySlides w3-display-container w3-center">
            <img src="http://localhost/housing/assets/img/bg7.jpeg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
              <h3>Chicago</h3>
              <p><b>Thank you, Chicago - A night we won't forget.</b></p>
            </div>
          </div>
          <div class="mySlides w3-display-container w3-center">
            <img src="http://localhost/housing/assets/img/bg8.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
              <h3>Let`s</h3>
              <p><b>Company</b></p>
            </div>
          </div>
        </header>
        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>