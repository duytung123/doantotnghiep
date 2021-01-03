<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Recovery</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="css/logn.css">
</head>
<body>

    <div class="form-box">
        <div class="btn-box">
            <div id="btn"></div>
            <button type="button" onclick="login()" class="btn-toggle">Login</button>
            <button type="button" class="btn-toggle" onclick="register()" >Register</button>
        </div>
            @php
                $token= $_GET['token'];
                $email=$_GET['email'];
            @endphp
        <form method="post" id="login" class="form-login" action="{{url('loginform/updatepassword')}}">
            @csrf
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
            <input type="hidden" name="email" value="{{$email}}">
            <input type="hidden" name="token" value="{{$token}}">
            <span>Vui lòng nhập mật khẩu mới</span>

            <input required type="password" name="password" class="input-field" placeholder="Enter Password">
       
            <button type="submit" name="submit" class="btn-submit">Gửi</button>
        </form>


      
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        
        function register(){
            x.style.left = "-455px";
            y.style.left = "85px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "85px";
            y.style.left = "470px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>