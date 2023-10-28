@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="register-image">
            <figure><img src="{{ asset('images/booklover.png') }}" alt="register image" style="width: 250px; height: 170px; display: block; margin: 0 auto;"></figure>
        </div>            

        <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
            <h4>Anggota Register</h4><hr>
            <form action="{{ route('anggota.create') }}" method="post">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif    
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                    <div class="form-group">
                        <label for="noktp">No KTP</label>
                        <input type="text" class="form-control" name="noktp" placeholder="Enter KTP number" value="{{ old('noktp') }}">
                        <span class="text-danger">@error('noktp'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Enter your name" value="{{ old('nama') }}">
                        <span class="text-danger">@error('nama'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Enter your address" value="{{ old('alamat') }}">
                        <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" name="kota" placeholder="Enter your city" value="{{ old('kota') }}">
                        <span class="text-danger">@error('kota'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="Enter telephone number" value="{{ old('no_telp') }}">
                        <span class="text-danger">@error('no_telp'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group mb-3">
                        <label for="file_ktp"> File KTP</label>
                        <input type="file" class="form-control" name="file_ktp" id="inputImage"
                            aria-describedby="emailHelp">
                            <span class="text-danger">@error('file_ktp'){{ $message }}@enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
