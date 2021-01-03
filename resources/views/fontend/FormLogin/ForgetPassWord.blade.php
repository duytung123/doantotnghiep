<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-FORM</title>
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

        <form action="{{url('loginform/recovery')}}" method="post" id="login" class="form-login">
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
            <input required type="email" name="email" class="input-field" placeholder="Email">
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