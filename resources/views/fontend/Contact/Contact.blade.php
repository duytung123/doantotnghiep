@extends('master2')
@section('main')
<link rel="stylesheet" href="css/contact.css">
<div class="container__">
	<h3>Liên Hệ Với Chúng Tôi</h3>
	<div class="content_customer">
		<form method="post" class="form-horizontal" action="">
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
			<div class="form-group">
				<label class="control-label col-sm-2 postion" for="name">Tên:</label>
				<div class="col-sm-10">
					<input required style="width: 513px;" type="text" class="form-control" id="name" placeholder="Enter name" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 postion" for="email">Email:</label>
				<div class="col-sm-10">
					<input required style="width: 513px;" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 postion" for="phone">Phone:</label>
				<div class="col-sm-10">
					<input required style="width: 513px;" type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 postion1" for="phone">Nội dung:</label>
				<div class="col-sm-10">
					<input required style="width: 513px;position: absolute;width: 513px;top: -34px;" type="phone" class="form-control" id="phone" placeholder="Enter phone" name="content">
				</div>
			</div>

			{{-- <div class="form-group">
				<label class="control-label col-sm-2 postion" for="phone">Nội Dung:</label>
				<div class="col-sm-10">
					<input style="width: 513px;" type="text" class="form-control" id="phone" placeholder="Enter content" name="content">
				</div>
			</div> --}}

			<div style="margin-left: 42%;" class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button class="btn__" type="submit" class="btn btn-default">GỬI</button>
				</div>
			</div>
			@csrf
		</form>
	</div>
</div>
@endsection