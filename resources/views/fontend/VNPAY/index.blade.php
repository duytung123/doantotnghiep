<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('')}}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tạo mới đơn hàng</title>
	<link href="css/vnpay/bootstrap.min.css">
	<link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
	<link href="css/vnpay/jumbotron-narrow.css">
	{{-- 		<script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script> --}}

{{-- 	<script type="text/javascript">
		$("#btnPopup").click(function () {
			var postData = $("#create_form").serialize();
			var submitUrl = $("#create_form").attr("action");
			$.ajax({
				type: "POST",
				url: submitUrl,
				data: postData,
				dataType: 'JSON',
				success: function (x) {
					if (x.code === '00') {
						if (window.vnpay) {
							vnpay.open({width: 768, height: 600, url: x.data});
						} else {
							location.href = x.data;
						}
						return false;
					} else {
						alert(x.Message);
					}
				}
			});
			return false;
		});
	</script> --}}


</head>

<body>

	<div class="container">
		<div class="header clearfix">
			<h3 class="text-muted">VNPAY DEMO</h3>
		</div>
		<h3>Tạo mới đơn hàng</h3>
		<div class="table-responsive">
			
			<form action="thanhtoan/vnpay" id="create_form" method="post">       
				{{csrf_field()}}
				<div class="form-group">
					<label for="language">Loại hàng hóa </label>
					<select name="order_type" id="order_type" class="form-control">
						<option value="billpayment">Thanh toán hóa đơn</option>
						<option value="topup">Nạp tiền điện thoại</option>

						<option value="fashion">Thời trang</option>
						<option value="other">Khác - Xem thêm tại VNPAY</option>
					</select>
				</div>
				<div class="form-group">
					@foreach($itemdd as $product_vnp1)
					<label for="order_id">Mã hóa đơn</label>
					<input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/><br>
					<label for="nameproduct">Tên sản phẩm:</label>
					<td>{{$product_vnp1->name}}</td>
					@endforeach
				</div>
				<div class="form-group">
					@foreach($itemdd as $product_vnp1)
					<label for="amount">số tiền:</label>
					<input class="form-control" id="amount"
					name="amount"value="{{$product_vnp1->price}}"/>
					@endforeach
				</div>
				<span>Bạn vui lòng điền vào những thông tin dưới đây:</span>
				<div class="form-group">
					<label for="order_desc">Tên của bạn</label>
					<input class="form-control" cols="20" id="order_desc" name="name">
				</div>
				<div class="form-group">
					<label for="order_desc">số điện thoại</label>
					<input type="number" class="form-control" cols="20" id="order_desc" name="phone">
				</div>
					<div class="form-group">
					<label for="order_desc">Địa chỉ</label>
					<input class="form-control" cols="20" id="order_desc" name="add">
				</div>
				<div class="form-group">
					<label for="order_desc">Ghi chú</label>
					<textarea class="form-control" cols="20" id="order_desc" name="note" rows="2"></textarea>
				</div>
				<div class="form-group">
					<label for="bank_code">Ngân hàng</label>
					<select name="bank_code" id="bank_code" class="form-control">
						<option value="NCB"> Ngan hang NCB</option>
						<option value="">Không chọn</option>

						<option value="AGRIBANK"> Ngan hang Agribank</option>
						<option value="SCB"> Ngan hang SCB</option>
						<option value="SACOMBANK">Ngan hang SacomBank</option>
						<option value="EXIMBANK"> Ngan hang EximBank</option>
						<option value="MSBANK"> Ngan hang MSBANK</option>
						<option value="NAMABANK"> Ngan hang NamABank</option>
						<option value="VNMART"> Vi dien tu VnMart</option>
						<option value="VIETINBANK">Ngan hang Vietinbank</option>
						<option value="VIETCOMBANK"> Ngan hang VCB</option>
						<option value="HDBANK">Ngan hang HDBank</option>
						<option value="DONGABANK"> Ngan hang Dong A</option>
						<option value="TPBANK"> Ngân hàng TPBank</option>
						<option value="OJB"> Ngân hàng OceanBank</option>
						<option value="BIDV"> Ngân hàng BIDV</option>
						<option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
						<option value="VPBANK"> Ngan hang VPBank</option>
						<option value="MBBANK"> Ngan hang MBBank</option>
						<option value="ACB"> Ngan hang ACB</option>
						<option value="OCB"> Ngan hang OCB</option>
						<option value="IVB"> Ngan hang IVB</option>
						<option value="VISA"> Thanh toan qua VISA/MASTER</option>
					</select>
				</div>
				<div class="form-group">
					<label for="language">Ngôn ngữ</label>
					<select name="language" id="language" class="form-control">
						<option value="vn">Tiếng Việt</option>
						<option value="en">English</option>
					</select>
				</div>

				<button type="submit" class="btn btn-default">Tiến hành thanh toán</button>

			</form>

		</div>
		<p>
			&nbsp;
		</p>
		<footer class="footer">
			<p>&copy; VNPAY 2015</p>
		</footer>
	</div>  



</body>
</html>
