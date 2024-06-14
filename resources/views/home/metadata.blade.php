@extends('layouts.index_view')
@section('content')

<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h1 class="text-secondary " style=" font-weight: bold; margin-left: 20px;">METADATA</h1>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4 class="mt-8 pt-5 text-center" style="color: #FFBF00;">KONSEP DAN DEFINISI METADATA</h4>
                            <br>
                            <form action="" method="GET">
                            <div class="d-flex mt-5">
                                <div class="col-md-6">
                                    <input type="search" id="searchInput" name="search" class="form-control" placeholder="Masukkan kata kunci (Konsep atau Definisi)">
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-warning" name="submit">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <div class="col col-with-margin mx-5">
                                    <button type="button" class="btn btn-md btn-outline-warning px-5 btn-searchbox" data-bs-toggle="modal" data-bs-target="#filterModal"><ion-icon name="funnel-outline"></ion-icon>Filter</button>
                                </div>
                            </div>
                            </form>
                            @if (count($metadatas) > 0)
                            <table class="table table-bordered mt-3" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">NO</th>
                                        <th scope="col" class="text-center">OPD</th>
                                        <th scope="col" class="text-center">Konsep</th>
                                        <th scope="col" class="text-center">Definisi</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    @foreach ($metadatas as $index => $metadata)
                                        <tr>
                                            <td class="text-center">{{  $index + $metadatas->firstItem()  }}</td>
                                            <td>{{ $metadata->opd->name }} <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal{{ $metadata->id }}"><i class="fas fa-info-circle me-3"></i></td>
                                            @if ($metadata->konsep_indikator == !null)
                                                <td class="">{{ $metadata->konsep_indikator }}</td>
                                                <td class="">{{ $metadata->definisi_indikator }}</td>
                                            @else
                                                <td class="">{{ $metadata->konsep_variabel }}</td>
                                                <td class="">{{ $metadata->definisi_variabel }}</td>
                                            @endif
                                        </tr>
                                    @include('layouts.modal.view_metadata')
                                    @endforeach
                                    @else
                                    <div class="empty-result mt-3">
                                        <h5>Hasil tidak ditemukan</h5>
                                    </div>
                                @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{ $metadatas->appends($_GET)->links() }}
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




<!--warning theme Modal Filter -->
<div class="modal fade text-left" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel140" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title white" id="myModalLabel140">Filter Metadata</h5>
            </div>
            <form action="" method="GET">
            <div class="modal-body">

                <div class="mb-3 select2">
                    <label for="single-select-field" class="form-label">OPD</label>
                    <select class="form-control form-select" id="selectOPD" data-placeholder="-- Pilih OPD --" name="opd_id" style="width: 100%" value="">
                        <option value="">-- Pilih OPD --</option>
                        @foreach ($opds as $opd)
                        <option option value="{{ $opd->id }}" {{ old('opd_id') == $opd->id ? 'selected' : '' }}>{{ $opd->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="single-select-field" class="form-label">Jenis Metadata</label>
                    <fieldset class="form-group">
                    <select class="form-select" id="selectMetadataRoles" data-placeholder="-- Pilih OPD --" name="metadata_role_id">
                        <option value="">-- Pilih Jenis Metadata --</option>
                        @foreach ($metadata_roles as $metadata_role)
                        <option option value="{{ $metadata_role->id }}" {{ old('metadata_role_id') == $metadata_role->id ? 'selected' : '' }}>{{ $metadata_role->name }}</option>
                        @endforeach
                    </select>
                    </fieldset>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" id="resetButton">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset Filter</span>
                    </button>
                    <button type="submit" class="btn btn-warning ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Terapkan Filter</span>
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!--warning theme Modal Filter End-->




@endsection
@section('script')
<script>
     // Reset nilai-nilai filter ke nilai default
    $(document).ready(function() {
        $("#resetButton").click(function() {
            $("#selectOPD").val(null).trigger("change");
            $("#selectMetadataRoles").val("");
        });
    });

</script>
<script>
    $(document).ready(function() {
        $('.view-modal').on('click', function() {
            var metadataId = $(this).data('id');
            $('#viewModal').data('metadata-id', metadataId);
        });

        $('#viewModal').on('show.bs.modal', function() {
            var metadataId = $(this).data('metadata-id');
            // Lakukan permintaan AJAX untuk mengambil informasi variabel dari server
            $.ajax({
                url: '/metadata/' + metadataId, // Ganti dengan rute yang sesuai di aplikasi Anda
                type: 'GET',
                success: function(response) {
                    $('#metadataAlias').text(response.alias); // Misalnya, response ini berisi data variabel yang diambil dari server
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
