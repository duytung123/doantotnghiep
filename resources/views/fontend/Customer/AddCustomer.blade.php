  @extends('adminlte')
  @section('main')


  <!-- Page Content -->
  <div id="page-wrapper">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-lg-12">
  				<h1 class="page-header">Users
  					<small>Thêm</small>
  				</h1>
  			</div>
  			<!-- /.col-lg-12 -->
  			<div class="col-lg-7" style="padding-bottom:120px">
  				<form action="add" method="POST">

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

  					{{csrf_field()}}
  					<div class="form-group">
  						<label>Email</label>
  						<input type="email" class="form-control" name="email" placeholder="Vui Lòng nhập email" />
  					</div>
  					<div class="form-group">
  						<label>name</label>
  						<input type="text" class="form-control" name="name" placeholder="Vui Lòng nhập email" />
  					</div>
  					<div class="form-group">
  						<label>phone</label>
  						<input type="number" class="form-control" name="phone" placeholder="Vui Lòng nhập email" />
  					</div>
  					<div class="form-group">
  						<label>address</label>
  						<input type="text" class="form-control" name="address" placeholder="Vui Lòng nhập email" />
  					</div>
  					<div class="form-group">
  						<label>Password</label>
  						<input type="password" class="form-control" name="password" placeholder="Vui lòng nhập mật khẩu" />
  					</div>
  					<div class="form-group">
  						<label>Again Password</label>
  						<input type="passwor" class="form-control" name="passwordAgain" placeholder="Vui lòng nhập lại mật khẩu" />
  					</div>
  					<label>Quyền </label>
  					<div class="form-group">

  						<label class="radio-inline">
  							<input name="level" value="0" type="radio">Thường
  						</label>
  						<label class="radio-inline">
  							<input name="level" value="1"  type="radio">Admin
  						</label>

  					</div>
  					<button type="submit" class="btn btn-default">Thêm</button>
  					<button type="reset" class="btn btn-default">Reset</button>
  					<form>
  					</div>
  				</div>
  				<!-- /.row -->
  			</div>
  			<!-- /.container-fluid -->
  		</div>
  		<!-- /#page-wrapper -->


  		@endsection
