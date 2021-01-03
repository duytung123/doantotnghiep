@extends('adminlte')
@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh Sách Liên hệ</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Content</th>
                        <th>Xóa</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactList as $contact)
                    <tr class="odd gradeX" align="center">
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->content}}</td>
                        <td><a href="{{asset('admin/contact/delete/'.$contact->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                        <td>
                            <a class="label {{$contact->getStatusContact($contact->cm_status)['class']}}" href="{{asset('admin/contact/active/'.$contact->id)}}">{{$contact->getStatusContact($contact->cm_status)['name']}}</a>
                        </td>


                  </tr>

                  @endforeach

              </tbody>

          </table>

      </div>
      <!-- /.row -->
  </div>


</div>

<!-- model bosstrap -->
<!-- Modal -->
<div class="modal fade" id="myModaljs" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Chi tiết đơn hàng</h4>
      </div>
      <div class="modal-body" id="nd_content111">

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
  </div>

</div>
</div>



@endsection