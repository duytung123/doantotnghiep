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
  <div class="form-group">

    <label for="exampleInputEmail1">Tên danh mục</label>
    <input required type="text" class="form-control" value="{{old('name')}}" name="name">

  </div>
  <div class="form-group=">
	<div class="checkbox">
		<label><input type="checkbox" name="hot">nổi bật</label>
	</div>
  </div>
  <button type="submit" class="btn btn-primary">Lưu thông tin</button>
  @csrf
</form>
		
		</div>
@endsection
		