@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h5 class="fw-normal"><a href="/" class="text-decoration-none text-dark">Dashboard</a></h5>
    <div class="d-flex">
        <p class="ms-auto">
            <a href="/" class="text-decoration-none">Dashboard</a>
            <a href="/detail" class="text-decoration-none text-muted"> / Detail Buku</a>
        </p>
    </div>

    {{-- isi content --}}
    <div class="container p-0">
        <div class="row">
            <div class="detail col-md-8">
                <h5 class="fw-normal">Detail Buku</h5>
                <div class="card mb-3" style="max-width: 100%; height: 360px;">
                    <div class="row g-0">
                        <div class="images col-md-4"> <!-- Kolom gambar diperbesar -->
                            <img src="assets/dilan.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="detail-book col-md-8"> <!-- Kolom detail buku -->
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku</h5>
                                <p class="card-text">4.8/5 {emot bintang}</p>
                                <h5 class="card-title">Deskripsi Buku</h5>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <td>Stok</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Pengarang</td>
                                            <td>&nbsp;: </td>
                                            <td>Pidi Baiq</td>
                                        </tr>
                                        <tr>
                                            <td>Penerbit</td>
                                            <td>&nbsp;:</td>
                                            <td>Pastel Books</td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>&nbsp;:</td>
                                            <td>Fiksi</td>
                                        </tr>
                                        <tr>
                                            <td>ISBN</td>
                                            <td>&nbsp;:</td>
                                            <td>0876545678987654</td>
                                        </tr>
                                        <tr>
                                            <td>Editor</td>
                                            <td>&nbsp;:</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Kota Terbit</td>
                                            <td>&nbsp;:</td>
                                            <td>Bandung</td>
                                        </tr>
                                    </table>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="review col-md-4">
                <h5 class="fw-normal">Review Buku</h5>
                <div class="content shadow p-3 mb-5 bg-light-subtle rounde">
                    <div class="komen ">
                        <li class="list-group-item">
                            <table>
                                <tr>
                                    <td><small>Dewi Lokasari</small></td>
                                </tr>
                                <tr>
                                    <td><small>4 {emot bintang}</small></td>
                                </tr>
                                <tr>
                                    <td><small>Buku bagus, alur cerita tidak monoton, pengambaran latarnya juga bagus</small></td>
                                </tr>
                            </table>
                        </li>
                        <hr>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
