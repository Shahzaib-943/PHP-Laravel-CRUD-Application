<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="icon" href="{{ asset("favicon.ico") }}">
        <title>API DATA</title>
    </head>

    <body>
<br>
        <div class="container">
            
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($apidata2 as $data) --}}
                        
                            {{-- <tr>
                                <td>{{ $apidata2['id'] }}</td>
                                <td>{{ $apidata2['name'] }}</td>
                                <td>{{ $apidata2['username'] }}</td>
                                <td>{{ $apidata2['email'] }}</td>
                                <td>{{ $apidata2['address']['street']." ".$apidata2['address']['suite'].",".$apidata2['address']['city'].",".$apidata2['address']['zipcode'].",".$apidata2['address']['geo']['lat'].",".$apidata2['address']['geo']['lng']}}</td>
                            </tr>                        
                         --}}
                    {{-- @endforeach --}}

                @foreach ($apidata2 as $data)
                        
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['username'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['address']['street']." ".$data['address']['suite'].",".$data['address']['city'].",".$data['address']['zipcode'].",".$data['address']['geo']['lat'].",".$data['address']['geo']['lng']}}</td>
                </tr>                        
            
        @endforeach


        {{-- <tr>
            <td>{{   $apidata2['id']  }}</td>
            <td> $data->'name' </td>
            <td>$data->'username'</td>
            {{-- <td>{{ $data['email'] }}</td>
            <td>{{ $data['address']['street']." ".$data['address']['suite'].",".$data['address']['city'].",".$data['address']['zipcode'].",".$data['address']['geo']['lat'].",".$data['address']['geo']['lng']}}</td> --}}
        </tr>    --}}

                </tbody>
            </table>
            <a href="{{ url('/') }}" class="badge badge-warning"><button type="button" class="btn btn-primary">Home</button></a>
    </div>


    </body>