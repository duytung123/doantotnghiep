@extends('adminlte')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Sửa danh mục
				</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
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
							<label>Tên danh mục:</label>
							<input required="" type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cateall2->cateall_name}}">
						</div>
						<div class="form-group" >
							<label>Ảnh sản phẩm</label>
							<input required id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
							<img id="avatar" class="" width="300px" src="">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" value="sửa">
							<div class="form-group">
								<a href="{{asset('admin/cateallproduct')}}" class="form-control btn btn-danger">hủy bỏ</a>
							</div>
							<div class="form-group" >
								<label>Danh mục sản phẩm</label>
								<select required name="cate" class="form-control">
									@foreach($category as $cate)
									<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
									@endforeach
								</select>
							</div>

							@csrf
						</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@endsection