@if($orders)
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr align="center">
			<th>STT</th>
			<th>Tên sản phẩm</th>
			<th>Hình ảnh</th>
			<th>Số lượng</th>
			<th>Thành Tiền</th>
			<th>Thao tác</th>
		</tr>
	</thead>
	<tbody>
                    @foreach($orders as $key =>$value)
                    <tr class="odd gradeX" align="center">
                        <td>{{$value->id}}</td>
                        <td><img src="{{ isset($value->product1->prod_img) ? pare_url_file($value->product1->prod_img) : ''}}" alt=""></td>
                        <td>{{-- {{$u->}} --}}</td>
                        <td>{{$value->or_price}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="user/delete/{{$value->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="user/edit/{{$value->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endif