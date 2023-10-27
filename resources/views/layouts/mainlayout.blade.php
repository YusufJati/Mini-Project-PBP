<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<style>
    .main{
        height: 100vh;
        justify-content: space-between;
        align-items: center;
    }
    .center-form{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        flex-grow: 1;
    }

    .search-input {
        width: 350px;

    }


</style>
<body>
    <div class="main">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/bukk.png') }}" width="30" height="30" class="d-inline-block align-text-top me-0">
                    Perpustakaan
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

                    <div class="center-form">
                        <form class="d-flex p-2" role="search" >
                        <br><input class="form-control me-3 search-input" type="search" placeholder="Cari Judul Buku, Penulis, ISBN" aria-label="Search">
                        </form>
                    </div>

                    {{-- sign in - sign up --}}
                    @guest
                        <div>
                            <a class="btn btn-outline-success text-white" href="{{ route('anggota.register') }}">Sign Up</a>
                            <a class="btn btn-outline-success text-white" href="{{ route('anggota.login') }}">Sign In</a>
                        </div>
                    @endguest


                    {{-- logout --}}
                    @auth
                        <div>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary text-white">Logout</button>
                            </form>
                        </div>
                    @endauth

                </div>
            </div>
        </nav>
        <div class="body-content">
            <div class="row g-0 h-100">
                <div class="content p-5">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
