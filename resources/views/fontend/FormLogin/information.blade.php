@extends('master1')
@section('main')
<link rel="stylesheet" href="css/information.css">
<div class="container">
	<div class="information wrapper__box">
		<h3>Thông tin cá nhân</h3>
		<div class="grid-3x2 information__container"> 
			<div class="d-flex__row information_name">
				<span>Họ Tên</span>
				<span>{{auth('customer')->user()->name}}</span>
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
				<a class="btn_edit_pass" href="loginform/editpassword">
					<span>đổi mật khẩu</span>
				</a>
				
			</div>

			
		</div>
		
	</div>
	<div class="fix_information wrapper__box">
		<h3>sửa thông tin cá nhân</h3>
		<form action="{{route('editcustomer')}}" method="post">
		<div class="grid-3x2 information__container">
			
				@csrf
			<div class="d-flex__row information_name">

				<span>Họ Tên</span>
				{{-- <span>{{auth('customer')->user()->name}}</span> --}}
				<input type="text" name="name" value="{{auth('customer')->user()->name}}">
			</div>
			<div class="d-flex__row information_email">
				<span>Email</span>
				<input type="text"name="email" value="{{auth('customer')->user()->email}}">
				{{-- <span>{{auth('customer')->user()->email}}</span> --}}
			</div>
			<div class="d-flex__row information_address">
				<span>Số Điện Thoại</span>
				<input type="number" value="{{auth('customer')->user()->phone}}" name="phone">
				{{-- <span>vui lòng nhập số điện thoại của bạn</span> --}}
			</div>
			<div class="d-flex__row information_phone">
				<span>Địa chỉ</span>
				<input type="text" name="address" value="{{auth('customer')->user()->address}}">
				{{-- <span>{{auth('customer')->user()->address}}</span> --}}
			</div>
			<div class="d-flex__row information_phone">
				<span>Giới tính</span>
				<select name="gender" id="">
					<option value="NAM">NAM</option>
					<option value="NỮ">NỮ</option>
				</select>
				{{-- <input type="text" value="{{auth('customer')->user()->name}}" name="">
				<span>vui lòng nhập giới tính của bạn</span> --}}
			</div>
			<div class="d-flex__row information_phone">
				<span>Mã số thuế</span>
				<input type="text" name="code" value="{{auth('customer')->user()->name}}">
	{{-- 			<span>vui lòng nhập giới tính của bạn</span> --}}
			</div>
			<div class="btn11">
				<a class="btn_edit" href="" id="">
					<button type="submit" name="submit">LƯU THÔNG TIN</button>
				</a>
				
			</div>
			
		</div>
		</form>
	</div>

</div>
<script>
	$('#btn_edit--1').click((e)=>{
		e.preventDefault();
		$('.fix_information').addClass('show');
		$('.information').addClass('hide');
	});
	$('#btn_edit--2').click((e)=>{
		e.preventDefault();
		$('.fix_information').removeClass('show');
		$('.information').removeClass('hide');
	})
</script>
@endsection