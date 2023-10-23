@extends('layouts.mainlayout')

@section('title', 'Book List')

@section('page-name', 'book list')

@section('content')
    <div class="my-2">
        <div class="d-flex flex-wrap">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card " style="width: 15rem; height: 100%">
                    <img src="{{ asset('images/download.png') }}" class="card-img-top mx-auto" alt="..." style="height: 12rem; width: 10rem" display: block; margin: 0 auto;>
                    <div class="card-body d-flex flex-column justify-content-around" style="overflow: hidden;">
                        <h4 class="card-title fw-bold">Si Kancil Pencuri Timun Pak Tani</h4>
                        <p class="card-text">Seseorang di dunia ini</p>
                        <p class="card-text">kapanpun dia mau</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card" style="width: 15rem; height: 100% "">
                    <img src="{{ asset('images/download.png') }}" class="card-img-top mx-auto" alt="..." style="height: 12rem; width: 10rem" display: block; margin: 0 auto;>
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h4 class="card-title fw-bold">Laut Bercerita</h4>
                        <p class="card-text">Leila S. Chudori</p>
                        <p class="card-text">2023</p>
                        <a href="#" class="btn btn-primary ">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card" style="width: 15rem; height: 100% "">
                    <img src="{{ asset('images/download.png') }}" class="card-img-top mx-auto" alt="..." style="height: 12rem; width: 10rem" display: block; margin: 0 auto;>
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h4 class="card-title fw-bold">Laskar Pelangi</h4>
                        <p class="card-text">Andrea Hirata</p>
                        <p class="card-text">2010</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card" style="width: 15rem; height: 100% "">
                    <img src="{{ asset('images/download.png') }}" class="card-img-top mx-auto" alt="..." style="height: 12rem; width: 10rem" display: block; margin: 0 auto;>
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h4 class="card-title fw-bold">Prophet Muhammad</h4>
                        <p class="card-text">Muhammad</p>
                        <p class="card-text">2008</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card" style="width: 15rem; height: 100% "">
                    <img src="{{ asset('images/download.png') }}" class="card-img-top mx-auto" alt="..." style="height: 12rem; width: 10rem" display: block; margin: 0 auto;>
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h4 class="card-title fw-bold">Ayahku Bukan Pembohong</h4>
                        <p class="card-text">Tere Liye</p>
                        <p class="card-text">2010</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card" style="width: 15rem; height: 100% "">
                    <img src="{{ asset('images/download.png') }}" class="card-img-top mx-auto" alt="..." style="height: 12rem; width: 10rem" display: block; margin: 0 auto;>
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h4 class="card-title fw-bold">Ayahku</h4>
                        <p class="card-text">Tere Liye</p>
                        <p class="card-text">2010</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection