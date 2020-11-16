@extends('master1')
@section('main')
<link rel="stylesheet" href="css/information.css">
<div class="container">
	<div class="information wrapper__box">
		<h3>Thay đổi mật khẩu</h3>
		<div class="grid-3x2 information__container"> 
			<div class="d-flex__row information_name">
				<span>Mật khẩu hiện tại</span>
				<input type="password">
			</div>
			<div class="d-flex__row information_email">
				<span>Email</span>
				<span>{{auth('customer')->user()->email}}</span>
			</div>
			<div class="d-flex__row information_address">
				<span>Số Điện Thoại</span>
				<span>vui lòng nhập số điện thoại của bạn</span>
			</div>
			<div class="d-flex__row information_phone">
				<span>Địa chỉ</span>
				<span>duy tùng</span>
			</div>
			<div class="d-flex__row information_phone">
				<span>Giới tính</span>
				<span>vui lòng nhập giới tính của bạn</span>
			</div>
			<div class="d-flex__row information_phone">
				<span>Mã số thuế</span>
				<span>vui lòng nhập giới tính của bạn</span>
			</div>
			<div class="btn11">
				<a class="btn_edit" href="" id="btn_edit--1">
					<span>sửa thông tin</span>
				</a>
				<a class="btn_edit_pass" href="">
					<span>đổi mật khẩu</span>
				</a>
				
			</div>

			
		</div>
		
	</div>

</div>

@endsection