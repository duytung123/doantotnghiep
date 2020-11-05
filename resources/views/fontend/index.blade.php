@extends('master')
@section('main')
<div class="producthot">
   <nav class="navbar navbar-expand-sm">
      <span class="chulon">Phụ Kiện giá rẻ</span>
      <ul class="navbar-nav category3">
         @foreach($cateallphukien as $cate)
         <li class="">
            <a class="c1 c1_cate" href="{{asset('cateallphukien/'.$cate->cateall_id.'/'.$cate->cateall_slug.'.html')}}">{{$cate->cateall_name}}</a>
         </li>
         @endforeach()
      </ul>
   </nav>
</div>
<section class="slider-area slider">
   @foreach($phukien as $phukien)
   <div class="slick">
      <a class="click" href="{{asset('detail4/'.$phukien->prod_id.'/'.$phukien->prod_slug.'.html')}}">
         <img width="180px" height="180px" class="sanpham" src="{{asset('../storage/app/avatar/'.$phukien->prod_img)}}" alt="">
         <h3>{{$phukien->prod_name}}</h3>
         <strong>{{number_format($phukien->prod_price,0,',','.')}}đ</strong>
      </a>
   </div>
   @endforeach
</section>
<!-- ket thuc phan phu kien gia ra -->
<div class="producthot1">
   <nav class="navbar navbar-expand-sm">
      <span class="title__">Phụ Kiện Chính Hãng</span>
   </nav>
</div>
<section class="slider-area slider">
   @foreach($phukien2 as $phukien)
   <div class="slick">
      <a class="click" href="{{asset('detail4/'.$phukien->prod_id.'/'.$phukien->prod_slug.'.html')}}">
         <img class="sanpham" src="{{asset('../storage/app/avatar/'.$phukien->prod_img)}}" alt="">
         <h3>{{$phukien->prod_name}}</h3>
         <strong>{{number_format($phukien->prod_price,0,',','.')}}đ</strong>
      </a>
   </div>
   @endforeach
</section>
<!-- ket thuc phan phu kien chinh hang -->
<div class="producthot pr1">
   <nav class="navbar navbar-expand-sm">
      <span class="chulon">Điện Thoại Mới Nhất</span>
      <ul class="navbar-nav category4">
         @foreach($cateallphone as $cate)
         <li class="">
            <a class="c1" href="{{asset('cateallproduct/'.$cate->cateall_id.'/'.$cate->cateall_slug.'.html')}}">{{$cate->cateall_name}}</a>
         </li>
         @endforeach
      </ul>
   </nav>
</div>
<div class="content">
   <div class="tong1">
      @foreach($featured as $item)
      <div class="hinh1">
         <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
         <img class="h1" width="480px" height="220px" src="{{('http://localhost/thegioiso/public/../storage/app/avatar/'.$item->prod_img)}}" alt=""></a>
         <a class="chu1" href="">
            <span>{{$item ->prod_name}}</span>
            <p>{{number_format ($item->prod_price,0,',','.')}}đ</p>
         </a>
      </div>
      @endforeach
   </div>
   @foreach($new2 as $item)
   <div class="tong2">
      <div class="hinh2">
         <a class="click1" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
            <img class="h2" width="180px" height="180px" src="{{asset('../storage/app/avatar/'.$item->prod_img)}}" alt="">
            <div class="con4">
               <h3>{{$item ->prod_name}}</h3>
               <strong>{{number_format($item->prod_price,0,',','.')}}đ</strong>
               {!!$item->prod_description!!}
            </div>
         </a>
      </div>
   </div>
   @endforeach
</div>
<div class="content">
   <div class="tong1">
      @foreach($featured1 as $item)
      <div class="hinh1">
         <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
         <img class="h1" width="480px" height="220px" src="{{asset('../storage/app/avatar/'.$item->prod_img)}}" alt="">
         <a class="chu1" href="">
            <span>{{$item ->prod_name}}</span>
            <p>{{number_format($item->prod_price,0,',','.')}}đ</p>
         </a>
         </a>
      </div>
      @endforeach
   </div>
   @foreach($new1 as $item)
   <div class="tong2">
      <div class="hinh2">
         <a class="click1" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">
            <img class="h2" width="180px" height="180px" src="{{asset('../storage/app/avatar/'.$item->prod_img)}}" alt="">
            <div class="con4">
               <h3>{{$item ->prod_name}}</h3>
               <strong>{{number_format($item->prod_price,0,',','.')}}đ</strong>
               {!!$item->prod_description!!}
            </div>
         </a>
      </div>
   </div>
   @endforeach
</div>
<br>
<div class="producthot">
   <nav class="navbar navbar-expand-sm">
      <!-- Brand/logo -->
      <span class="title__">Đồng Hồ Nổi Bật</span>
      <!-- Links -->
      <ul class="navbar-nav g1">
         <li class="nav-item">
            <a class="nav-link c1a" href="">Appel watch</a>
         </li>
         <li class="nav-item">
            <a class="nav-link c1a" href="">orient</a>
         </li>
         <li class="nav-item">
            <a class="nav-link c1a" href="">casio</a>
         </li>
         <li class="nav-item">
            <a class="nav-link c1a" href="">cityzen</a>
         </li>
         <li class="nav-item">
            <a class="nav-link c1a" href="">xem thêm</a>
         </li>
      </ul>
   </nav>
</div>
<section class="slider-area slider">
   <div class="slick">
      <a class="click" href="">
         <img class="sanpham" src="avatar/w1.jpg" alt="">
         <h3>tai nghe apple</h3>
         <strong>6900000</strong>
      </a>
   </div>
   <div class="slick">
      <a class="click" href="">
         <img class="sanpham" src="avatar/w2.jpg" alt="">
         <h3>tai nghe apple</h3>
         <strong>4900000</strong>
      </a>
   </div>
   <div class="slick">
      <a class="click" href="">
         <img class="sanpham" src="avatar/w3.jpg" alt="">
         <h3>tai nghe apple</h3>
         <strong>3409393</strong>
      </a>
   </div>
   <div class="slick">
      <a class="click" href="">
         <img class="sanpham" src="avatar/w4.jpg" alt="">
         <h3>tai nghe apple</h3>
         <strong>6900000</strong>
      </a>
   </div>
   <div class="slick">
      <a class="click" href="">
         <img class="sanpham" src="avatar/w5.jpg" alt="">
         <h3>tai nghe apple</h3>
         <strong>6900000</strong>
      </a>
   </div>
   <div class="slick">
      <a class="click" href="">
         <img class="sanpham" src="avatar/w6.jpg" alt="">
         <h3>tai nghe apple</h3>
         <strong>6900000</strong>
      </a>
   </div>
</section>
<div class="producthot pr2">
   <nav class="navbar navbar-expand-sm ">
      <span class="chulon">LapTop Nổi Bật Nhất</span>
      <ul class="navbar-nav category5">
         @foreach($catealllaptop as $cate)
         <li class="">
            <a class="c1 c1_cate" href="{{asset('catealllaptop/'.$cate->cateall_id.'/'.$cate->cateall_slug.'.html')}}">{{$cate->cateall_name}}</a>
         </li>
         @endforeach()
      </ul>
   </nav>
</div>
<div class="content">
   <div class="tong1">
      @foreach($laptop1 as $laptop)
      <div class="hinh1">
         <a class="chu1" href="{{asset('detail2/'.$laptop->prod_id.'/'.$laptop->prod_slug.'.html')}}">
            <img class="h1" width="480px" height="220px" src="{{asset('../storage/app/avatar/'.$laptop->prod_img)}}" alt="">
            <span>{{$laptop->prod_name}}</span>
            <p>{{number_format($laptop->prod_price,0,',','.')}}đ</p>
         </a>
      </div>
      @endforeach
   </div>
   @foreach($laptop2 as $laptop)
   <div class="tong2">
      <div class="hinh2">
         <a class="click1" href="{{asset('detail2/'.$laptop->prod_id.'/'.$laptop->prod_slug.'.html')}}">
            <img class="h2 h2a" width="180px" height="180px" src="{{asset('../storage/app/avatar/'.$laptop->prod_img)}}" alt="">
            <div class="con1 con4">
               <h3>{{$laptop->prod_name}}</h3>
               <strong>{{number_format($laptop->prod_price,0,',','.')}}đ</strong>
               {!!$laptop->prod_description!!}
            </div>
         </a>
      </div>
   </div>
   @endforeach
</div>
<br>
<div class="producthot">
   <nav class="navbar navbar-expand-sm">
      <!-- Brand/logo -->
      <span class="chulon">Tablet Mới Nhất</span>
      <ul class="navbar-nav category6">
         @foreach($catealltablet as $cate)
         <li class="">
            <a class="c1 c1_cate" href="{{asset('catealltablet/'.$cate->cateall_id.'/'.$cate->cateall_slug.'.html')}}">{{$cate->cateall_name}}</a>
         </li>
         @endforeach()
      </ul>
   </nav>
</div>
<div class="content">
   <div class="tong1">
      @foreach($tablet as $tab )
      <div class="hinh1">
         <a class="chu1" href="{{asset('detail3/'.$tab->prod_id.'/'.$tab->prod_slug.'.html')}}">
            <img class="h1" width="480px" height="220px" src="{{asset('../storage/app/avatar/'.$tab->prod_img)}}" alt="">
            <span>{{$tab->prod_name}}</span>
            <p>{{number_format($tab->prod_price,0,',','.')}}đ</p>
         </a>
      </div>
      @endforeach
   </div>
   @foreach($tablet2 as $tab)
   <div class="tong2">
      <div class="hinh2">
         <a class="click1" href="{{asset('detail3/'.$tab->prod_id.'/'.$tab->prod_slug.'.html')}}">
            <img class="h2 h2a1" width="180px" height="180px" src="{{asset('../storage/app/avatar/'.$tab->prod_img)}}" alt="">
            <div class="con1">
               <h3>{{$tab->prod_name}}</h3>
               <strong>{{number_format($tab->prod_price,0,',','.')}}đ</strong>
               {!!$tab->prod_description!!}
            </div>
         </a>
      </div>
   </div>
   @endforeach
</div>
@stop