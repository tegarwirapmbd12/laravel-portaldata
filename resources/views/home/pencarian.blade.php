@extends('layouts.index_view')
@section('content')

<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h1 class="text-secondary " style=" font-weight: bold; margin-left: 20px;">DATASET</h1>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4 class="mt-8 pt-5 text-center" style="color: #FFBF00;">DAFTAR DATASET</h4>
                            <br>
                            <form action="{{ route('pencarian') }}" method="GET">
                            <div class="d-flex mt-5">
                                <div class="col-md-6">
                                    <input type="search" id="searchInput" name="search" class="form-control" placeholder="Masukkan kata kunci (Konsep atau Definisi)">
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-warning" name="submit">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            </form>
                            {{-- @if (count($titles) > 0) --}}
                            <table class="table table-bordered mt-3" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">NO</th>
                                        <th scope="col" class="text-center">NAMA DATASET</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    @if(is_array($urusan) || is_iterable($urusan))
                                    @foreach ($urusan as $index => $ur)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $ur }} <a href="#"></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2">No data available</td>
                                    </tr>
                                @endif
                                    {{-- @else
                                    <div class="empty-result mt-3">
                                        <h5>Hasil tidak ditemukan</h5>
                                    </div>
                                @endif --}}
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{-- {{ $paginatedData->appends(request()->input())->links(); }} --}}
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
</section>
</div>
@endsection
