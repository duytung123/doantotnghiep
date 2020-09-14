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


<div style="text-align: center;" class="container">
	
<p class="text_description">{{$chitiet->n_description}}</p>
<div class="text_small">
<strong class="author">{{$chitiet->n_author}}</strong>
</div>
<p class="text_content">{!!$chitiet ->n_content !!}
</p>
</div>


	

@endsection