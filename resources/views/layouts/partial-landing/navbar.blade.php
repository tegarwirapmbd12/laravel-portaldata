<div class="container-xxl position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">

            <h4 class="text-primary m-0"><img src="{{ asset('portal/img/logo3.png') }}" alt="Logo"> Kabupaten Semarang</h4>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">

              <!--  <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#searchModal" class="nav-item nav-link toggle-icon" aria-current="page"><i class="fa fa-search"></i></a> -->
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="https://data.semarangkab.go.id/ckan" target="_blank" class="nav-item nav-link" aria-current="page">Open Data</a>
                <a href="https://statistikkominfo.semarangkab.go.id/" target="_blank" class="nav-item nav-link">Statistik Sektoral</a>
                <a href="http://gis.semarangkab.go.id/" target="_blank" class="nav-item nav-link">Data Spasial</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dashboard</a>
                    <div class="dropdown-menu m-0">
                        <a href="booking.html" class="dropdown-item">Dataset</a>
                        <a href="team.html" class="dropdown-item">Informasi Umum</a>
                        <a href="testimonial.html" class="dropdown-item">Publikasi BPS</a>
                        <a href="testimonial.html" class="dropdown-item">Data Capaian</a>
                    </div>
                </div> --}}
                <!-- <a href="contact.html" class="nav-item nav-link">Publikasi</a> -->
            </div>
            <a href="#publikasi" class="btn btn-primary py-2 px-4">Infografis</a>
        </div>
    </nav>


    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7  text-lg-start">
                    <h2 class="text-white m-0" style="text-decoration: underline;
                    text-decoration-color: red"> Portal</h2>
                    <h1 class=" display-2 text-white animated slideInLeft"> Satu Data</h1>
                    <h3 class="text-white animated slideInLeft">Kabupaten Semarang</h3>
                    <br>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Satu Data Kabupaten Semarang merupakan kebijakan tata kelola data pemerintah yang bertujuan untuk menciptakan data berkualitas mudah diakses, dan dapat dibagipakaikan antar semua perangkat daerah di Kabupaten Semarang dan Pemerintah Pusat. Satu Data Kabupaten Semarang merupakan amanat Peraturan Presiden Nomor 39 Tahun 2019 Tentang Satu Data Indonesia.
                        <br>Melalui Satu Data Kabupaten Semarang, seluruh data Pemerintah Daerah Kabupaten Semarang dan data instansi lain yang terkait dapat bermuara di Portal Satu Data indonesia. Melalaui Portal Satu Data Kabupaten Semarang kami berupaya penuh untuk memperbaiki tata kelola data demi terwujudnya transparansi dan akuntabilitas pemerintah, serta mendukung pembangunan nasional
                    </p>
                    <!-- <a href="#tentangkami" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pelajari Lebih Lanjut</a> -->
                    <a href="{{ url('/dashboard') }}" target="_blank" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Dashboard</a>
                    <br>
                    <form class="form-inline my-4" id="search-form" action="{{ route('statistik_sektoral') }}" method="GET">
                        <input class="form-control mr-sm-2" type="search" placeholder="cari dataset disini" target="_blank" id="searchInput" name="search">
                        <button id="search-button" class="btn btn-primary my-2 my-sm-2" type="submit" target="_blank" name="submit">SEARCH</button>
                    </form>
                </div>
                <div class="col-lg-5 text-center text-lg-end overflow-hidden" style="position: relative; display: inline; ">
                    <img class="img-fluid" src="{{ asset('portal/img/background92.png') }}" alt="" style="width: 200%;">
                    <!-- <a href="#">Image by GarryKillian</a> on Freepik -->
                    <img class="img-fluid" src="{{ asset('portal/img/maskott.png') }}" alt="" style="animation: none !important; position: absolute; bottom: 0; right: 20px; height: 100%;">
                </div>
            </div>
        </div>
    </div>

</div>
