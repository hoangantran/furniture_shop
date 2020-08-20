<!DOCTYPE html>
<html>
<head>
	<title>Insert User</title>
	<link rel="stylesheet" type="text/css" href="../../template/css/userstyle.css">
</head>
<body>
	<div class="form-page-insert">	
		<div class="form-insert">
			<form action="insert" method="post">
				{{csrf_field ()}}
				<div id="tittle"><h2>INSERT USER</h2></div>
				<div id="form-insert-child">Tên: <input type="text" name="name"></div>
				<div id="form-insert-child">UserName: <input type="text" name="username"></div>
				<div id="form-insert-child">PassWord: <input type="PassWord" name="password"></div>
				<div id="form-insert-child">Email: <input type="text" name="email"></div>
				<div id="tittle"><input type="submit" value="Thêm User"></div>
			</form>
		</div>
	</div>
</body>
</html>