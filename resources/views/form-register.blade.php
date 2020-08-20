<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="template/css/util.css">
	<link rel="stylesheet" type="text/css" href="template/css/main.css">
</head>
<body>
	<div class="container-login100">
		<div class="wrap-login100 p-t-85 p-b-20">
			<form action="{{route('postRegister')}}" method="post" class="login100-form validate-form">
				{{csrf_field ()}}
				<span class="login100-form-title p-b-70">
					Register
				</span>
				@if ( Session::get('massage'))
			    	<div class="alert alert-success">
				        <ul>
				            {!! Session::get('massage') !!}	
				        </ul>
				    </div>
				@endif
				<div style="text-align: center;"></div>
				<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
					<input class="input100" type="text" name="name">
					<span class="focus-input100" data-placeholder="Your Name"></span>
					@if ($errors->has('name'))
				        <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
				    @endif
				</div>

				<div class="wrap-input100 validate-input m-b-50" data-validate="Enter email">
					<input class="input100" type="text" name="email">
					<span class="focus-input100" data-placeholder="Your Email"></span>
					@if ($errors->has('email'))
				        <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
				    @endif
				</div>

				<div class="wrap-input100 validate-input m-b-50" data-validate="Enter username">
					<input class="input100" type="text" name="username">
					<span class="focus-input100" data-placeholder="Username"></span>
					@if ($errors->has('username'))
				        <p class="help is-danger" style="color: red;">{{ $errors->first('username') }}</p>
				    @endif
				</div>

				<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
					<input class="input100" type="password" name="password">
					<span class="focus-input100" data-placeholder="Password"></span>
					@if ($errors->has('password'))
				        <p class="help is-danger" style="color: red;">{{ $errors->first('password') }}</p>
				    @endif
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Register
					</button>
				</div>
			</form>
			<div class="container-login100-form-btn" style="padding-top: 10px;">
					<a href="login" class="login100-form-btn" style="text-decoration: none;">
						Login
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