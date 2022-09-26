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
         
        <!-- JS -->
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/topbar.css">
        <link rel="stylesheet" href="css/text_over_image1.css">
        <link rel="stylesheet" href="css/faqs.css">
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
             <img src="css/images/faqs3.jpeg" alt="home img">
              <div class="text-wrapper">
                 <h1> FAQs</h1>
              </div>
          </div>
           <!-- FAQs -->
           <div class="box">
               <p class="heading">Frequently Asked Questions</p>
               <div class="faqs">
                   <details>
                       <summary>Can I return the product after purchase?</summary>
                       <p class="text">There are many variations of passages of available but the majority have
                           suffered alteration that some form by injected randomised words which don’t look even
                            as slightly believable now. Phasellus mollis ac augue sed varius.
                        </p>
                   </details>
                   <details>
                       <summary>Where should I incorporate my business?</summary>
                       <p class="text">There are many variations of passages of available but the majority have
                           suffered alteration that some form by injected randomised words which don’t look even
                            as slightly believable now. Phasellus mollis ac augue sed varius.
                        </p>
                   </details>
                   <details>
                       <summary>How there are many variations of passages</summary>
                       <p class="text">There are many variations of passages of available but the majority have
                           suffered alteration that some form by injected randomised words which don’t look even
                            as slightly believable now. Phasellus mollis ac augue sed varius.
                        </p>
                   </details>
                   <details>
                       <summary>What about our safety measures ?</summary>
                       <p class="text">There are many variations of passages of available but the majority have
                           suffered alteration that some form by injected randomised words which don’t look even
                            as slightly believable now. Phasellus mollis ac augue sed varius.
                        </p>
                   </details>
                   <details>
                       <summary>How there are many variations of passages</summary>
                       <p class="text">There are many variations of passages of available but the majority have
                           suffered alteration that some form by injected randomised words which don’t look even
                            as slightly believable now. Phasellus mollis ac augue sed varius.
                        </p>
                   </details>
                   <details>
                       <summary>What about our safety measures ?</summary>
                       <p class="text">There are many variations of passages of available but the majority have
                           suffered alteration that some form by injected randomised words which don’t look even
                            as slightly believable now. Phasellus mollis ac augue sed varius.
                        </p>
                   </details>
               </div>
           </div>
           
           
           <!-- FAQs over-->

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
     integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
     crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(.bar).click(function(){
                $(this).find(."answer").slidetoggle();
            });

            $(".bar").click(function(){
                $(this).find("i").toggleclass("fa-plus fa-minus");
            });
        });
    </script>

</html>