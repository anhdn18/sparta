<?php 
require_once './config/utils.php';
$getSettingWebQuery = "select * from web_settings";

$setting = queryExecute($getSettingWebQuery);


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>footer</title>
</head>
<body>
	<footer class="site-footer footer-default">
		<div class="footer-main-content">
			<div class="container">
				<div class="row">
					<div class="footer-main-content-elements">
						<div class="footer-main-content-element col-sm-4">
							<aside class="widget">
								<div class="vk-widget-footer-1">
									<div class="widget-title">
										<a href="#">
											<img src="<?= BASE_URL . $setting['logo']?>" alt="" class="img-responsive" style="width: 40%">
										</a>
									</div>
									<div class="widget-content">
										<div class="vk-widget-content-info">
												<p><span class="ti-mobile"></span> <?php echo $setting['hotline']; ?></p>
												<p><span class="ti-email"></span> <?php echo $setting['email'] ?></p>
												<p><span class="ti-location-pin"></span> <?php echo $setting['address'] ?></p>
										</div>
										<div class="vk-widget-content-share">
											<p>
												<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>

							</aside>
						</div>
						<div class="footer-main-content-element col-sm-2">
							<aside class="widget">
								<div class="vk-widget-footer-2">
									<h3 class="widget-title"> Company</h3>
									<div class="widget-content">
										<ul class="vk-widget-content-2">
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> About us</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
										</ul>
									</div>
								</div>
							</aside>
						</div>
						<div class="footer-main-content-element col-sm-2">
							<aside class="widget">
								<div class="vk-widget-footer-3">
									<h3 class="widget-title">Services</h3>
									<div class="widget-content">
										<ul class="vk-widget-content-2">
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Spa</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Rooms</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Restaurant</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Gym</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Promotion</a></li>
										</ul>
									</div>
								</div>
							</aside>
						</div>
						<div class="footer-main-content-element col-sm-4">
							<aside class="widget">
								<div class="vk-widget-footer-4">
									<h3 class="widget-title">Sign up for newletter</h3>
									<div class="widget-content">
										<form class="form-newsletter halves" data-success="Thanks for your registration, we will be in touch shortly." data-error="Please fill all fields correctly.">
											<div class="form-group">
												<div class="input-group">
													<input type="email" name="email" class="validate-email validate-required  signup-email-field" placeholder="Your Email..." />
													<button type="submit" class=""><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
												</div>
											</div>
											<iframe srcdoc="<!-- Begin MailChimp Signup Form --><link href=_https_/cdn-images.mailchimp.com/embedcode/classic-081711.html rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;> #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }   /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=https://html.univertheme.com/sparta/"https://gmail.us20.list-manage.com/subscribe/post?u=0be0428f34f323c4bf0ffba7e&amp;id=e1abfb1f7e%22 method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>   <h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>   <input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>  <label for=&quot;mce-FNAME&quot;>First Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;> <label for=&quot;mce-LNAME&quot;>Last Name </label> <input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>   <div id=&quot;mce-responses&quot; class=&quot;clear&quot;>      <div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>     <div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>   </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_0be0428f34f323c4bf0ffba7e_e1abfb1f7e&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='../../s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->" class="mail-list-form">
											</iframe>
										</form>
										<div class="vk-widget-trip">
											<a href="#"><img src="images/01_01_default/stripad.png" alt=""></a>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="copyright-content">
					<div class="row">
						<div class="col-sm-6">
							<p class="copyright-text">
								<span>Sparta Plaza</span> -  Hotel & Resort. Design by <span><a href="#">Im.ahns</a></span>
							</p>
						</div>
						<div class="col-sm-6">
							<ul class="copyright-menu">
								<li><a href="#">Term & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Site Map</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>