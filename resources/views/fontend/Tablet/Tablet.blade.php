@extends('master2')
@section('main')
<script>
  $(document).ready(function(){
   
   var _token = $('input[name="_token"]').val();

   load_data('', _token);

   function load_data(prod_id="", _token)
   {
    $.ajax({
     url:"{{ route('tablet.load_data') }}",
     method:"POST",
     data:{prod_id:prod_id, _token:_token},
     success:function(data)
     {
      // console.log(data)
      $('#load_more_button').remove();
      $('#post_data').append(data);
     }
    })
   }

   $(document).on('click', '#load_more_button', function(){
    var prod_id = $(this).data('id');

    $('#load_more_button').html('<b>Loading...</b>');
    load_data(prod_id, _token);
   });

  });
</script>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
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
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="banner">
  <img class="bn1" src="avatar/baner1.png" alt="">
  <img class="bn2" src="avatar/baner2.png" alt="">
</div>

<div class="columlogo">
   <nav class="navbar navbar-expand-sm">
      <ul class="navbar-nav g1">
         @foreach($catealltablet1 as $cate)
         <li class="nav-item lg22">
            <a class="nav-link c1a" href="{{asset('catealltablet/'.$cate->cateall_id.'/'.$cate->cateall_slug.'.html')}}">
               <p class="catelistphone22">{{$cate->cateall_name}}</p>
            </a>
         </li>
         @endforeach
      </ul>
   </nav>
</div>
<div style="margin-left: -395px;" class="category2">
   <ul class="nav lg2">
      <li class="nav-item">
         <span class="nav-link" href="">chọn mức giá:</span>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="tablet/levelprice/price1">dưới 3 triệu</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="tablet/levelprice/price2">từ 3 đến 7 triệu</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="tablet/levelprice/price3">trên 13 triệu</a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Xem Thêm</a>
         <div class="dropdown-menu">
            <a class="dropdown-item active" href="">nổi bật nhất</a>
            <a class="dropdown-item dr1" href=""> giá thấp đến cao</a>
            <a class="dropdown-item dr2" href=""> giá cao xuống thấp</a>
         </div>
      </li>
   </ul>
</div>
<div class="producthot">
  <nav class="navbar navbar-expand-sm">
    <!-- Brand/logo -->
    <span class="title_new">Tablet Mới Nhất</span>
    
    <!-- Links -->
    <ul class="navbar-nav g1">

    </ul>
  </nav>
</div>
<div class="content">
  @foreach($tablet as $tab)
  <div class="tong1">
    <div class="hinh1">
      <a class="chu1" href="{{asset('detail3/'.$tab->prod_id.'/'.$tab->prod_slug.'.html')}}">
        <img class="h1" src="{{asset('../storage/app/avatar/'.$tab->prod_img)}}" alt="">
        
        
        <span>{{$tab ->prod_name}}</span>
        <p>{{number_format($tab->prod_price,0,',','.')}}đ</p>
      </a>
      
      
    </div>
    
  </div>
  @endforeach()

  @foreach($tablet1 as $tab1)
  <div class="tong2">

    <div class="hinh2">
      <a class="click1" href="{{asset('detail3/'.$tab1->prod_id.'/'.$tab1->prod_slug.'.html')}}">
        <img class="h2" src="{{asset('../storage/app/avatar/'.$tab1->prod_img)}}" alt="">
        <div class="con1">

          <h3>{{$tab1 ->prod_name}}</h3>
          <strong>{{number_format($tab1->prod_price,0,',','.')}}</strong> 
          {!!$tab1->prod_description!!}
          
        </div>
      </a>
    </div>
  </div>
  @endforeach()
</div>


<div class="content">
  @foreach($tablet2 as $tab)
  <div class="tong1">
    <div class="hinh1">
      <a class="chu1" href="{{asset('detail3/'.$tab->prod_id.'/'.$tab->prod_slug.'.html')}}">
        <img class="h1" src="{{asset('../storage/app/avatar/'.$tab->prod_img)}}" alt="">
        
        
        <span>{{$tab ->prod_name}}</span>
        <p>{{number_format($tab->prod_price,0,',','.')}}đ</p>
      </a>
      
      
    </div>
    
  </div>
  @endforeach()

  @foreach($tablet3 as $tab1)
  <div class="tong2">

    <div class="hinh2">
      <a class="click1" href="{{asset('detail3/'.$tab1->prod_id.'/'.$tab1->prod_slug.'.html')}}">
        <img class="h2" src="{{asset('../storage/app/avatar/'.$tab1->prod_img)}}" alt="">
        <div class="con1">

          <h3>{{$tab1 ->prod_name}}</h3>
          <strong>{{number_format($tab1->prod_price,0,',','.')}}</strong> 
          {!!$tab1->prod_description!!}
          
        </div>
      </a>
    </div>
  </div>
  @endforeach()
</div>




<div class="tablet_konoibat">
 @foreach($tablet4 as $tab1)
 <div class="tong2">
  <div class="hinh2">
    <a class="click1" href="{{asset('detail3/'.$tab1->prod_id.'/'.$tab1->prod_slug.'.html')}}">
      <img class="h2" src="{{asset('../storage/app/avatar/'.$tab1->prod_img)}}" alt="">


      <div class="con1 con3">

       <h3>{{$tab1 ->prod_name}}</h3>
       <strong>{{number_format($tab1->prod_price,0,',','.')}}</strong>
       {!!$tab1->prod_description!!}
     </div>
   </a>
 </div>

</div>
@endforeach
</div>
    {{csrf_field()}}
<div id="post_data"></div>

@endsection