@extends('layouts.index_view')
@section('content')


<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h1 class="text-secondary " style=" font-weight: bold; margin-left: 20px;">SPM</h1>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- working -->
                    <div class="row working">
                        <div class="col-7 mt-3">
                            <p>Standar Pelayanan Minimal/SPM adalah ketentuan mengenai jenis dan mutu Pelayanan Dasar yang merupakan Urusan Pemerintahan Wajib yang berhak diperoleh setiap warga negara secara
                                minimal. Penerapan SPM adalah pelaksanaan SPM yang dimulai dari tahapan pengumpulan data, penghitungan kebutuhan pemenuhan Pelayanan Dasar, penyusunan rencana pemenuhan Pelayanan Dasar dan pelaksanaan pemenuhan Pelayanan Dasar.
                            </p>
                        </div>
                        <div class="col-5 text-center">
                            <img src="{{ asset('/picture/spm.png') }}" alt="working" width="200" class="img-fluid rounded-circle img-thumbnail">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="mt-8 pt-5 text-center" style="color: #FFBF00;">PENGUKURAN CAPAIAN KINERJA KABUPATEN SEMARANG</h4>
                            <br>
                            <table class="table table-bordered mt-5" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">NO</th>
                                        <th scope="col" class="text-center">Indikator</th>
                                        <th scope="col" class="text-center">Keterangan</th>
                                        <th scope="col" class="text-center">Capaian Tahun 2022</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    @foreach ($data['spm'] as $entity)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td>{{ $entity['indikator'] }}</td>
                                            <td>{{ $entity['keterangan'] }}</td>
                                            <td class="text-center">{{ $entity['nilai_capian_tahun_2022'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable({
                            dom: 'Blfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                        });
                    });
                </script>
            </div>
        </div>
</div>
</section>
</div>

@endsection
