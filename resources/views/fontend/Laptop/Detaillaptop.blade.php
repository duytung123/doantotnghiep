@extends('master2')
@section('main')

<script>
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
    });
    $(function(){
        let listrating1 = $(".list__star .f");

        listrating ={
            1 : "không thích",
            2 :     "tạm được",
            3 : "hài lòng",
            4 :     "rất tốt",
            5 :     "tuyệt vời"
        }

        listrating1.mouseover(function() {
            let $this = $(this);
            let number =$this.attr('data-key');
            listrating1.removeClass('rating_active')
            $(".number_rating_format").val(number);

            $.each( listrating1, function(key, value) {
                if (key +1 <= number)
                {
                    $(this).addClass('rating_active')
                }
                
            });
            $(".cffff1").text('').text(listrating[$this.attr('data-key')]).show();


        });

        $(".js_rating").click(function(event) {
            event.preventDefault();
            if($(".bigbig").hasClass('invisible'))
            {   
                $(".bigbig").addClass('active').removeClass('invisible');

            } else{
                $(".bigbig").addClass('invisible').removeClass('active');
            }
        });
            // danh gia product
        $(".js_rating_product").click(function(event) {
            event.preventDefault();
            let content = $("#r_content").val();
            let number = $(".number_rating_format").val();
            let url = $(this).attr('href');
            let id = $(this).attr('data-id');
            console.log('url : ' + url);

            if(content && number)
            {
                $.ajax({
                    url: url,
                    type : 'get',
                    data: {
                        number : number,
                        r_content : content,
                        id : id
                }
                }).done(function(result) {
                    if(result.code==1)
                    {
                        alert("Gửi đánh giá thành công");
                        location.reload();

                    }
                });
            }

        });

    });
</script>   

<style>
    .star_rating_foramt_total .active {color: #FF9705 !important;}

    .list__star .rating_active{
        color:#ff9705;
    }
    .list__star{
        cursor:pointer;
    }
    .cffff1{
        display: inline-block;
        margin-top: -3px;
        margin-left: -3px;
        position: relative;
        background: #52b858;
        color: #fff;
        padding: 2px 9px;
        box-sizing: border-box;
        font-size: 13px;
        border-radius: 2px;
        height: 25px;
        width: 90px;
        display: none;
    }
    .cffff1:after{
        right: 100%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(82,184,88,0);
        border-right-color: #52b858;
        border-width: 6px;
        margin-top: -6px;
    }
</style>
<link rel="stylesheet" href="css/detail.css">
<div class="breakhead">
    <a class="breakhead-text" href="trangchu">Trang chủ </a>
    <span> › </span>
    <a class="breakhead-text" href="">Laptop</a>
    <span> › </span>
</div>

<div class="phonetext">
    <?php
    $age = 0;
        if($cate->prod_rating_number)
        {
            $age = round($cate->prod_total_number / $cate->prod_rating_number,2);
        }
    ?>
    <div class="phonetext_rating">
    <h2>{{$cate->prod_name}}</h2> 
    <li class="star_rating_foramt">
        <span class="star_rating_foramt_total">
            @for($i=1;$i<=5;$i++)
            <i class="fa fa-star {{$i <=$age ? 'active' : ''}}" ></i>
            @endfor
        </span>
        
    </li>
    </div>
    
        {{-- <span style="margin-left: 20px;">{{$age}}</span> --}}
</div>

<hr>
<div class="contentphone">
    <div class="contentphone-one">
        <a href="">
            <img src="{{asset('../storage/app/avatar/'.$cate->prod_img)}}" alt="">
        </a>

    </div>
    <div class="contentphonesmall">
        <div class="contenphone-text">
            <strong>{{number_format($cate->prod_price,'0',',','.')}}đ</strong> <span>{{$cate->prod_promotion}}</span> <p>Trả góp 0%</p>
        </div>
        <div class="contenphone-texttwo">
            <strong>KHUYẾN MÃI</strong>
            <P>Giảm ngay 300.000đ (áp dụng cho đơn hàng đặt và nhận hàng trong ngày 12 - 15/12) (đã trừ vào giá)</P>
        </div>
        <div class="contenphone-check">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                    Yêu cầu nhân viên kỹ thuật giao hàng: hỗ trợ copy danh bạ, hướng dẫn sử dụng máy mới, giải đáp thắc mắc sản phẩm.
                </label>
            </div>
        </div>
        <div class="contenphone-buttonbuy">

            <a class="buttonbuyone" href="{{asset('cart/add/'.$cate->prod_id)}}">
                <b>Mua Ngay</b>

                <span>Giao tận nơi hoặc nhận tại siêu thị</span>
            </a>


        </div>
        <div class="contentphone-buttonbuy2">


            <a  class="buttonbuytwo" href="">
                <b>MUA TRẢ GÓP 0%</b>

                <span>Thủ tục đơn giản</span>
            </a>


            <a  class="buttonbuythree" href="">
                <b>TRẢ GÓP QUA THẺ</b>

                <span>Visa, Master,JCB</span>
            </a>


        </div>
        <div class="contentphone-call">
            <div class="call">
                <span>
                    "Gọi đặt mua:"
                    <a href="">0123456789</a>
                    "(miễn phí - 8:30 - 10:00)"
                </span>
            </div>
        </div>
    </div>

    <div class="opstionsphone">
        <h3>Thông số kỹ thuật</h3>
        <hr>
        <li>
            <span >Màn hình:</span  >
            <a href="">IPS LCD, 6.53", Full HD+</a>
        </li>
        <hr>
        <li>
            <span>Hệ điều hành:</span>    <a href="">Androi 9.0</a>
        </li>
        <hr>
        <li>
            <span>Cammera sau:</span> <span>Chính 16 MP & Phụ 8 MP, 2 MP</span>
        </li>
        <hr>
        <li>
            <span>Camera trước:</span>    <span>16MB</span>
        </li>
        <hr>
        <li>
            <span>CPU</span>  <a href="">MediaTek MT6768 8 nhân (Helio P65)</a>
        </li>
        <hr>
        <li>
            <span>RAM</span>  <span>6 GB</span>
        </li>
        <hr>
        <li>
            <span>Bộ nhớ trong:</span> <span>128 GB</span>
        </li>
        <hr>
        <li>
            <span>Thẻ nhớ:</span>  <a href="">MicroSD, hỗ trợ tối đa 256 GB</a>
        </li>
        <hr>
        <li>
            <span>Dung lượng pin:</span> <span>5000 mAh, có sạc nhanh</span>
        </li>
    </div>

</div>
<br>
<br>
<br>
<br>
<br>
<hr>

<div class="commenttong">
    <div class="danhgiaphone">
        <h3>42 đánh giá</h3>
    </div>
    <!-- đánh giá sản phẩm -->
    <div class="component_rating" style="width: 90%;display: flex;border-radius: 5px;border: 1px solid #d0cbcb;align-items: center; margin-bottom: 20px; position: relative;">

        <div class="rating_item" style="width: 20%;position: relative;"> 
            <span class="fa fa-star" style="font-size: 100px; display: block; margin: 0 auto;text-align: center; color: #ff9705";></span><b style="position: absolute;top: 50%;transform: translateX(-50%) translateY(-50%);text-align: center;left: 50%;color: white;font-size: 30px;">2.5</b>
        </div>


        <div class="list_rating" style="width: 60%;padding: 20px;" >
            @for($i =1; $i<=5; $i++ )
            <div class="item" style="display: flex; align-items: center;">
                
                <div style="width: 10%">
                    {{$i}}<span class="fa fa-star"></span>
                </div>
                <div style="width: 70%; margin: 0 20px;" >
                    <span style="width: 100%; height: 8px; display: block;border:1px solid #dedede ; background-color:#dedede ;"> <b style="width: 30%; background-color: #f25800 ;  display: block;height: 100%; border-radius: 5px; "></b></span>
                </div>
                <div style="width: 20%">
                    <a href="">20 đánh giá</a>
                </div>
                
            </div>
            @endfor
        </div>
        <?php 
        $listrating =[
            1 =>    "không thích",
            2 =>    "tạm được",
            3 =>    "hài lòng",
            4 =>    "rất tốt",
            5 =>    "tuyệt vời"
        ];

        ?>

        <div style="    border-radius: 5px;width: 200px;background-color: #288ad6;padding: 10px 35px;" class="rating_people">
            <a href="#" class="js_rating" style="color: white; font-size: 15px;   text-decoration: none;" >Đánh giá của bạn</a>
        </div>



    </div>
{{--    show danh gia san pham --}}
    <div class="list product ">
        <div class="col-md-12">
            <div class="comment-list">
                @foreach($rating as $rating)
                <ul>
                    <li class="com-title">
                        <i class="fal fa-badge-check checked"></i> <span class="r">Đã mua hàng tại Thegioiso.web</span>
                        <br>
                        <span>{{Carbon::now()}}</span>   
                    </li>
                    <li class="com-details">
                       <p class="com_details_font">{{$rating->r_content}}</p>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bigbig invisible">
        <div style="display:flex;margin-top: 15px; "class="hide" > 
            <p style="font-size: 15px; ">Chọn đánh giá của bạn</p>
            <span style="margin: -3px 15px; " class="list__star">
                @for($i=1;$i<=5;$i++)
                <i class="fa fa-star" data-key="{{$i}}"></i>
                @endfor
            </span>
            <span class="cffff1">không thích</span>
            <input type="hidden" value="" class="number_rating_format">
        </div>
        <div>
            <textarea id="r_content" style="margin-top: 5px ;" name="" cols="100" rows="3" placeholder="Nhập đánh giá về sản phẩm"></textarea>
        </div>

        <div style=" border-radius: 5px;width: 90px;background-color: #288ad6;padding: 5px 7px;">
            <a class="js_rating_product" style="text-decoration: none;color: white;font-size: 13px;FONT-FAMILY: initial;" data-id="{{$cate->prod_id}}" href="{{asset('/rating')}}" >Gửi Đánh Giá</a>
        </div>
    </div>

    <!-- phần bình luận sản phẩm -->

    <div id="comment">
        <h3>Bình luận</h3>
        <div class="col-md-9 comment">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input required type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Tên:</label>
                    <input required type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="cm">Bình luận:</label>
                    <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                </div>
                <div class="form-group text-right">
                    <button class="btnsubmit" type="submit" class="btn btn-default">Gửi</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
    <hr class="ratinghr">
    <div class="list product ">
        <div class="col-md-12">
            <div class="comment-list">
                @foreach($comment as $cm)
                <ul>
                    <li class="com-title">
                        {{$cm->cm_name}} <i class="fal fa-badge-check checked"></i> <span class="r">Đã mua hàng tại Thegioiso.web</span>
                        <br>
                        <span>{{date('d/m/Y H:i',strtotime($cm->created_at))}}</span>   
                    </li>
                    <li class="com-details">
                        {{$cm->cm_content}}
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>


</div>


@endsection







