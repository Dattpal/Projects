<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>
      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABOUT</title>
         <!-- bootstrap 4 -->
         <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
          <!-- style -->
          <link rel="stylesheet" href="css/about.css">
          <link rel="stylesheet" href="css/header.css">
          <link rel="stylesheet" href="css/topbar.css">
          <link rel="stylesheet" href="css/text_over_image1.css">
          <link rel="stylesheet" href="css/team.css">
          <link rel="stylesheet" href="assets/vendor/icofont/icofont.min.css">
          <link rel="stylesheet" href="css/gallery.css">
          <link rel="stylesheet" href="css/footer.css">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
         <img src="css/images/home7.webp" alt="home img">
         <div class="text-wrapper">
              <h1>About</h1>
         </div>
      </div>

       <!-- image layer -->
       <div class="section">
          <div class="image_1">
              <img src="css/images/about-1-1.jpg" alt="about-1">
          </div>
          <div class="image_2">
              <img src="css/images/about-1-2.jpg" alt="about-2">
          </div>
       </div>
        <!-- end -->
        <!-- detail-->
        <div class="section-title_one">
         <span class="section-title_tage_one">
             write a message
             ::
         </span>  
         <h1 class="section-title_one">We’re the Leading<br> Carwash Center<br> For You  </h1>
         <p class="about_one_highlight">
         We have 30+ years of experiences for give you better quality results.
         </p>
          <div class="about-two__summery_one">
          There are many variations of passages of Lorem Ipsum available,
          but the majority have suffered alteration in some form, by injected humour, 
          or randomised words which don't look even you are going to use a passage.
        </div>
     </div>
     <!-- end -->
      <!-- team details -->
       <section id="team" class="team section-bg">
           <div class="container" data-aos="fade-up">
               <div class="section-title">
                 <h1>Meet our team--</h1>
                 <p>Meet Our Professional
                     Skilled Staff
                 </p>
               </div>
               <div class="row_r ">
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="css/images/team-1-1.jpg" class="img-fluid" alt="">
                            <!-- social icon -->
                            <div class="social">
                               <a href=""><i class="fab fa-twitter"></i></a>
                               <a href=""><i class="fab fa-instagram"></i></a>
                               <a href=""><i class="fab fa-facebook-f"></i></a>
                               <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                         <!-- member info -->
                         <div class="member-info">
                             <h2>Jessica Brown</h2>
                             <span>Worker</span>
                         </div>
                     </div>
                  </div>
                  <!-- 2nd  -->
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="css/images/team-1-2.jpg" class="img-fluid" alt="">
                            <!-- social icon -->
                            <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                               <a href=""><i class="fab fa-instagram"></i></a>
                               <a href=""><i class="fab fa-facebook-f"></i></a>
                               <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                         <!-- member info -->
                         <div class="member-info">
                             <h2>Jordan Rodriquez</h2>
                             <span>Worker</span>
                         </div>
                     </div>
                  </div>
                  <!-- 3rd-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="css/images/team-1-4.jpg" class="img-fluid" alt="">
                            <!-- social icon -->
                            <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                               <a href=""><i class="fab fa-instagram"></i></a>
                               <a href=""><i class="fab fa-facebook-f"></i></a>
                               <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                         <!-- member info -->
                         <div class="member-info">
                             <h2>Leila Manning</h2>
                             <span>Worker</span>
                         </div>
                     </div>
                  </div>
                  <!--4th-->
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="css/images/team-1-3.jpg" class="img-fluid" alt="">
                            <!-- social icon -->
                            <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                               <a href=""><i class="fab fa-instagram"></i></a>
                               <a href=""><i class="fab fa-facebook-f"></i></a>
                               <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                         <!-- member info -->
                         <div class="member-info">
                             <h2>Martin McLaughlin</h2>
                             <span>Worker</span>
                         </div>
                     </div>
                  </div>
               </div>
           </div>
       </section>


     


      <!-- end -->
     <!-- gallery -->
     <div class="g_body">
             <div class="gallery_item">
             <div class="image">
           <img class="image_img" src="css/images/gallery-2-1.jpg" alt="image-1">
           <div class="image_overlay">
               <div class="image_title"><a href="gallery.php"><i class="fas fa-plus"></i></a></div>
           </div>
       </div>
       <div class="image">
           <img class="image_img" src="css/images/gallery-2-2.jpg" alt="image-2">
           <div class="image_overlay">
               <div class="image_title"><a href="gallery.php"><i class="fas fa-plus"></i></a></div>
           </div>
       </div>
       <div class="image">
           <img class="image_img" src="css/images/gallery-2-3.jpg" alt="image-3">
           <div class="image_overlay">
               <div class="image_title"><a href="gallery.php"><i class="fas fa-plus"></i></a></div>
           </div>
       </div>
       <div class="image">
           <img class="image_img" src="css/images/gallery-2-4.jpg" alt="image-4">
           <div class="image_overlay">
               <div class="image_title"><a href="gallery.php"><i class="fas fa-plus"></i></a></div>
           </div>
       </div>
             </div>
         </div>
     <!-- end -->


















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