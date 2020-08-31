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
<div class="danhmuc"> 
	<div class="thanh">
		<div class="thanh-text"> <h4>Danh Mục Phụ Kiện</h4></div>

		<h5>Phụ kiện cho : </h5>
		<div class="chu-text">
			<a class="chu-textbig" href="">Oppo F5</a>
			<a class="chu-textbig" href="">RealMe</a>
			<a class="chu-textbig" href="">Iphone 11 max</a>
			<a class="chu-textbig" href="">iphone X</a>
			<a class="chu-textbig" href="">Samsung galaxy 10</a>
			<a class="chu-textbig" href="">Samsung Note 10</a>
			<a class="chu-textbig" href="">Vivo S1</a>

		</div>

	</div>


</div>

<div class="logoquangcao">

	<a href="" class="logoqc active">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-noibat1.png" alt="">
		<h3>Pin dự phòng</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-noibat2.png" alt="">
		<h3>Sạc, cáp</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb3.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb4.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb5.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb6.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb7.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb8.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb9.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>

	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>

	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>
</div>
<br>
<div class="back"><img src="avatar/backpk.png" alt=""></div>

<div class="phukiengiasoc">
	@foreach($prphukien as $pkien)
	<div class="itemphukien">
		<a class="phukientext" href="">
			<img src="{{asset('../storage/app/avatar/'.$pkien->prod_img)}}" alt="">
			<div class="bottompk">
				<p>{{number_format($pkien->prod_price,0,',','.')}}đ</p>
				<p class="sale_1">{{$pkien->prod_promotion}}</p>
				<strong>{{$pkien->prod_name}}</strong>
				<a class="buy" href="">MUA NGAY</a>
			</div>
		</a>	
	</div>
	@endforeach
</div>

<div class="logoquangcao">

	<a href="" class="logoqc active">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-noibat1.png" alt="">
		<h3>Pin dự phòng</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-noibat2.png" alt="">
		<h3>Sạc, cáp</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb3.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb4.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb5.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb6.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb7.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb8.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00-nb9.png" alt="">
		<h3>nổi bật</h3>
	</a>
	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>

	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>


	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>

	<a href="" class="logoqc">
		<img src="avatar/00_noibat.png" alt="">
		<h3>nổi bật</h3>
	</a>
</div>
@endsection