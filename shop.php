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
        <link rel="stylesheet" href="css/shop.css">
        <link rel="stylesheet" href="css/searchox.css">
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
             <img src="css/images/home7.webp" alt="home img">
              <div class="text-wrapper">
                 <h1> Shop</h1>
              </div>
           </div>
           <!-- shopping card-->
          <!-- <div id="searchbox">
               <input type="text" placeholder="search">
               <button><i class="fas fa-search-plus"></i></button>
           </div>-->
           <div class="shop-cont">
               <h2>New Arrivals</h2>
               <div class="row-3">
               <div class="product-sidebar_single">
                                <h3>Categories</h3>
                                <ul class="list-unstyled product-sidebar__links">
                                    <li><a href="#">Rubber Mats      <i class="fas fa-angle-right"></i></a></li>
                                    <li><a href="#">Tire Shine      <i class="fas fa-angle-right"></i></a></li>
                                    <li><a href="#">Sprays      <i class="fas fa-angle-right"></i></a></li>
                                    <li><a href="#">Engine Oil      <i class="fas fa-angle-right"></i></a></li>
                                    <li><a href="#">Filters      <i class="fas fa-angle-right"></i></a></li>
                                </ul><!-- /.list-unstyled product-sidebar__links -->
                            </div>
                           
                   <div class="col-md-3">
                       <div class="product-top">
                           <img src="css/images/product-1-1.jpg" alt="p1">
                           <div class="overlay">
                               <button type="button" class="btn-btn-secondary" title="Quick Shop">
                                   <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Wishlist">
                                   <i class="far fa-heart"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Cart">
                                <a href="payment.php"> <i class="fas fa-cart-plus"></i></a>
                                </button>
                           </div>
                       </div>
                       <div class="product-bottom text-center">
                          <h3>Tire with Wheel</h3>
                          <h5>Rs 1200.00</h5>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <i class="far fa-star"></i>
                       </div>
                   </div>

                   <div class="col-md-3">
                       <div class="product-top">
                           <img src="css/images/product-1-2.jpg" alt="p2">
                           <div class="overlay">
                               <button type="button" class="btn-btn-secondary" title="Quick Shop">
                                   <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Wishlist">
                                   <i class="far fa-heart"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Cart">
                                <a href="payment.php"> <i class="fas fa-cart-plus"></i></a>
                                </button>
                           </div>
                       </div>
                       <div class="product-bottom text-center">
                          <h3>Engine Oil</h3>
                          <h5>Rs 800.00</h5>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="far fa-star"></i>
                       </div>
                   </div>

                   <div class="col-md-3">
                       <div class="product-top">
                           <img src="css/images/product-1-3.jpg" alt="p3">
                           <div class="overlay">
                               <button type="button" class="btn-btn-secondary" title="Quick Shop">
                                   <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Wishlist">
                                   <i class="far fa-heart"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Cart">
                                <a href="payment.php"> <i class="fas fa-cart-plus"></i></a>
                                </button>
                           </div>
                       </div>
                      
                       <div class="product-bottom text-center">
                          <h3>Car Breaks</h3>
                          <h5>Rs 980.00</h5>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                       </div>
                   </div>
                   </div>
                
                   <div class="row-3">
                   <div class="product-sidebar__single">
                                <h3>Products</h3>
                                <ul class="list-unstyled product-sidebar__posts">
                                    <li><a href="shop-details.html">
                                            <img src="css/images/product-1-1.jpg" alt="">
                                            <span class="product-sidebar__posts-content">
                                                <span class="product-sidebar__posts-title">
                                                    Tire with Wheel
                                                </span><!-- /.product-sidebar__posts-title -->
                                                <span class="product-sidebar__posts-amount">
                                                    Rs 1200.00
                                                </span><!-- /.product-sidebar__posts-amount -->
                                                <span class="product-sidebar__posts-star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span><!-- /.product-sidebar__posts-star -->
                                            </span><!-- /.product-sidebar__posts-content -->
                                        </a></li>
                                    <li><a href="shop-details.html">
                                            <img src="css/images/product-1-2.jpg" alt="">
                                            <span class="product-sidebar__posts-content">
                                                <span class="product-sidebar__posts-title">
                                                    Car Breaks
                                                </span><!-- /.product-sidebar__posts-title -->
                                                <span class="product-sidebar__posts-amount">
                                                    Rs 980.00
                                                </span><!-- /.product-sidebar__posts-amount -->
                                                <span class="product-sidebar__posts-star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span><!-- /.product-sidebar__posts-star -->
                                            </span><!-- /.product-sidebar__posts-content -->
                                        </a></li>
                                    <li><a href="shop-details.html">
                                            <img src="css/images/product-1-1.jpg" alt="">
                                            <span class="product-sidebar__posts-content">
                                                <span class="product-sidebar__posts-title">
                                                    Oil Filters
                                                </span><!-- /.product-sidebar__posts-title -->
                                                <span class="product-sidebar__posts-amount">
                                                    Rs 600.99
                                                </span><!-- /.product-sidebar__posts-amount -->
                                                <span class="product-sidebar__posts-star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span><!-- /.product-sidebar__posts-star -->
                                            </span><!-- /.product-sidebar__posts-content -->
                                        </a></li>
                                </ul><!-- /.list-unstyled product-sidebar__posts -->
                            </div>
                   <div class="col-md-3">
                       <div class="product-top">
                           <img src="css/images/product-1-4.jpg" alt="p4">
                           <div class="overlay">
                               <button type="button" class="btn-btn-secondary" title="Quick Shop">
                                   <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Wishlist">
                                   <i class="far fa-heart"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Cart">
                                  <a href="payment.php"> <i class="fas fa-cart-plus"></i></a>
                                </button>
                           </div>
                       </div>
                       <div class="product-bottom text-center">
                          <h3>Car Engine</h3>
                          <h5>Rs 20,000.99</h5>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <i class="far fa-star"></i>
                       </div>
                   </div>

                   <div class="col-md-3">
                       <div class="product-top">
                           <img src="css/images/product-1-5.jpg" alt="p5">
                           <div class="overlay">
                               <button type="button" class="btn-btn-secondary" title="Quick Shop">
                                   <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Wishlist">
                                   <i class="far fa-heart"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Cart">
                                <a href="payment.php"> <i class="fas fa-cart-plus"></i></a>
                                </button>
                           </div>
                       </div>
                       <div class="product-bottom text-center">
                          <h3>Alloy Wheel</h3>
                          <h5>Rs 3000</h5>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>                       
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                       </div>
                   </div>

                   <div class="col-md-3">
                       <div class="product-top">
                           <img src="css/images/product-1-6.jpg" alt="p6">
                           <div class="overlay">
                               <button type="button" class="btn-btn-secondary" title="Quick Shop">
                                   <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Wishlist">
                                   <i class="far fa-heart"></i>
                                </button>
                                <button type="button" class="btn-btn-secondary" title="Add To Cart">
                                <a href="payment.php"> <i class="fas fa-cart-plus"></i></a>
                                </button>
                           </div>
                       </div>
                       <div class="product-bottom text-center">
                          <h3>Oil Filters</h3>
                          <h5>Rs 600.99</h5>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <i class="far fa-star"></i>
                       </div>
                   </div>
                   </div>
               </div>
           </div>

           <!-- shopping card over -->

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