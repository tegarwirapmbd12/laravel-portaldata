@extends('layouts.landing')

@section('content')
        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Tautan Terkait</h5>
                    <h1 class="mb-5">Satu Data Kabupaten Semarang</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="https://data.semarangkab.go.id/satupeta/petadua" target="_blank"><img class="img-fluid" src="{{ asset('portal/img/satupeta.png') }}" alt=""></a>
                            </div>
                            <h5 class="mb-0">Satu Peta</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="http://gis.semarangkab.go.id/" target="_blank"><img class="img-fluid" src="{{ asset('portal/img/big.png') }}" alt=""></a>
                            </div>
                            <h5 class="mb-0">Geoportal</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="https://statistikkominfo.semarangkab.go.id/" target="_blank"><img class="img-fluid" src="{{ asset('portal/img/logobulat.png') }}" alt=""></a>
                            </div>
                            <h5 class="mb-0">Statistik Sektoral</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="https://data.semarangkab.go.id/bps" target="_blank"><img class="img-fluid" src="{{ asset('portal/img/bps.png') }}" alt=""></a>
                            </div>
                            <h5 class="mb-0">BPS</h5>
                            <small>Kabupaten Semarang</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <!-- Testimonial Start -->
        <div id="main-content">
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-secondary " style=" font-weight: bold; margin-left: 20px;">PUBLIKASI</h1>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mt-8 pt-5 text-center" style="color: #FFBF00;">INFOGRAFIS</h4>
                                    <br>
                                    <div id="publikasi" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="container">
                                            <div class="container">
                                              <ul id="filters" class="clearfix" >
                                                <li><span class="filter active" data-filter=".1, .2, .3, .4, .5, .6, .7, .8, .9, .10, .11, .12, .13, .14, .15">All</span></li>
                                                 @foreach($infografi_categories as $infografi_category)
                                                 <li><span class="filter" data-filter=".{{ $infografi_category->id }}" style="background-image:url(https://data.jatengprov.go.id/uploads/group/2018-04-16-014445.454924industry.jpg)">{{ $infografi_category->name }} </span></li>
                                                @endforeach
                                              </ul>
                                              <div id="portfoliolist">
                                              @foreach($infografis as $infografi)
                                              <div class="portfolio {{ $infografi->infograficategory_id }}" data-cat="{{ $infografi->infograficategory_id }}">
                                                  <div class="portfolio-wrapper">
                                                  <img src="{{ $infografi->image }}" alt="" style="width: 300px; height: 300px;">
                                                      <div class="label">
                                                          <div class="label-text">
                                                          <a href="#" class="text-title" data-bs-toggle="modal" data-bs-target="#ModalView{{ $infografi->id }}">{{ $infografi->title }}</a>
                                                          <!-- <ul class="portfolio-link">
                                                                <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                                               </ul> -->
                                                          </div>
                                                          <!-- <div class="label-bg"></div> -->
                                                      </div>
                                                  </div>
                                              </div>
                                               <!-- Modal For Infografis -->
                                                <div class="modal fade" id="ModalView{{ $infografi->id }}" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <!-- <a download type="button" id="imagelink2" class="btn btn-primary btn-sm" href="#"><span class="fa fa-download"></span> Unduh</a> -->
                                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" aria-label="Close"><span class="fa fa-times"></span> Tutup</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ $infografi->image }}" id="imagepreview2" style="width: 100%;">
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>{{ $infografi->title }}</h5>
                                                                <label class="form-label">{{ $infografi->caption }}</label>
                                                        </div>
                                                            <div class="modal-footer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              @endforeach
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
                        <!-- <script>
                            $(document).ready(function() {
                                $('#example').DataTable({
                                    dom: 'Blfrtip',
                                    buttons: [
                                        'copy', 'csv', 'excel', 'pdf', 'print',
                                    ]
                                });
                            });
                        </script> -->
                    </div>
                </div>
        </div>
        </section>
        </div>
        <!-- Testimonial End -->

        <!-- Publikasi Buku Start -->
		 <div id="publikasi" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Publikasi</h5>
                    <h1 class="mb-5">BUKU STATISTIK</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">

					<div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/BukuStatistik23.pdf') }}">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/St23.png') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/Buku4th23.pdf') }}" >
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/Buku4th23.jpg') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/Buku1th23.pdf') }}">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/Buku1th23.jpg') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/Buku2th23.pdf') }}">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/Buku2th23.jpg') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/Buku3th23.pdf') }}">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/Buku3th23.jpg') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/Buku5th23.pdf') }}">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/Buku5th23.jpg') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/BukuStatistikTh22.pdf') }}">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/BukuStatistikTh22.jpg') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>

                    <div class="testimonial-item bg-transparent border rounded p-4 pdf-item" data-pdf="{{ asset('storage/img/BUKU-METADATA-STATISTIK-SEKTORAL.pdf') }}">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/img/METADATA-STATISTIK-SEKTORAL.png') }}" style="width: 300px; height: 400px;" download>
                            <br>
                        </div>
                        <p class="text-center">Sumber: Pemerintah Kab. Semarang</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Publikasi Buku End -->

        <!-- About Start -->
        <div class="container-xxl py-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('portal/img/satudanu.png') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('portal/img/rawapening.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('portal/img/gedongsongo.jpeg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('portal/img/semilir.png') }}">
                            </div>
                        </div>
                    </div>
                    <div id="tentangkami" class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
                        <h1 class="mb-4">Selamat Datang di Satu Data Kabupaten Semarang</h1>
                        <p class="mb-4"> Satu Data Indonesia (SDI) Tingkat Kabupaten Semarang merupakan kebijakan tata kelola data pemerintah yang bertujuan untuk menciptakan data berkualitas, mudah diakses, dan dapat dibagipakaikan antar Instansi Pusat serta Kabupaten Semarang. Kebijakan ini tertuang dalam Peraturan Presiden no. 39 tahun 2019 tentang Satu Data Indonesia. Melalu SDI, seluruh data pemerintah dan data instansi lain yang terkait dapat bermuara di Portal Satu Data Indonesia (data.go.id). </p>

                        <p class="mb-4"></p>Pemerintah Kabupaten Semarang telah mendukung penerapan Satu Data Indonesia dengan merumuskan Peraturan Bupati Semarang Nomor Nomor 66 Tahun 2020 Tentang Penyelenggaraan Satu Data Indonesia Di Kabupaten Semarang, untuk mewujudkan data yang terpadu akurat dan dapat dibagi pakai kemanfaatan bagi pemerintah dan masyarakat.</p>

                        <p class="mb-4">Portal Satu Data Indonesia Tingkat Kabupaten Semarang merupakan portal resmi data terbuka Kabupaten Semarang yang dikelola oleh Dinas Komunikasi dan Informatika. Melalui Portal Satu Data Indonesia Tingkat kabupaten Semarang, kami berupaya penuh untuk memperbaiki tata kelola data demi terwujudnya transparansi dan akuntabilitas pemerintah Kabupaten Semarang, serta mendukung pembangunan nasional.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $data['visitor'] }}</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Total Pengunjung</p>
                                        <h6 class="text-uppercase mb-0">Portal</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"></h1>
                                    <div class="ps-4">
                                        <p class="mb-0"></p>
                                        <h6 class="text-uppercase mb-0">Pengunjung</h6>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        @endsection

