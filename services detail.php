<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>
      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Services details</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/topbar.css">
        <link rel="stylesheet" href="css/text_over_image1.css">
        <link rel="stylesheet" href="css/service-details.css">
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
             <img src="css/images/service-1-6.jpg" alt="home img">
              <div class="text-wrapper">
                 <h1> Services details</h1>
              </div>
          </div>
          <!-- details-->
          <div class="cont-details">
              <div class="row-4">
              <div class="product-sidebar-single">
                 <h3>Categories</h3><hr>
                 <ul class="list-unstyled product-sidebar__links">
                    <li><a href="#">Full Service Wash <i class="fas fa-angle-right"></i></a></li>
                    <li><a href="#">Auto DEtailing <i class="fas fa-angle-right"></i></a></li>
                    <li><a href="#">Express Interior <i class="fas fa-angle-right"></i></a></li>
                    <li><a href="#">Interior Polish <i class="fas fa-angle-right"></i></a></li>
                    <li><a href="#">Tire Shine <i class="fas fa-angle-right"></i></a></li>
                    <li><a href="#">Engine Wash <i class="fas fa-angle-right"></i></a></li>
                </ul>
                </div>   
                <div class="serv-img">
                  <img src="css/images/service-d-1.jpg" alt="sd1">
                  <h3 class="service-details__title">Auto Detailing</h3>
                  <p class="service-details__text">
                            Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum<br>
                            quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port<br>
                            lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply<br>
                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy<br>
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a<br>
                            type specimen book.
                   </p>
                   <blockquote class="service-details__blockqoute">
                            <p>Lorem Ipsum has been the ndustry standard dummy text ever since<br> the 1500s, when an unknown
                                printer took a galley of type and <br>scrambled it to make a type specimen book.</p>
                        </blockquote>
                        <p class="service-details__text">
                            It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng<br>
                            and type setting Ipsum take a look at our round. When an unknown printer took a galley of type and<br>
                            scrambled it to make a type specimen book. It has survived not only five centuries, but also the<br>
                            leap into electronic typesetting.
                        </p>    
                        <br>
                        <br>
                        <div class="row-5">
                            <div class="col-md-6">
                                <h3 class="service-details__subtitle">Service Benefits</h3>
                                <p class="service-details__highlighted">Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum.
                                </p>
                                <ul class="list-unstyled service-details__list">
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Refresing to get such a touch.
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Duis aute irure dolor in in voluptate.
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Velit esse cillum eu fugiat pariatur.
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Duis aute irure dolor in in voluptate.
                                    </li>
                                </ul>
                            </div>
                            <img class="last-one" src="css/images/service-d-2.jpg" alt="">
                        </div>
              </div>  
              
              <div class="faq-one-call">
                 <h3 class="faq-one-call-title">Get Our Help</h3>
                 <p class="faq-one-call-text">
                     Speak with a human to filling out a form? call corporate office and we
                     will connect you with a team member.
                 </p>
                 <a class="faq-one-call-number" href="#">+91 9875565456</a>
                 <a href="contact_a.php" class="thm-btn">
                                Appointment
                     <i class="far fa-arrow-alt-circle-right"></i>
                 </a>
              </div>        
              </div>
              
             
          </div>
          <!-- details over-->
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