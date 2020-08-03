<?php 
require_once './config/utils.php';

$getMenuQuery = "select * from categories";

$menu = queryExecute($getMenuQuery, true);
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu res</title>
</head>
<body>
	    <div class="menu-mobile-nav navbar-toggle">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
        <span class="icon-search"><i class="fa fa-search" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icon-close">
            <span class="ti-close"></span>
        </div>
        <ul class="nav navbar-nav">
            <li class="has-sub"><a href="index.php">Home</a>
            </li>

            <li class="has-sub"><a href="#">Rooms</a>
                <ul class="sub-menu1 animated fadeIn">
                    <?php foreach ($menu as $me): ?>
                        <li><a href="#"><?php echo $me['name'] ?></a></li>
                    <?php endforeach ?>
                </ul>
            </li>
            <li class="has-sub">
                <a href="about.php">About</a>
            </li>
            <li class="has-sub"><a href="contact.php">Contact</a>
            </li>
            <li class="has-sub">
                <a href="blog.php">Blog</a>
            </li>
        </ul>
        <div class="uni-nav-mobile-bottom">
            <div class="form-search-wrapper-mobile">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon success"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</body>
</html>