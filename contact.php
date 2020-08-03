<?php 
require_once './config/utils.php';
$getSettingWebQuery = "select * from web_settings";

$setting = queryExecute($getSettingWebQuery);




 ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/02_07_contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:44 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact-us</title>
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
    ?></nav>
<!-- End mobile menu -->

<div id="wrapper-container" class="site-wrapper-container">
    <div class="vk-contact-us">

        <!--HEADER-->
        <?php  
        include './_https_/menu.php';
        ?>
        <!--ENAD HEADER-->

        <!--BENGIN CONTENT HEADER-->
        <section class="site-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="vk-gallery-grid-full-banner">

                        <div class="vk-about-banner">
                            <div class="vk-about-banner-destop" data-parallax="scroll" data-image-src="images/02_07_contact_us/background.jpg">
                                <div class="vk-banner-img"></div>
                                <div class="vk-about-banner-caption">
                                    <h2>Contact Us</h2>
                                    <h3>
                                        <a href="#">Page</a>
                                        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        <a href="#">Contact us</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="vk-contact-us">
                        <div class="col-md-7 vk-clear-padding">
                            <div class="vk-contact-us-map">
                                <div id="map"></div>
                                    <p><?php echo $setting['map']; ?></p>
<!--                                 <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.3558605259554!2d-0.1305261839151272!3d50.824572079528714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875859878db2cc7%3A0xff129250121f260d!2s45+Queen's+Park+Rd%2C+Brighton+BN2+0GJ%2C+UK!5e0!3m2!1sen!2s!4v1505207016897" height="585" style="border:0" allowfullscreen></iframe> -->
                            </div>
                        </div>
                        <div class="col-md-5 vk-clear-padding">
                            <div class="vk-contact-us-info">
                                <div class="vk-contact-us-info-header">
                                    <h3>Get In Touch</h3>
                                    <h2>Contact Us</h2>
                                    <div class="clearfix"></div>
                                    <div class="vk-contact-border"></div>
                                </div>
                                <div class="vk-contact-us-info-text">
                                    <ul>
                                        <li>
                                            <div class="vk-contact-us-info-text-icon">
                                                <span class="ti-location-pin"></span>
                                            </div>
                                            <div class="vk-contact-us-info-text-right">
                                                <h4>LOCATION</h4>
                                                    <p><?php echo $setting['address']; ?></p>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="vk-contact-us-info-text-icon">
                                                <span class="ti-email"></span>
                                            </div>
                                            <div class="vk-contact-us-info-text-right">
                                                <h4>Email</h4>
                                                    <p><?php echo $setting['email']; ?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vk-contact-us-info-text-icon">
                                                <span class="ti-mobile"></span>
                                            </div>
                                            <div class="vk-contact-us-info-text-right">
                                                <h4>TEL</h4>
                                                    <p><?php echo $setting['hotline']; ?></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="vk-contact-form">
                        <div class="container">
                            <div class="vk-contact-form-info-header">
                                <h3>Contact Form</h3>
                                <h2>Send Us An Email</h2>
                                <div class="clearfix"></div>
                                <div class="vk-contact-border"></div>
                            </div>
                            <div class="vk-contact-form-info-body">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 15px;color: #b0914f;">
                                        <div id="message-contact" ></div>
                                    </div>
                                    <form method="post" action="<?= ADMIN_URL . 'contact/save-add.php'?>" id="add-contact-form" autocomplete="off">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <input type="text" id="name" name="name" placeholder="Your name ..." class="form-control" >
                                                <?php if(isset($_GET['nameerr'])):?>
                                                    <label class="error"><?= $_GET['nameerr']?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <input type="email" id="email" name="email" placeholder="Your email ..." class="form-control">
                                                <?php if(isset($_GET['emailerr'])):?>
                                                    <label class="error"><?= $_GET['emailerr']?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <input type="text" name="phone" placeholder="Number phone ..." class="form-control">
                                                <?php if(isset($_GET['phoneerr'])):?>
                                                    <label class="error"><?= $_GET['phoneerr']?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="comment" name="comment" placeholder="Message" rows="5"></textarea>
                                                <?php if(isset($_GET['commenterr'])):?>
                                                    <label class="error"><?= $_GET['commenterr']?></label>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="vk-btn-send">
                                                <button type="submit" class="btn vk-btn-primary btn-block">SEND <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
    <?php  
    include './_https_/js.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
    <script>
    $('#add-contact-form').validate({
        rules:{
            name: {
                required: true,
                maxlength: 191
            },
            email: {
                required: true,
                maxlength: 191,
                email: true,
            },
            phone:{
                number: true,
            },
            comment:{
                required: true,
            }
        },
        messages: {
            name: {
                required: "Hãy nhập tên người dùng",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            email: {
                required: "Hãy nhập email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email"
            },
            phone:{
                min: "Bắt buộc là số có 10 chữ số",
                max: "Bắt buộc là số có 10 chữ số",
                number: "Nhập định dạng số"
            },
            comment:{
                required: "Hãy nhập noi dung",
            }

        }
    });
</script>
</body>

<!-- Mirrored from html.univertheme.com/sparta/02_07_contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:45 GMT -->
</html>