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
                  <!--   @foreach($users as $u)
                    <tr class="odd gradeX" align="center">
                        <td>{{$u->id}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>

                            @if($u->level==1)
                            {{"Admin"}}
                            @else
                            {{"Thường"}}
                            @endif 

                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="user/delete/{{$u->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="user/edit/{{$u->id}}">Edit</a></td>
                    </tr>
                    @endforeach -->
                </tbody>
            </table>
            @endif