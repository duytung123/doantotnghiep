@extends('adminlte')
@section('main')
<script>
  $(function(){
    $(".model_js").click(function(event) {
        event.preventDefault();
        let $this= $(this);
        let url = $this.attr('href');
        $("#nd_content111").html('');
        $("#myModaljs").modal('show');  

        $.ajax({
            url:url,
        }).done(function(result){
          // console.log(result);
            if(result)
            {
                $("#nd_content111").append(result);
            }
        });
    });
})
</script>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh Sách Đơn Hàng</small>
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
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Địa Chỉ</th>
                        <th>Chú Thích</th>
                        <th>Tổng Tiền</th>
                        <th>Xóa</th>
                        <th>Chi Tiết</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $order)
                    <tr class="odd gradeX" align="center">
                        <td>{{$order->id}}</td>
                        <td>{{$order->user_name}}</td>
                        <td>{{$order->tr_phone}}</td>
                        <td>{{$order->tr_address}}</td>
                        <td>{{$order->tr_note}}</td>
                        <td>{{$order->tr_totalprice}}</td>
                        <td><a href="{{asset('admin/order/delete/'.$order->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                        <td><a class="model_js" href="{{asset('admin/order/vieworder/'.$order->id)}}"><i class="fas fa-eye"></i></a></td>
                       {{--  <td>
                            <a class="label {{$order->getStatus($order->tr_status)['class']}}" href="{{asset('admin/order/active/'.$order->id)}}">{{$order->getStatus($order->tr_status)['name']}}</a>
                        </td>
 --}}

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