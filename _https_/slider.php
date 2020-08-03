<?php 
require_once './config/utils.php';

$getslidesQuery = "select * from slidesshow";


//dd($getUsersQuery);
$slider = queryExecute($getslidesQuery, true);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Slider</title>
</head>
<body>
	<div class="vk-slide">
		<div id="owl-slide-home" class="owl-carousel owl-theme animated">
			<?php foreach ($slider as $sl): ?>
				<div class="item  animated">
					<div class="vk-item-slide">
						<img src="<?= BASE_URL . $sl['image']?>" alt="" class="img-responsive">
						<div class="vk-slide-caption animated">
							<h3 class="animated rotateInDownRight slide-delay-1"><?php echo $sl['title'] ?></h3>
							<h2 class="animated fadeInUpBig slide-delay-2"><?php echo $sl['sub'] ?></h2>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>

</html>