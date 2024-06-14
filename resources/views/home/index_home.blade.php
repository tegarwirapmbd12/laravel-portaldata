@extends('layouts.index_view')
@section('content')


<style type="text/css">
    /* .bgimg {
        background-image: url('/picture/background2.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 200%;
    } */
</style>
<div class="page-heading">
    <h4 style=" font-weight: bold; margin-left: 20px; color:#702963;"><b>KABUPATEN SEMARANG</b></h4>
    <h5 style=" font-weight: bold; margin-left: 20px; color: primary;" >BERDIKARI (Bersatu, Berdaulat, Berkepribadian, Sejahtera dan Mandiri) </h5>
</div>
<div id="main-content">
    <section class="section">
        <div class="card bgimg" style="background-color: #D9E8EF;">
            <div class="card-body">
                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between">



                            <!-- <p class="lead my-4 " style=" font-weight: bold; margin-left: 20px;"><b>Bersatu, Berdaulat, Berkepribadian, Sejahtera dan Mandiri</b></p> -->
                            <br>


                        <img src="{{ asset('/picture/background2.png') }}" alt="satu data" class="img-fluid ">
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="card-title text-center" style="color: #FFBF00;">INFORMASI UMUM</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-1"> </div>
                    <div class="col-4">
                        <h6 class="text-center">Jumlah Penduduk Berdasarkan Jenis Kelamin tahun 2022</h6>
                        <div>
                            <canvas id="jenisKelamin"></canvas>
                            <script>
                                const labels2 = [
                                    'Laki-laki', 'Perempuan',
                                ];
                                const data2 = {
                                    labels: labels2,
                                    datasets: [{
                                        label: 'Jumlah Penduduk Berdasarkan Jenis Kelamin',
                                        backgroundColor: [
                                            '#00BFFF',
                                            '#8B0000'
                                        ],
                                        borderColor: '#666600',
                                        data: [532529, 535963],
                                    }]
                                };
                                const config2 = {
                                    type: 'doughnut',
                                    data: data2,
                                    options: {}
                                };
                            </script>
                        </div>
                    </div>

                    <div class="col-6">
                        <h6 class="text-center">Jumlah Desa di Kabupaten Semarang <br>
                            Tahun 2022</h6>
                        <div>
                            <canvas id="jumlahDesa"></canvas>
                            <script>
                                const labelsDesa = [
                                    'Getasan', 'Tengaran', 'Susukan', 'Kaliwungu', 'Suruh', 'Pabelan', 'Tuntang', 'Banyubiru', 'Jambu', 'Sumowono', 'Ambarawa', 'Bandungan', 'Bawen', 'Bringin', 'Bancak', 'Pringapus', 'Bergas', 'Ungaran Barat', 'Ungaran Timur',
                                ];
                                const dataDesa = {
                                    labels: labelsDesa,
                                    datasets: [{
                                        label: 'Jumlah Desa Per Kecamatan',
                                        backgroundColor: '#1e90ff',
                                        borderColor: 'rgb(255, 99, 132)',
                                        data: [13, 15, 13, 11, 17, 17, 16, 10, 10, 16, 10, 10, 9, 16, 9, 9, 13, 11, 10],
                                    }]
                                };
                                const configDesa = {
                                    type: 'bar',
                                    data: dataDesa,
                                    options: {}
                                };
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h6 class="text-center">Luas Wilayah Per Kecamatan Tahun 2022</h6>
                    <div>
                        <canvas id="luasWilayah"></canvas>
                        <script>
                            const labels = [
                                'Getasan', 'Tengaran', 'Susukan', 'Kaliwungu', 'Suruh', 'Pabelan', 'Tuntang', 'Banyubiru', 'Jambu', 'Sumowono', 'Ambarawa', 'Bandungan', 'Bawen', 'Bringin', 'Bancak', 'Pringapus', 'Bergas', 'Ungaran Barat', 'Ungaran Timur',
                            ];
                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'Luas Wilayah Per Kecamatan',
                                    backgroundColor: '#1e90ff',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [68.03, 49.95, 50.31, 31.08, 66.21, 51.86, 61.18, 51.85, 52.06, 58.86, 29.79, 47.41, 46.99, 68.19, 45.51, 84.27, 45.81, 48.79, 61.12],
                                }]
                            };
                            const config = {
                                type: 'bar',
                                data: data,
                                options: {}
                            };
                        </script>
                    </div>
                </div>
                <div class="col-6">
                    <h6 class="text-center">Jumlah Penduduk Per Kecamatan Tahun 2022</h6>
                    <div>
                        <canvas id="jumlahPenduduk"></canvas>
                        <script>
                            const labels1 = [
                                'Getasan', 'Tengaran', 'Susukan', 'Kaliwungu', 'Suruh', 'Pabelan', 'Tuntang', 'Banyubiru', 'Jambu', 'Sumowono', 'Ambarawa', 'Bandungan', 'Bawen', 'Bringin', 'Bancak', 'Pringapus', 'Bergas', 'Ungaran Barat', 'Ungaran Timur',
                            ];
                            const data1 = {
                                labels: labels1,
                                datasets: [{
                                    label: 'Jumlah penduduk per Kecamatan',
                                    backgroundColor: '#BDB76B ',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [53445, 72893, 50414, 30859, 71631, 45570, 69771, 44704, 41094, 34537, 64255, 59549, 60327, 47132, 24529, 57785, 76815, 81727, 81455],
                                }]
                            };
                            const config1 = {
                                type: 'bar',
                                data: data1,
                                options: {}
                            };
                        </script>
                    </div>
                </div>
            </div>

        </div>
        <div class="card">


            <div class="row">
                <div class="col">
                    <h2 class="mt-8 pt-5 text-center" style="color: #FFBF00;">NAMA-NAMA DESA</h2><br>

                    <table class="table table-bordered mt-5" id="desa">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">NO</th>
                                <th scope="col" class="text-center">Nama Kecamatan</th>
                                <th scope="col" class="text-center">Nama Desa</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            @foreach ($data['desa'] as $entity)
                                <tr>
                                    <td class="text-center">{{ $i++; }}</td>
                                    <td>{{ $entity['nama_kecamatan'] }}</td>
                                    <td class="text-center">{{ $entity['nama_desa'] }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

        <div class="card">

            <div class="row">
                <div class="col">
                    <h2 class="mt-8 pt-5 text-center" style="color: #FFBF00;">DATA SUMMARY </h2>
                    <h4 class=" text-center" style="color: #FFBF00;">KABUPATEN SEMARANG</h4>
                    <table class="table table-bordered mt-5" id="ringkasan">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">NO</th>
                                <th scope="col" class="text-center">Variabel</th>
                                <th scope="col" class="text-center">Satuan</th>
                                <th scope="col" class="text-center">Tahun 2022</th>

                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            @foreach ($data['ringkasan'] as $entity)
                                <tr>
                                    <td class="text-center">{{ $i++; }}</td>
                                    <td>{{ $entity['variabel'] }}</td>
                                    <td class="text-center">{{ $entity['satuan'] }}</td>
                                    <td>{{ $entity['tahun_2022'] }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>


        <div class="card">

            <div class="row">
                <div class="col">
                    <h2 class="mt-8 pt-5 text-center" style="color: #FFBF00;"><strong>KELOMPOK TANI </strong></h2>
                    <h4 class=" text-center" style="color: #FFBF00;">KABUPATEN SEMARANG</h4>
                    <table class="table table-bordered mt-5" id="kelompok_tani">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">Alamat</th>
                                <th scope="col" class="text-center">Deskripsi</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            @foreach ($data['kelompokTani'] as $entity)
                                <tr>
                                    <td class="text-center">{{ $i++; }}</td>
                                    <td>{{ $entity['nama_obyek'] }}</td>
                                    <td>{{ $entity['alamat'] }}</td>
                                    <td>{{ $entity['deskripsi'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </section>
</div>


<script>
    // === include 'setup' then 'config' above ===

    var myChart = new Chart(
        document.getElementById('luasWilayah'),
        config
    );

    var myChart = new Chart(
        document.getElementById('jumlahPenduduk'),
        config1
    );

    var myChart = new Chart(
        document.getElementById('jenisKelamin'),
        config2
    );
    var myChart = new Chart(
        document.getElementById('jumlahDesa'),
        configDesa
    );
</script>
<!-- akhir Dashboard -->
<script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    $(document).ready(function() {
        $('#desa').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });
        $('#kebakaran').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('#ringkasan').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('#kelompok_tani').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });
</script>
<script>
    // Fungsi untuk menghandle pencarian
    function handleSearch() {
        const searchTerm = document.getElementById("search-input").value;
        const ckanURL = "https://data.semarangkab.go.id/ckan";

        // Membuka halaman pencarian CKAN dalam tab baru
        window.open(ckanURL + "/dataset?q=" + searchTerm);
    }

    // Menambahkan event listener untuk menghandle klik pada tombol "SEARCH"
    document.getElementById("search-button").addEventListener("click", function(event) {
        event.preventDefault();
        handleSearch();
    });

    // Menambahkan event listener untuk menghandle tombol Enter
    document.getElementById("search-input").addEventListener("keydown", function(event) {

        if (event.key === "Enter") {
            event.preventDefault();
            handleSearch();
        }
    });
</script>

</div>

@endsection
