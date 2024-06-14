@extends('layouts.index_view')
@section('content')

<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h1 class="text-secondary " style=" font-weight: bold; margin-left: 20px;">SDGs</h1>
            </div>
            <div class="card-body">
                <div class="container">
                    <!-- working -->
                    <div class="row working">
                        <div class="col-7 mt-3">
                            <p>Tujuan Pembangunan Berkelanjutan/Sustainable Development Goals (TPB/SDGs) adalah Agenda 2030 yang merupakan kesepakatan pembangunan berkelanjutan berdasarkan hak asasi manusia dan kesetaraan. TPB/SDGs berprinsip Universal, Integrasi dan Inklusif, untuk meyakinkan bahwa tidak ada satupun yang tertinggal atau disebut NO ONE LEFT BEHIND.</p>
                        </div>
                        <div class="col-5 text-center">
                            <img src="{{ asset('/picture/sdg1.png') }}" alt="working" width="200" class="img-fluid rounded-circle img-thumbnail">
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
                                        <th scope="col" class="text-center">Indikator Nasional</th>
                                        <th scope="col" class="text-center">Indikator Kab. Semarang</th>
                                        <th scope="col" class="text-center">Sumber Data</th>
                                        <th scope="col" class="text-center">Satuan</th>
                                        <th scope="col" class="text-center">Realisasi 2021</th>
                                        <th scope="col" class="text-center">Realisasi 2022</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    @foreach ($data['sdg']  as $entity)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td>{{ $entity['indikator_nasional'] }}</td>
                                            <td>{{ $entity['indikator_SDGs_kab_semarang'] }}</td>
                                            <td class="text-center">{{ $entity['sumber_data'] }}</td>
                                            <td class="text-center">{{ $entity['satuan'] }}</td>
                                            <td class="text-center">{{ $entity['realisasi_2020'] }}</td>
                                            <td class="text-center">{{ $entity['realisasi_2021'] }}</td>

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
