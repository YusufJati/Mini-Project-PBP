<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anggota Register</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="register-image">
                <figure><img src="{{ asset('images/booklover.png') }}" alt="register image" style="width: 250px; height: 170px; display: block; margin: 0 auto;"></figure>
            </div>            

            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                <h4>Anggota Register</h4><hr>
                <form action="{{ route('anggota.create') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Enter your name">
                    </div>
                    <br>
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
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Enter your address">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" name="kota" placeholder="Enter your city">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="Enter telephone number">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="text" class="form-control" name="no_ktp" placeholder="Enter KTP number">
                    </div>
                    <br>
                    <div class="form-group mb-3">
                        <label for="file_ktp"> File KTP</label>
                        <input type="file" class="form-control" name="file_ktp" id="inputImage"
                            aria-describedby="emailHelp" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="{{ route('anggota.login') }}"> I already have an account</a>
                </form>
            </div>
        </div>
    </div>


</body>
</html>