@extends('layouts.main')

@section('style')
<style>
.form-label{
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #555658;
}
trix-toolbar [data-trix-button-group="file-tools"] {
    display: none;
}
</style>

@endsection

@section('content')
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Projek</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;">
                      <ion-icon name="list-outline"></ion-icon>
                    </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
        </div>
          <!--end breadcrumb-->

          <div class="card">
            <div class="card-body">
              <form action="{{ url('/project/store') }}" method="POST">
                {{ csrf_field() }}
              <div class="mb-3">
                <label for="single-select-field" class="form-label">OPD</label>
                <select class="form-select" id="selectOPD" data-placeholder="-- Pilih OPD --" name="opd_id" style="width: 100%">
                    <option value="">-- Pilih OPD --</option>
                    @foreach ($opds as $opd)
                    <option value="{{ $opd->id }}">{{ $opd->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Aplikasi</label>
                <input class="form-control mb-3" type="text" placeholder="Nama Aplikasi" aria-label="default input example" id="nama_aplikasi" name="nama_aplikasi" value="{{ old('nama_aplikasi') }}">
              </div>
              <div class="mb-3">
                <label for="single-select-field" class="form-label">Platform</label>
                <select class="form-select" id="selectPlatform" data-placeholder="Pilih Platform" name="platform_id">
                    <option value="">-- Pilih Platform --</option>
                    @foreach ($platforms as $platform)
                    <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">URL</label>
                <input class="form-control mb-3" type="url" placeholder="https://example.com/users/" aria-label="default input example" id="url" name="url" value="{{ old('url') }}">
              </div>
              <div class="mb-1">
                <label class="form-label">Status</label>
              </div>
              <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_active" id="aktif" value="1">
                    <label class="form-check-label" for="aktif">Aktif</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_active" id="tidak_aktif" value="0">
                    <label class="form-check-label" for="tidak_aktif">Tidak Aktif</label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Konsultan</label>
                <input class="form-control mb-3" type="text" placeholder="Masukkan Nama Konsultan" aria-label="default input example" id="nama_konsultan" name="nama_konsultan" value="{{ old('nama_konsultan') }}">
              </div>
              <div class="mb-3">
                <label class="form-label">Tahun Launching</label>
                <input class="form-control mb-3" type="number" placeholder="Example: 2012" id="tahun_launching" name="tahun_launching" oninput="checkInputLength(this)" value="{{ old('tahun_launching') }}">
              </div>
              <div class="mb-3">
                <label class="form-label">Terakhir Dikembangkan</label>
                <input class="form-control mb-3" type="number" placeholder="Example: 2012" id="terakhir_dikembangkan" name="terakhir_dikembangkan" min="2000" max="2099" oninput="checkInputLength(this)" value="{{ old('terakhir_dikembangkan') }}">
              </div>
              <div class="mb-3">
                <label for="single-select-field" class="form-label">Tipe Aplikasi</label>
                <select class="form-select" id="selectTipe" name="tipe_id">
                    <option value="">-- Pilih Tipe Aplikasi --</option>
                    @foreach ($tipes as $tipe)
                    <option value="{{ $tipe->id }}">{{ $tipe->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="single-select-field" class="form-label">Sektor Pelayanan</label>
                <select class="form-select" id="selectSektorPelayanan" name="sektor_pelayanan_id">
                    <option value="">-- Pilih Sektor Pelayanan --</option>
                    @foreach ($sektor_pelayanans as $sektor_pelayanan)
                    <option value="{{ $sektor_pelayanan->id }}">{{ $sektor_pelayanan->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Sektor Pelayanan Publik Lainnya</label>
                <input class="form-control mb-3" type="text" placeholder="Masukkan Sektor Pelayanan Publik Lainnya" id="spp_lainnya" name="spp_lainnya" aria-label="default input example" value="{{ old('spp_lainnya') }}">
              </div>
              <div class="mb-3">
                <label class="form-label">Deskripsi Singkat</label>
                <textarea class="form-control mb-3" type="longtext" id="deskripsi_singkat" name="deskripsi_singkat" aria-label="With textarea" placeholder="Masukkan Deskripsi" value="{{ old('deskripsi_singkat') }}"></textarea>
              </div>
              <div class="mb-3">
                <label for="single-select-field" class="form-label">Pengguna</label>
                <select class="form-select" id="selectPengguna" name="pengguna_id">
                    <option value="">-- Pilih Pengguna --</option>
                    @foreach ($penggunas as $pengguna)
                    <option value="{{ $pengguna->id }}">{{ $pengguna->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Penanggung Jawab</label>
                <input class="form-control mb-3" type="text" placeholder="Masukkan Penanggung Jawab" id="penanggung_jawab" name="penanggung_jawab" aria-label="default input example" value="{{ old('penanggung_jawab') }}">
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Kontak yang Dapat Dihubungi</label>
                <input class="form-control mb-3" type="text" placeholder="Masukkan Nama Kontak" id="nama_kontak" name="nama_kontak" aria-label="default input example" value="{{ old('nama_kontak') }}">
              </div>
              <div class="mb-3">
                <label class="form-label">Nomor Kontak yang Dapat Dihubungi</label>
                <input class="form-control mb-3" type="number" placeholder="Masukkan Nomor Kontak" id="nomor_kontak" name="nomor_kontak" oninput="checkInputLengthKontak(this)" max="9999999999999" value="{{ old('nomor_kontak') }}">
              </div>
              <div class="mb-3">
                <label class="form-label">Daftar Fitur Utama</label>
                <input class="form-control mb-3" type="hidden" id="daftar_fitur" name="daftar_fitur" value="{{ old('daftar_fitur') }}">
                <trix-editor input="daftar_fitur"></trix-editor>
              </div>
              <div class="mb-3">
                <label class="form-label">Daftar Layanan</label>
                <input class="form-control mb-3" type="hidden" id="daftar_layanan" name="daftar_layanan" value="{{ old('daftar_layanan') }}">
                <trix-editor input="daftar_layanan"></trix-editor>
              </div>
              <div class="mb-3">
                <label class="form-label">Daftar Produk Layanan</label>
                <input class="form-control mb-3" type="hidden" id="daftar_produk_layanan" name="daftar_produk_layanan" value="{{ old('daftar_produk_layanan') }}">
                <trix-editor input="daftar_produk_layanan"></trix-editor>
              </div>
              <div class="col mt-5">
                <button type="submit" class="btn btn-primary px-5"><ion-icon name="save-outline"></ion-icon>Simpan</button>
                <button type="button" class="btn btn-outline-danger px-5" id="backButton"><ion-icon name="close-circle-outline"></ion-icon>Batal</button>
              </div>
            </form>
            </div>
          </div>
      </div>
    </div>
      <!-- end page content-->
@include('sweetalert::alert')
@endsection

@section('script')
<script>
document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection

