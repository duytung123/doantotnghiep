@extends('adminlte')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
  </ol>
</nav>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<a class="btn btn-info" href="cateallproduct/add">Thêm mới</a>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
					                  <th>Hình ảnh</th>
					                  <th style="width:30%">Tùy chọn</th>

					                </tr>
				              	</thead>
				              	<tbody>
				         	@foreach($cateall as $cateall)
								<tr>
							
									<td>{{$cateall->cateall_name}}</td>
									<td><img src="{{asset('../storage/app/avatar/'.$cateall->cateall_img)}}" alt=""></td>
								
									<td>
			                    		<a href="{{asset('admin/cateallproduct/update/'.$cateall->cateall_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('admin/cateallproduct/delete/'.$cateall->cateall_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  		
			                  	</tr>
							@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection
