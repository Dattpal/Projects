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
          
         
      <!-- HEADER STYLE OVER -->
       <!-- img slider -->
       

       <!-- img slider over -->

      

          <div class="cont-wrapper">
              <img src="css/images/slider1.jpeg" alt="">
              <div class="text-wrapper">
                  <h1>Care Service For <br>
                       Your Cars</h1>
              </div>
              <div class="add-link">
                 <a href="admin\booking.php"><button type="button" name="btn">Booking Now <i class="fas fa-arrow-circle-right"></i></button></a>
              </div>
          </div>
     <!-- section title -->
      <div class="section-title">
         <span class="section-title_tage">
             write a message
             ::
         </span>  
         <h1 class="section-title">It's time to come and clean <br> 
              your cars
         </h1>
     </div>
     <br>
     <div class="about-two__summery">
         There are many variations of passages of Lorem<br>
         Ipsum available,but the majority  have suffered<br>
         alteration in some form, by injected humour, 
         or<br> randomised words which don't look even.
     </div>

     <div class="sentance">
         <i class="fas fa-check-circle"></i><h2>We’re professional and certified car washers</h2>
     </div>
     <div class="sentance">
         <i class="fas fa-check-circle"></i> <h2>We use quality material to clean your cars</h2>
     </div>
     <div class="sentance">
         <i class="fas fa-check-circle"></i> <h2>We care about our customers satisfaction</h2>
     </div>
     <hr>
     <div class="highlight">
         <div class="about_one_highlight">
             <p>We have 30+ years of experiences for give<br> you better quality results.</p>
         </div>
     </div>
     <div class="img_1">
         <img src="css/images/clean1.jpg" alt="clean" height="500px" width="570px">
     </div>

     <!-- end -->

     <!-- service home -->
      
     <section class="service_home">
         <div class="image_layer">
             <img src="css/images/.jpg" alt class="image_layer" >
         </div>
         <div class="container">
             <div class="text_center">
                 <span class="section_title_tageline">  
                     What we're offering
                  </span>
                  <h2 class="section_title_title">
                     Service we're provding 
                     <br>to customer
                  </h2>
             </div>
         </div>
         
         <!-- end -->
     
         <!-- service card -->
         <div class="body">
         <div class="grid">
             <div class="grid-item">
                 <div class="card">
                     <img src="css/images/service-1-1.jpg" alt="service wash">
                     <div class="card-content">
                         <h1 class="card-header">Full service wash </h1>
                         <p class="card-text">
                         There are not many of passages of lorem<stong> ipsum avail isn alteration donationa in form.
                         </p>
                         <button class="card-btn"> <a href="services detail.php">visit </a><span>&rarr;</span></button>
                     </div>
                 </div>
             </div> 
             <div class="grid-item">
                 <div class="card">
                     <img src="css/images/service-1-2.jpg" alt="auto detailing">
                     <div class="card-content">
                         <h1 class="card-header">Auto detailing </h1>
                         <p class="card-text">
                         There are not many of passages of lorem ipsum avail isn alteration donationa in form.
                         </p>
                         <button class="card-btn"><a href="services detail.php">visit </a><span>&rarr;</span></button>
                     </div>
                 </div>
             </div>  
             <div class="grid-item">
                 <div class="card">
                     <img src="css/images/service-1-3.jpg" alt="express interior">
                     <div class="card-content">
                         <h1 class="card-header"> express interior </h1>
                         <p class="card-text">
                         There are not many of passages of lorem<stong> ipsum avail isn alteration donationa in form.
                         </p>
                         <button class="card-btn">  <a href="services detail.php">visit </a><span>&rarr;</span></button>
                     </div>
                 </div>
             </div>  
         </div>
        </div>
         <!--end -->
     </section>
    

     <!-- gallery title-->
     <div class="gallery_title">
        <h3>Check Our Gallery</h3>
     </div>
     <!-- end -->
     <!-- gallery-->
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
     <!-- form link -->
     <section class="call-to-action">
            <div class="container2">
                <h1 class="title">Easy Online Carwash Booking System</h1>
                <div class="title-link">
                    <a href="admin\booking.php" class="thm-btn">
                        Book Appointment <i class="fas fa-arrow-alt-circle-right"></i>
                    </a>
                </div> 
            </div>
            </section>

            <!-- form link over -->

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
