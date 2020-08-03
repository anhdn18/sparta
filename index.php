<?php 
require_once 'config/utils.php';

$getWelcomeQuery = "select * from welcomes";
//dd($getUsersQuery);
$welcome = queryExecute($getWelcomeQuery);


$newRoomQuery = "select * 
                    from rooms 
                    order by id desc
                    limit 6";
$room = queryExecute($newRoomQuery, true);


$newRoomMobiQuery = "select * 
                    from rooms 
                    order by id desc
                    limit 3";
$roommobi = queryExecute($newRoomMobiQuery, true);

 ?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 01:56:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sparta</title>
    <?php  
    include './_https_/css.php';
    ?>
    
</head>
<body>

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
    <?php  
    include './_https_/menu.php';
    ?>



    <div id="main-content" class="site-main-content">
        <div id="home-main-content" class="site-home-main-content">
            <div class="container-fluid">
                <div class="row">
                    <?php  
                    include './_https_/slider.php';
                    ?>
    
                    <?php  
                    include './_https_/check-availability.php';
                    ?>

                    <div class="vk-sparta-about">
                        <div class="container">
                            <div class="vk-sparta-head-title">
                                <h3>Welcome To</h3>
                                <h2><?php echo $welcome['title'] ?></h2>
                                <div class="vk-sparta-about-border"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="vk-sparta-about-text">
                                        <p>
                                            <?php echo $welcome['content'] ?>
                                        </p>
                                    </div>
                                    <div class="vk-sparta-about-author">
                                        <p><?php echo $welcome['name'] ?> - <span>Manager</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vk-sparta-image">
                            <?php  
                            include './_https_/sever.php';
                            ?>
                        </div>
                    </div>

                    <div class="vk-our-room">
                        <div class="container">
                            <div class="vk-sparta-head-title">
                                <h3>Our Rooms</h3>
                                <h2>Luxurious & Convenient</h2>
                                <div class="vk-sparta-about-border"></div>
                            </div>
                            <div class="vk-spartar-our-room-destop">
                                <div class="vk-sparta-our-room">
                                    <div id="vk-owl-our-room" class="vk-owl-three-dots owl-carousel owl-theme">
                                        <?php foreach ($room as $ro): ?>
                                        <div class="item">
                                            <div class="vk-sparta-item-content">
                                                <div class="vk-item-img">
                                                    <a href="<?= BASE_URL . "room-details.php?id=" . $ro['id']?>"><img src="<?= BASE_URL . $ro['image']?>" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-item-text">
                                                    <h2><a href="<?= BASE_URL . "room-details.php?id=" . $ro['id']?>"><?php echo $ro['name']; ?></a></h2>
                                                    <ul>
                                                        <li>
                                                            <p>Starting Form : </p>
                                                        </li>
                                                        <li>
                                                            <p><?php echo $ro['price'] ?><span>/ Night</span></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    </div>
                                </div>
                            </div>

                            <div class="vk-spartar-our-room-mobile">
                                <?php foreach ($roommobi as $rb): ?>
                                <div class="item">
                                    <div class="vk-sparta-item-content">
                                        <div class="vk-item-img">
                                            <a href="<?= BASE_URL . "room-details.php?id=" . $rb['id']?>"><img src="<?= BASE_URL . $rb['image']?>" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="vk-item-text">
                                            <h2><a href="<?= BASE_URL . "room-details.php?id=" . $rb['id']?>"><?php echo $rb['name']; ?></a></h2>
                                            <ul>
                                                <li>
                                                    <p>Starting Form : </p>
                                                </li>
                                                <li>
                                                    <p><?php echo $rb['price'] ?><span>/ Night</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>


                    <div class="vk-sparta-testimonial">
                        <div class="container">
                            <?php  
                            include './_https_/testimonial.php';
                            ?>
                        </div>
                    </div>


                    <div class="vk-sparta-home-blog">
                        <?php  
                        include './_https_/blog.php';
                        ?>
                    </div>


                    <div class="vk-sparta-image-gallery">
                        <?php  
                        include './_https_/gallery.php';
                        ?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  
    include './_https_/footer.php';
    ?>


</div>
<!-- Latest compiled and minified JavaScript -->
    <?php  
    include './_https_/js.php';
    ?>
    
</body>

<!-- Mirrored from html.univertheme.com/sparta/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 01:58:44 GMT -->
</html>