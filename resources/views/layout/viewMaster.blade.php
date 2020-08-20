<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>website demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="template/css/style_home.css" rel="stylesheet" type="text/css" />
</head>
<link rel="stylesheet" type="text/css" href="template/css/homecss.css">
<script type="text/javascript" src="template/js/jquery-3.5.0.min.js"></script>
<body>
<div class="main">
    <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="{{ asset('home')}}" style="color: orange"><u>Fur</u><span>shop</span><small>Make Beautify Your House</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="{{ asset('home')}}"><b>HOME</b></a></li>
          <li class="active"><a href="{{ asset('api')}}"><b>API</b></a></li>
          <li><a href="{{ asset('cart')}}"><b>CART</b></a></li>
          <!-- Ktra neu chua dang nhap thì xuat hien Login -->
          @if(!isset($user))
                <li><a href="{{ asset('login')}}"><b>LOGIN</b></a></li>
                <li><a href="{{ asset('register')}}"><b>REGISTER</b></a></li>
          @endif
          <!-- Ktra neu dang nhap roi thi xuat hien Logout -->
          @if(isset($user))
                <li><a href="logout"><b>LOGOUT</b></a></li>
                <li style="; text-align: center;"><a href="inforUser/{{ $user->id }}">
                  <b>INFORMATION</b>
                </a></li>
                <li><a href="user/repass/{{ $user->id }}"><b>CHANGE PASS</b></a></li> 
          @endif
        </ul>
      </div>
    <div class="clr"></div>
  </div>
</div>
<div class="hbg"></div>
    <div class="content-form">
      <div class="menu-top">
        @yield('search')
      </div>
      <hr>
      <div class="main-product">
        <div class="menu-left">
          <h2>Danh Mục</h2>
          @foreach($loaisp as $loai)
            <h3><a href="{{ asset('productWithCata/'.$loai->id) }}"><div class="btn-cata"><h3> {{ $loai->tenloaisp }}</h3></div></a></h3>
          @endforeach
        </div>
        <!-- Content -->
        @yield('main')
        </div>
  </div>  
  <div class="footer">
  <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Layout by Free <a href="http://www.freewebsitetemplatez.com/">Website Templates</a></p>
      <div class="clr"></div>
  </div>
</div>
</div>
</body>
</html>