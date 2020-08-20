<div class="maincontent">
    @foreach($sanpham as $sp)
     <div class="main_product">
      <div class="image_product">
         <img src="template/images/{{ $sp->images }}" style="width: 200px; height: 230px;">
      </div>
      <div class="info_product">
        <div class="info_child_name"><h2>{{ $sp->name }}</h2></div>
          <div class="info_child_price"><h3>Giá: {{ $sp->price }} VND</h3>
          <a href="{{ asset('detail/'.$sp->id) }}" style="text-decoration: none;"><div class="btn-detail"><b>Chi Tiết</b></div></a>
        </div>
      </div>
    </div>
    <br>
    @endforeach
</div>