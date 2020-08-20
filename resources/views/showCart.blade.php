@extends('layout.viewMaster')
@section('main')
<link rel="stylesheet" type="text/css" href="template/css/style_cart.css">
<script type="text/javascript">
  function updateCart(rowId, qty) {
    $.get(
        'cart/update',
        {rowId:rowId,qty:qty},
        function() {
          location.reload();
        }
    );
  }
</script>
     <div class="cart">
        <div class="tittle"><h2><b>Giỏ Hàng</b></h2></div>
        <div class="content">
          <table>
            <tr>
              <td>Sản Phẩm</td>
              <td>Số Lượng</td>
              <td>Giá</td>
              <td>Ảnh</td>
              <td>Tổng</td>
              <td>Xóa</td>
            </tr>
            <hr>
            @foreach($items as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td> <input type="soluong" name="soluong" value="{{ $item->qty }}" style="border:none;" onchange="updateCart('{{ $item->rowId }}',this.value);"></td>
              <td>{{ $item->price }}</td>
              <td><img src="template/images/{{ $item->options->img }}" style="width: 50px; height: 70px;"></td>
              <td>{{ $item->price*$item->qty }}</td>
              <td><a href="cart/delete/{{ $item->rowId }}"><img src="template/images/icons/del_icon.png" style="width: 30px; height: 30px;"></a></td>
            </tr>
            @endforeach
          </table>
          <hr>
        </div>
        <div>
          Thành Tiền: <b>{{ $total }} VND</b>
        </div>
        <hr>
        <div>
          @if(Cart::count()>=1)
          <button><a href="cart/delete/all">Xóa Hết</a></button>
          <button><a href="#">Đặt Hàng</a></button>
          @endif
          <button style="width: 150px;"><a href="home">Tiếp Tục Mua Hàng</a></button>
        </div>
     </div>
@stop
