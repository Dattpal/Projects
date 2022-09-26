<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>
      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pages</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/topbar.css">
        <link rel="stylesheet" href="css/text_over_image1.css">
        <link rel="stylesheet" href="css/main_gallery.css">
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
                     <li><a href="contact_a.php">Contact</a></li>
                  </ul>
              </nav>
           </div>
          <!-- HEADER STYLE OVER -->
          <div class="cont-wrapper">
             <img src="css/images/gallery1.jpeg" alt="home img">
              <div class="text-wrapper">
                 <h1> Gallery</h1>
              </div>
          </div>
         <!-- GALLERY PICS -->

         <input type="radio" name="photos" id="check1" checked>
         <input type="radio" name="photos" id="check2">
         <input type="radio" name="photos" id="check3">
         <!--<input type="radio" name="photos" id="check4">-->
         <input type="radio" name="photos" id="check4">

         <div class="ctnr">
             <h1>Our Photo Galley</h1>
             <div class="top-content">
                <h3>Photo Gallery</h3>
                <label for="check1">All Photos</label>
                <label for="check2">Car Wash</label>
                <label for="check3">Polish</label>
               <!-- <label for="check4">Cleaner</label>-->
                <label for="check4">Tire Shine</label>
             </div>
             <div class="photo-gallery">
                 <div class="pic carwash">
                    <img src="css/images/carwash-1-1.jpg" alt="g1">
                 </div>
                 <div class="pic polish">
                    <img src="css/images/polish-1-1.jpg" alt="g1">
                 </div>
                 <div class="pic cleaner">
                    <img src="css/images/cleaner-1-1.jpg" alt="g1">
                 </div>
                 <div class="pic tireshine">
                    <img src="css/images/tireshine-1-1.jpg" alt="g1">
                 </div>

                 <div class="pic carwash">
                    <img src="css/images/carwash-1-2.jpg" alt="g1">
                 </div>
                 <div class="pic polish">
                    <img src="css/images/polish-1-2.jpg" alt="g1">
                 </div>
                 <div class="pic cleaner">
                    <img src="css/images/cleaner-1-2.jpg" alt="g1">
                 </div>
                 <div class="pic tireshine">
                    <img src="css/images/tireshine-1-2.jpg" alt="g1">
                 </div>

                 <div class="pic carwash">
                    <img src="css/images/carwash-1-3.jpg" alt="g1">
                 </div>
                 <div class="pic polish">
                    <img src="css/images/polish-1-1.jpg" alt="g1">
                 </div>
                 <div class="pic cleaner">
                    <img src="css/images/cleaner-1-1.jpg" alt="g1">
                 </div>
                 <div class="pic tireshine">
                    <img src="css/images/tireshine-1-1.jpg" alt="g1">
                 </div>
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