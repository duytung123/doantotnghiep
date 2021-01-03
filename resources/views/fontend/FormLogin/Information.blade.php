@extends('master1')
@section('main')
<link rel="stylesheet" href="css/information.css">
<div class="container">
	<div class="information wrapper__box">
		<h3>Thông tin cá nhân</h3>
		@if(isset($errors) && count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}}<br>
					@endforeach     
				</div>
				@endif

				@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
				@endif
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
				<span>{{auth('customer')->user()->phone}}</span>
				<span style="font-family: serif;
				font-style: italic;
				font-weight: 600;">nếu chưa có vui lòng nhập số điện thoại của bạn</span>
			</div>
			<div class="d-flex__row information_phone">
				<span>Địa chỉ</span>
				<span>{{auth('customer')->user()->address}}</span>

			</div>
			<div class="d-flex__row information_phone">
				<span>Giới tính</span>
				<span>{{auth('customer')->user()->gender}}</span>
				<span style="font-family: serif;
				font-style: italic;
				font-weight: 600;"> nếu chưa có vui lòng nhập giới tính của bạn</span>
			</div>
			<div class="d-flex__row information_phone">
				<span>Mã số thuế</span>
				<span>{{auth('customer')->user()->code_tax}}</span>
				<span style="font-family: serif;
				font-style: italic;
				font-weight: 600;"> nếu có vui lòng nhập mã số thuế của bạn</span>
			</div>
			
			<div class="btn11">
				@foreach($customer as $password)
				<a class="btn_edit" href="" id="btn_edit--1">
					<span>sửa thông tin</span>
				</a>
				<a class="btn_edit_pass" href="{{asset('loginform/editpassword/'.$password->id)}}">
					<span>đổi mật khẩu</span>
				</a>
			@endforeach
			</div>
	
			
		</div>
		
	</div>
	<div class="fix_information wrapper__box">
		<h3>sửa thông tin cá nhân</h3>
		<form method="post" enctype="multipart/form-data">
			<div class="grid-3x2 information__container">
				@if(isset($errors) && count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}}<br>
					@endforeach     
				</div>
				@endif

				@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
				@endif
				@csrf
				<div class="d-flex__row information_name">

					<span>Họ Tên</span>
					{{-- <span>{{auth('customer')->user()->name}}</span> --}}
					<input required="" type="text" name="name" value="{{auth('customer')->user()->name}}">
				</div>
				<div class="d-flex__row information_email">
					<span>Email</span>
					<input  type="text"name="email" value="{{auth('customer')->user()->email}}">
					{{-- <span>{{auth('customer')->user()->email}}</span> --}}
				</div>
				<div class="d-flex__row information_address">
					<span>Số Điện Thoại</span>
					<input required="" type="number" value="{{auth('customer')->user()->phone}}" name="phone">
					{{-- <span>vui lòng nhập số điện thoại của bạn</span> --}}
				</div>
				<div class="d-flex__row information_phone">
					<span>Địa chỉ</span>
					<input required="" type="text" name="address" value="{{auth('customer')->user()->address}}">
					{{-- <span>{{auth('customer')->user()->address}}</span> --}}
				</div>
				<div class="d-flex__row information_phone">
					<span>Giới tính</span>
					<select required="" name="gender" id="">
						<option value="NAM">NAM</option>
						<option value="NỮ">NỮ</option>
					</select>
				{{-- <input type="text" value="{{auth('customer')->user()->name}}" name="">
				<span>vui lòng nhập giới tính của bạn</span> --}}
			</div>
			<div class="d-flex__row information_phone">
				<span>Mã số thuế</span>
				<input type="text" name="code" value="{{auth('customer')->user()->code_tax}}">
				{{-- 			<span>vui lòng nhập giới tính của bạn</span> --}}
			</div>
			<div class="btn11">

				<input class="btn11_save" type="submit" value="LƯU THÔNG TIN" name="submit">

				<a id="btn_edit--2" href="" class="back"><span style="margin-left: 105px;">quay về</span></a>
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