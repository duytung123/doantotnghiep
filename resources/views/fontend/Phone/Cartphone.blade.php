@extends('master2')
@section('main')
<link rel="stylesheet" href="css/cart.css">
<script type="text/javascript">
	function updatecart(qty,rowId)
	{	
		$.get(
			'{{asset('cart/update')}}',
			{qty:qty,rowId:rowId},
			function(){
				location.reload();
			});
		
	}

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


<div id="wrap-inner">
	<div id="list-cart">
		<h3>Giỏ hàng</h3>
		@if(Cart::count()>=1)
		<form method="post">
			<table class="table table-bordered .table-responsive text-center">

				<tr class="active">
					<td width="11.111%">Ảnh mô tả</td>
					<td width="22.222%">Tên sản phẩm</td>
					<td width="22.222%">Số lượng</td>
					<td width="16.6665%">Đơn giá</td>
					<td width="16.6665%">Thành tiền</td>
					<td width="11.112%">Xóa</td>
				</tr>
				@foreach($itemdd as $item)
				<tr>

					<td><img class="img-responsive imgcart" src="{{asset('../storage/app/avatar/'.$item->options->img)}}"></td>
					<td>{{$item->name}}</td>
					<td>
						<div class="form-group">
							<input name="cep" class="" type="number" value="{{$item->qty}}" onchange="updatecart(this.value,'{{$item->rowId}}')">	
						</div>
					</td>
					<td><span class="price">{{number_format($item->price,0,',','.')}}đ</span></td>
					<td><span class="price">{{number_format($item->price*$item->qty,0,',','.')}}đ</span></td>
					<td><a href="{{asset('cart/delete/'.$item->rowId)}}">Xóa</a></td>

				</tr>
				@endforeach
			</table>
			<div class="row" id="total-price">
				<div class="col-md-6 col-sm-12 col-xs-12">										
					Tổng thanh toán: <span class="total-price">{{$subtotal}}</span>

				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="phone" class="my-btn btn">Mua tiếp</a>
					<a href="#" class="my-btn btn">Cập nhật</a>
					<a href="{{asset('cart/delete/all')}}" class="my-btn btn">Xóa giỏ hàng</a>

			<a  class="buttonbuythree" href="{{asset('thanhtoan/index/'.$item->rowId)}}">
				<b>THANH TOÁN ONLINE</b>
			</a>

				</div>
			</div>
		</form>

	</div>

	<div id="xac-nhan">
		<h3>Xác nhận mua hàng</h3>
		<form method="post">
			<div class="form-group">
				<label for="email">Email address:</label>
				<input required type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="name">Họ và tên:</label>
				<input required type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại:</label>
				<input required type="number" class="form-control" id="phone" name="phone">
			</div>
			<div class="form-group">
				<label for="add">Địa chỉ:</label>
				<input required type="text" class="form-control" id="add" name="add">
			</div>
			<div class="form-group">
				<label for="add">Ghí chú:</label>
				<input required type="text" class="form-control" id="note" name="note">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
			</div>
			{{csrf_field()}}
		</form>
		@else
		<h2>GIỎ HÀNG RỖNG</h2>
		@endif 
	</div>
</div>
@endsection