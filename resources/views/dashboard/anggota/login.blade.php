<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/ajax.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="register-image">
                <figure><img src="{{ asset('images/booklover.png') }}" alt="register image" style="width: 250px; height: 170px; display: block; margin: 0 auto;"></figure>
            </div> 

            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                <h4>Login</h4><hr>
                <form action="{{ route('anggota.check') }}" method="post">  
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id = "password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                            <input type="checkbox" onclick="visiblePassword()" style="margin-top: 20px">Show Password
                            <script>
                                function visiblePassword() {
                                var x = document.getElementById("password");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                                }
                            </script>
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <br>
                        <a href="{{ route('anggota.register') }}"> Buat akun baru</a> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>