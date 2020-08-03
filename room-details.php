<?php 
require_once 'config/utils.php';

$roomId = $_GET['id'];
// if($roomId == null){
//     header("location:" . BASE_URL);
//     die;
// }

$GetRoomQuery = "select * from rooms where id = $roomId";
$room = queryExecute($GetRoomQuery, true);

$newRoomQuery = "select * 
                    from rooms 
                    order by id desc
                    limit 5";
$roomnew = queryExecute($newRoomQuery, true);


$commentSql = "select * from comment where room_id = $roomId order by id desc";
$comments = queryExecute($commentSql, true);

 ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/04_03_room_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>room-details</title>


    <link rel="stylesheet" href="css/kronos.css"></link>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
    <script src="js/kronos.js"></script>

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
    <div class="vk-room-details">

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
                            <?php foreach ($room as $ro): ?>
                                <h2><?php echo $ro['name'] ?></h2>
                            <?php endforeach ?>
                            <h3>
                                <a href="#">Rooms</a>
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <a href="#">Details</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>


            <div class="vk-room-details-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="vk-room-details-content-left">
                                <div class="vk-room-details-left-slide">
                                    <div id="owl-slide-room-details" class="vk-owl-one-item owl-carousel owl-theme">
                                        <?php foreach ($room as $ro): ?>
                                            <div class="item">
                                                <img src="<?= BASE_URL . $ro['image']?>" alt="" class="img-responsive">
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>


                                <div class="vk-room-details-title-price">
                                    <div class="vk-room-details-title">
                                        <h2>Double Rooms</h2>
                                    </div>
                                    <div class="vk-room-details-price">
                                        <ul>
                                            <li>
                                                Starting from:
                                            </li>
                                            <li>
                                                <?php foreach ($room as $ro): ?>
                                                    <p>$<?php echo $ro['price'] ?>/<span>NIGHT</span></p>
                                                <?php endforeach ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="vk-room-details-description">
                                    <h4>Description</h4>
                                    <?php foreach ($room as $ro): ?>
                                        <p><?php echo $ro['detail']; ?></p>
                                    <?php endforeach ?>
                                </div>

                                <div class="vk-room-details-info">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul>
                                                <li>
                                                    <?php foreach ($room as $ro): ?>
                                                        <p><i class="fa fa-bed" aria-hidden="true"></i> Bed: <span><?php echo $ro['bedtype'] ?> King Bed</span></p>
                                                    <?php endforeach ?>

                                                </li>
                                                <li>
                                                    <p><i class="fa fa-binoculars" aria-hidden="true"></i> View: <span>Lake View</span></p>
                                                </li>
                                                <li>
                                                    <?php foreach ($room as $ro): ?>
                                                        <p><i class="fa fa-arrows-alt" aria-hidden="true"></i> Size: <span><?php echo $ro['roomsize'] ?> m2</span></p>
                                                    <?php endforeach ?>

                                                </li>
                                                <li>
                                                    <p><i class="fa fa-coffee" aria-hidden="true"></i> Breakfast: <span>Yes</span></p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <ul>
                                                <li>
                                                    <p><i class="fa fa-users" aria-hidden="true"></i> Max Occupancy: <span>4</span></p>
                                                </li>
                                                <li>
                                                    <p><i class="fa fa-wifi" aria-hidden="true"></i> Wifi: <span>Yes</span></p>
                                                </li>
                                                <li>
                                                    <p><i class="fa fa-recycle" aria-hidden="true"></i> Air Conditioning: <span>Yes</span></p>
                                                </li>
                                                <li>
                                                    <p><i class="fa fa-plug" aria-hidden="true"></i> Hair Dryer: <span>Yes</span></p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <ul>
                                                <li>
                                                    <p><i class="fa fa-television" aria-hidden="true"></i> Television: <span>Yes</span></p>
                                                </li>
                                                <li>
                                                    <p><i class="fa fa-cube" aria-hidden="true"></i> Safety Box: <span>Yes</span></p>
                                                </li>
                                                <li>
                                                    <p><i class="fa fa-bullseye" aria-hidden="true"></i> Smoking: <span>No</span></p>
                                                </li>
                                                <li>
                                                    <p><i class="fa fa-car" aria-hidden="true"></i> Car Parking: <span>Yes</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="vk-room-details-review">
                                    <h4>2 Reviews</h4>
                                    <?php foreach ($comments as $co): ?>
                                        <div class="vk-room-details-review-item">
                                            <div class="item-img">
                                                <img src="images/04_03_room_details/review/img.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="item-content">
                                                <h3><?php echo $co['name']; ?> - <span>09 May 2020</span></h3>
                                                <p><?php echo $co['content']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>


                                <div class="vk-room-details-room-details">
                                    <h4>Add Your Review  -
                                        <span>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                    </h4>

                                    <form id="add-comment-form" action="sub-comment.php" method="post" name="from" enctype="multipart/form-data">
                                        <div class="row">
                                            <input type="hidden" name="roomId" value="<?= $roomId?>">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="text" id="name" name="name" placeholder="Your name ..." class="form-control">
                                                    <?php if(isset($_GET['nameerr'])):?>
                                                        <label class="error"><?= $_GET['nameerr']?></label>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="Email" id="email" name="email" placeholder="Your email ..." class="form-control" >
                                                    <?php if(isset($_GET['emailerr'])):?>
                                                        <label class="error"><?= $_GET['emailerr']?></label>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" id="message" name="content" placeholder="Message" rows="5"></textarea>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="vk-btn-submit">
                                                    <div class="col-md-12">
                                                        <button type="submit" style="width: 120px; height: 50px; color: #fff;background-color: #b0914f;">SUBMIT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="vk-room-details-content-right">
                                <h3>Your Reservation</h3>
                                <form method="post" id="add-booking-form" action="save-booking.php" class="form-horizontal" name="booking">
                                    <input type="hidden" name="roomId" value="<?= $roomId?>">
                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">CHECK - IN</label>
                                            <div class="input-group date date-check-in" data-date-format="dd-mm-yyyy" style="width: 100%;">
                                                <input  class="form-control" type="text" id="kronos9-1" name="checkin">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">CHECK - OUT</label>
                                            <div class="input-group date date-check-out" data-date-format="dd-mm-yyyy" style="width: 100%;">
                                                <input  class="form-control" type="text" id="kronos9-2" name="checkout">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">NIGHT</label>
                                            <select id="night" class="form-control" name="nights">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h4>Room</h4>
                                        <div class="col-md-6">
                                            <label class="control-label">ADULTS</label>
                                            <select id="adults1" class="form-control" name="adult">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label">CHILDREN</label>
                                            <select id="children1" class="form-control" name="children">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h4>Your Informations</h4>
                                        <div class="col-md-12">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Phone</label>
                                            <input type="number" class="form-control" name="phone">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Note</label>
                                            <textarea class="form-control" name="note">
                                                
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="vk-btn-send">
                                                <button type="submit" class="btn vk-btn-primary btn-block">Check Availability</button>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $('#kronos9-1').kronos({
                                            periodTo: '#kronos9-2'
                                        });
                                        $('#kronos9-2').kronos({
                                            periodFrom: '#kronos9-1'
                                        });
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="vk-room-details-related-rooms">
                        <div class="container">
                            <div class="vk-room-related-rooms">
                                <h2>Related Rooms</h2>
                                <div class="vk-room-related-border"></div>
                            </div>
                            <div class="vk-room-related-rooms-destop">
                                <div class="vk-room-related-slide">
                                    <div id="owl-room-related-slide" class="vk-owl-three-dots owl-carousel owl-theme">
                                        <?php foreach ($roomnew as $rn): ?>
                                            <div class="item">
                                                <div class="vk-sparta-item-content">
                                                    <div class="vk-item-img">
                                                        <a href="<?= BASE_URL . "room-details.php?id=" . $rn['id']?>"><img src="<?= BASE_URL . $rn['image']?>" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="vk-item-text">
                                                        <h2><a href="<?= BASE_URL . "room-details.php?id=" . $rn['id']?>"><?php echo $rn['name']; ?></a></h2>
                                                        <ul>
                                                            <li>
                                                                <p>Starting Form : </p>
                                                            </li>
                                                            <li>
                                                                <p>$<?php echo $rn['price']; ?>/ <span>Night</span></p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>

                                    </div>
                                </div>
                            </div>

                            <div class="vk-room-related-rooms-mobile">
                                <div class="vk-room-related-slide">
                                    <?php foreach ($roomnew as $rn): ?>
                        
                                    <div class="item">
                                        <div class="vk-sparta-item-content">
                                            <div class="vk-item-img">
                                                <a href="<?= BASE_URL . "room-details.php?id=" . $rn['id']?>"><img src="<?= BASE_URL . $rn['image']?>" alt="" class="img-responsive"></a>
                                            </div>
                                            <div class="vk-item-text">
                                                <h2><a href="<?= BASE_URL . "room-details.php?id=" . $rn['id']?>"><?php echo $rn['name']; ?></a></h2>
                                                <ul>
                                                    <li>
                                                        <p>Starting Form : </p>
                                                    </li>
                                                    <li>
                                                        <p>$<?php echo $rn['price']; ?>/ <span>Night</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach ?>
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
    $('#add-comment-form').validate({
        rules:{
            name: {
                required: true,
                maxlength: 191,
            },            
            email: {
                required: true,
                maxlength: 191,
                email: true,
            },
            content: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "Hãy nhập Ten",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
            },
            email: {
                required: "Hãy nhập Email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email",
            },
            content: {
                required: "Hãy nhập mess",
            }
        }
    });
    $('#add-booking-form').validate({
        rules:{
            checkin: {
                required: true,
            },
            checkout: {
                required: true,
            },
            name: {
                required: true,
                maxlength: 191,
            },            
            email: {
                required: true,
                maxlength: 191,
                email: true,
            },
            phone: {
                required: true,
                maxlength: 10,
                minlength: 10,
            },
            note: {
                required: true,
            }
        },
        messages: {
            checkin: {
                required: "Hãy nhập chon ngay checkin ",
            },
            checkout: {
                required: "Hãy nhập chon ngay checkout",
            },
            name: {
                required: "Hãy nhập Ten",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
            },
            email: {
                required: "Hãy nhập Email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email",
            },
            phone: {
                required: "Hãy nhập Phone",
                maxlength: "Số lượng ký tự tối đa bằng 10 ký tự",
                minlength: "Số lượng ký tự tối đa bằng 10 ký tự",
            },
            note: {
                required: "Hãy nhập note",
            }
        }
    });
</script>
</body>

<!-- Mirrored from html.univertheme.com/sparta/04_03_room_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:50 GMT -->
</html>