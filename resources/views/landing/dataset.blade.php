@extends('layouts.landing')

@section('content')
        <!-- Team Start -->
        <div id="main-content">
            <section class="section">
              <div class="card">
                <div class="row">
                  <div class="col-md-8 mx-auto"> <!-- Tambahkan class mx-auto di sini -->
                    <h2 class="text-center" style="color: #ffbf00">PENCARIAN DATA</h2>

                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="search-input"
                        placeholder="masukkan pencarian"/>
                      <button
                        class="btn btn-dark"
                        type="button"
                        id="search-button">
                        Cari
                      </button>
                    </div>

                  </div>
                </div>


            </section>

            <!-- TABLE START-->
            <section class="section">
              <div class="card">
                <div class="row">
                  <div class="col mx-auto"> <!-- Tambahkan class mx-auto di sini -->
                  <table class="table table-bordered">
                  <thead>
                      <tr>
                          <td style="font-weight: bold; text-align: center;">Tabel Statis</td>
                          <td style="font-weight: bold; text-align: center;">Aksi</td>
                      </tr>
                  </thead>
                  <tbody id="list">
                <tr>
                  <td>Rekapitulasi Data Statistik Pengunjung-Tamu Hotel <a href=""><i class="fas fa-info-circle me-3"></i></td>
                  <td><a href="#">Detail</a></td>
                </tr>
                <tr>
                  <td>Banyaknya Kamar Hotel dan Tamu yang Menginap di Kab.Semarang <a href=""><i class="fas fa-info-circle me-3"></i></td>
                  <td><a href="">Detail</a></td>
                </tr>
                <tr>
                  <td>Tingkat Kegemaran Membaca di Kabupaten Semarang <a href=""><i class="fas fa-info-circle me-3"></i></td>
                  <td><a href="">Detail</a></td>
                </tr>
              </tbody>
                  </table>
                  <div id="pagination"></div>
                  <hr>
                  <div id="detail"></div>
                      <!-- load jQuery -->
                      <!-- Pilih salah satu, ingin loading jQuery secara online atau offline (local) -->
                      <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
                  </div>
                </div>
              <hr>
            </section>
            <!-- TABLE END -->
          </div>

          <!-- MODAL INFO START-->

          <!-- MODAL INFO END-->


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
        <!-- About End -->
        @endsection

