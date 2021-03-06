@extends('adminlte')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">Sản phẩm</h1>
      </div>
   </div>
   <!--/.row-->
   <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
         <div class="panel panel-primary">
            <div class="panel-heading">Danh sách sản phẩm</div>
            <form style="margin-bottom: 10px;" method="get" role="Search" class="form-inline" action="{{asset('search/')}}">
               <input class="form-control mr-sm-2" id="search" type="text" placeholder="Bạn tìm gì.." name="result">
               <button class="btn btn-success"  type="submit"><i class="fa fa-search"></i></button>
            </form>
            <div class="panel-body">
               <form method="post">
                  <div class="bootstrap-table">
                     <div class="table-responsive">
                        <a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                           <thead>
                              <tr class="bg-primary">
                                 <th>ID</th>
                                 <th width="30%">Tên Sản phẩm</th>
                                 <th>Giá sản phẩm</th>
                                 <th width="20%">Ảnh sản phẩm</th>
                                 <th width="20%">Danh mục</th>
                                 <th width="40%">Tùy chọn</th>
                              </tr>
                           <tbody id="pr_search">
                              @foreach($productlist as $prod)
<tr>
             <td>{{$prod->prod_id}}</td>
             <td>{{$prod->prod_name}}</td>
             <td>{{number_format($prod->prod_price,0,',','.')}}VND</td>
             <td>
                <img width="200px" src="{{asset('../storage/app/avatar/'.$prod->prod_img)}}"class="thumbnail">
             </td>
             <td>{{$prod->cate_name}}</td>
             <td {{-- style="padding: 20px 50px;" --}}>
             	<a style="padding: 0 10px;" href="{{asset('admin/product/updateattribute/'.$prod->prod_id)}}" ><i style="font-size: 25px;    color: #36e4ec;" class="fas fa-plus"></i></a>
                <a style="padding: 0 10px;"  href="{{asset('admin/product/update/'.$prod->prod_id)}}" ><i style="font-size: 25px;color: #00c4ff;" class="far fa-edit"></i></a>
                <a {{-- style="padding: 0 0px;" --}} onclick= "return confirm('Bạn có chắc muốn xóa sản phẩm không')" href="{{asset('admin/product/delete/'.$prod->prod_id)}}"><i style="font-size: 25px;    color: red;" class="fa fa-trash" aria-hidden="true"></i></a>
             </td>
</tr>
                              @endforeach
                           </tbody>
                           </thead>
                        </table>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!--/.row-->
</div>
<!--/.main-->
@endsection