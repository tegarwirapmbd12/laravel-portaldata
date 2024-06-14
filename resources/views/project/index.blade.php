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
                </ol>
              </nav>
            </div>

            <div class="ms-auto">
              <div class="col">
                  <a href="/project/create" class="btn btn-primary px-5"><ion-icon name="add"></ion-icon>Tambah Projek</a>
              </div>
            </div>
        </div>
          <!--end breadcrumb-->

        <div class="card radius-10 w-100">
          <form action="" method="GET">
          <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="col-md-6">
                    <input type="search" id="searchInput" name="search" class="form-control" placeholder="Masukkan kata kunci (Nama apliksi atau url)">
                </div>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="col col-with-margin">
                    <button type="button" class="btn btn-sm btn-outline-danger px-5 btn-searchbox" data-bs-toggle="modal" data-bs-target="#filterModal"><ion-icon name="funnel-outline"></ion-icon>Filter</button>
                </div>
            </div>
            {{-- <div class="mb-0">
            <label for="tabel-data_length" class="form-label"></label>
            <select class="form-select" style="width: 8%;" id="tabel-data_length" aria-label="Default select example">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            </div> --}}
          </div>
          </form>
          @if (count($projects) > 0)
            <div class="mt-2">
              <table class="table align-middle mb-0" id="tabel-data" class="display">
                <thead class="table-light">
                  <tr>
                    <th class="wrapped-cell" style="width: 5%">No</th>
                    <th class="wrapped-cell" style="width: 10%">Ubah Status</th>
                    <th class="wrapped-cell" style="width: 20%">Nama Aplikasi</th>
                    <th class="wrapped-cell" style="width: 35%">Url</th>
                    <th class="wrapped-cell" style="width: 15%">Status</th>
                    <th> </th>
                  </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($projects as $index => $project)
                <tbody>
                  <tr>
                    <td>{{ $index + $projects->firstItem() }}</td>
                    <td class="wrapped-cell">
                    @if($project->is_active == true)
                    <a href="{{ url('project/status/'.$project->id) }}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                    @else
                    <a href="{{ url('project/status/'.$project->id) }}" class="btn btn-sm btn-success">Aktifkan</a>
                    @endif
                    </td>
                    <td class="wrapped-cell">{{ $project->nama_aplikasi }}</td>
                    <td class="wrapped-cell">{{ $project->url }}</td>
                    <td class="wrapped-cell">
                    @if($project->is_active == true)
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-danger">Tidak Aktif</span>
                    @endif</td>
                    <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-placement="bottom" data-bs-target="#ModalView{{ $project->id }}" title="" data-bs-original-title="View Detail" aria-label="View">
                          <ion-icon name="eye-outline"></ion-icon>
                        </a>
                        <a href="/project/{{ $project->id }}/edit" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Edit info" aria-label="Edit">
                          <ion-icon name="create-outline"></ion-icon>
                        </a>
                        <a href="/project/{{ $project->id }}/delete" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete" onclick="return confirm('Apakah yakin {{ $project->nama_aplikasi }} ingin dihapus?');">
                          <ion-icon name="trash-outline"></ion-icon>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  @include('project.modal.view')
                  @endforeach
              @else
      <div class="empty-result">
        <h5>Hasil tidak ditemukan</h5>
      </div>
  @endif
</tbody>
</table>
<div class="d-flex justify-content-end">
  {{ $projects->appends($_GET)->links() }}
</div>
            </div>
        </div>
      </div>
    </div>
      <!-- end page content-->
{{-- @include('project.modal.view') --}}
@include('project.modal.filter')

@include('sweetalert::alert')
@endsection

@section('script')
<script>
    // tooltip action View Detail, Edit, Delete
    $(document).ready(function() {
    $('[data-bs-toggle="tooltip"]').tooltip();
    });

     // Reset nilai-nilai filter ke nilai default
    $(document).ready(function() {
        $("#resetButton").click(function() {
            $("#selectOPD").val(null).trigger("change");
            $("#selectPlatform").val("");
            $("#selectTipe").val("");
            $("#selectSektorPelayanan").val("");
            $("#selectPengguna").val("");
        });
    });
</script>
@endsection

