@extends('layouts.index_view')
@section('content')

{{-- <div id="main-content"> --}}
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Comment</h4>
            </div>
            <div class="card-body">
                <div class="comment">
                    <div class="comment-header">
                        <div class="pr-50">
                            <div class="avatar avatar-2xl">
                                <img src="mazer/dist/assets/compiled/jpg/logo-pemkab.jpg" alt="Avatar">
                            </div>
                        </div>
                        <div class="comment-body">
                            <div class="comment-profileName">DISKOMINFO</div>
                            <div class="comment-time">Pemerintah Kabupaten Semarang</div>
                            <div class="comment-message">
                                <p class="list-group-item-text truncate mb-20">Dinas Komunikasi dan Informatika Kabupaten Semarang</p>
                            </div>
                            <div class="comment-actions">
                                <button class="btn icon icon-left btn-primary me-2 text-nowrap" data-bs-toggle="modal" data-bs-target="#dataModal"><i class="bi bi-eye-fill"></i> Show</button>
                                {{-- <button class="btn icon icon-left btn-warning me-2 text-nowrap"><i class="bi bi-pencil-square"></i> Edit</button>
                                <button class="btn icon icon-left btn-danger me-2 text-nowrap"><i class="bi bi-x-circle"></i> Remove</button> --}}
                            </div>
                        </div>
					</div>
                </div>
                <div class="comment">
                    <div class="comment-header">
                        <div class="pr-50">
                            <div class="avatar avatar-2xl">
                                <img src="mazer/dist/assets/compiled/jpg/3.jpg" alt="Avatar">
                            </div>
                        </div>
                        <div class="comment-body">
                            <div class="comment-profileName"> Sana Fatima </div>
                            <div class="comment-time">4 minutes ago</div>
                            <div class="comment-message">
                                <p class="list-group-item-text truncate mb-20">I have looked into your matter and will respond soon.</p>
                            </div>
                            <div class="comment-actions">
                                <button class="btn icon icon-left btn-primary me-2 text-nowrap" data-bs-toggle="modal" data-bs-target="#dataModal"><i class="bi bi-eye-fill"></i> Show</button>
                            </div>
                        </div>
                	</div>
            	</div>
            </div>
        </div>
    </section>
{{-- </div> --}}


<!--warning theme Modal Filter -->
<div class="modal fade text-left" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel140" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel20">Kelompok Data</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-2 mb-4">
                                                                <fieldset class="form-group">
                                                                    <select class="form-select" >
                                                                        <option>IT</option>
                                                                        <option>Blade Runner</option>
                                                                        <option>Thor Ragnarok</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 mb-4">
                                                                <fieldset class="form-group">
                                                                    <select class="form-select" >
                                                                        <option>IT</option>
                                                                        <option>Blade Runner</option>
                                                                        <option>Thor Ragnarok</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <a href="#" class="btn icon icon-left btn-primary"><i data-feather="eye"></i> Lihat Data</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Bordered table start -->
                                            <section class="section">
                                                <div class="row" id="table-bordered">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-content">
                                                                <!-- table bordered -->
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered mb-0 text-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th rowspan="2">No</th>
                                                                                <th rowspan="2">Kelompok/Sub Kelompok</th>
                                                                                <th colspan="7">Tahun</th>
                                                                                <th rowspan="2">Satuan</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>2018</th>
                                                                                <th>2019</th>
                                                                                <th>2020</th>
                                                                                <th>2021</th>
                                                                                <th>2022</th>
                                                                                <th>2023</th>
                                                                                <th>2024</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1.</td>
                                                                                <td>Dinas Komunikasi dan Informatika</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.</td>
                                                                                <td>CAPAIAN INDIKATOR KINERJA KUNCI URUSAN KOMUNIKASI DAN INFORMATIKA</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.</td>
                                                                                <td>Jumlah Jaringan Komunikasi</td>
                                                                                <td>0,00*</td>
                                                                                <td>144,00</td>
                                                                                <td>144,00</td>
                                                                                <td>0,00</td>
                                                                                <td>73,00</td>
                                                                                <td>75,00</td>
                                                                                <td>75,00*</td>
                                                                                <td>Titik</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>4.</td>
                                                                                <td>Web Site milik Pemerintah Daerah</td>
                                                                                <td>0,00*</td>
                                                                                <td>29,00</td>
                                                                                <td>29,00</td>
                                                                                <td>0,00</td>
                                                                                <td>46,00</td>
                                                                                <td>48,00</td>
                                                                                <td>48,00*</td>
                                                                                <td>Sub Domain</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>5.</td>
                                                                                <td>Web Site Desa</td>
                                                                                <td>0,00*</td>
                                                                                <td>0,00</td>
                                                                                <td>0,00</td>
                                                                                <td>0,00</td>
                                                                                <td>208,00</td>
                                                                                <td>38,00</td>
                                                                                <td>38,00*</td>
                                                                                <td>website</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
</div>
<!--warning theme Modal Filter End-->
@endsection
