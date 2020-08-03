<?php
require_once 'config/utils.php';
$cateId = $_GET['id'];
$pageNumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
$pageSize = 5;

$sql = "select 
            c.*,
            count(p.id) as total_room
        from categories c
        join rooms r
        on c.id = r.cate_id 
        where c.id = $cateId";

$cate = queryExecute($sql, true);


$offset = ($pageNumber-1)*$pageSize;

$SqlRom = "    select * 
            from rooms 
            where cate_id = $cateId
            limit $offset, $pageSize";
$room = queryExecute($SqlRom, true);
 ?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/04_01_rooms_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room</title>
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
    <div class="vk-room-list">

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
                            <div class="vk-about-banner-destop">
                                <div class="vk-banner-img"></div>
                                <div class="vk-about-banner-caption">
                                        <h2>Rooms</h2>
                                    <h3>
                                        <a href="#">Rooms</a>
                                        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        <a href="#">List</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vk-room-list-content">
                        <div class="container">
                            <div class="vk-room-list-header">
                                <h3>Our Rooms</h3>
                                <h2>Choose Your Room</h2>
                                <div class="vk-room-list-border"></div>
                            </div>
                            <?php foreach ($room as $ro): ?>
                                <div class="row">
                                    <div class="item">
                                        <div class="col-md-6 vk-dark-our-room-item-left  vk-clear-padding">
                                            <div class="vk-dark-our-room-item-img">
                                                <img src="images/04_01_room_list/img/img.jpg" alt="" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-md-6 vk-dark-our-room-item-right vk-clear-padding">
                                            <div class="vk-dark-our-room-item-content">
                                                <h3><a href="<?= BASE_URL . "room-details.php?id=" . $ro['id']?>"><?php echo $ro['name']?></a></h3>
                                                <ul>
                                                    <li><p><i class="fa fa-bed" aria-hidden="true"></i> Bed <span> : <?php echo $ro['bedtype']?> King Bed</span></p></li>
                                                    <li><p><i class="fa fa-binoculars" aria-hidden="true"></i> View <span> : Lake View</span></p></li>
                                                    <li><p><i class="fa fa-arrows-alt" aria-hidden="true"></i> Size <span> : <?php echo $ro['roomsize']?> m2</span></p></li>
                                                    <li><p><i class="fa fa-coffee" aria-hidden="true"></i> Breakfast <span> : Yes</span></p></li>
                                                    <li><p><i class="fa fa-users" aria-hidden="true"></i> Max Occupancy: <span> : 2 Adult, 1 Child</span></p></li>
                                                </ul>
                                                <div class="vk-dark-our-room-item-book">
                                                    <div class="vk-dark-our-room-item-book-left">
                                                        <ul>
                                                            <li>
                                                                <p>Starting Form : </p>
                                                            </li>
                                                            <li>
                                                                <p>$<?php echo $ro['price']?>/ <span>Night</span></p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="vk-dark-our-room-item-book-right">
                                                        <a href="<?= BASE_URL . "room-details.php?id=" . $ro['id']?>"> BOOK NOW <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            <?php endforeach ?>
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
         <script type="text/javascript">
        $(function() {
            $('.paginate').pagination({
                items: <?= $cate['total_room']?>,
                itemsOnPage: <?= $pageSize?>,
                currentPage: <?= $pageNumber?>,
                cssStyle: 'light-theme',
                onPageClick: function(page){
                    var url = '<?= BASE_URL . 'rooms.php?id=' . $cateId?>';
                    url+= `&page=${page}`;
                    window.location.href = url;      
                }
            });
        });
     </script>
</body>

<!-- Mirrored from html.univertheme.com/sparta/04_01_rooms_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:47 GMT -->
</html>