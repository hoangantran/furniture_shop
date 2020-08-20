<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
	<link rel="stylesheet" type="text/css" href="../../../template/css/userstyle.css">
</head>
<body>
	<div class="form-page-insert">
		<div class="form-insert">
			<form action="../update/{{ $user->id }}" method="post">
				{{csrf_field ()}}
				<div id="tittle"><h2>User Số : {{ $user->id }}</h2></div>
				<div id="form-insert-child">Tên: <input type="text" name="name" value="{{ $user->name }}"></div>
				<div id="form-insert-child">UserName: <input type="text" name="username" value="{{ $user->username }}"></div>
				<div id="form-insert-child">PassWord: <input type="PassWord" name="password" value="{{ $user->password }}"></div>
				<div id="form-insert-child">Email: <input type="text" name="email" value="{{ $user->email }}"></div>
				<div id="tittle"><input type="submit" value="Cập Nhật"></div>
			</form>
		</div>
	</div>
</body>
</html>