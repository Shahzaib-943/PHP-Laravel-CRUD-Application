<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
     crossorigin="anonymous">
    <title>Update Form</title>
</head>
<body>
     
    <form action="{{ '/edit'}}/{{$data->id}} " method="POST">
        @csrf
        {{-- <input type="hidden" value="{{ $data->id }}">--}}
        <div class="container"> 
                <u>
                    <h1 class="text-center">Update Data</h1>
                </u>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >User Name</label>
                    <input type="text" class="form-control" value="{{ $data->name }}" name="name" id="exampleFormControlInput1" placeholder="Enter Name">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span><br>

        
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $data->email }}" id="exampleFormControlInput1" placeholder="name@example.com">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span><br>
        
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Enter Password">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror    
                    </span><br>

                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="cnfrmpassword" id="exampleFormControlInput1" placeholder="Renter Password">
                    <span class="text-danger">
                    @error('cnfrmpassword')
                        {{ $message }}
                    @enderror 
                    </span>
                    <br><br>

                    <button type="submit" class="btn btn-primary">Update</button>
                    {{-- <a href="{{ url('/') }}" ><button type="button" class="btn btn-success">Back</button></a> --}}
                </div>
        
        </div>
    </form>
</body>
</html>