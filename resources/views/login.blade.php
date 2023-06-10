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
     <link rel="icon" href="{{ asset("favicon.ico") }}">
    <title>Log In</title>
</head>
<body>
    <form action="{{ url('/login') }}" method="get">
        @csrf
        <div class="container">
                <u>
                    <h1 class="text-center">Log In</h1>
                </
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="exampleFormControlInput1" placeholder="name@example.com">
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
                  
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('/') }}" ><button type="button" class="btn btn-success">Back</button></a>
                </div>
        
        </div>
    </form>
</body>
</html>