<?php 
require_once 'config/utils.php';
$getWelcomeQuery = "select * from welcomes";
//dd($getUsersQuery);
$welcome = queryExecute($getWelcomeQuery);


 ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/02_01_about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <?php  
    include './_https_/css.php';
    ?>


</head>
<body class="">

<!--load page-->
<div class="load-page">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

<!-- Mobile nav -->
<nav class="visible-sm visible-xs mobile-menu-container mobile-nav vk-menu-mobile-nav">
    <?php  
    include './_https_/menu-res.php';
    ?>
</nav>
<!-- End mobile menu -->

<div id="wrapper-container" class="site-wrapper-container">
    <div class="vk-about">

        <!--HEADER-->
    <?php  
    include './_https_/menu.php';
    ?>
        <!--ENAD HEADER-->

        <!--BENGIN CONTENT HEADER-->
        <section class="site-content-area">
            <div class="vk-about-banner">
                <!--data-parallax="scroll" data-image-src="images/02_01_about/background.jpg"-->
                <div class="vk-about-banner-destop">
                    <div class="vk-banner-img"></div>
                    <div class="vk-about-banner-caption">
                        <h2>About Us</h2>
                        <h3>
                            <a href="#">Home</a>
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <a href="#">About Us</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="vk-about-welcometo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="vk-about-welcometo-left">
                                    <img src="<?= BASE_URL . $welcome['image']?>" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="vk-about-welcometo-right">
                                <div class="vk-about-right-header">
                                    <h3>Welcome To</h3>
                                        <h2><?php echo $welcome['title'] ?></h2>
                                    <div class="clearfix"></div>
                                    <div class="vk-about-border"></div>
                                </div>
                                <div class="vk-about-right-content">
                                        <p>
                                            <?php echo $welcome['content'] ?>
                                        </p>
                                    <div class="vk-about-right-content-border"></div>
                                </div>
                                <div class="vk-about-right-author">
                                    <p><?php echo $welcome['name'] ?> - <span><a href="#">Manager</a></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="vk-about-welcometo-share">
                                <div class="vk-about-welcometo-share-border-left"></div>
                                <div class="vk-about-welcometo-share-border-right">

                                </div>
                                <p>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </p>
                                <hr>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-about-count-number">
                <div class="vk-paralax-bg parallax-window"  id="slider">
                    <div class="vk-sparta-image-border">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon-3.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">342</span>
                                        </div>
                                        <h3>Rooms</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon-2.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">433</span>
                                        </div>
                                        <h3>Staff</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon-1.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">187</span>
                                        </div>
                                        <h3>Dishs</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">132</span>
                                        </div>
                                        <h3>Swimming Pools</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-about-why-choose-us">
                <div class="container">
                    <div class="vk-about-why-choose-us-header">
                        <h3>Why Choose Us</h3>
                        <h2>Conscientious & Professional</h2>
                        <div class="vk-about-boder"></div>
                    </div>
                    <div class="vk-about-why-choose-us-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-medall"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>Professional Serving</h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-cup"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>hight Quality Services</h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-credit-card"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>Easy Booking & Payment</h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-layout-media-center-alt"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>Modern Equipments</h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-crown"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>The World's Top Chefs</h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-basketball"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>Interesting Activities</h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-about-why-choose-us-img">
                <div class="vk-sparta-image">
                            <?php  
                            include './_https_/sever.php';
                            ?>
                </div>
            </div>


            <div class="vk-about-testimonial">
                <div class="vk-sparta-testimonial">
                    <div class="container">
                        <div class="vk-sparta-head-title">
                            <h3>Testimonial</h3>
                            <h2>Customer Satisfaction</h2>
                            <div class="vk-sparta-about-border"></div>
                        </div>
                        <div class="vk-sparta-testimonial-content">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div id="vk-owl-testimonial" class="vk-owl-one-item owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="vk-sparta-star">
                                                <p>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                                </p>
                                            </div>
                                            <div class="vk-sparta-testimonial-text">
                                                <p>Lorem Khaled Ipsum is a major key to success. Bless up. The
                                                    weather is amazing, walk with me through the pathway of more
                                                    success. Take this journey with me, Lion! Let me be clear, you
                                                    have to make it through the jungle to make it to paradise, that’s
                                                    the key, Lion! Wraith talk. They key is to have every key,
                                                    the key to open every door.
                                                </p>
                                            </div>
                                            <div class="vk-sparta-testimonial-author">
                                                <p>Adam Smith - <span>Traveller</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-star">
                                                <p>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                                </p>
                                            </div>
                                            <div class="vk-sparta-testimonial-text">
                                                <p>Lorem Khaled Ipsum is a major key to success. Bless up. The
                                                    weather is amazing, walk with me through the pathway of more
                                                    success. Take this journey with me, Lion! Let me be clear, you
                                                    have to make it through the jungle to make it to paradise, that’s
                                                    the key, Lion! Wraith talk. They key is to have every key,
                                                    the key to open every door.
                                                </p>
                                            </div>
                                            <div class="vk-sparta-testimonial-author">
                                                <p>Adam Smith - <span>Traveller</span></p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vk-sparta-star">
                                                <p>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                    <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                                </p>
                                            </div>
                                            <div class="vk-sparta-testimonial-text">
                                                <p>Lorem Khaled Ipsum is a major key to success. Bless up. The
                                                    weather is amazing, walk with me through the pathway of more
                                                    success. Take this journey with me, Lion! Let me be clear, you
                                                    have to make it through the jungle to make it to paradise, that’s
                                                    the key, Lion! Wraith talk. They key is to have every key,
                                                    the key to open every door.
                                                </p>
                                            </div>
                                            <div class="vk-sparta-testimonial-author">
                                                <p>Adam Smith - <span>Traveller</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-about-image-gallery">
                <div class="vk-sparta-image-gallery">
                    <div class="vk-sparta-image-gallery-img">
                        <div id="lightgallery">
                            <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-1.jpg">
                                <div class="vk-gallery-item-img">
                                    <img src="images/01_01_default/gallery/1.jpg" alt="" class="img-responsive">
                                    <div class="vk-item-caption">
                                        <div class="featured-slider-overlay"></div>
                                        <div class="vk-item-caption-text">
                                            <h2>Master Chef</h2>
                                            <h4>Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2  col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-2.jpg">
                                <div class="vk-gallery-item-img">
                                    <img src="images/01_01_default/gallery/2.jpg" alt="" class="img-responsive">
                                    <div class="vk-item-caption">
                                        <div class="featured-slider-overlay"></div>
                                        <div class="vk-item-caption-text">
                                            <h2>Master Chef</h2>
                                            <h4>Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-3.jpg">
                                <div class="vk-gallery-item-img">
                                    <img src="images/01_01_default/gallery/3.jpg" alt="" class="img-responsive">
                                    <div class="vk-item-caption">
                                        <div class="featured-slider-overlay"></div>
                                        <div class="vk-item-caption-text">
                                            <h2>Master Chef</h2>
                                            <h4>Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-4.jpg">
                                <div class="vk-gallery-item-img">
                                    <img src="images/01_01_default/gallery/4.jpg" alt="" class="img-responsive">
                                    <div class="vk-item-caption">
                                        <div class="featured-slider-overlay"></div>
                                        <div class="vk-item-caption-text">
                                            <h2>Master Chef</h2>
                                            <h4>Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-5.jpg">
                                <div class="vk-gallery-item-img">
                                    <img src="images/01_01_default/gallery/5.jpg" alt="" class="img-responsive">
                                    <div class="vk-item-caption">
                                        <div class="featured-slider-overlay"></div>
                                        <div class="vk-item-caption-text">
                                            <h2>Master Chef</h2>
                                            <h4>Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-6 col-xs-6 vk-clear-padding" data-src="images/01_01_default/gallery/1-6.jpg">
                                <div class="vk-gallery-item-img">
                                    <img src="images/01_01_default/gallery/6.jpg" alt="" class="img-responsive">
                                    <div class="vk-item-caption">
                                        <div class="featured-slider-overlay"></div>
                                        <div class="vk-item-caption-text">
                                            <h2>Master Chef</h2>
                                            <h4>Restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vk-sparta-image-gallery-text">
                        <span><a href="02_03_gallery_grid_full_width.html">GALLERY</a></span>
                    </div>
                </div>
            </div>
        </section>
        <!--END CONTENT ABOUT-->

        <!--FOOTER-->
    <?php  
    include './_https_/footer.php';
    ?>
        <!--END FOOTER-->

    </div>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery1.min.js"></script>
<script src="plugin/dist/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/number-count/jquery.counterup.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.tr.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script src="js/picturefill.min.js"></script>
<script src="js/lightgallery.js"></script>
<script src="js/lg-pager.js"></script>
<script src="js/lg-autoplay.js"></script>
<script src="js/lg-fullscreen.js"></script>
<script src="js/lg-zoom.js"></script>
<script src="js/lg-hash.js"></script>
<script src="js/lg-share.js"></script>
<script src="js/jquery.nice-select.js"></script>
<script src="js/semantic.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from html.univertheme.com/sparta/02_01_about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:23 GMT -->
</html>