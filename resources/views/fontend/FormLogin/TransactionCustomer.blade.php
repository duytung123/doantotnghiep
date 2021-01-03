@extends('master1')
@section('main')
<link rel="stylesheet" href="css/information.css">
<div class="container">
	<div class="information wrapper__box">
		<h3>Đơn hàng của bạn</h3>
		
</div>

</div>
<script>
	$('#btn_edit--1').click((e)=>{
		e.preventDefault();
		$('.fix_information').addClass('show');
		$('.information').addClass('hide');
	});
	$('#btn_edit--2').click((e)=>{
		e.preventDefault();
		$('.fix_information').removeClass('show');
		$('.information').removeClass('hide');
	})
</script>
@endsection