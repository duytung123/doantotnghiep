@extends('master2')
@section('main')
<link rel="stylesheet" href="css/index.css">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators indicators1">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="avatar/bn1a.png" alt="Los Angeles" width="800" height="170 ">

    </div>
    <div class="carousel-item">
      <img src="avatar/bn2a.png" alt="Chicago" width="800" height="170">
      
    </div>
    <div class="carousel-item">
      <img src="avatar/bn3a.png" alt="New York" width="800" height="170">

    </div>
    <div class="carousel-item">
      <img src="avatar/bn4a.png" alt="New York" width="800" height="170">
      
    </div>
    <div class="carousel-item">
      <img src="avatar/bn5a.png" alt="New York" width="800" height="170">
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon next_icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon next_icon"></span>
  </a>

</div>
<div class="banner">
  <img class="bn1" src="avatar/baner1.png" alt="">
  <img class="bn2" src="avatar/baner2.png" alt="">
</div>
<div class="columlogo">
  <nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav g1">
         @foreach($catealllaptop as $cate)
      <li class="nav-item lg1">
      
        <a class="nav-link c1a" href="{{asset('cateallproduct/'.$cate->cateall_id.'/'.$cate->cateall_slug.'.html')}}">
        <p class="catelistphone">{{$cate->cateall_name}}</p>
      </a>
      </li>
     @endforeach

    </ul>
  </nav>
</div>

<div class="category2">

  <ul class="nav lg2">
    <li class="nav-item">
      <a class="nav-link" href="">chọn mức giá:</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?price=2">dưới 2 triệu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">từ 2 đến 4 triệu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">từ 4 đến 7 triệu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">từ 7 đến 13 triệu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">trên 13 triệu</a>
    </li>
    <li class="nav-item dropdown drop1">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Xem Thêm</a>
      <div class="dropdown-menu">
        <a class="dropdown-item active" href="">nổi bật nhất</a>
        <a class="dropdown-item dr1" href=""> giá thấp đến cao</a>
        <a class="dropdown-item dr2" href=""> giá cao xuống thấp</a>
      </div>
    </li>

  </ul>
</div>
<hr class="ke">
<div class="sanpham_konoibat catephone1">
 @foreach($product as $product)
 <div class="tong2">
   <a class="max" href="">
     <div class="hinh2">
       <a href="{{asset('detail/'.$product->prod_id.'/'.$product->prod_slug.'.html')}}"><img class="h2" src="{{asset('../storage/app/avatar/'.$product->prod_img)}}" alt=""></a>
       <div class="con1">
         <a class="click1" href="{{asset('detail/'.$product->prod_id.'/'.$product->prod_slug.'.html')}}">
           <h3>{{$product->prod_name}}</h3>
           <strong>{{number_format($product->prod_price,0,',','.')}}đ</strong>
         {!!$product->prod_description!!}
         </a>      
       </div>
     </div>
     
   </a>
 </div>
 @endforeach
 </div>





<div class="xemthem">

 <a class="pagina" href="">Xem Thêm Điện Thoại Khác</a> 
</div>

@endsection