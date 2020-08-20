<!DOCTYPE html>
<html>
<head>
	<title>Insert Cata</title>
	<link rel="stylesheet" type="text/css" href="../../template/css/userstyle.css">
</head>
<body>
	<div class="form-page-insert">	
		<div class="form-insert">
			<form action="insert" method="post">
				{{csrf_field ()}}
				<div id="tittle"><h2>INSERT LOAI</h2></div>
				<div id="form-insert-child">Tên Loại: <input type="text" name="nameloai"></div>
				<div id="tittle"><input type="submit" value="Thêm Loại"></div>
			</form>
		</div>
	</div>
</body>
</html>