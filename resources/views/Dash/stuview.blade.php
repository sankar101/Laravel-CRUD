<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
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
        }
        .head{
            border: 1px solid black;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        h2{
            margin-left: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .button{
            background-color: orange;
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
        .edit{
            float: right;
            margin-right: 10px;
            background-color: orange;
            padding: 7px 30px;
            border-radius: 5px;
            font-weight: bold;
            color: black;
            margin-top: 15px;  
            background-image: url('/image/edit.png');
            background-repeat: no-repeat;
            background-size: 20px 20px;
            background-position: left;
            border: 1px solid yellow;
            cursor: pointer;
        }
        .label1 {
            margin-left:130px;
            display: inline-block;
            width:30%;
            color:blue;
            text-align:right;
            padding-bottom: 20px;
        }
        .label2 {
            margin-left:70px;
            display: inline-block;
            width:20%;
        }
        .container{
            margin-top: 40px; 
            border: 1px solid black; 
            padding-top: 15px;
            padding-bottom:15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="main">
    <span class="ms">MANAGEMENT SYSTEM </span><a href="{{url('stulogin')}}" class="logout">Logout</a>
    </div>
    <div class="head">
       <h2><img src="/image/id.png" alt="" width="20px" height="18px">&nbsp;View</h2>
    </div>
    <a href="{{url('Studentlist')}}">
    <input type="button" value="Back" class="button"></a>
      <a href="{{ route('edit-student', ['id' => $student->id]) }}" class="edit">Edit</a>
    <div class="container">
        <label class="label1">User Id</label><label class="label2">{{$student->reg_id}}</label>
        <label class="label1">User Name</label><label class="label2">{{$student->name}}</label>
        <label class="label1">DOB</label><label class="label2">{{$student->dob}}</label>
        <label class="label1">Gender</label><label class="label2">{{$student->gender}}</label>
        <label class="label1">Email</label><label class="label2">{{$student->email}}</label>
        <label class="label1">Contact</label><label class="label2">{{$student->contact}}</label>  
        <label class="label1">Address</label><label class="label2">{{$student->address}}</label>
        <label class="label1">State</label><label class="label2">{{$student->state}}</label>
        <label class="label1">Pincode</label><label class="label2">{{$student->pincode}}</label>
    </div> 
</body>
</html>