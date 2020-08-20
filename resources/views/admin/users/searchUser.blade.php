<!DOCTYPE html>
<html>
<head>
	<title>TÌm Kiếm User</title>
	<link rel="stylesheet" type="text/css" href="../../template/css/adminForm.css">
</head>
<body>
		<div class="admin-form">
		<div class="admin-tittle">
			<div><h2>ADMIN</h2><i><h3>CONTROL PAGE</h3></i></div>
		</div>
		<div class="admin-content">
			<div class="admin-content-left">
				<div class="admin-content-left-child">
					<button><a href="quanliusers" style="text-decoration-line: none"><b>QUẢN LÍ USERs</b></a></button>
				</div>
			</div>
			<div class="admin-content-right">
				<div class="admin-content-right-top">
					<div class="insert-button">
						<h3>Từ Khóa Tìm: {{$tukhoa}}</h3>
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
							<td><a href="delete/{{$user->id}}">Xóa</a></td>
							<td><a href="update/{{$user->id}}">Sửa</a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>