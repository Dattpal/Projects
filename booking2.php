<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>
      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INDEX</title>
         

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/abc1.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/topbar.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/text_over_image1.css">
        <link rel="stylesheet" href="css/slider.css">    
        <link rel="stylesheet" href="css/gallery.css">
        <link rel="stylesheet" href="css/serve-card.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="css/footer.css">
       
    </head>
    <body>
     <!-- HEADER STYLE-->
     <div class="topbar">
            <div class="cont-bar">
                <div class="topbar-inner">
                    <ul class="topbar-info">
                       <li class="topbar-info-item">
                         <a class="topbar-info-link" href="#">
                         <i class="fas fa-clock"></i>
                          Monday to Saturday 9:00 to 6:00
                         </a>
                       </li>
                       <li class="topbar-info-item">
                         <a class="topbar-info-link" href="#">
                         <i class="fas fa-phone-square-alt"></i>
                            +91 9876545654
                         </a>
                       </li>
                    </ul>
                    <div class="topbar-social">
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                </div>
            </div>
        </div>
         
           <div class="dropdown">
              <nav>
                  <img class="logo" src="css/images/logo_web.png">
                  <ul>
                  <li><a href="admin/signup.php"><i class="fas fa-user-circle"></i></a>
                     </li>
                     <li><a href="index.php">Home </a>
                    
                     </li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="">Services  <i class="fas fa-caret-down"></i></a>
                         <ul>
                             <li><a href="services.php">All Services</li>
                             <li><a href="services detail.php">Services Detail</li>
                         </ul>
                     </li>
                     <li><a href="">Pages  <i class="fas fa-caret-down"></i></a>
                         <ul>
                             <li><a href="Online booking.php">Online Booking</a></li>
                             <li><a href="pricing.php">Pricing</a></li>
                             <li><a href="gallery.php">Gallery</a></li>
                             <li><a href="faqs.php">FAQs</a></li>
                             <li><a href="help.php">Helps</a></li>
                         </ul>
                     </li>
                     <li><a href="">Shop  <i class="fas fa-caret-down"></i></a>
                         <ul>
                             <li><a href="shop.php">Shop</li>
                             <li><a href="shop detail.php">Shop Detail</li>
                         </ul>
                     </li>
                     <li><a href="contact_a.php">Contact</a>
                     </li>
                     </li>
                    
                     
                     </li>
                  </ul>
              </nav>
           </div>
          
   
   <br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align:center;">Booking</h1>
                <?php //echo $msg; ?>
           </div>
           <div class="col-md-3"></div>
           <div class="col-md-6">
               <form class="animated bounce" action="bookingaction.php" method="post">
                  
                   <div class="input-group">
                     <span class="input-group-addon"><b>Name</b></span>
                     <input id="name" type="text" class="form-control" name="name" value="fname"  required>
                   </div>
                   
                   <br>
                   <div class="input-group">
                     <span class="input-group-addon"><b>Department</b></span>
                     <input id="department" type="text" class="form-control" name="department" placeholder="department" required>
                   </div>
                   <br>
                   <div class="input-group">
                     <span class="input-group-addon"><b>Vehicle Type</b></span> &nbsp;
                     <label><input type="radio" name="type" value="car">Car</label> &nbsp;
                     <label><input type="radio" name="type" value="bus">sedan car</label> &nbsp;
                     <label><input type="radio" name="type" value="bus">SUV car</label> &nbsp;
                     <label><input type="radio" name="type" value="bus">Minivan </label> &nbsp;
                   </div>
                   <br>
                   <div class="input-group">
                     <span class="input-group-addon"><b>Date of Requirement</b></span>
                     <input id="req_date" type="text" class="form-control" name="req_date" placeholder="Day the car is needed" required>
                     <input type="text" name="req_time" id="req_time" class="form-control"/>
                     
                   </div>
                   
                   <script>
                     $( function() {
                       $( "#req_date" ).datepicker();
                       $("#req_time").wickedpicker();
                       
                     } ); 
                       
                       
                       
                   </script> 
                   <br>
                   
                   <div class="input-group">
                     <span class="input-group-addon"><b>Date of Return</b></span>
                     <input id="return_date" type="text" class="form-control" name="return_date" placeholder="Day the car is returned" required>
                     <input type="text" name="return_time" id="return_time" class="form-control"/>
                   </div>
                   
                   <script>
                     $( function() {
                       $( "#return_date" ).datepicker();
                       $( "#return_time" ).wickedpicker();
                     } );
                   </script>
                   <br>
                   
                   <div class="input-group">
                     <span class="input-group-addon"><b>Destination</b></span>
                     <input id="destination" type="text" class="form-control" name="destination" placeholder="Car Destination" required>
                   </div>
                   <br>
                   
                   <div class="input-group">
                     <span class="input-group-addon"><b>Pickup Point</b></span>
                     <input id="pickup" type="text" class="form-control" name="pickup" placeholder="pickup">
                   </div>
                   <br>
                   
                   <div class="input-group">
                     <span class="input-group-addon"><b>Reason for booking</b></span>
                     <input id="reason" type="text" class="form-control" name="reason" placeholder="Reason of booking the vehicle">
                   </div>
                   <br>
                   
                   <div class="input-group">
                     <span class="input-group-addon"><b>Email</b></span>
                     <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                   </div>
                   <br>
                   
                   <div class="input-group">
                     <span class="input-group-addon"><b>Mobile</b></span>
                     <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile No" required>
                   </div>
                   <br>
                   
                   <input type="hidden" name="username" value="<?php echo $username; ?>">
                   
                   <div class="input-group">
                       <input type="submit" name="submit" class="btn btn-success">
                   </div>
                    
                   
               </form>
           </div>
           <div class="col-md-3"></div>
       </div>
   </div>
 
     <!-- footer-->
     <footer class="footer">
          <div class="cont">
              <div class="row">
              <div class="footer_col">
                      <img class="img_footer" src="css/images/logo_web.png" alt="logo-light">
                      <br><br>
                     <h5>There are many vari of pass of lorem 
                     ipsum availab but the majority have suffered
                      in some form by injected humour or words</h5>
                  </div>
                  <div class="footer_col">
                      <h4>Links</h4>
                      <ul>
                          <li><a href="#">Our service</a></li>
                          <li><a href="#">Contact</a></li>
                          <li><a href="#">Help</a></li>
                          <li><a href="#">Quelity policy</a></li>
                          <li><a href="#">Best cleaning</a></li>
                      </ul>   
                  </div>
                  <div class="footer_col">
                      <h4>Help</h4>
                      <ul>
                          <li><a href="#">New product</a></li>
                          <li><a href="#">Support</a></li>
                          <li><a href="#">FAQs</a></li>
                          <li><a href="#">About store</a></li>
                      </ul>   
                  </div>
                  <div class="footer_col">
                      <h4>Contact</h4>
                      <ul>
                          <li><a href="#"><i class="fas fa-map-marker-alt"></i> DA service LTD,</a></li>
                          <li><a href="#">2nd floor,</a></li>
                          <li><a href="#">Flet no-98-81/b</a></li>
                          <li><a href="#">Collage road,bharuch</a></li>
                     </ul>   
                  </div>
                  <div class="footer_col">
                      <h4>Follow us</h4>
                      <div class="social_links">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-whatsapp"></i></a>
                      </div>   
                  </div> 
              </div>
          </div>
     </footer>



     <!-- end -->
     

    </body>
</html>
