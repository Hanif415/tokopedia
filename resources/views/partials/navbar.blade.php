<header class="bg-light mb-3">
    <div class="mx-5">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-end mb-md-0">
            <li><a href="#" class="nav-link text-secondary">Tentang Tokopedia</a></li>
            <li><a href="#" class="nav-link text-secondary">Mitra Tokopedia</a></li>
            <li><a href="#" class="nav-link text-secondary">Mulai Berjualan</a></li>
            <li><a href="#" class="nav-link text-secondary">Promo</a></li>
            <li><a href="#" class="nav-link text-secondary">Tokopedia Care</a></li>
        </ul>
    </div>
</header>
<header class="shadow-sm">
    <div class="mx-4">
        <div class="d-flex flex-wrap justify-content-start">
            <a href="/" class="me-3 text-decoration-none">
                <img class="img-fluid" width="170" src="img/Tokopedia.png" alt="">
            </a>

            <a class="mt-2 text-decoration-none text-muted me-3"><p class="fs-6">Kategori</p></a>

            <form class="me-lg-3 col-7" role="search">
                <div class="input-group">
                    <input type="search" class="form-control form-control-dark text-bg-light input-sm"  placeholder="Cari di Tokopedia" aria-label="Search">
                    <button type="button" class="btn btn-outline-success input-group-text bi bi-search"></span>
                </div>
            </form>
            
            <div class="text-end me-3">
                <button type="button" class="btn bi bi-cart"></button>
            </div>

            <div class="text-end">
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</button>
                <a href="register" type="button" class="btn btn-success">Daftar</a>
            </div>
        </div>
    </div>
    <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-end">
        <li><a href="#" class="nav-link px-2 text-secondary">Kursi Kantor</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">Kandang Kucing</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">Tas Selempang Pria</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">Kalender 2023</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">Oppo A53</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">Iphone 11 Second</a></li>
        <li><a class="nav-link  mx-5 px-2 dropdown-toggle text-secondary"><span class="bi bi-geo-alt"></span> Dikirim ke <b class="text-dark">Kecamatan, Kabupaten</b></a></li>
    </ul>
</header>

@include('login.login-modal')
