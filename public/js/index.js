

$(".slider-area").slick({

  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5
});


$(document).ready(function(){


  $(window).scroll(function(){
    if($(this).scrollTop() > 1000){
      $("#gotop").fadeIn();
    }else{
      $("#gotop").fadeOut();
    }
  });
  $("#gotop").click(function(){
    $('html, body').animate({scrollTop: 0},100);
  });
});

