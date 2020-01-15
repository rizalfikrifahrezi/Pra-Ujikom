<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pesantren | Daarul Qolam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/frontend/Login_v15/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/css/util.css">
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v15/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(/frontend/Login_v15/images/bg-03.jpg);">
					<span class="login100-form-title-1">
						Log In
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="/frontend/Login_v15/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v15/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v15/vendor/bootstrap/js/popper.js"></script>
	<script src="/frontend/Login_v15/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v15/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v15/vendor/daterangepicker/moment.min.js"></script>
	<script src="/frontend/Login_v15/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v15/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v15/js/main.js"></script>

</body>
</html>
