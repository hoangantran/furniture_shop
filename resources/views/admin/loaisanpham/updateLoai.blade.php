<!DOCTYPE html>
<html>
<head>
	<title>Update Loại</title>
	<link rel="stylesheet" type="text/css" href="../../../template/css/userstyle.css">
</head>
<body>
	<div class="form-page-insert">
		<div class="form-insert">
			<form action="../update/{{ $loai->id }}" method="post">
				{{csrf_field ()}}
				<div id="tittle"><h2>ID Loại : {{ $loai->id }}</h2></div>
				<div id="form-insert-child">Tên: <input type="text" name="nameloai" value="{{ $loai->tenloaisp }}"></div>
				<div id="tittle"><input type="submit" value="Cập Nhật"></div>
			</form>
		</div>
	</div>
</body>
</html>