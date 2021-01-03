
@extends('master1')
@section('main')
<script>
	$(document).ready(function(){

		var _token = $('input[name="_token"]').val();

		load_data('', _token);

		function load_data(prod_id="", _token)
		{
			$.ajax({
				url:"{{ route('watch.load_data') }}",
				method:"POST",
				data:{prod_id:prod_id, _token:_token},
				success:function(data)
				{
      // console.log(data)
      $('#load_more_button').remove();
      $('#post_data2').append(data);
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
<link rel="stylesheet" href="css/watch.css">
<div class="category2">
	<ul class="nav lg2">
		<li class="nav-item">
			<a class="nav-link" href="">chọn mức giá:</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?price=2">dưới 5 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="">từ 5 đến 7 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="">từ 7 đến 10 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="">từ 10 đến 15 triệu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="">trên 15 triệu</a>
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
<br>
{{-- content --}}
<div class="logobaner">
	<img src="avatar/w111.png" alt="">
</div>
<div class="all">
	<img class="img_panner" src="1.png" alt="">
	<div class="all_smart">
		@foreach($watchpr as $product)
		<div class="smart_all">
			<div class="smart_detail">
				<label>Trả Góp 0%</label>
				<div class="imgdetail">
					<a class="" href="{{asset('detail7/'.$product->prod_id.'/'.$product->prod_slug.'.html')}}">
						<img src="{{asset('../storage/app/avatar/'.$product->prod_img)}}" alt="">
					</a>
				</div>
				<div class="sdas">
					<a class="text" href="{{asset('detail7/'.$product->prod_id.'/'.$product->prod_slug.'.html')}}">
						<p class="name">{{$product->prod_name}}</p>
						<p class="price">{{number_format($product->prod_price,'0',',','.')}}đ</p>
						<p class="note">{!!$product->prod_description!!}</p>
					</a>
				</div>


			</div>
		</div>
		@endforeach
		@csrf
	<div style="display: flex; flex-wrap: wrap;" id="post_data2"></div>
	</div>

</div>
  <div class="footer12">
    <p style="color:white" class="kytu">© 2020. Công ty cổ phần Thế Giới Số 1. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2020. Địa chỉ: 79 Mai Thị Dõng,Nha Trang-Khánh Hòa. Điện thoại: 0964672213. Email: cskh@thegioiso1.vn. Chịu trách nhiệm nội dung: Nguyễn Duy Tùng</p>
  </div>
@endsection