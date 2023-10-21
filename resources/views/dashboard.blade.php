@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h5 class="fw-normal"><a href="/" class="text-decoration-none text-dark">Dashboard</a></h5>
    <div class="d-flex">
        <p class="ms-auto">
            <a href="/" class="text-decoration-none">Dashboard</a>
            <a href="/" class="text-decoration-none text-muted"> / Daftar Buku</a>
        </p>
    </div>

    {{-- search --}}

    

    {{-- isi content --}}
    <div class="container">
        <div class="row">
            {{-- foreach --}}
            <div class="card mb-3 p-0" style="max-width: 300px;">
                <div class="row g-0">
                    <a href="#" class="text-decoration-none text-dark d-flex">
                        {{-- gambar --}}
                        <div class="images col-md-4">
                            <img src="assets/dilan.jpg" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="detail col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku</h5>
                                <p class="card-text">Pengarang</p>
                                <p class="card-text">Penerbit</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
