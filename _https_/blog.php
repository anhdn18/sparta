<?php
require_once './config/utils.php';

$newBlogQuery = "select * 
                    from blogs 
                    order by id desc
                    limit 6";
$blog = queryExecute($newBlogQuery, true);


$newBlogMobiQuery = "select * 
                    from blogs 
                    order by id desc
                    limit 3";
$blogmobi = queryExecute($newBlogMobiQuery, true);


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<div class="container">
		<div class="vk-sparta-head-title">
			<h3>Blog</h3>
			<h2>Latest Posts From Blog</h2>
			<div class="vk-sparta-about-border"></div>
		</div>
		<div class="vk-sparta-home-blog-content-destop">
			<div class="vk-sparta-home-blog-content">
				<div id="vk-owl-home-blog" class="vk-owl-three-dots owl-carousel owl-theme">
					<?php foreach ($blog as $bl): ?>
						<div class="item">
							<div class="vk-sparta-item-blog-content">
								<div class="vk-item-img">
									<a href="<?= BASE_URL . "blog-details.php?id=" . $bl['id']?>"><img src="<?= BASE_URL . $bl['image']?>" alt="" class="img-responsive"></a>
								</div>
								<div class="vk-item-text">
									<h2><a href="<?= BASE_URL . "blog-details.php?id=" . $bl['id']?>"><?php echo $bl['title'] ?></a></h2>
									<div class="time">26 June,2020</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<div class="vk-sparta-home-blog-content-mobile">
			<?php foreach ($blogmobi as $bm): ?>
				<div class="item">
					<div class="vk-sparta-item-blog-content">
						<div class="vk-item-img">
							<a href="<?= BASE_URL . "blog-details.php?id=" . $bm['id']?>"><img src="<?= BASE_URL . $bm['image']?>" alt="" class="img-responsive"></a>
						</div>
						<div class="vk-item-text">
							<h2><a href="<?= BASE_URL . "blog-details.php?id=" . $bm['id']?>"><?php echo $bm['title'] ?></a></h2>
							<div class="time">26 June,2020</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>

	</div>
</body>
</html>