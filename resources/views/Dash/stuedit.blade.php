<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        .main{
            border-bottom: 1px solid black;
        }
        .ms{
            font-size: 30px;
            color: red;
            font-weight: bold;
        }
        .logout{
           float: right; 
           margin-right: 10px;
           margin-top: 8px;
        }
        a{
            text-decoration: none;
            font-weight: bold;
        }
        .head{
            border: 1px solid black;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        h2{
            margin-left: 0px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .container{
            border: 1px solid black;
            padding-left: 400px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .back{
            background-color: lightcoral;
            border: none;
            padding: 8px 30px;
            border-radius: 5px;
            color: black;
            font-weight: bold;
            margin-top: 10px;
            cursor: pointer;
            background-image: url('/image/back.png');
            background-repeat: no-repeat;
            background-size: 20px 20px;
            background-position: left;
        }
        input[type="text"]{
            width: 30%;
            height: 27px;
            border-radius: 5px;
            border: 1px solid black;
            margin-bottom: 10px;
        }
        input[type="textarea"]{
            width: 30%;
            height: 75px;
            border-radius: 5px;
            border: 1px solid black;
            margin-bottom: 10px;
        }
        input[type="date"]{
            width: 30%;
            height: 27px;
            border-radius: 5px;
            border: 1px solid black;
            margin-bottom: 10px;
        }
        input[type="submit"]{
            background-color: red;
            border: none;
            padding: 8px 30px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-left: 60px;
        }
        img{
            margin-left: 35px;
        }
        .reg{
            color: blue;
        }
        .text-danger{
            color: red;
        }
    </style>
</head>
<body>
    <div class="main">
        <span class="ms">MANAGEMENT SYSTEM </span><a href="{{url('stulogin')}}" class="logout">Logout</a>
    </div>
    <div class="head">
       <h2><img src="/image/edit.png" alt="" width="20px" height="20px">&nbsp;Edit</h2>
    </div>
    <a href="{{url('Studentlist')}}">
    <input type="button" value="Back" class="back"> </a>
    <div class="container">
        <form method="POST" action="{{ route('update-student', $user->id) }}">
        @csrf
        @method('PUT')
                <div>
                   <font>User ID :</font><span class="reg">&nbsp;{{$user['reg_id']}}</span> 
                </div><br>
                <div class="name">
                <input type="hidden" name="id" value="{{$user['id']}}">
                <img src="/image/user.png" alt="" width="20px" height="15px">&nbsp;
                    <input type="text" name="name" value="{{$user['name']}}">
                    @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="dob">
                <img src="/image/date.png" alt="" width="20px" height="15px">&nbsp;
                    <input type="date" name="dob" value="{{$user['dob']}}">
                    @if($errors->has('dob'))
                        <span class="text-danger">{{$errors->first('dob')}}</span>
                    @endif
                </div>
                <div class="email">
                <img src="/image/mail.png" alt="" width="20px" height="15px">&nbsp;
                <input type="text" name="email" value="{{$user['email']}}">
                    @if($errors->has('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="contact">
                <img src="/image/phone.png" alt="" width="20px" height="15px">&nbsp;
                <input type="text" name="contact" value="{{$user['contact']}}">
                    @if($errors->has('contact'))
                        <span class="text-danger">{{$errors->first('contact')}}</span>
                    @endif
                </div>
                <div class="address">
                    <img src="/image/address.jpg" alt="" width="20px" height="15px">&nbsp;
                    <input type="textarea" name="address" placeholder="Address"  value="{{$user['address']}}" width="50px" height="24px">
                    @if($errors -> has ('address'))
                        <span class="text-danger">{{$errors->first('address')}}</span>
                    @endif
                </div>
                <div class="pincode">
                <img src="/image/pincode.png" alt="" width="20px" height="15px">&nbsp;   
                    <input type="text" name="pincode" value="{{$user['pincode']}}">
                    @if($errors->has('pincode'))
                        <span class="text-danger">{{$errors->first('pincode')}}</span>
                    @endif
                </div>
                <div class="state">
                <img src="/image/state.png" alt="" width="20px" height="15px">&nbsp;
                    <input type="text" name="state" value="{{$user['state']}}">
                    @if($errors->has('state'))
                        <span class="text-danger">{{$errors->first('state')}}</span>
                    @endif
                </div>
                <div class="button">
                    <input type="submit" name="Submit" value="Update" class="btn1" >
                    @csrf
                </div>
    </div>      
</form>

</body>
</html>
    