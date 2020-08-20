<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="template/css/util.css">
	<link rel="stylesheet" type="text/css" href="template/css/main.css">
</head>
<body>
	<div class="container-login100">
		<div class="wrap-login100 p-t-85 p-b-20">
			<form action="{{ route('postLogin') }}" method="post" class="login100-form validate-form">
				{{csrf_field ()}}
				<span class="login100-form-title p-b-70">
					Welcome	
				</span>
				{{ $error or ''}}
				<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
					<input class="input100" type="text" name="username">
					<span class="focus-input100" data-placeholder="Username"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
					<input class="input100" type="password" name="password">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Login
					</button>
				</div>
			</form>
			<div class="container-login100-form-btn" style="padding-top: 10px;">
				<a href="register" class="login100-form-btn" style="text-decoration: none;">
					Register
				</a>
			</div>
			<div class="container-login100-form-btn" style="padding-top: 10px;">
				<a href="home" class="login100-form-btn" style="text-decoration: none;">
					Go Home
				</a>
			</div>
		</div>
	</div>
</body>
</html>