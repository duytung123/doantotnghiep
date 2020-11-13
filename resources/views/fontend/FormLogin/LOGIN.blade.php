<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-FORM</title>
    <link rel="stylesheet" href="css/logn.css">
</head>
<body>

    <div class="form-box">
        <div class="btn-box">
            <div id="btn"></div>
            <button type="button" onclick="login()" class="btn-toggle">Login</button>
            <button type="button" class="btn-toggle" onclick="register()" >Register</button>
        </div>

        <form method="post" id="login" class="form-login" action="">
            {{csrf_field()}}
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
            <input required type="text" name="email" class="input-field" placeholder="User ID">
            <input required type="password" name="password" class="input-field" placeholder="Enter Password">
            <input type="checkbox" class="check-box"> <span>Rememver Password</span>
            <button type="submit" name="submit" class="btn-submit">Login</button>
        </form>

        <form id="register" class="form-login" action="">
            <input required type="email" class="input-field" placeholder="Email ID">
            <input required type="password" class="input-field" placeholder="Password">
            <input required type="password" class="input-field" placeholder="RePassword">
            <input required type="checkbox" class="check-box"> <span>i agree to the term & conditions</span>
            <button type="submit" class="btn-submit">Register</button>
        </form>
      
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        
        function register(){
            x.style.left = "-470px";
            y.style.left = "70px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "70px";
            y.style.left = "470px";
            z.style.left = "0px";
        }
        

    </script>

    
</body>
</html>