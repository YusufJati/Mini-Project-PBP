<div class="main">
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid mx-4">
            <a class="navbar-brand" href="/">
                <img src="assets/{{ $image }}" width="25">
                Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "dashboard") ?  'active': '' }}" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/koleksi">Koleksi</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <!-- ganti gambar -->
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


