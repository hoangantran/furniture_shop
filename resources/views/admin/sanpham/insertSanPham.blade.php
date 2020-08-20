<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
	<link rel="stylesheet" type="text/css" href="../../template/css/styleuser_sanpham.css">
</head>
<body>
	<div class="form-page-insert">	
		<div class="form-insert">
			<form action="insert" method="post" enctype="multipart/form-data">
				{{csrf_field ()}}
				<div id="tittle"><h2>INSERT PRODUCT</h2></div>
				<br>
				<div id="form-insert-child-name">Tên SP: <input type="text" name="name"></div>
				<div id="form-insert-child-loai">Chọn Loại: 
					<select name="id_loai">
						@foreach($loaisp as $loai)
						<option value="{{ $loai->id }}">{{ $loai->tenloaisp }}</option>
						@endforeach
					</select>
				</div>
				<div id="form-insert-child-des">Mô Tả: <textarea name="description"></textarea></div>
				<div id="form-insert-child-gia">Giá: <input type="text" name="price"></div>
				<div id="form-insert-child-anh">Chọn Ảnh: <input type="file" name="image" id="image"></div>
				<div id="tittle"><input type="submit" value="Thêm Sản Phẩm"></div>
			</form>
		</div>
	</div>
</body>
</html>	