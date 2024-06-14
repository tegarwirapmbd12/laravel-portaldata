@extends('layouts.index_view')
@section('content')

{{-- <div id="main-content"> --}}
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Statisitik Sektoral</h4>
            </div>
            <div class="card-body">
                <section class="section">
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <form action="{{ route('statistik_sektoral_search') }}" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" name="search" class="form-control" placeholder="Search by Urusan" value="{{ request('search') }}">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </div>
                                    </form>
                                    <!-- table bordered -->
                                    <div class="table">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th class="wrap-text" rowspan="2">No</th>
                                                    {{-- <th rowspan="2">Instansi</th> --}}
                                                    <th rowspan="2">Urusan</th>
                                                    <th colspan="6" style="width: 60%">Tahun</th>
                                                    <th rowspan="2">Satuan</th>
                                                </tr>
                                                <tr>
                                                    <th class="wrap-text" style="width: 10%">2019</th>
                                                    <th class="wrap-text" style="width: 10%">2020</th>
                                                    <th class="wrap-text" style="width: 10%">2021</th>
                                                    <th class="wrap-text" style="width: 10%">2022</th>
                                                    <th class="wrap-text" style="width: 10%">2023</th>
                                                    <th class="wrap-text" style="width: 10%">2024</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                  $rowNumber = 1;
                                                @endphp

                                @foreach ($instansiData as $instansiKey => $instansiInfo)
                                <tr>
                                    <td colspan="9" style="text-align: left; background-color: #ffbf00;"><b>{{ $instansiInfo['instansi'] }}</b></td>
                                </tr>

                                {{-- LAPIS PERTAMA --}}

                                @foreach ($instansiInfo['sub'] as $sub)
                                    @foreach ($sub as $id => $detail)
                                        @php
                                            $hasMatchingDetail = in_array($detail['urusan'], $matchingDetails);
                                        @endphp
                                        <tr>
                                            <td>{{ $rowNumber }}.</td>
                                            @if ($hasMatchingDetail)
                                                    <td style="text-align: left">{{ $detail['urusan'] }}
                                                        <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#detailModal" class="view-detail"
                                                        data-id="{{ $detail['urusan'] }}"
                                                        ><i class="fas fa-info-circle me-3"></i>
                                                        </a>
                                                    </td>
                                                @else
                                                    <td style="text-align: left">{{ $detail['urusan'] }}</td>
                                            @endif
                                            @foreach (range(2019, 2024) as $year)
                                                <td>{{ $detail[(string) $year] ?? '-' }}</td>
                                            @endforeach
                                            <td>{{ $detail['satuan'] ?? '-' }}</td>
                                        </tr>

                                        {{-- LAPIS KEDUA --}}

                                        @if(isset($detail['sub']))
                                        @php
                                            $subIndex = 1;
                                        @endphp
                                            @foreach ($detail['sub'] as $subDetail)
                                                @foreach ($subDetail as $subId => $subInfo)
                                                @php
                                                $hasMatchingSubInfo = in_array($subInfo['urusan'], $matchingSubInfos);
                                                @endphp
                                                    <tr>
                                                        <td></td>
                                                        @if ($hasMatchingSubInfo)
                                                                <td style="text-align: left; padding-left: 2%"  ><b>{{ $subIndex++ }}.</b> {{ $subInfo['urusan'] }}
                                                                    <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#detailModal" class="view-detail"
                                                                    data-id="{{ $subInfo['urusan'] }}"
                                                                    ><i class="fas fa-info-circle me-3"></i>
                                                                    </a>
                                                                </td>
                                                            @else
                                                                <td style="text-align: left; padding-left: 2%"  ><b>{{ $subIndex++ }}.</b> {{ $subInfo['urusan'] }}</td>
                                                        @endif
                                                        @foreach (range(2019, 2024) as $year)
                                                            <td>{{ $subInfo[(string) $year] ?? '-' }}</td>
                                                        @endforeach
                                                        <td>{{ $subInfo['satuan'] ?? '-' }}</td>
                                                    </tr>

                                                    {{-- LAPIS KETIGA --}}

                                                        @if(isset($subInfo['sub']))
                                                        @php
                                                            $alphabetIndex = 'a';
                                                        @endphp
                                                            @foreach ($subInfo['sub'] as $subSubInfo)
                                                                @foreach($subSubInfo as $subSubId => $subSubDetail)
                                                                @php
                                                                $hasMatchingSubSubDetail = in_array($subSubDetail['urusan'], $matchingSubSubDetails);
                                                                @endphp
                                                                <tr>
                                                                    <td></td>
                                                                    @if ($hasMatchingSubSubDetail)
                                                                            <td style="text-align: left; padding-left: 4%"><b>{{ $alphabetIndex++ }}.</b> {{ $subSubDetail['urusan'] }}
                                                                                <a href="#" data-bs-toggle="modal"
                                                                                data-bs-target="#detailModal" class="view-detail"
                                                                                data-id="{{ $subSubDetail['urusan'] }}"
                                                                                ><i class="fas fa-info-circle me-3"></i>
                                                                                </a>
                                                                            </td>
                                                                        @else
                                                                        <td style="text-align: left; padding-left: 4%"><b>{{ $alphabetIndex++ }}.</b> {{ $subSubDetail['urusan'] }}</td>
                                                                    @endif
                                                                    @foreach (range(2019, 2024) as $year)
                                                                        <td>{{ $subSubDetail[(string) $year] ?? '-' }}</td>
                                                                    @endforeach
                                                                    <td>{{ $subSubDetail['satuan'] ?? '-' }}</td>
                                                                </tr>

                                                                {{-- LAPIS KEEMPAT --}}

                                                                @if(isset($subSubDetail['sub']))
                                                                @php
                                                                    $subSubIndex = 1;
                                                                @endphp
                                                                    @foreach($subSubDetail['sub'] as $subSubSubDetail)
                                                                        @foreach($subSubSubDetail as $subSubSubId => $subSubSubInfo)
                                                                        @php
                                                                        $hasMatchingSubSubSubInfo = in_array($subSubSubInfo['urusan'], $matchingSubSubSubInfos);
                                                                        @endphp
                                                                        <tr>
                                                                            <td></td>
                                                                            @if ($hasMatchingSubSubSubInfo)
                                                                            <td style="text-align: left; padding-left: 6%"><b>{{ $subSubIndex++ }}).</b> {{ $subSubSubInfo['urusan'] }}
                                                                                <a href="#" data-bs-toggle="modal"data-bs-target="#detailModal" class="view-detail"
                                                                                data-id="{{ $subSubSubInfo['urusan'] }}"
                                                                                ><i class="fas fa-info-circle me-3"></i>
                                                                                </a>
                                                                            </td>

                                                                                @else
                                                                                <td style="text-align: left; padding-left: 6%"><b>{{ $subSubIndex++ }}).</b> {{ $subSubSubInfo['urusan'] }}</td>
                                                                            @endif
                                                                            @foreach (range(2019, 2024) as $year)
                                                                                <td>{{ $subSubSubInfo[(string) $year] ?? '-' }}</td>
                                                                            @endforeach
                                                                            <td>{{ $subSubSubInfo['satuan'] ?? '-' }}</td>
                                                                        </tr>
                                                                        @endforeach
                                                                    @endforeach
                                                                @endif
                                                                @endforeach
                                                            @endforeach
                                                        @endif
                                                @endforeach
                                            @endforeach
                                        @endif

                                        @php
                                            $rowNumber++; // Increment row numbering
                                        @endphp
                                    @endforeach
                                @endforeach
                                @endforeach
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
    </section>
    <!-- Modal untuk menampilkan detail -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title white">Detail Metadata</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body" id="modal-content">
                <!-- Isi modal akan diisi melalui AJAX -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('.view-detail').on('click', function(event) {
        event.preventDefault(); // Mencegah aksi default tautan
        var id = $(this).data('id'); // Mendapatkan ID yang unik dari atribut data

        // Mengirim permintaan AJAX untuk mendapatkan detail
        $.ajax({
            url: '/get-metadata-detail', // Endpoint untuk mendapatkan detail
            type: 'GET',
            data: { id: id }, // Mengirim data yang sesuai
            success: function(response) {
                // Masukkan data ke dalam modal
                $('#modal-content').html(response); // Isi modal dengan data yang diperoleh

                // Tampilkan modal
                $('#detailModal').modal('show');
            },
            error: function(error) {
                console.error('Error fetching detail:', error); // Tangani error jika terjadi
            }
        });
    });
});
</script>
@endsection
