  @extends('adminlte')
  @section('main')
    <script>
    $(document).ready(function(){
        $("#changePassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").arttr('disabled','');

            }
        });
    });
</script>
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users
                            <small>{{$users->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">

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
                                <input type="email" class="form-control" readonly="true" name="email" placeholder="Vui Lòng nhập email"
                                value="{{$users->email}}" readonly="" />

                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="changePassword" name="changePassword">

                                <label>Đổi mật khẩu</label>
                                <input type="password" class="form-control password" name="password" placeholder="Vui lòng nhập mật khẩu"
                                disabled="" 
                                 />
                            </div>
                             <div class="form-group">
                                <label> Nhập lại mật khẩu</label>
                                <input type="password" class="form-control password" name="passwordAgain" placeholder="Vui lòng nhập lại mật khẩu"
                                disabled="" 
                                 />
                            </div>
                            <div class="form-group">
                                  <label class="radio-inline">
                                    <input name="level" value="0"
                                        @if($users ->level==0)
                                        {{"checked"}}
                                        @endif

                                     type="radio">Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="level" value="1" 
                                    @if($users ->level==1)
                                        {{"checked"}}
                                    @endif type="radio">Admin
                                </label>
                              
                            </div>
                            <button type="submit" class="btn btn-default">Lưu</button>
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