@extends('adminlte')
@section('main')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="login">Đăng Xuất</a></li>
               <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>150</h3>
                  <p>New Orders</p>
               </div>
               <div class="icon">
                  <i class="ion ion-bag"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
               <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Bounce Rate</p>
               </div>
               <div class="icon">
                  <i class="ion ion-stats-bars"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
               <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
               <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
               </div>
               <div class="icon">
                  <i class="ion ion-pie-graph"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
   </div>
   <!-- /.container-fluid -->
   {{-- chart jquey datepicker --}}
   <p style="text-align: center;font-size: 20px;color: black;font-weight: 600;">Thống kê doanh số</p>
   <div class="row1s">
      <form autocomplete="off">
         @csrf
         <div 
            class="fill__container"
            style="display: flex;
            width: 100%;
            justify-content: space-around;
            align-items: center;"
            >
            <div>
               <span 
                  style="font-family: 'Source Sans Pro';
                  font-size: 17px;
                  font-weight: 600;
                  color: #646a6f;"
                  >
               Từ ngày:
               </span>
               <input  type="text" id="datepicker" name="fromdate">
            </div>
            <div> 
               <span 
                  style="font-family: 'Source Sans Pro';
                  font-size: 17px;
                  font-weight: 600;
                  color: #646a6f;"
                  >
               Đến ngày:
               </span>
               <input  type="text" id="datepicker2" name="todate">
            </div>
            <div>
               <span 
                  style="font-family: 'Source Sans Pro';
                  font-size: 17px;
                  font-weight: 600;
                  color: #646a6f;"
                  >
               Lọc theo:
               </span>
               <select name="" id="" class=" dash-select">
                  <option value="">7 ngày qua</option>
                  <option value="">tháng trước</option>
                  <option value="">tháng này</option>
               </select>
            </div>
         </div>
         <input 
            type="button" 
            id="btn_dashboard_filter" 
            class="btn btn-primary" 
            value="Lọc kết quả"
            style="margin-left: 66px; margin-top: 20px;"
            >
      </form>
   </div>
   <div class="fill-chart" style="margin-top: 25px;">
      <div id="myfirstchart" style="height: 300px; width: 1000px"></div>
   </div>
</section>
@endsection