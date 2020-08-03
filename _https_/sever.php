<?php 
require_once './config/utils.php';
$getServiceQuery = "select * from hotel_service";
$service = queryExecute($getServiceQuery, true);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sever</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php foreach ($service as $se): ?>
				<div class="col-md-3 col-sm-6 vk-clear-padding">
					<div class="vk-sparta-image-item">
						<div class="vk-sparta-item-img">
							<a href="#">
								<img src="<?= BASE_URL . $se['image']?>" alt="" class="img-responsive">
							</a>
						</div>
						<div class="vk-iamge-item-caption">
							<img src="<?= BASE_URL . $se['iconn']?>" alt="">
							<h2><?php echo $se['titlee'] ?></h2>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>