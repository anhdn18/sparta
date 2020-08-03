<?php 
require_once './config/utils.php';
$getSettingWebQuery = "select * from web_settings";

$setting = queryExecute($getSettingWebQuery);



$getMenuQuery = "select * from categories";

$menu = queryExecute($getMenuQuery, true);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu</title>
</head>
<body>
	<header class="site-header header-default header-sticky">
		<div class="vk-top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="vk-top-header-left">
								<span><?php echo $setting['address'] ?></span>
								<span>-</span>
								<span>Reservation <?php echo $setting['hotline'] ?></span>
						</div>
					</div>
					<div class="col-md-4 vk-top-header-right">
						<div class="vk-top-header-right">
							<ul>
								<li>
									<div class="ui grid">
										<div class="column">
											<div class="ui selection dropdown">
												<input type="hidden" name="selection">
												<i class="fa fa-angle-down" aria-hidden="true"></i>
												<div class="default text">ENG</div>
												<div class="menu">
													<div class="item" data-value="male">VN</div>
													<div class="item" data-value="female">USA</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="ui grid">
										<div class="column">
											<div class="ui selection dropdown">
												<input type="hidden" name="selection">
												<i class="fa fa-angle-down" aria-hidden="true"></i>
												<div class="default text">USD</div>
												<div class="menu">
													<div class="item" data-value="male">VND</div>
													<div class="item" data-value="female">$</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li><a href="#"> BOOK NOW </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="vk-main-menu animated uni-sticky">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-xs-9">
						<div class="wrapper-logo">
							<a href="index.php" class="logo-default">
									<img src="<?= BASE_URL . $setting['logo']?>" alt="" class="img-responsive">
							</a>
						</div>
					</div>
					<div class="col-md-10">
						<nav class="main-navigation">
							<div class="inner-navigation">
								<ul class="nav-bar">
									<li>
										<a href="index.php">Home</a>
									</li>
<!-- 									<li><a href="#">Pages</a>
										<ul class="sub-menu1 animated fadeIn">
											<li><a href="02_01_about.html">About</a></li>
											<li><a href="02_07_contact.html">Contact</a></li>
											<li><a href="02_09_comming_soon.html">Coming Soon</a></li>
										</ul>
									</li> -->
									<li><a href="#">Rooms</a>
										<ul class="sub-menu1 animated fadeIn">
											<?php foreach ($menu as $me): ?>
												<li><a href="<?= BASE_URL ?>rooms.php?id=<?= $me['id']?>"><?php echo $me['name'] ?></a></li>
											<?php endforeach ?>
										</ul>
									</li>
									<li><a href="about.php">About</a>
<!-- 										<ul class="sub-menu1 animated fadeIn">
											<li><a href="05_01_select_room.html">Select Room</a></li>
											<li><a href="05_02_room_select_complete.html">Room Selection Complete</a></li>
											<li><a href="05_03_make_a_reservation.html">Make A Reservation</a></li>
											<li><a href="05_04_comfirmation.html">Confirmation</a></li>

										</ul> -->
									</li>
									<li><a href="contact.php">Contact</a>
		<!-- 								<ul class="sub-menu1 animated fadeIn">
											<li><a href="06_01_events_list.html">Event List</a></li>
											<li><a href="06_02_event_grid.html">Event Grid</a></li>
											<li><a href="06_03_event_details.html">Event Details</a></li>
										</ul> -->
									</li>
									<li><a href="blog.php">Blog</a>
<!-- 										<ul class="sub-menu1 animated fadeIn">
											<li><a href="07_01_blog_list.html">Blog List</a></li>
											<li><a href="07_02_blog_grid.html">Blog Grid</a></li>
											<li><a href="07_03_post_details.html">Blog Details</a></li>
										</ul> -->
									</li>
									<li class="vk-icon-search"><i class="fa fa-search" aria-hidden="true"></i></li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="col-md-12">
						<div class="box-search-header collapse in" id="box-search-header">
							<div class="vk-input-group">
								<div class="input-group stylish-input-group">
									<input type="text" class="form-control"  placeholder="Type keywords.." >
									<span class="input-group-addon">
										<button type="submit">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</body>
</html>