@extends('master1')
@section('main')
<link rel="stylesheet" href="css/information.css">
<div class="container">
	<div style="" class="information wrapper__box_pass">
		<form action="" method="post">
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
			<h3 style="font-family: 'Font Awesome 5 Pro';">Thay đổi mật khẩu</h3>
			<div style="" class=" information__container"> 
				<div style="padding: 10px" class=" information_name">
					<span>Mật khẩu hiện tại:</span>
					<input required="password" style="margin-left: 9px;" name="password_old" type="password">
				</div>
				<div style="padding: 10px" class="information_email">
					<span>Mật khẩu mới:</span>
					<input required style="margin-left: 28px;" name="password" type="password">
				</div>
				<div style="padding: 10px"  class="information_address">
					<span>Nhập lại mật khẩu:</span>
					<input required style="" name="password_again" type="password">
				</div>
				<div class="btn11">
					<a class="btn_edit" href="" id="btn_edit--1">
						<span>sửa thông tin</span>
					</a>
					<a class="btn_edit_pass" href="">
						<input class="dddd" type="submit" value="đổi mật khẩu">
					</a>
					
				</div>

				
			</div>
		</form>
	</div>

</div>

@endsection