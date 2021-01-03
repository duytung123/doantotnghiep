<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>SHOP-ĐIỆN THOẠI- Hoàn thành</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/email.css">
	<script type="text/javascript" src="js1/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js1/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>    
	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">

				<div id="wrap-inner">
					<div id="khach-hang">
						<h3>Thông tin khách hàng</h3>
						<p>
							<span class="info">Khách hàng: </span>
							{{$info['name']}}
						</p>
						<p>
							<span class="info">Email: </span>
							{{$info['email']}}
						</p>
						<p>
							<span class="info">Điện thoại: </span>
							{{$info['phone']}}
						</p>
						<p>
							<span class="info">Địa chỉ: </span>
							{{-- {{$info->$request->city}} --}}
							{{$info['city']}}
						</p>
						<p>
							<span class="info">Ghi chú: </span>
							{{$info['note']}}
						</p>
					</div>						
					<div id="hoa-don">

						<h3>Hóa đơn mua hàng</h3>							
						<table class="table-bordered table-responsive">
							<tr class="bold">
								<td width="30%">Tên sản phẩm</td>
								<td width="25%">Gía</td>
								<td width="20%">Số lượng</td>
								<td width="15%">Thành tiền</td>
							</tr>
							@foreach($cart as $item)
							<tr>
								<td>{{$item->name}}</td>
								<td class="price">{{number_format($item->price)}}VNĐ</td>
								<td>{{$item->qty}}</td>
								<td class="price">{{number_format($item->price*$item->qty,0,',','.')}}</td>
							</tr>
							@endforeach

							<tr>
								<td colspan="3">Tổng tiền:</td>
								<td class="total-price">{{$subtotal}}VNĐ</td>
							</tr>
						</table>
					</div>
					<div id="xac-nhan">
						<br>
						<p align="justify">
							<b>Quý khách đã đặt hàng thành công!</b><br />
							• Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
							• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
							<b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
						</p>
					</div>
				</div>					
				<!-- end main -->

			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
						<a href="#"><img src="img/home/logo.png"></a>		
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">
						Học cùng trải nghiệm POU</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone Sale: 0964672213</p>
						<p>Email: admin@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: Trung tâm điện máy di động Nha Trang số 12 Vĩnh Ngọc</p>
						<p>Address 2: Trung tâm điện máy di động Hồ Chí Minh</p>
					</div>
				</div>				
			</div>
			<div id="footer-b">				
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>ĐẠI HỌC THÁI BÌNH DƯƠNG</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2019 copyright</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
	<!-- endfooter -->
</body>
</html>