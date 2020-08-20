<!DOCTYPE html>
<html>
<head>
	<title>Admin - Quản Lí Users</title>
	<link rel="stylesheet" type="text/css" href="../../template/css/adminForm.css">
	<link rel="stylesheet" type="text/css" href="../../template/css/adminForm.css">
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
					<button><a href="quanliusers" style="text-decoration-line: none"><b>QUẢN LÍ USERS</b></a></button>
					<button><a href="../loaisanpham/quanliloai" style="text-decoration-line: none"><b>QUẢN LÍ CATALOG</b></a></button>
					<button><a href="../sanpham/quanlisanpham" style="text-decoration-line: none"><b>QUẢN LÍ PRODUCT</b></a></button>
				</div>
			</div>
			<div class="admin-content-right">
				<div class="admin-content-right-top">
					<div class="insert-button">
						<button><a href="insert" style="text-decoration-line: none"><b>Thêm User</b></a></button>

					</div>
					<div class="search-button">
						<form action="search" method="post">
							{{csrf_field ()}}
							<input type="hidden" name="_token" value="{{csrf_token()}}";>
							<input type="text" name="tukhoa" placeholder="Nhập Username cần tìm">
							<input type="submit" value="Search">
						</form>
					</div>
					<div class="dropdown" style="line-height: 55px;">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 63px;">
						    {{ $user->name }}
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#" style=" text-decoration: none; padding-left: 55px;">Setting</a>
						    <br>
						    <a class="dropdown-item" href="logoutadmin" style=" text-decoration: none; padding-left: 55px;">Logout</a>
						  </div>
						</div>
				</div>
				<div class="admin-content-right-middle">
					<h3>USER  LIST</h3>
				</div>
				<div class="admin-content-right-bottom">
					<table border="">
						<tr>
							<td>ID</td>
							<td>Tên</td>
							<td>UserName</td>
							<td>PassWord</td>
							<td>Email</td>
							<td colspan="2">Chức năng</td>
						</tr>
						@foreach($users as $user)
						<tr>
							<td> {{ $user->id }} </td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->password }}</td>
							<td>{{ $user->email }}</td>
							<td><a href="delete/{{$user->id}}"><button>Xóa</button></a></td>
							<td><a href="update/{{$user->id}}"><button>Sửa</button></a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>