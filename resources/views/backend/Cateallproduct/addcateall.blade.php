@extends('adminlte')
@section('main')
<div class="row">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Danh sách</a></li>
			<li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
		</ol>
	</nav>
</div>
<div class="container">
	
	<form action="" method="post" enctype="multipart/form-data">
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
	

			<label for="exampleInputEmail1">Tên danh mục</label>
			<input required type="text" class="form-control" value="{{old('name')}}" name="name">

		</div>
		<div class="form-group" >
			<label>Ảnh sản phẩm</label>
			<input required id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
			<img id="avatar" class="" width="300px" src="">
		</div>
		<div class="form-group=">
			<div class="checkbox">
				<label><input type="checkbox" name="hot">nổi bật</label>
			</div>
		</div>
		<div class="form-group" >
			<label>Danh mục sản phẩm</label>
			<select required name="cate" class="form-control">
				@foreach($category as $cate)
				<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
				@endforeach
			</select>
		</div>
		{{csrf_field()}}

		<button type="submit" class="btn btn-primary">Lưu thông tin</button>
		@csrf
	</form>

</div>
@endsection
