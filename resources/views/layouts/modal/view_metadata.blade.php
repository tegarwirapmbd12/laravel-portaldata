<!--warning theme Modal View -->
<div class="modal fade text-left" id="detailModal{{ $metadata->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel140" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title white">Detail Metadata</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
            <div class="modal-body">
                <label class="form-label">OPD</label>
                <input class="form-control" type="text" value="{{ ($metadata->opd)->name }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Kategori</label>
                <input class="form-control" type="text" value="{{ ($metadata->metadata_role)->name }}" disabled>
            </div>
            @if($metadata->metadata_role_id == 1)
            <div class="modal-body">
                <label class="form-label">Nama Indikator</label>
                <input class="form-control" type="text" value="{{ $metadata->nama_indikator }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Konsep</label>
                <input class="form-control" type="text" value="{{ $metadata->konsep_indikator }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Definisi</label>
                <input class="form-control" type="text" value="{{ $metadata->definisi_indikator }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Interpretasi</label>
                <input class="form-control" type="text" value="{{ $metadata->interpretasi }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Rumus Perhitungan</label>
                <input class="form-control" type="text" value="{{ $metadata->rumus_perhitungan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Ukuran</label>
                <input class="form-control" type="text" value="{{ $metadata->ukuran }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Satuan</label>
                <input class="form-control" type="text" value="{{ $metadata->satuan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Klasifikasi Penyajian</label>
                <input class="form-control" type="text" value="{{ $metadata->klasifikasi_penyajian }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Indikator Komposit</label>
                <input class="form-control" type="text" value="{{ $metadata->indikator_komposit }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Publikasi Ketersediaan</label>
                <input class="form-control" type="text" value="{{ $metadata->publikasi_ketersediaan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Nama Indikator Pembangun</label>
                <input class="form-control" type="text" value="{{ $metadata->nama_indpembangun }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Kegiatan Penghasil</label>
                <input class="form-control" type="text" value="{{ $metadata->kegiatan_penghasil }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Kode Kegiatan</label>
                <input class="form-control" type="text" value="{{ $metadata->kode_kegiatan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Nama Variabel Pembangun</label>
                <input class="form-control" type="text" value="{{ $metadata->nama_varpembangun }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Level Estimasi</label>
                <input class="form-control" type="text" value="{{ $metadata->level_estimasi }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Dapat Diakses Umum</label>
                <input class="form-control" type="text" value="{{ $metadata->dapat_diakses_umum_indikator }}" disabled>
            </div>
            @else
            <div class="modal-body">
                <label class="form-label">Nama Variabel</label>
                <input class="form-control" type="text" value="{{ $metadata->nama_variabel }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Alias</label>
                <input class="form-control" type="text" value="{{ $metadata->alias }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Konsep</label>
                <input class="form-control" type="text" value="{{ $metadata->konsep_variabel }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Definisi</label>
                <input class="form-control" type="text" value="{{ $metadata->definisi_variabel }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Referensi Pemilihan</label>
                <input class="form-control" type="text" value="{{ $metadata->referensi_pemilihan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Referensi Waktu</label>
                <input class="form-control" type="text" value="{{ $metadata->referensi_waktu }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Tipe Data</label>
                <input class="form-control" type="text" value="{{ $metadata->tipe_data }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Klasifikasi Isian</label>
                <input class="form-control" type="text" value="{{ $metadata->klasifikasi_isian }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Aturan Validasi</label>
                <input class="form-control" type="text" value="{{ $metadata->aturan_validasi }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Kalimat Pertanyaan</label>
                <input class="form-control" type="text" value="{{ $metadata->kalimat_pertanyaan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Dapat Diakses Umum</label>
                <input class="form-control" type="text" value="{{ $metadata->dapat_diakses_umum_variabel }}" disabled>
            </div>
            @endif
        </div>
    </div>
</div>
<!--warning theme Modal View End-->
