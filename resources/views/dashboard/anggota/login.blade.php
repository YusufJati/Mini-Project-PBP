<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="register-image">
                <figure><img src="{{ asset('images/booklover.png') }}" alt="register image" style="width: 250px; height: 170px; display: block; margin: 0 auto;"></figure>
            </div> 

            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                <h4>Anggota Login</h4><hr>
                <form action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="{{ route('anggota.register') }}"> Create new Account</a> 
                </form>
            </div>
        </div>
    </div>


</body>
</html>