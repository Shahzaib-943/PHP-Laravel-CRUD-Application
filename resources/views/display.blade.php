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
    <title>Display</title>
</head>
<body><br>
    <div class="container">
        @if (Session::has('successdel'))
            <div class = "alert alert-success">
                    {{ Session::get('successdel') }}
            </div>
            
        @endif
        @if (Session::has('successupd'))
            <div class="alert alert-success">
                {{ Session::get('successupd') }}
            </div>
            
        @endif
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $data as $customer)
                    
                <tr>
                    <td scope="row">{{ $customer['id'] }}</td>
                    <td>{{  $customer['name']}}</td>
                    <td>{{ $customer['email'] }}</td>
                    {{-- <td>{{ $customer->password }}</td> --}}
                    <td>
                        <a href="{{ url('/delete')}}/{{ $customer->id }}"><button class="btn btn-danger">Delete</button></a>
                        <a href="{{url('/update')}}/{{ $customer->id }}"><button class="btn btn-info">Edit</button></a>
                    </td>
                    {{-- <td>
                        <a href="{{url('/update')}}/{{ $customer->id }}"><button class="btn btn-info">Edit</button></a>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="badge badge-warning"><button type="button" class="btn btn-primary">Home</button></a>
</div>
</body>
</html>