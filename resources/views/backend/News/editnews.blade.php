<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SHOP-ĐIỆN THOẠI</title>
	<base href="{{asset('')}}">
	<link href="css1/bootstrap.min.css" rel="stylesheet">
	<link href="css1/datepicker3.css" rel="stylesheet">
	<link href="css1/styles.css" rel="stylesheet">
	<script src="js/lumino.glyphs.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">SHOP-ĐIỆN THOẠI</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="#"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li class="active"><a href="admin/product"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li><a href="#"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bài viết</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa bài viết</div>
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
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-12">
									<div class="form-group" >
										<label>Tiêu đề</label>
										<input value="{{$edit->n_title}}" required type="text" name="title" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tác giả</label>
										<input value="{{$edit->n_author}}" required type="text" name="author" class="form-control" value="Nguyễn Duy Tùng">
									</div>
									<div class="form-group" >
										<label>Tóm tắt</label>
										<input value="{{$edit->n_description}}" required name="descripton" type="text" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input  id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
										<img id="avatar" class="" width="300px" src="{{asset('../storage/app/avatar/'.$edit->n_img)}}">
									</div>
									<div class="form-group" >
										<label>nội dung</label>
										<textarea class="ckeditor"required name="content">{{$edit->n_content}}</textarea>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										<select name="featured" id="">
											<option value="0" @if($edit->prod_featured == 0) selected @endif >SALE</option>
											<option value="1" @if($edit->prod_featured == 1) selected @endif >CÓ</option>
											<option value="2" @if($edit->prod_featured == 2) selected @endif>HOT</option>
											<option value="3" @if($edit->prod_featured == 3) selected @endif>KHÔNG</option>
											<option value="4" @if($edit->prod_featured == 4) selected @endif>SALE KHỦNG</option>
										</select>
										
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
						</div>
						{{csrf_field()}}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->



<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
	$('#calendar').datepicker({
	});
	!function ($) {
		$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
			$(this).find('em:first').toggleClass("glyphicon-minus");      
		}); 
		$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	}(window.jQuery);

	$(window).on('resize', function () {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	});
	function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		    	var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
			$('#avatar').click(function(){
				$('#img').click();
			});
		});
	</script>	
</body>

</html>
