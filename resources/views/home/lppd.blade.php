@extends('layouts.index_view')
@section('content')

<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h1 class="text-secondary " style=" font-weight: bold; margin-left: 20px;">LPPD</h1>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- working -->
                    <div class="row working">
                        <div class="col-7 mt-3">
                            <p>Laporan Penyelenggaraan Pemerintahan Daerah (LPPD)
                                Kabupaten Semarang merupakan pelaksanaan amanat tranparansi
                                dan akuntabilitas penyelenggaraan pemerintahan disemua strata. Hal – hal yang
                                tercakup dalam laporan ini berupa pencapaian program nasional dan program /
                                indikator kinerja otonomi daerah yang mencakup penyelenggaraan urusan
                                desentralisasi dan urusan lainnya</p>
                        </div>
                        <div class="col-5 text-center">
                            <img src="{{ asset('/picture/lppd.png') }}" alt="working" width="200" class="img-fluid rounded-circle img-thumbnail">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="mt-8 pt-5 text-center" style="color: #FFBF00;">PENGUKURAN CAPAIAN KINERJA LPPD</h4>
                            <br>
                            <table class="table table-bordered mt-5" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">NO</th>
                                        <th scope="col" class="text-center">Indikator</th>
                                        <th scope="col" class="text-center">Capaian Tahun 2022</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    @foreach ($data['lppd'] as $entity)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td>{{ $entity['indikator_kinerja'] }}</td>
                                            <td class="text-center">{{ $entity['capaian_tahun_2022'] }}</td>
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
