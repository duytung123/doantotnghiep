
@extends('master2')
@section('main')
<script>
$(document).ready(function(){
 
 var _token = $('input[name="_token"]').val();

 load_data('', _token);

 function load_data(prod_id="", _token)
 {
  $.ajax({
   url:"{{ route('laptop.load_data') }}",
   method:"POST",
   data:{prod_id:prod_id, _token:_token},
   success:function(data)
   {
    // console.log(data)
    $('#load_more_button').remove();
    $('#post_data').append(data);
   }
  })
 }

 $(document).on('click', '#load_more_button', function(){
  var prod_id = $(this).data('id');

  $('#load_more_button').html('<b>Loading...</b>');
  load_data(prod_id, _token);
 });

});
</script>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="avatar/bn1a.png" alt="Los Angeles" width="800" height="170 ">

   </div>
<div class="carousel-item">
      <img src="avatar/bn2a.png" alt="Chicago" width="800" height="170">

      </div>
     <div class="carousel-item">
      <img src="avatar/bn3a.png" alt="New York" width="800" height="170">

    </div>
<div class="carousel-item">
      <img src="avatar/bn4a.png" alt="New York" width="800" height="170">

      </div>
    <div class="carousel-item">
      <img src="avatar/bn5a.png" alt="New York" width="800" height="170">
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="banner">
  <img class="bn1" src="avatar/baner1.png" alt="">
  <img class="bn2" src="avatar/baner2.png" alt="">
</div>
</div>


<div class="columlogo colum2">
  <nav class="navbar navbar-expand-sm">

  </nav>
</div>
<strong class="sl">chọn laptop theo nhu cầu</strong>
<div class="logopc">

<a href="">
  <div class="lap1">
    <img src="avatar/laptop1.png" alt="">
    
  </div>
</a>
<a href="">
  <div class="lap1">
    <img src="avatar/laptop5.png" alt="">
    
  </div>
</a>
<a href="">
  <div class="lap1">
    <img src="avatar/laptop4.png" alt="">
    
  </div>
</a>
<a href="">
  <div class="lap1">
    <img src="avatar/laptop3.png" alt="">
    
  </div>
</a>
<a href="">
  <div class="lap1">
    <img src="avatar/laptop2.png" alt="">
    
  </div>
</a>
</div>

<!-- head -->
<hr>

<img class="lga" src="avatar/lga.png" alt="">

<div class="container">
  <div class="row">
    <div class="MultiCarousel multione" data-items="1,2,3,4,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
         <div class="MultiCarousel-inner">
        <a class="casel" href="">
             @foreach($laptopsale as $ccc)
          <div class="item itemlap">
           
            <div class="pad15 laptop">
              <a class="ac" href="{{asset('detail2/'.$ccc->laptop_id.'/'.$ccc->prod_slug.'.html')}}">
                <img src="{{asset('../storage/app/avatar/'.$ccc->prod_img)}}" alt="">
                <h3>{{$ccc->prod_name}}</h3>
                <strong>{{number_format($ccc->prod_price,0,',','.')}}đ</strong>
               
                {!!$ccc->prod_description!!}
              </a>
            </div>
             
          </div>
         @endforeach
        </a>
      </div>
<!--  -->
  
      <button class="btn btn-primary leftLst">></button>
      <button class="btn btn-primary rightLst">></button>
    </div>
  </div>
  
</div>
<br>

<div class="producthot">
  <nav class="navbar navbar-expand-sm ">
    <span class="title_new">LapTop Nổi Bật Nhất</span>
    <ul class="navbar-nav category">

    </ul>
  </nav>
</div>
<div class="content">
  @foreach($laptop as $laptop)
  <div class="tong1">
    <div class="hinh1">
     <a class="chu1" href="{{asset('detail2/'.$laptop->prod_id.'/'.$laptop->prod_slug.'.html')}}">
      <img class="h1" src="{{asset('../storage/app/avatar/'.$laptop->prod_img)}}" alt="">
      
      <span>{{$laptop->prod_name}}</span>
      <p>{{number_format($laptop->prod_price,0,',','.')}}đ</p>
    </a>
  </div>
</div>
@endforeach

@foreach($laptop1 as $lap)
<div class="tong2">
  <div class="hinh2">
    <a class="click1" href="{{asset('detail2/'.$lap->prod_id.'/'.$lap->prod_slug.'.html')}}">
      <img class="h2 h2a" src="{{asset('../storage/app/avatar/'.$lap->prod_img)}}" alt="">
      <div class="con1">

        <h3>{{$lap->prod_name}}</h3>
        <strong>{{number_format($lap->prod_price,0,',','.')}}đ</strong>
        <p> {!!$lap->prod_description!!}</p> 
      </div>
    </a>
    
  </div>
</div>
@endforeach

</div>

<div class="content">
  @foreach($laptop2 as $lap2)
  <div class="tong1">
    <div class="hinh1">
     <a class="chu1" href="{{asset('detail2/'.$lap2->prod_id.'/'.$lap2->prod_slug.'.html')}}">
      <img class="h1" src="{{asset('../storage/app/avatar/'.$lap2->prod_img)}}" alt="">
      
      <span>{{$lap2->prod_name}}</span>
      <p>{{number_format($lap2->prod_price,0,',','.')}}đ</p>
    </a>  
  </div>
</div>
@endforeach

@foreach($laptop4 as $lap)
<div class="tong2">
  <div class="hinh2">
    <a class="click1" href="{{asset('detail2/'.$lap->prod_id.'/'.$lap->prod_slug.'.html')}}">
      <img class="h2 h2a" src="{{asset('../storage/app/avatar/'.$lap->prod_img)}}" alt="">
      <div class="con1">  
        <h3>{{$lap->prod_name}}</h3>
        <strong>{{number_format($lap->prod_price,0,',','.')}}đ</strong>
        <p>{!!$lap->prod_description!!}</p> 
      </div>
    </a>   
  </div> 
</div> 
@endforeach

</div>
<div class="loptop_konoibat">
 @foreach($laptop3 as $lap)
 <div class="tong2">
  <div class="hinh2">
    <a class="click1" href="{{asset('detail2/'.$lap->prod_id.'/'.$lap->prod_slug.'.html')}}">
      <img class="h2 h2a" src="{{asset('../storage/app/avatar/'.$lap->prod_img)}}" alt="">
      <div class="con1">
        <h3>{{$lap->prod_name}}</h3>
        <strong>{{number_format($lap->prod_price)}}đ</strong>
        <p>{!!$lap->prod_description!!}</p> 
      </div>
    </a>
  </div>
</div> 
@endforeach

</div>
    {{csrf_field()}}
<div id="post_data"></div>



<!-- endcontent2 -->
@endsection