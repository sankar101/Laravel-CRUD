<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
            background-color: green;
            border: none;
            padding: 8px 30px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            margin-top: 10px;
            cursor: pointer;
        }
        table{
            width: 98%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-left: 10px;
        }
        th,td{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: lightblue;
            color: black;
            font-weight: bold;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        .table-container{
            max-height: 220px;
            overflow: auto;
            margin-top: 10px;
        }
        #searchInput{
            margin-right: 10px;
            float: right;
            margin-top: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-right: 40px;
            background-image: url('image/search.png');
            background-repeat: no-repeat;
            background-size: 30px 25px;
            background-position: right;
            border: 1px solid black;
        }
        select{
            margin-top: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-right: 40px;
        }
        .field{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="main">
    <span class="ms">MANAGEMENT SYSTEM </span><a href="{{url('stulogin')}}" class="logout">Logout</a>
    </div>
    <div class="head">
        <h2><img src="image/list (1).png" alt="" width="20px" height="18px">&nbsp;List</h2>
    </div>
    <a href="{{url('sturegister')}}">
    <input type="button" value="+Register" class="button"> </a><br><br>
    <input type="text" id="searchInput" placeholder="Name Search">
    <label class="field" id="field">Select the field to sort </label><br>
                <select id="exampleList">
                    <option value="">Sort</option>
                    <option value="id">Id</option>
                    <option value="user id">User Id</option>
                    <option value="name">Name</option>
                    <option value="gender">Gender</option>
                    <option value="email">Email</option>
                    <option value="state">State</option>
                </select>           
    <div class="table-container">
    <script>
    $(document).ready(function () {
        $("#searchInput").on("input", function () {
            var searchText = $(this).val().toLowerCase();
            $("table tr:not(:first-child)").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });
    });
    </script>
        <table>
            <tr style="background-color: lightblue; font-weight:bold;">
                <td>S.no</td>
                <td>User Id</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Email</td>
                <td>Contact</td>
                <td>DOB</td>
                <td>Address</td>
                <td>Pincode</td>
                <td>State</td>
                <td>Status</td>
                <td>Delete</td>
            </tr>
            @foreach ($student as $students)
            <tr>
                <td>{{ $students -> id}}</td>
                <td><a href="{{ url('Dash.stuview',$students->id) }}">{{ $students -> reg_id }}</a></td>
                <td>{{ $students -> name}}</td>
                <td>{{ $students -> gender}}</td>
                <td>{{ $students -> email}}</td>
                <td>{{ $students -> contact}}</td>
                <td>{{ $students -> dob}}</td>
                <td>{{ $students -> address}}</td>
                <td>{{ $students -> pincode}}</td>
                <td>{{ $students -> state}}</td>
                <td><a href="users/{{$students->id}}">
                {{$students-> status ? 'Use' : 'Not Use'}}
                </a></td>
                <td><a href="delete/{{$students->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>



   