<?php 
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugin-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugin-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugin-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugin-login/plugin-login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="plugin-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugin-login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugin-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="plugin-login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="plugin-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="plugin-login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('plugin-login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<div class="d-flex justify-content-center">
					<?php if(isset($_GET['msg'])):?>
						<span class="text-danger"><?php echo $_GET['msg']?></span>
					<?php endif;?>
				</div>
				<form class="login100-form validate-form p-b-33 p-t-5" action="post-login.php" method="post">

                    	<div class="wrap-input100 validate-input">
                    		<input class="input100" type="email"  name="email" placeholder="Nhập Email">
                    	</div>

                    	<div class="wrap-input100 validate-input">
                    		<input class="input100" type="password"  name="password" placeholder="Password">
                    	</div>

                    	<div class="container-login100-form-btn m-t-32">
                    		<button type="submit" class="login100-form-btn">
                    			Login
                    		</button>&nbsp;
                    	</div>

                    </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="plugin-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="plugin-login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="plugin-login/vendor/bootstrap/js/popper.js"></script>
	<script src="plugin-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="plugin-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="plugin-login/vendor/daterangepicker/moment.min.js"></script>
	<script src="plugin-login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="plugin-login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="plugin-login/js/main.js"></script>

</body>
</html>