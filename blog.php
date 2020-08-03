<?php 
require_once 'config/utils.php';

$getBlogQuery = "select * from blogs";
//dd($getUsersQuery);
$blog = queryExecute($getBlogQuery, true);


$newBlogQuery = "select * 
                    from blogs 
                    order by id desc
                    limit 3";
$blognew = queryExecute($newBlogQuery, true);

 ?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.univertheme.com/sparta/07_02_blog_grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
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
    <div class="vk-blog-grid">

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
                            <h2>Blog</h2>
                            <h3>
                                <a href="#">Home</a>
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <a href="#">Blog</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-blog-grid-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="vk-blog-grid-body-left">
                                <div class="row">
                                    <?php foreach ($blog as $bl): ?>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="vk-blog-grid-left-item">
                                                <div class="vk-blog-grid-left-item-img">
                                                    <a href="<?= BASE_URL . "blog-details.php?id=" . $bl['id']?>"><img src="<?= BASE_URL . $bl['image']?>" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-blog-grid-left-item-text">
                                                    <h2><a href="<?= BASE_URL . "blog-details.php?id=" . $bl['id']?>"><?php echo $bl['title']; ?></a></h2>
                                                    <div class="time">26 June, 2020</div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="vk-select-room-pagination">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> PREV</a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="vk-blog-grid-body-right">
                                <div class="vk-blog-list-body-right">
                                    <div class="vk-blog-list-right-search">
                                        <div class="input-group stylish-input-group">
                                            <input type="text" class="form-control"  placeholder="Search" >
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="vk-blog-list-right-category">
                                        <h4>Category</h4>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Travel</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Spa</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Restaurant</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Gym</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Event</a></li>
                                        </ul>
                                    </div>
                                    <div class="vk-blog-list-right-recent-post">
                                        <h4>Recent Posts</h4>
                                        <?php foreach ($blognew as $bn): ?>
                                            <div class="vk-recent-post-item">
                                                <div class="vk-recent-post-item-img">
                                                    <a href="<?= BASE_URL . "blog-details.php?id=" . $bn['id']?>"><img src="<?= BASE_URL . $bn['image']?>" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="vk-recent-post-text">
                                                    <h2><a href="<?= BASE_URL . "blog-details.php?id=" . $bn['id']?>"><?php echo $bn['title']; ?></a></h2>
                                                    <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> 26 June, 2020</div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="vk-blog-list-right-archives">
                                        <h4>Archives</h4>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> January 2017</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> February 2017</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> March 2017</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> April 2017</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> May 2017</a></li>
                                        </ul>
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

<!-- Mirrored from html.univertheme.com/sparta/07_02_blog_grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 02:00:58 GMT -->
</html>