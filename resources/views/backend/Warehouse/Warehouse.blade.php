@extends('adminlte')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
   <div class="row">
      <div class="col-lg-12">
         <a href=""  style="
         text-transform: capitalize;
         font-weight: 600;
         text-transform: capitalize;
         color: #3c8dbc;
         font-size: 35px;
         " class="page-header">Sản phẩm tồn kho -</a>
         <a href="khohang/tonkho" style="
         font-weight: 600;
         text-transform: capitalize;
         /* margin-top: -58px; */
         position: absolute;
         color: red;
         font-size: 35px;
         margin-left: 4px;">sản phẩm bán chạy</a>
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
                                 <th>Số Lượng & Đánh Giá</th>
                                 <th width="30%">Tùy chọn</th>
                              </tr>
                              <tbody id="pr_search">
                                 @foreach($warehouse as $warehouses)
                                 <tr>
                                    <td>{{$warehouses->prod_id}}</td>
                                    <td>{{$warehouses->prod_name}}</td>
                                    <td>{{number_format($warehouses->prod_price,0,',','.')}}VND</td>
                                    <td>
                                       <img width="200px" src="{{asset('../storage/app/avatar/'.$warehouses->prod_img)}}"class="thumbnail">
                                    </td>
                                    <td>{{$warehouses->cate_name}}</td>
                                    <td>SL:{{$warehouses->prod_number}} <br>ĐG:{{$warehouses->prod_rating_number}} </td> 
                                    <td>
                                       <a href="{{asset('admin/product/update/'.$warehouses->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                       <a onclick= "return confirm('Bạn có chắc muốn xóa sản phẩm không')" href="{{asset('admin/product/delete/'.$warehouses->prod_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>

                                 </tr>
                                 @endforeach
                              </tbody>
                           </thead>
                        </table>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div style="margin-left: 40%">{{ $productall->links() }}</div> 
               </form>
            </div>
         </div>
      </div>
   </div>
   <!--/.row-->
</div>
<!--/.main-->
@endsection