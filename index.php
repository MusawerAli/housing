<?php

require_once "db.php";
include "header/header.php";

// if(isset($_SESSION['uid'])){
//     $d=$_SESSION['uid'];
 
//   }
//     else{
//       echo "<marquee><span class='w3-red w3-wide'>Notice! You are Not Login. You are Visitor </span></marquee>";
//     }
?>


              <!-- //Image Sliding -->
              <div id="img_slider" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#img_slider" data-slide-to="0" class="active"></li>
    <li data-target="#img_slider" data-slide-to="1"></li>
    <li data-target="#img_slider" data-slide-to="2"></li>
    <li data-target="#img_slider" data-slide-to="3"></li>
    <li data-target="#img_slider" data-slide-to="4"></li>
    <li data-target="#img_slider" data-slide-to="5"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/housing/assets/img/banner1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        
        <h2>We had such a great time in LA!</h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://localhost/housing/assets/img/banner2.jpg" alt="slideshow" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://localhost/housing/assets/img/banner3.jpg" alt="Your Own home" width="1100" height="500">
      <div class="carousel-caption">
        <h1>your Future</h1>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://localhost/housing/assets/img/banner6.jpg" alt="Your Own home" width="1100" height="500">
      <div class="carousel-caption">
        <h1>your Future</h1>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://localhost/housing/assets/img/banner7.jpg" alt="Your Own home" width="1100" height="500">
      <div class="carousel-caption">
        <h1>your Future</h1>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://localhost/housing/assets/img/banner10.jpg" alt="Your Own home" width="1100" height="500">
      <div class="carousel-caption">
        <h1>your Future</h1>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#img_slider" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#img_slider" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
  
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
      <img src="http://localhost/housing/assets/ads/ad9.gif" alt="ads">
      </div>
    
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
        <img src="http://localhost/housing/assets/ads/ad8.gif" alt="ads" width="340px" height="230px">
          <!-- <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
        </div>
      </div>
      <br>
      <div class="w3-card w3-round w3-white w3-center">
      <div class="w3-row">
  <div class="w3-col m6">
  <div class="w3-container">
        <img src="http://localhost/housing/assets/ads/add12.jpeg" alt="Your Own home" width="150px" height="500px">
          <!-- <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
        </div>
  </div>
  <div class="w3-col m6">
  <div class="w3-container">
        <img src="http://localhost/housing/assets/ads/add11.gif" alt="Your Own home" width="120px" height="500px">
          <!-- <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
        </div>
  </div>
 
</div>
      </div>
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    <div id="" class="w3-container w3-black w3-opacity-min w3-white w3-padding-16 myLink">
    
    </div>
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Social Media template by w3.css</h6>
              <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
            </div>
          </div>
        </div>
      </div>
      
      
      
      <div id="load_data"></div>
   <div id="load_data_message"></div>

      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

    <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
        <img src="http://localhost/housing/assets/ads/ad1.gif" alt="Your Own home" width="230px" height="230px">
          <!-- <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
        </div>
      </div>
      <br>
      
     
      <br>
      
      
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
        <img src="http://localhost/housing/assets/ads/ad2.gif" alt="Your Own home" width="230px" height="230px">
          <!-- <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
        </div>
      </div>
      <br>
      <div class="w3-card w3-round w3-white w3-center">
      <div class="w3-row">
  <div class="w3-col m6">
  <div class="w3-container">
        <img src="http://localhost/housing/assets/ads/ad10.gif" alt="Your Own home" width="110px" height="330px">
          <!-- <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
        </div>
  </div>
  <div class="w3-col m6">
  <div class="w3-container">
        <img src="http://localhost/housing/assets/ads/ad4.gif" alt="Your Own home" width="120px" height="330px">
          <!-- <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p> -->
        </div>
  </div>
 
</div>
      </div>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>


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

 $(document).ready(function(){
 
 var limit = 7;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"scroll_load.php",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button class='w3-button  w3-wide w3-white w3-border w3-border-blue w3-block'>No more post.......</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button class='w3-btn  w3-wide  w3-blue w3-block'>Load More Post.........</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 
$(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 2000);
  }
 });
 
});
</script>



<?php
include "header/footer.php";