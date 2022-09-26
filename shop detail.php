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
        <link rel="stylesheet" href="css/shop-detail.css">
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
                 <h1> Shop Details</h1>
              </div>
          </div>
           <!-- details -->
           <div class="product-details">
            <div class="container">
                <div class="row_2">
                    <div class="col-lg-6">
                        <img src="css/images/product-d-1-1.jpg" class="img-fluid" alt="">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="product-details__content">
                            <div class="product-details__content-top">
                                <h3 class="product-details__title">Engine Oil</h3><!-- /.product-details__title -->
                                <p class="product-details__amount">
                                    Rs 800.00
                                </p><!-- /.product-details__amount -->
                                <div class="product-details__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    2 Reviews
                                </div><!-- /.product-details__stars -->
                            </div><!-- /.product-details__content-top -->
                            <p class="product-details__summery">
                                Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des <br>mauris commodo venenatis
                                ligula commodo leez sed blandit convallis <br>dignissim onec vel pellentesque neque.
                            </p><!-- /.product-details__summery -->
                            <ul class="product-details__list list-unstyled">
                                <li>REF. 4231/406</li>
                                <li>Available in store</li>
                            </ul><!-- /.product-details__list list-unstyled -->

                            <div class="product-details__quantity">
                                <div class="quantity-box">
                                    <button type="button" class="sub">-</button>
                                    <input type="number" id="product-2" value="1">
                                    <button type="button" class="add">+</button>
                                </div>
                                <div class="addto-cart-box">
                                    <a href="payment.php" class="thm-btn-1">
                                        Add to Cart
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="#" class="thm-btn-1">
                                        Add to Wishlist
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <hr class="section-separator">
                            <div class="product-details__share">
                                <p>Share with friends</p>
                                <div class="product-details__share-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div><!-- /.product-details__share-links -->
                            </div><!-- /.product-details__share -->
                        </div><!-- /.product-details__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="product-details">
            <div class="container">
                <div class="row_2">
                    <div class="col-lg-6">
                        <img src="css/images/product-1-1.jpg" class="img-fluid1" alt="">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="product-details__content">
                            <div class="product-details__content-top">
                                <h3 class="product-details__title">Tire with Wheel</h3><!-- /.product-details__title -->
                                <p class="product-details__amount">
                                    Rs1200.00
                                </p><!-- /.product-details__amount -->
                                <div class="product-details__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    2 Reviews
                                </div><!-- /.product-details__stars -->
                            </div><!-- /.product-details__content-top -->
                            <p class="product-details__summery">
                                Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des <br>mauris commodo venenatis
                                ligula commodo leez sed blandit convallis <br>dignissim onec vel pellentesque neque.
                            </p><!-- /.product-details__summery -->
                            <ul class="product-details__list list-unstyled">
                                <li>REF. 4231/406</li>
                                <li>Available in store</li>
                            </ul><!-- /.product-details__list list-unstyled -->

                            <div class="product-details__quantity">
                                <div class="quantity-box">
                                    <button type="button" class="sub">-</button>
                                    <input type="number" id="product-2" value="1">
                                    <button type="button" class="add">+</button>
                                </div>
                                <div class="addto-cart-box">
                                    <a href="payment.php" class="thm-btn-1">
                                        Add to Cart
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="#" class="thm-btn-1">
                                        Add to Wishlist
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <hr class="section-separator">
                            <div class="product-details__share">
                                <p>Share with friends</p>
                                <div class="product-details__share-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div><!-- /.product-details__share-links -->
                            </div><!-- /.product-details__share -->
                        </div><!-- /.product-details__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="product-details">
            <div class="container">
                <div class="row_2">
                    <div class="col-lg-6">
                        <img src="css/images/product-1-3.jpg" class="img-fluid2" alt="">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="product-details__content">
                            <div class="product-details__content-top">
                                <h3 class="product-details__title">Car Breaks</h3><!-- /.product-details__title -->
                                <p class="product-details__amount">
                                    Rs 980.00
                                </p><!-- /.product-details__amount -->
                                <div class="product-details__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    2 Reviews
                                </div><!-- /.product-details__stars -->
                            </div><!-- /.product-details__content-top -->
                            <p class="product-details__summery">
                                Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des <br>mauris commodo venenatis
                                ligula commodo leez sed blandit convallis <br>dignissim onec vel pellentesque neque.
                            </p><!-- /.product-details__summery -->
                            <ul class="product-details__list list-unstyled">
                                <li>REF. 4231/406</li>
                                <li>Available in store</li>
                            </ul><!-- /.product-details__list list-unstyled -->

                            <div class="product-details__quantity">
                                <div class="quantity-box">
                                    <button type="button" class="sub">-</button>
                                    <input type="number" id="product-2" value="1">
                                    <button type="button" class="add">+</button>
                                </div>
                                <div class="addto-cart-box">
                                    <a href="payment.php" class="thm-btn-1">
                                        Add to Cart
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="#" class="thm-btn-1">
                                        Add to Wishlist
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <hr class="section-separator">
                            <div class="product-details__share">
                                <p>Share with friends</p>
                                <div class="product-details__share-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div><!-- /.product-details__share-links -->
                            </div><!-- /.product-details__share -->
                        </div><!-- /.product-details__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="product-details">
            <div class="container">
                <div class="row_2">
                    <div class="col-lg-6">
                        <img src="css/images/product-1-4.jpg" class="img-fluid3" alt="">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="product-details__content">
                            <div class="product-details__content-top">
                                <h3 class="product-details__title">Car Engine</h3><!-- /.product-details__title -->
                                <p class="product-details__amount">
                                    Rs 20,000.00
                                </p><!-- /.product-details__amount -->
                                <div class="product-details__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    2 Reviews
                                </div><!-- /.product-details__stars -->
                            </div><!-- /.product-details__content-top -->
                            <p class="product-details__summery">
                                Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des <br>mauris commodo venenatis
                                ligula commodo leez sed blandit convallis <br>dignissim onec vel pellentesque neque.
                            </p><!-- /.product-details__summery -->
                            <ul class="product-details__list list-unstyled">
                                <li>REF. 4231/406</li>
                                <li>Available in store</li>
                            </ul><!-- /.product-details__list list-unstyled -->

                            <div class="product-details__quantity">
                                <div class="quantity-box">
                                    <button type="button" class="sub">-</button>
                                    <input type="number" id="product-2" value="1">
                                    <button type="button" class="add">+</button>
                                </div>
                                <div class="addto-cart-box">
                                    <a href="payment.php" class="thm-btn-1">
                                        Add to Cart
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="#" class="thm-btn-1">
                                        Add to Wishlist
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <hr class="section-separator">
                            <div class="product-details__share">
                                <p>Share with friends</p>
                                <div class="product-details__share-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div><!-- /.product-details__share-links -->
                            </div><!-- /.product-details__share -->
                        </div><!-- /.product-details__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
           <!-- details over-->
           <div class="cont-book">
                <div class="text">
                    <h1>Add a review</h1>
                </div>
                <form action="#" method="post">
                    <div class="form-row">
                         <div class="input-data">
                             <input type="text" placeholder="Your Name" name="Name" required>
                             
                         </div>
                         <div class="input-data">
                             <input type="Email" placeholder="Email Address" name="Email">
                             
                         </div>
                          <div class="input-data">
                             <textarea name="Message" placeholder="Write Comment"></textarea>
                          </div>
                          <div class="input-data">
                          <button type="submit" class="thm-btn" name="submit">
                                Submit Review
                                <i class="fas fa-arrow-alt-circle-right"></i>
                            </button>
                            </div>  
                    </div>
                </form>
            </div>
 
          
<?php
 $connection=mysqli_connect("localhost","root","","dacars");
  if(isset($_POST['submit'])){
$Name =$_POST['Name'];
$Email =$_POST['Email'];
$Message =$_POST['Message'];
echo "$Name";

$sql= "INSERT INTO 'review'( 'Name' , 'Email' , 'Message' ) VALUES ('$Name' , '$Email', '$Message')"; 
echo "INSERT INTO `review` (`Name`, `Email`, `Message`) VALUES ('har', 'ZSD', 'sadffd')";

$check_res=mysqli_query($connection,$sql);  

  }
  else
  echo "not sabe" ;

?>


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