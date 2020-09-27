@extends('adminlte')
@section('main')
<div id="page-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Danh sách
            </h1>
        </div>
        <a href="{{asset('admin/news/add')}}"><button style="margin-bottom: 20px;" class="btn btn-primary">Thêm tin mới</button></a>
        <!-- /.col-lg-12 -->
        @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
        @endif
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
               <tr align="center">
                  <th width="5%">ID</th>   
                  <th width="20%">Tiêu Đề</th>
                  <th width="10%">Ảnh</th>
                  <th width="15%">Tác giả</th>
                  <th>mô tả</th>
                  <th width="5%">Delete</th>
                  <th width="5%">Edit</th>
       
      
          <tbody>
           @foreach($tintuc as $tintuc)
           <td>{{$tintuc->id}}</td>
          
           <td>{{$tintuc->n_title}}</td>
           <td> <img src="{{asset('../storage/app/avatar/'.$tintuc->n_img)}}" alt=""></td> 
           <td>{{$tintuc->n_author}}</td>
           <td>{!!$tintuc->n_description!!}</td>
           <td><a href="{{asset('admin/news/delete/'.$tintuc->id)}}"><i class="fas fa-trash-alt"></i></a></td>
           <td><a class="model_js" href="{{asset('admin/news/edit/'.$tintuc->id)}}"><i class="fas fa-pen"></i></a></td>
               </tr>
           @endforeach

       </tbody>
           </thead>
   </table>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
@endsection
