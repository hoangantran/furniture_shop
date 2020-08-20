<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	<link rel="stylesheet" type="text/css" href="../../../template/css/styleuser_sanpham.css">
</head>
<body>
	<div class="form-page-insert">	
		<div class="form-insert">
			<form action="../update/{{ $sanpham->id }}" method="post" enctype="multipart/form-data">
				{{csrf_field ()}}
				<div id="tittle"><h2>UPDATE PRODUCT </h2>- <small>ID: {{ $sanpham->id }}</small> -</div>
				<br>
				<div><input type="hidden" name="id" value="{{ $sanpham->id }}"></div>
				<div id="form-insert-child-name">Tên SP: <input type="text" name="name" value="{{ $sanpham->name }}"></div>
				<div id="form-insert-child-loai">Chọn Loại: 
					<select name="id_loai">
						@foreach($loaisp as $loai)
						<option value="{{ $loai->id }}">{{ $loai->tenloaisp }}</option>
						@endforeach
					</select>
				</div>
				<div id="form-insert-child-des">Mô Tả: <textarea name="description">{{ $sanpham->description }}</textarea></div>
				<div id="form-insert-child-gia">Giá: <input type="text" name="price" value="{{ $sanpham->price }}"></div>
				<div id="form-insert-child-anh">Chọn Ảnh: <input type="file" name="image" id="image"></div>
				<div id="form-insert-child-anh"><img src="../../../template/images/{{ $sanpham->images }}" style="width: 50px; height: 70px;margin-left: 80px;"></div>
				<br>
				<div id="tittle"><input type="submit" value="Cập Nhật Sản Phẩm"></div>
			</form>
		</div>
	</div>
</body>
</html>	