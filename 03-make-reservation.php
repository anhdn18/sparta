<?php
require_once 'config/utils.php';
// $roomId = $_GET['id'];
// // if($roomId == null){
// //     header("location:" . BASE_URL);
// //     die;
// // }

// $GetRoomQuery = "select * from booking where id = $roomId";
// $room = queryExecute($GetRoomQuery, true);

// $sql = "select  
//               b.*,
//               r.name as roomname
//         from booking b
//         join rooms r
//           on b.room_id = r.id
//         ";
// $booking = queryExecute($sql, true);

 ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/05_03_make_a_reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a reservation</title>
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
    <div class="vk-make-a-reservation">

        <!--HEADER-->
    <?php  
    include './_https_/menu.php';
    ?>
        <!--ENAD HEADER-->

        <!--BENGIN CONTENT HEADER-->
        <section class="site-content-area">
            <div class="vk-gallery-grid-full-banner">
                <div class="vk-about-banner">
                    <div class="vk-about-banner-destop">
                        <div class="vk-banner-img"></div>
                        <div class="vk-about-banner-caption">
                            <h2>Reservation</h2>
                            <h3>
                                <a href="#">Reservation</a>
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <a href="#">Make a reservation</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-make-a-reservation-content">
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
                            <li>
                                <a href="javascript:void(0);">4. Confirmation</a>
                                <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="vk-make-a-reservation-info">
                            <div class="col-md-8">
                                <div class="vk-make-a-reservation-left">
                                    <h3>Your Informations</h3>
                                    <div class="row">
                                        <form action="https://html.univertheme.com/sparta/action.php">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="text" id="firstName" placeholder="First name *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="text" id="lastName" placeholder="Last name *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="email" id="email" placeholder="Email *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="tel" id="phone" placeholder="Phone *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <textarea class="form-control" id="address" name="address" placeholder="Address Note"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <textarea class="form-control" id="additional" name="additional" placeholder="Additional Note"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="text" id="couponName" placeholder="Counpon Code" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <div class="vk-btn-send">
                                                        <h4><a href="#">Contact Now</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <h3>OR</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vk-make-a-re-left-img">
                                                <a href="#"><img src="images/05_03_make_a_reservation/paypal.jpg" alt="" class="img-responsive"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vk-make-a-left-btn">
                                                <h4><a href="#"> Pay Now</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
<!--                             <?php foreach ($booking as $ro): ?>
                                <div class="col-md-4">
                                    <div class="vk-make-a-reservation-right">
                                        <h3>Your Reservation</h3>
                                        <div class="vk-make-a-room">
                                            <div class="vk-make-a-room2">
                                                <h3>Room : <?php echo $ro['roomname'] ?> <span>($ <?php echo $ro['price'] ?>/night)</span></h3>
                                                <ul>
                                                    <li>Adult: <?php echo $ro['adult'] ?></li>
                                                    <li>Children: <?php echo $ro['children'] ?></li>
                                                    <li>night(s): <?php echo $ro['nights'] ?></li>
                                                </ul>
                                                <h4>$400.00</h4>
                                            </div>
                                        </div>
                                        <div class="vk-make-a-total">
                                            <table class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Tổng cộng">$800.00 </td>
                                                    </tr>
                                                    <tr class="tax-total">
                                                        <th>Tax 10%</th>
                                                        <td data-title="Thuế">$80.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="vk-make-a-grand-total">
                                            <table class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="order-total">
                                                        <th>Grand Total</th>
                                                        <td data-title="Grand-total">$880.00 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="vk-make-a-btn">
                                            <h4><a href="#">Edit Booking</a></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?> -->
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

<!-- Mirrored from html.univertheme.com/sparta/05_03_make_a_reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:52 GMT -->
</html>