<?php 
require_once './config/utils.php';

$getCommentQuery = "select * from comment";


//dd($getUsersQuery);
$comment = queryExecute($getCommentQuery, true);




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testimonial</title>
</head>
<body>
	<div class="vk-sparta-head-title">
		<h3>Testimonial</h3>
		<h2>Customer Satisfaction</h2>
		<div class="vk-sparta-about-border"></div>
	</div>
	<div class="vk-sparta-testimonial-content">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="vk-owl-testimonial" class="vk-owl-one-item owl-carousel owl-theme">
					<?php foreach ($comment as $co): ?>
						<div class="item">
							<div class="vk-sparta-star">
								<p>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star-o" aria-hidden="true"></i></span>
								</p>
							</div>
							<div class="vk-sparta-testimonial-text">
								<p><?php echo $co['content']  ?></p>
							</div>
							<div class="vk-sparta-testimonial-author">
								<p><?php echo $co['name']  ?> - <span>Traveller</span></p>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>