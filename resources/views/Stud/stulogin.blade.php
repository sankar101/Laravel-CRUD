<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-image: url('image/login (2).png');
            background-repeat: no-repeat;
        }
        .main{
            margin-left: 650px;
            margin-top: 100px;
            border-left:3px solid black;
            padding-left: 30px;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .container{
            margin-left: 30px;
        }
        label{
            font-size: 18px;
        }
        input[type="text"]{
            width: 60%;
            height: 30px;
            border-radius: 5px;
            border: 1px solid black;
        }
        input[type="password"]{
            width: 60%;
            height: 30px;
            border-radius: 5px;
            border: 1px solid black;
        }
        .log{
            background-color: red;
            border: none;
            padding: 8px 30px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
        .sign{
            background-color: red;
            border: none;
            padding: 8px 27px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            margin-left: 30px;
        }
        .log:hover{
            opacity:0.7;
            cursor:pointer;
        }
        .sign:hover{
            opacity:0.7;
            cursor:pointer;
        }
        .button{
            margin-left: 60px;
        }
        .text-danger{
            color: red;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1>Login</h1>
        <div class="container">
            <form action="/Sauthenticate" method="POST" name="myform" class="myform">
                @csrf
                <div>
                    <label for=""><b>User Id<b></label><br><br>
                    <input type="text" name="email" id="user" placeholder="Email Id" value="{{old('email')}}">
                    @if($errors -> has ('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div><br>
                <div>
                    <label for=""><b>Password<b></label><br><br>
                    <input type="password" name="password" id="pass" placeholder="Password" value="{{old('password')}}">
                    @if($errors -> has ('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div><br>
                <div class="button">
                    <input type="submit" value="Login" class="log">
                    <a href="{{url('sturegister')}}">
                    <input type="button" value="SignUp" class="sign">
                    </a>
                </div>
            </form>
        </div>
    </div>
    @if(session('error'))
    <script>
        alert("{{session('error')}}");
    </script>
    @endif
</body>
</html>