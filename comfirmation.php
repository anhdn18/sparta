<?php 
require_once 'config/utils.php';

$roomId = $_GET['id'];


$getBookingQuery = "select * from booking where room_id = $roomId";
$booking = queryExecute($getBookingQuery, true);

// var_dump($booking);
// die;

 
 ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/05_04_comfirmation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>confirmation</title>
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
    <div class="vk-confirmation">

        <!--HEADER-->
    <?php  
    include './_https_/menu.php';
    ?>
        <!--ENAD HEADER-->

        <!--BENGIN CONTENT HEADER-->
        <section class="site-content-area">
            <div class="vk-gallery-grid-full-banner">
                <div class="vk-about-banner">
                    <div class="vk-about-banner-destop"  data-parallax="scroll" data-image-src="images/04_01_room_list/background.jpg">
                        <div class="vk-banner-img"></div>
                        <div class="vk-about-banner-caption">
                            <h2>Reservation</h2>
                            <h3>
                                <a href="#">Reservation</a>
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <a href="#">Confirm</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-confirmation-content">
                <div class="container">
                    <div class="vk-select-room-breakcrumb">
                        <ul>
                            <li class="completed">
                                <a href="javascript:void(0);">1. Choose Date</a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0);">2. Select Room</a>
                                <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                            </li>
                            <li class="make-a-reservation">
                                <a href="javascript:void(0);">3. Make A Reservation</a>
                                <span class="round-tabs five">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                            </li>
                            <li class="confirmation">
                                <a href="javascript:void(0);">4. Confirmation</a>
                                <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="vk-confirmation-info">
                            <div class="col-md-8">
                                <div class="vk-confirmation-left">
                                    <h2>Reservation Completed!</h2>
                                    <p>Your reservation details have just been sent to your email. If you have any question,
                                        please don't hesitate to contact us. Thank you!</p>
                                    <ul>
                                        <li>
                                            <span class="ti-mobile"></span> (+233) 123 456789
                                        </li>
                                        <li> <span class="ti-email"></span> contact@sparta.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-confirmation-right">
                                    <div class="vk-make-a-reservation-right">
                                        <h3>Your Reservation</h3>
                                        <div class="vk-make-a-room">
                                            <?php foreach ($booking as $ro): ?>
                                            <div class="vk-make-a-room1">
                                                <h3>Room : You </h3>
                                                <ul>
                                                    <li>Check in : <?php echo $ro['checkin'] ?></li>
                                                    <li>Ckeck out : <?php echo $ro['checkout'] ?></li><br>

                                                    <li>Adult: <?php echo $ro['adult'] ?></li>
                                                    <li>Children: <?php echo $ro['children'] ?></li>
                                                    <li>Night(s): <?php echo $ro['nights'] ?></li>
                                                    <li>Name: <?php echo $ro['name'] ?></li>
                                                    <li>Email: <?php echo $ro['email'] ?></li>
                                                    <li>Phone: <?php echo $ro['phone'] ?></li>
                                                </ul>

                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
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
</body>

<!-- Mirrored from html.univertheme.com/sparta/05_04_comfirmation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:52 GMT -->
</html>