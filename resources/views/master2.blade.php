<!doctype html>
<html lang="en">
<head>
  <title>Thế Giới Di Động</title>
  <!-- Required meta tags -->
  <base href="{{asset('')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/phone.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/laptop.css">
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="stylesheet" href="css/detail.css">
  <link rel="stylesheet" href="css/phukien.css">
  <link rel="stylesheet" href="css/complete.css">
  <link rel="stylesheet" href="css/tintuc.css">
  <link rel="stylesheet" href="{{asset('public/fontasome/Font-Awesome/Font-Awesome/fontawesome-pro-5.13.0/css/all.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
  <link rel="stylesheet" href="fontasome/Font-Awesome/Font-Awesome/fontawesome-pro-5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
</head>
<body class="body1">

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
          <li class="nav-item nav_item active3">
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
        <a href="">
          <li class="nav-item nav_item">
            <div class="icon"><i class="fal fa-watch-fitness"></i></div> 
            <a class="nav" href="">đồng hồ</a>
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
      </ul>
    </nav>
  </div>

  @yield('main')

  <div class="footer1">
   <p class="kytu">© 2019. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/20019. Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 18001060. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Nguyễn Duy Tùng Xem chính sách sử dụng web</p>
 </div>
 <section>
  <button id="gotop"><a alt="về đầu trang" class="fas fa-arrow-circle-up"></a></button>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script src="js/laptop.js"></script>
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