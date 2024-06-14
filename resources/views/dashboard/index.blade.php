@extends('layouts.main')

@section('content')
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Beranda</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                {{-- <li class="breadcrumb-item active" aria-current="page">eCommerce</li> --}}
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            {{-- <div class="btn-group">
              <button type="button" class="btn btn-outline-primary">Settings</button>
              <button type="button"
                class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                  href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
              </div>
            </div> --}}
          </div>
        </div>
        <!--end breadcrumb-->


        <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start gap-2">
                  <div>
                    <p class="mb-0 fs-6">Total Aplikasi</p>
                  </div>
                  <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                    <ion-icon name="grid-outline"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h4 class="mb-0">{{ number_format($totalProjects) }} Aplikasi</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start gap-2">
                  <div>
                    <p class="mb-0 fs-6">Total Platform Website</p>
                  </div>
                  <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                    <ion-icon name="globe-outline"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h4 class="mb-0">{{ number_format($totalDataWithPlatform1) }}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start gap-2">
                  <div>
                    <p class="mb-0 fs-6">Total Platform Local</p>
                  </div>
                  <div class="ms-auto widget-icon-small text-white bg-gradient-danger">
                    <ion-icon name="laptop-outline"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h4 class="mb-0">{{ number_format($totalDataWithPlatform2) }}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start gap-2">
                  <div>
                    <p class="mb-0 fs-6">Total Platform Mobile</p>
                  </div>
                  <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                    <ion-icon name="phone-portrait-outline"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h4 class="mb-0">{{ number_format($totalDataWithPlatform3) }}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->


        <div class="row row-cols-1 row-cols-lg-3">
          {{-- Berdasarkan Instansi 1 --}}
          <div class="col">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0" style="padding-left: 4%; border-left: 3px solid rgb(208, 21, 211" >Aplikasi Berdasarkan Instansi</h6>
                </div>
                <div class="countries-list">
                    @foreach ($totals as $opdId => $data)
                  <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="country-icon">
                      <img src="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-jateng-removebg-preview.png') }}" alt="" width="35">
                    </div>
                    <div class="country-name flex-grow-1">
                      <h5 class="mb-0">{{ number_format($data['totalData']) }} Aplikasi</h5>
                      <p class="mb-0 text-secondary">{{ ($data['opdName']) }}</p>
                    </div>
                    <div class="">
                      <p class="mb-0 text-primary d-flex gap-1 align-items-center fw-500"><span>{{ number_format($data['totalPersentase']) }}%</span></p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          {{-- Berdasarkan Instansi 2 --}}
          <div class="col">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0" style="padding-left: 4%; border-left: 3px solid rgb(208, 21, 211">Aplikasi Berdasarkan Instansi</h6>
                </div>
                <div class="countries-list">
                    @foreach ($totals2 as $opdId2 => $data2)
                  <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="country-icon">
                      <img src="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-jateng-removebg-preview.png') }}" alt="" width="35">
                    </div>
                    <div class="country-name flex-grow-1">
                      <h5 class="mb-0">{{ number_format($data2['totalData2']) }} Aplikasi</h5>
                      <p class="mb-0 text-secondary">{{ ($data2['opdName2']) }}</p>
                    </div>
                    <div class="">
                      <p class="mb-0 text-primary d-flex gap-1 align-items-center fw-500"><span>{{ number_format($data2['totalPersentase2']) }}%</span></p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          {{-- Berdasarkan Instansi 3 --}}
          <div class="col">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0" style="padding-left: 4%; border-left: 3px solid rgb(208, 21, 211">Aplikasi Berdasarkan Instansi</h6>
                </div>
                <div class="countries-list">
                    @foreach ($totals3 as $opdId3 => $data3)
                  <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="country-icon">
                      <img src="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-jateng-removebg-preview.png') }}" alt="" width="35">
                    </div>
                    <div class="country-name flex-grow-1">
                      <h5 class="mb-0">{{ number_format($data3['totalData3']) }} Aplikasi</h5>
                      <p class="mb-0 text-secondary">{{ ($data3['opdName3']) }}</p>
                    </div>
                    <div class="">
                      <p class="mb-0 text-primary d-flex gap-1 align-items-center fw-500"><span>{{ number_format($data3['totalPersentase3']) }}%</span></p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          {{-- Berdasarkan Instansi 4 --}}
          <div class="col">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0" style="padding-left: 4%; border-left: 3px solid rgb(208, 21, 211">Aplikasi Berdasarkan Instansi</h6>
                </div>
                <div class="countries-list">
                    @foreach ($totals4 as $opdId4 => $data4)
                  <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="country-icon">
                      <img src="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-jateng-removebg-preview.png') }}" alt="" width="35">
                    </div>
                    <div class="country-name flex-grow-1">
                      <h5 class="mb-0">{{ number_format($data4['totalData4']) }} Aplikasi</h5>
                      <p class="mb-0 text-secondary">{{ ($data4['opdName4']) }}</p>
                    </div>
                    <div class="">
                      <p class="mb-0 text-primary d-flex gap-1 align-items-center fw-500"><span>{{ number_format($data4['totalPersentase4']) }}%</span></p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          {{-- Berdasarkan Instansi 5 --}}
          <div class="col">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0" style="padding-left: 4%; border-left: 3px solid rgb(208, 21, 211">Aplikasi Berdasarkan Instansi</h6>
                </div>
                <div class="countries-list">
                    @foreach ($totals5 as $opdId5 => $data5)
                  <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="country-icon">
                      <img src="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-jateng-removebg-preview.png') }}" alt="" width="35">
                    </div>
                    <div class="country-name flex-grow-1">
                      <h5 class="mb-0">{{ number_format($data5['totalData5']) }} Aplikasi</h5>
                      <p class="mb-0 text-secondary">{{ ($data5['opdName5']) }}</p>
                    </div>
                    <div class="">
                      <p class="mb-0 text-primary d-flex gap-1 align-items-center fw-500"><span>{{ number_format($data5['totalPersentase5']) }}%</span></p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div><!--end row-->

        <div class="row">
          <div class="col-12 col-lg-12 col-xl-6 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0" style="padding-left: 4%; border-left: 3px solid rgb(208, 21, 211">Aplikasi Berdasarkan Status</h6>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center">
                  <div class="col-lg-7 col-xl-7 col-xxl-7 order-2">
                    <div id="chart6"></div>
                  </div>
                  <div class="col-lg-5 col-xl-5 col-xxl-5">
                    <div class="">
                       <div class="mb-4">
                         <h2 class="mb-0">{{ number_format($totalProjects) }}</h2>
                         <p class="mb-0">Total Aplikasi</p>
                       </div>
                      <div class="d-flex align-items-start gap-3 mb-3">
                        <div class="widget-icon-small rounded bg-light-info text-info">
                          <ion-icon name="play-outline"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">Aktif</p>
                          <p class="mb-0 h5">{{ number_format($totalDataWithisActivetrue) }}</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start gap-3">
                        <div class="widget-icon-small rounded bg-light-orange text-orange">
                          <ion-icon name="pause-outline"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">Tidak Aktif</p>
                          <p class="mb-0 h5">{{ number_format($totalDataWithisActivefalse) }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-6 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Sales By Country</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-outline" role="img" class="md hydrated"
                        aria-label="ellipsis horizontal outline"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-borderless align-middle mb-0">
                    <tbody>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="fobiaadmin/fobia/ltr/assets/images/icons/india.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">India</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 82%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">82%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="fobiaadmin/fobia/ltr/assets/images/icons/usa.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">USA</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 70%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">70%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="fobiaadmin/fobia/ltr/assets/images/icons/china.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">China</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 60%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">60%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="fobiaadmin/fobia/ltr/assets/images/icons/russia.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">Russia</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 45%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">45%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="fobiaadmin/fobia/ltr/assets/images/icons/russia.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">Russia</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 30%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">30%</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
      <!-- end page content-->
    </div>
@endsection
