<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/Jqueryui/1.12.1/themes/ui-lightness/Jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/Jquery/3.1.1/Jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/Jqueryui/1.12.1/Jquery-ui.min.js"></script>
    <!--Date Picker-->
    <script>
        $(function(){
            $("#my_date_picker").datepicker({
                dateFormat:"yy/mm/dd",
                changeYear:true,
                yearRange:"-100:+0",
                maxDate:new Date(),
            });
        });
    </script>
    <style>
        .head{
            border: 1px solid black;
            margin-top: 10px;
            border-radius: 10px;
        }
        h1{
            margin-left: 30px;
            color: green;
        }
        .main{
            border: 1px solid black;
            padding-left: 400px;
            padding-top: 10px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .button{
            border: 1px solid black;
            margin-top: 10px;
            padding-left: 500px;
            padding-top: 20px;
            padding-bottom: 20px;
            border-radius: 10px;
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
        input[type="password"]{
            width: 30%;
            height: 27px;
            border-radius: 5px;
            border: 1px solid black;
            margin-bottom: 10px;
        }
        input[type="radio"]{
            margin-bottom: 10px;
        }
        input[type="submit"]{
            background-color: green;
            border: none;
            padding: 8px 30px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .gender1{
            margin-left: 160px;
            color: red;
        }
        .text-danger{
            color: red;
        }
        img{
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="head">
        <h1><img src="image/h1.png" alt="" width="30px" height="25px">Register</h1>
    </div>
    <div class="main">
        <form action="/sregister" method="post">
        @csrf
            <div class="name">
             <img src="image/user.png" alt="" width="20px" height="15px">
                <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
                @if($errors -> has ('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="dob">
            <img src="image/date.png" alt="" width="20px" height="15px">
                <input type="date" id="my_date_picker" name="dob" placeholder="Date of Birth" value="{{old('dob')}}">
                @if($errors -> has ('dob'))
                <span class="text-danger">{{$errors->first('dob')}}</span>
                @endif
            </div>
            <div class="gender">
            <img src="image/gender.jpg" alt="" width="20px" height="15px">
                <input type="radio" name="gender" id="male" value="male" {{old('gender')=='male' ? 'checked' : ''}}>Male
                <input type="radio" name="gender" id="female" value="female" {{old('gender')=='female' ? 'checked' : ''}}>Female
                @if($errors -> has ('gender'))
                <span class="gender1">{{$errors->first('gender')}}</span>
                @endif
            </div>
            <div class="email">
            <img src="image/mail.png" alt="" width="20px" height="15px">
                <input type="text" name="email" placeholder="E-mail Id" value="{{old('email')}}">
                @if($errors -> has ('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="contact">
            <img src="image/phone.png" alt="" width="20px" height="15px">
                <input type="text" name="contact" placeholder="Contact No" value="{{old('contact')}}">
                @if($errors -> has ('contact'))
                <span class="text-danger">{{$errors->first('contact')}}</span>
                @endif
            </div>
            <div class="password">
            <img src="image/password.png" alt="" width="20px" height="15px">
                <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
                @if($errors -> has ('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
            </div>
            <div class="cpassword">
            <img src="image/password.png" alt="" width="20px" height="15px">
                <input type="password" name="cpassword" placeholder="Confirm Password" value="{{old('cpassword')}}">
                @if($errors -> has ('cpassword'))
                <span class="text-danger">{{$errors->first('cpassword')}}</span>
                @endif
            </div>
            <div class="address">
            <img src="image/address.jpg" alt="" width="20px" height="15px">
                <input type="textarea" name="address" placeholder="Address" value="{{old('address')}}" width="50px" height="24px">
                @if($errors -> has ('address'))
                <span class="text-danger">{{$errors->first('address')}}</span>
                @endif
            </div>
            <div class="pincode">
            <img src="image/pincode.png" alt="" width="20px" height="15px">
                <input type="text" name="pincode" placeholder="Pincode" value="{{old('pincode')}}">
                @if($errors -> has ('pincode'))
                <span class="text-danger">{{$errors->first('pincode')}}</span>
                @endif
            </div>
            <div class="state">
            <img src="image/state.png" alt="" width="20px" height="15px">
                <input type="text" name="state" placeholder="State" value="{{old('state')}}" list="exampleList">
                <datalist id="exampleList">
                    <option value="Arunacalam pradesh">Arunacalam pradesh</option>
                    <option value="Goa">Goa</option>
                    <option value="Tamilnadu">Tamilnadu</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Karnadaka">Karnadaka</option>
                    <option value="Pune">Pune</option>
                    <option value="Orisa">Orisa</option>
                </datalist>
                @if($errors -> has ('state'))
                <span class="text-danger">{{$errors->first('state')}}</span>
                @endif
            </div>
            </div>
            <div class="button">
                <input type="submit" value="Register" class="btn">
            </div>
        </form>

    </div>
</body>
</html>