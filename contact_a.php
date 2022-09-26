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
        <link rel="stylesheet" href="css/contact-us.css">
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
                     <li><a href="index.php">Home</a>
                         
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
           <img src="css/images/contact-8.jpeg" alt="home img">
            <div class="text-wrapper">
              <h1> Contact us</h1>
            </div>
        </div>
        <!-- contact us-->
        <div class="abc">
            <h2>Contact us</h2>
        <section class="contact">
             <div class="contact-us">
                <h2></h2>
                <p>We’re Connected to Help You
                    All the Time
                </p>
             </div>
             <div class="cnt">
                 <div class="contactinfo">
                     <div class="box">
                         <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                             <div class="text">
                                 <h3>Address</h3>
                                 <p> DA service LTD,<br>2nd floor,<br>Flet no-98-81/bCollage road,<br>bharuch</p>
                             </div>
                     </div>
                     <div class="box">
                         <div class="icon"><i class="fas fa-phone-square-alt"></i> </div>
                             <div class="text">
                                 <h3>Phone</h3>
                                 <p>+91 63548-46639</p>
                             </div>
                     </div>
                     <div class="box">
                         <div class="icon"><i class="far fa-envelope"></i></div>
                             <div class="text">
                                 <h3>Email</h3>
                                 <p> dacars9781@gmail.com</p>
                         </div>
                     </div>
                   </div> 
                   <div class="contactform">
                         <form>
                             <h2>Send Message</h2>
                             <div class="inputbox">
                                 <input type="text" name="" required="required">
                                 <span>Full Name</span>
                             </div>
                             <div class="inputbox">
                                 <input type="mail" name="" required="required">
                                 <span>Email</span>
                             </div>
                             <div class="inputbox">
                                 <textarea  required="required"></textarea>
                                 <span>Type Your Message...</span>
                             </div>
                             <div class="inputbox">
                                 <input type="submit" name="" value="Send">
                             </div>
                         </form>
                   </div>
             </div>
        </section>
        </abc>
         
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.8094480589643!2d73.00032224507954!3d21.71012331824844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd504f206aa9e35cd!2sM%20K%20Commerce%20College!5e0!3m2!1sen!2sin!4v1622103477079!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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