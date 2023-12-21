<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="admin/style.css">
</head>
<body>
    <center> <h1>  Login Form </h1> </center>
    <div class="container">
        <div class="row">
          
            <div class="offset-md-3 col-md-6 ">
                <form action="/authenticate" method="POST">
                    @csrf


                    <label>UserEmail : </label><br>
                    <input type="email" placeholder="Enter Useremail" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" ><br>
                    @error('email')
                    <p class="invalid-feedback">{{$message}}</p>  
                    @enderror

                    @error('email')
                    <p class="valid-feedback">{{$message}}</p>  
                    @enderror
                    <br>
                    <label>Password : </label>
                    <input type="password" placeholder="Enter Password" class="form-control @error('email') is-invalid @enderror" value="{{old('password')}}" name="password" >
                    @error('password')
                    <p class="invalid-feedback">{{$message}}</p>  
                    @enderror

                    @error('password')
                    <p class="valid-feedback">{{$message}}</p>  
                    @enderror
                    <input type="submit" value="submit">


            </form>

</div></div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


