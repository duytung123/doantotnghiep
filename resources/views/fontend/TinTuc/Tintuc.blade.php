@extends('master2')
@section('main')
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
<h1 style="margin-left: 85px;margin-top: 70px;">DANH SÁCH BÀI VIẾT HOT TRONG TUẦN</h1>
<div class="content-wrapper">


	@foreach($tintuc as $tintuc)
	<div class="home_new">
		<div class="home_new_big">
			<a href="{{asset('detail5/'.$tintuc->id.'/'.$tintuc->n_contentslug.'.html')}}"><img src="{{asset('../storage/app/avatar/'.$tintuc->n_img)}}" alt=""></a>
			<div class="title2">
				<a class="title2_text" href="{{asset('detail5/'.$tintuc->id.'/'.$tintuc->n_contentslug.'.html')}}">
				<p class="home_new_big_title">{{$tintuc->n_description}}</p>
				<div class="small_title">
				<span>{{$tintuc->n_author}}</span>
				<p>{{$tintuc->created_at}}</p>
				</a>
				
				</div>
			</div>
			
		</div>
	</div>
	@endforeach
</div>
@endsection