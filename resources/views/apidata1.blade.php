<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="icon" href="{{ asset("favicon.ico") }}">
        <title>API DATA</title>
    </head>

    <body>

        <div class="container">
            
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Avatar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apidata1 as $data)
                        
                            <tr>
                                <td>{{ $data['id'] }}</td>
                                <td>{{ $data['email'] }}</td>
                                <td>{{ $data['first_name'] }}</td>
                                <td>{{ $data['last_name'] }}</td>
                                <td><img src="{{ $data['avatar'] }}" width="70px" height="70px" alt=""></td>
                            </tr>                        
                        
                    @endforeach

                    @foreach ($apidata2 as $key => $data)
                    <tr>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['email'] }}</td>
                        <td>{{ $data['first_name'] }}</td>
                        <td>{{ $data['first_name'] }}</td>
                        <td><img src="{{ $data['avatar'] }}" width="70px" height="70px" alt=""></td>
                    </tr>                        
                @endforeach

                </tbody>
            </table>
            <a href="{{ url('/') }}" class="badge badge-warning"><button type="button" class="btn btn-primary">Home</button></a>
    </div>


    </body>