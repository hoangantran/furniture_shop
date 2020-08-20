@extends('layout.viewMaster')
@section('main')
<link href="../template/css/style_home.css" rel="stylesheet" type="text/css" />
</head>
<link rel="stylesheet" type="text/css" href="../template/css/homecss.css">
<link rel="stylesheet" type="text/css" href="../template/css/style_detail.css">
    <div class="detail">
    	<div class="detail-main">
    		<div class="main-top">
    			<h2><b><i>Sản Phẩm: {{ $sanpham->name }}</i></b></h2>
    		</div>

    		<div class="main-bottom">
    			<div class="img">
    				<img src="../template/images/{{ $sanpham->images }}" style="width: 370px; height: 470px;">
    			</div>
    			<div class="content">
    				<div class="price"><h3>Giá: {{ $sanpham->price }} VND</h3></div>
    				<div class="des"><h3>Mô tả:</h3> {{ $sanpham->description }}</div>
    				<div class="detail-cart">
		    			<a href="../cart/add/{{ $sanpham->id }}" onclick="alert('Đã Thêm Vào Giỏ Hàng')"><div style="width: 200px;"><h3>Thêm Vào Giỏ Hàng</h3></div></a>
		    		</div>
    			</div>
    		</div>
    	</div>
    </div>
@stop