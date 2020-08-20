<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../public/template/css/adminForm.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="admin-form">
		<div class="admin-tittle">
			<div><h2>A D M I N</h2><i><h3>CONTROL PAGE</h3></i></div>
		</div>
		<div class="admin-content">
			<div class="admin-content-left">
				<div class="admin-content-left-child">
					<button><a href="admin/users/quanliusers" style="text-decoration-line: none"><b>QUẢN LÍ USER</b></a></button>
					<button><a href="admin/loaisanpham/quanliloai" style="text-decoration-line: none"><b>QUẢN LÍ CATALOG</b></a></button>
					<button><a href="admin/sanpham/quanlisanpham" style="text-decoration-line: none"><b>QUẢN LÍ PRODUCT</b></a></button>
				</div>
			</div>
			<div class="admin-content-right">
				<div class="admin-content-right-top">
					<div class="dropdown" style="line-height: 55px;">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:1044px;">
						   {{ $user->name }}
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:1040px;">
						    <a class="dropdown-item" href="#" style=" text-decoration: none; padding-left: 55px;">Setting</a>
						    <br>
						    <a class="dropdown-item" href="logoutadmin" style=" text-decoration: none; padding-left: 55px;">Logout</a>
						  </div>
						</div>
				</div>
				<div class="admin-content-right-bottom"></div>
			</div>
		</div>
	</div>
</body>
</html>	