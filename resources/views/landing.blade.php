<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
     crossorigin="anonymous">
     <link rel="icon" href="{{ asset("favicon.ico") }}">
    <title>HOME</title>
</head>
<body><br>
<br>

    <center>
        <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
         @endif
            <u>
                <h1>CRUD Application</h1>
            </u>
            <br>
            <br>
            <br>
            <div class="">
                <a class="badge badge-success" href="{{ url('login') }}"><button  type="button" class="btn btn-primary">Log In</button></a>
                <a class="badge badge-success" href="{{ url('display') }}"><button type="button" class="btn btn-success">Register</button></a>
                {{-- <a class="badge badge-success" href="{{ url('/display') }}"><button type="button" class="btn btn-warning">Edit Data</button></a>
                <a class="badge badge-success" href="{{ url('/apimenu') }}"><button type="button" class="btn btn-info">Show API Data</button></a> --}}

                {{-- <button type="button" class="btn btn-warning"><a href="{{ url('/display') }}">Update Dat</a>a</button> --}}
            </div>
        </div>
    </center>
</body>
</html>