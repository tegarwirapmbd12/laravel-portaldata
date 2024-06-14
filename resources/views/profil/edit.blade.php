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
            <div class="breadcrumb-title pe-3">Profile</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;">
                      <ion-icon name="list-outline"></ion-icon>
                    </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </nav>
            </div>
        </div>
          <!--end breadcrumb-->

          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card radius-10">
                <div class="card-body">
                  <form action="/profile/update" method="POST">
                    {{ csrf_field() }}
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Judul "Profil" -->
                        <h5 class="mb-2 mt-2">Profil</h5>
                        <!-- Tombol "Ubah Password" -->
                        <button type="button" class="btn btn-sm btn-outline-danger px-5 btn-searchbox" data-bs-toggle="modal" data-bs-target="#changepasswordModal">Ubah Password</button>
                    </div>
                 <hr>
                 <div class="row g-3">
                   <div class="col-12">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ Auth()->user()->name }}">
                   </div>
                   <div class="col-12">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ Auth()->user()->username }}">
                   </div>
                   <div class="col-12">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ Auth()->user()->email }}">
                   </div>
                  </div>
                  <div class="text-start mt-3">
                    <button type="submit" class="btn btn-primary px-4"><ion-icon name="save-outline"></ion-icon>Simpan Perubahan</button>
                    <button type="button" class="btn btn-outline-danger px-5" id="backButton" ><ion-icon name="close-circle-outline"></ion-icon>Batal</button>
                  </div>
                </div>
                {{-- @include('profil.modal.change-password') --}}
               </form>
              </div>
            </div>
          </div><!--end row-->
      </div>
    </div>
      <!-- end page content-->
@include('sweetalert::alert')
@include('profil.modal.change-password')
@endsection

@section('script')
@endsection

