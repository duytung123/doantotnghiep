<!doctype html>
<html lang="en">
<head>
  <title>Thế Giới Di Động</title>
  <!-- Required meta tags -->
  <base href="{{asset('')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/phukien.css">
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
  <link rel="stylesheet" href="fontasome/Font-Awesome/Font-Awesome/fontawesome-pro-5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="body2">

  <div class="header">
    <nav class="navbar navbar-expand-sm navbar1 navbar-dark">
      <a href="trangchu"> <div class="hinh"> <img class="logo" src="avatar/lg1.jpg" alt=""> </div> </a> 
      <form method="post" role="Search" class="form-inline" autocomplete="off" action="">
        {{csrf_field()}}
        <input id="keywords" class="form-control mr-sm-2 inputsearch" type="text" placeholder="Bạn tìm gì.." name="resultcomplete">
        <div id="search_ajax"></div>
        <button class="btn searchbtn"  type="submit"><i class="fa fa-search"></i></button>
      </form>

      <ul class="navbar-nav">
        <a href="phone">
          <li class="nav-item nav_item active2">
            <div class="icon"><i class="fal fa-mobile-android"></i></div>
            <a class="nav" href="phone">điện thoại</a>
          </li>
        </a>
        <a href="laptop">
          <li class="nav-item nav_item">
            <div class="icon"><i class="fal fa-phone-laptop"></i></div>  
            <a class="nav" href="laptop">laptop</a>
          </li>
        </a>
        <a href="tablet">
          <li class="nav-item nav_item">
            <div class="icon"><i class="fal fa-tablet"></i></div>  
            <a class="nav" href="tablet">tablet</a>
          </li>
        </a>

        <a href="phukien">
          <li class="nav-item nav_item">
            <div class="icon"><i class="fal fa-headphones-alt"></i></div>  
            <a class="nav" href="phukien">phụ kiện</a>
          </li>
        </a>
        <a href="watch">
          <li class="nav-item nav_item">
            <div class="icon"><i class="fal fa-watch-fitness"></i></div> 
            <a class="nav" href="watch">đồng hồ</a>
          </li>
        </a>
        <a href="tintuc">
          <li class="nav-item nav_item"> 
            <div class="icon"><i class="fal fa-newspaper"></i></div> 
            <a class="nav" href="tintuc">công nghệ</a>
          </li>
        </a>
        <a href="">
          <li class="nav-item nav_item"> 
            <div class="icon"><i class="fal fa-gamepad-alt"></i></div> 
            <a class="nav" href="">game app</a>
          </li>
        </a>
        <a href="{{asset('cart/show')}}">
          <li class="dddd"> 
            <div class="icon cart"><i class="fas fa-shopping-cart"></i></div> 
            <a class="count" href="{{asset('cart/show')}}">{{Cart::count()}}</a>
          </li>
        </a>
         
        @if(Auth::guard('customer')->check())
        
          <li class="nav-item dropdown customer-name">
            
           <a class="nav-link dropdown-toggle customer-name-plank" data-toggle="dropdown" href="">{{ auth('customer')->user()->name }}</a>
           <div class="dropdown-menu">
            @foreach($customer as $customer)
            <a class="dropdown-item active" href="{{asset('loginform/edit/'.$customer->id)}}">Quản lý tài khoản</a>
            <a class="dropdown-item dr1" href="loginform/logout">Đăng xuất</a>
          @endforeach
          </div>
         
          </li>
           
        @endif
        
    </ul>
  </nav>
</div>
{{-- head --}}
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <br>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="avatar/bn1.png" alt="Los Angeles" width="1300px">
    </div>
    <div class="carousel-item">
      <img src="avatar/bn2.png" alt="Chicago" width="1300px">
    </div>
    <div class="carousel-item">
      <img src="avatar/bn3.png" alt="New York" width="1300px">
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="quangcao">  
  <img src="avatar/a1.png" alt="">
</div>
<br>

@yield('main')

<div class="footer1">
  <p class="kytu">© 2020. Công ty cổ phần Thế Giới Số 1. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2020. Địa chỉ: 79 Mai Thị Dõng,Nha Trang-Khánh Hòa. Điện thoại: 0964672213. Email: cskh@thegioiso1.vn. Chịu trách nhiệm nội dung: Nguyễn Duy Tùng</p>
</div>
<section>
  <button id="gotop"><a alt="về đầu trang" class="fas fa-arrow-circle-up"></a></button>
  <div class="zalo-chat-widget" data-oaid="1602318280360005737" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="120" data-width="400" data-height="400">
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script src="js/index.js"></script>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<script type="text/javascript">
  $('#keywords').keyup(function(event) {
    var query = $(this).val();
    if(query != '')
    {
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url : "{{url('autocomplet_ajax')}}",
        method : "post",
        data :{query:query, _token:_token},
        success:function(data){
          $('#search_ajax').fadeIn();
          $('#search_ajax').html(data);
        }

      });
    }
    else
    {
      $('#search_ajax').fadeOut();
    }
  });
</script>

</body>
</html>