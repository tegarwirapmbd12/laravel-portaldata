@extends('layouts.main')

@section('style')
<style>
    .input-group-append{
        background-color: blueviolet;
    }
    .input-group-append .btn i {
        color: white;
    }
    .col-with-margin {
        margin-left: 20px; /* Sesuaikan dengan jumlah margin yang Anda inginkan */
    }
    .wrapped-cell {
        word-wrap: break-word; /* Mengatur wrapping teks */
    }
    .empty-result {
        font-family: Arial, sans-serif;
        font-size: 16px;
        font-weight: bold;
        color: #555658;
        margin-left: 2%;
    }
    .input-password {
      position: relative;
    }

    .input-password-text {
      position: absolute;
      top: 67%;
      right: 24px;
      transform: translateY(-50%);
      cursor: pointer;
      background-color: transparent; /* Mengatur latar belakang menjadi transparan */
      border: none; /* Menghilangkan border */
    }

    .password-input {
      padding-right: 40px;
    }
</style>

@endsection

@section('content')
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Daftar User</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;">
                      <ion-icon name="person-outline"></ion-icon>
                    </a>
                  </li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
                <div class="col">
                    <a href="#" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#registerModal"><ion-icon name="add"></ion-icon>Tambah User</a>
                </div>
              </div>
        </div>
          <!--end breadcrumb-->

        <div class="card radius-10 w-100">
          <form action="" method="GET">
          <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="col-md-6">
                    <input type="search" id="searchInput" name="search" class="form-control" placeholder="Masukkan kata kunci (Nama atau Username)">
                </div>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
          </div>
          </form>
          @if (count($listusers) > 0)
            <div class="mt-2">
              <table class="table align-middle mb-0" id="tabel-data" class="display">
                <thead class="table-light">
                  <tr>
                    <th class="wrapped-cell" style="width: 5%">No</th>
                    <th class="wrapped-cell" style="width: 25%">Nama</th>
                    <th class="wrapped-cell" style="width: 25%">Username</th>
                    <th class="wrapped-cell" style="width: 35%">Email</th>
                    <th> </th>
                  </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($listusers as $index => $listuser)
                <tbody>
                  <tr>
                    <td>{{ $index + $listusers->firstItem() }}</td>
                    <td class="wrapped-cell">{{ $listuser->name }}</td>
                    <td class="wrapped-cell">{{ $listuser->username }}</td>
                    <td class="wrapped-cell">{{ $listuser->email }}</td>
                    <td>
                        <a href="/list-user/{{ $listuser->id }}/delete" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" onclick="return confirm('Apakah yakin {{ $listuser->username }} ingin dihapus?');">
                          <ion-icon name="trash-outline"></ion-icon>
                        </a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  @endforeach
                  @else
                    <div class="empty-result">
                        <h5>Hasil tidak ditemukan</h5>
                    </div>
                  @endif
                </tbody>
              </table>

            </div>
        </div>
      </div>
    </div>
      <!-- end page content-->
@include('list-user.modal.register')
@include('sweetalert::alert')
<div class="d-flex justify-content-end">
    {{ $listusers->appends($_GET)->links() }}
</div>
@endsection

@section('script')
<script>
    // tooltip action View Detail, Edit, Delete
    $(document).ready(function() {
    $('[data-bs-toggle="tooltip"]').tooltip();
    });

    // toogle eye password
    const passwordInput = document.getElementById('passwordInput');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.innerHTML = '<i class="far fa-eye"></i>';
      } else {
        passwordInput.type = 'password';
        togglePassword.innerHTML = '<i class="far fa-eye-slash"></i>';
      }
    });
</script>
@endsection

