<div class="modal fade text-left" id="ModalView{{ $project->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Projek</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- @foreach($projects as $index => $project) --}}
            <div class="modal-body">
                    <label class="form-label">OPD</label>
                    <input class="form-control" type="text" value="{{ optional($project->opd)->name }}" disabled>
                    {{-- <input class="form-control" type="text" value="{{ $project->opd->name }}" disabled> --}}
            </div>
            <div class="modal-body">
                    <label class="form-label">Nama Aplikasi</label>
                    <input class="form-control" type="text" value="{{ $project->nama_aplikasi }}" disabled>
            </div>
            <div class="modal-body">
                    <label class="form-label">Platform</label>
                    {{-- <input class="form-control" type="text" value="{{ $project->platform->name }}" disabled> --}}
                    <input class="form-control" type="text" value="{{ optional($project->platform)->name }}" disabled>
            </div>
            <div class="modal-body">
                    <label class="form-label">URL</label>
                    <input class="form-control" type="text" value="{{ $project->url }}" disabled>
            </div>
            <div class="modal-body">
                    <label class="form-label">Status</label>
                    <input class="form-control" type="text" value="{{ $project->is_active ? 'Aktif' : 'Tidak Aktif' }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Nama Konsultan</label>
                <input class="form-control" type="text" value="{{ $project->nama_konsultan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Tahun Launching</label>
                <input class="form-control" type="text" value="{{ $project->tahun_launching }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Terakhir Dikembangkan</label>
                <input class="form-control" type="text" value="{{ $project->terakhir_dikembangkan }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Tipe Aplikasi</label>
                {{-- <input class="form-control" type="text" value="{{ $project->tipe->name }}" disabled> --}}
                <input class="form-control" type="text" value="{{ optional($project->tipe)->name }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Sektor Pelayanan</label>
                {{-- <input class="form-control" type="text" value="{{ $project->sektor_pelayanan->name }}" disabled> --}}
                <input class="form-control" type="text" value="{{ optional($project->sektor_pelayanan)->name }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Sektor Pelayanan</label>
                <input class="form-control" type="text" value="{{ $project->spp_lainnya }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Deskripsi Singkat</label>
                <textarea class="form-control" type="text" disabled>{{ $project->deskripsi_singkat }}</textarea>
            </div>
            <div class="modal-body">
                <label class="form-label">Pengguna</label>
                {{-- <input class="form-control" type="text" value="{{ $project->pengguna->name }}" disabled> --}}
                <input class="form-control" type="text" value="{{ optional($project->pengguna)->name }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Penanggung Jawab</label>
                <input class="form-control" type="text" value="{{ $project->penanggung_jawab }}" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Kontak yang Dapat Dihubungi</label>
                <input class="form-control" type="text" value="{{ $project->nama_kontak }} ({{ $project->nomor_kontak }})" disabled>
            </div>
            <div class="modal-body">
                <label class="form-label">Daftar Fitur Utama</label>
                <textarea class="form-control" type="text" disabled>{{ $project->daftar_fitur }}</textarea>
            </div>
            <div class="modal-body">
                <label class="form-label">Daftar Layanan</label>
                <textarea class="form-control" type="text" disabled>{{ $project->daftar_layanan }}</textarea>
            </div>
            <div class="modal-body">
                <label class="form-label">Daftar Produk Layanan</label>
                <textarea class="form-control" type="text" disabled>{{ $project->daftar_produk_layanan }}</textarea>
            </div>
            {{-- @endforeach --}}

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
