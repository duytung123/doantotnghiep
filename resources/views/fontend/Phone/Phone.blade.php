@extends('master2')
@section('main')
<script>
$(document).ready(function(){
 
 var _token = $('input[name="_token"]').val();

 load_data('', _token);

 function load_data(prod_id="", _token)
 {
  $.ajax({
   url:"{{ route('phone.load_data') }}",
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
			<li class="nav-item lg1">
				<a class="nav-link c1a" href=""><img src="avatar/logo1.jpg" alt=""></a>
			</li>
			<li class="nav-item lg1">
				<a class="nav-link c1a" href=""><img src="avatar/logo2.jpg" alt=""></a>
			</li>
			<li class="nav-item lg1">
				<a class="nav-link c1a" href=""><img src="avatar/logo3.jpg" alt=""></a>
			</li>
			<li class="nav-item lg1">
				<a class="nav-link c1a" href=""><img src="avatar/logo4.png" alt=""></a>
			</li>
			<li class="nav-item lg1">
				<a class="nav-link c1a" href=""><img src="avatar/logo5.jpg" alt=""></a>
			</li>
			<li class="nav-item lg1">
				<a class="nav-link c1a" href=""><img src="avatar/logo6.jpg" alt=""></a>
			</li>
			<li class="nav-item lg1">
				<a class="nav-link c1a" href=""><img src="avatar/logo7.png" alt=""></a>
			</li>

		</ul>
	</nav>
</div>

<div class="category2">

	<ul class="nav lg2">
		<li class="nav-item">
			<span class="nav-link" href="">chọn mức giá:</span>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?price=1">dưới 2 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?price=2">từ 2 đến 4 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?price=3">từ 4 đến 7 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?price=4">từ 7 đến 13 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?price=5">trên 13 triệu</a>
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
<hr class="ke">
<div class="producthot pr3">
	<nav class="navbar navbar-expand-sm">
		<span class="title_new">Điện Thoại Mới Nhất</span>
		<ul class="navbar-nav category">

		</ul>
	</nav>
</div>
<div class="content">
	@foreach($product as $fee)
	<div class="tong1">
		<div class="hinh1">
			<a href="{{asset('detail/'.$fee->prod_id.'/'.$fee->prod_slug.'.html')}}"><img class="h1"   src="{{asset('../storage/app/avatar/'.$fee->prod_img)}}" alt=""></a>

			<a class="chu1" href="{{asset('detail/'.$fee->prod_id.'/'.$fee->prod_slug.'.html')}}">
				<span>{{$fee ->prod_name}}</span>
				<p>{{number_format($fee->prod_price,0,',','.')}}đ</p>

			</a>  
		</div>
	</div>
	@endforeach()


	@foreach($product2 as $fee2)
	<div class="tong2">
		<a class="max" href="">
			<div class="hinh2">
				<a href="{{asset('detail/'.$fee2->prod_id.'/'.$fee2->prod_slug.'.html')}}"><img class="h2" src="{{asset('../storage/app/avatar/'.$fee2->prod_img)}}" alt=""></a>
				<div class="con1">
					<a class="click1" href="{{asset('detail/'.$fee2->prod_id.'/'.$fee2->prod_slug.'.html')}}">
						<h3>{{$fee2->prod_name}}</h3>
						<strong>{{number_format($fee2->prod_price,0,',','.')}}đ</strong>
						{!!$fee2->prod_description!!}
					</a>      
				</div>
			</div>

		</a>
	</div>
	@endforeach
</div>

<div class="content">
	@foreach($product1 as $fee)
	<div class="tong1">
		<div class="hinh1">
			<a href="{{asset('detail/'.$fee->prod_id.'/'.$fee->prod_slug.'.html')}}"><img class="h1"   src="{{asset('../storage/app/avatar/'.$fee->prod_img)}}" alt=""></a>

			<a class="chu1" href="{{asset('detail/'.$fee->prod_id.'/'.$fee->prod_slug.'.html')}}">
				<span>{{$fee ->prod_name}}</span>
				<p>{{number_format($fee->prod_price,0,',','.')}}đ</p>

			</a>  
		</div>
	</div>
	@endforeach()


@foreach($product4 as $fee2)
 <div class="tong2">
   <a class="max" href="">
     <div class="hinh2">
       <a href="{{asset('detail/'.$fee2->prod_id.'/'.$fee2->prod_slug.'.html')}}"><img class="h2" src="{{asset('../storage/app/avatar/'.$fee2->prod_img)}}" alt=""></a>
       <div class="con1">
         <a class="click1" href="{{asset('detail/'.$fee2->prod_id.'/'.$fee2->prod_slug.'.html')}}">
           <h3>{{$fee2->prod_name}}</h3>
           <strong>{{number_format($fee2->prod_price,0,',','.')}}đ</strong>
         {!!$fee2->prod_description!!}
         </a>      
       </div>
     </div>
     
   </a>
 </div>
 @endforeach

<div class="sanpham_konoibat">
 @foreach($product3 as $fee3)
 <div class="tong2">
   <a class="max" href="">
     <div class="hinh2">
       <a href="{{asset('detail/'.$fee3->prod_id.'/'.$fee3->prod_slug.'.html')}}"><img class="h2" src="{{asset('../storage/app/avatar/'.$fee3->prod_img)}}" alt=""></a>
       <div class="con1">
         <a class="click1" href="{{asset('detail/'.$fee3->prod_id.'/'.$fee3->prod_slug.'.html')}}">
           <h3>{{$fee3->prod_name}}</h3>
           <strong>{{number_format($fee3->prod_price,0,',','.')}}đ</strong>
         {!!$fee3->prod_description!!}
         </a>      
       </div>
     </div>
     
   </a>
 </div>
 @endforeach
 </div>
</div>
    {{csrf_field()}}
<div id="post_data"></div>

@endsection