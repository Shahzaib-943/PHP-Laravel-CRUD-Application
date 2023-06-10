<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="icon" href="{{ asset("favicon.ico") }}">
        <title>API DATA</title>
    </head>

    <body>
        <br>
        
        
        <center>
            <div class="container">
            
                <u>
                    <h1>API Menu</h1>
                </u>
                <br>
                <br>
                <br>
                <div class="">
                    <a class="badge badge-success" href="{{ url('apidata1') }}"><button  type="button" class="btn btn-primary">API 1</button></a>
                    <a class="badge badge-success" href="{{ url('apidata2') }}"><button type="button" class="btn btn-success">API by ID</button></a>
                    {{-- <a class="badge badge-success" href="{{ url('/display') }}"><button type="button" class="btn btn-warning">Edit Data</button></a>
                    <a class="badge badge-success" href="{{ url('/apidata') }}"><button type="button" class="btn btn-info">Show API Data</button></a> --}}
    
                    {{-- <button type="button" class="btn btn-warning"><a href="{{ url('/display') }}">Update Dat</a>a</button> --}}
                </div>
            </div>
        </center>
        
        
        
        
        
        
        
    </body>
</html>