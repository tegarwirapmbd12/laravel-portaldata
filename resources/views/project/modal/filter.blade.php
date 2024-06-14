<div class="modal fade text-left" id="filterModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter Projek</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="GET">
            <div class="modal-body">
                <div class="mb-0">
                    <label for="single-select-field" class="form-label">OPD</label>
                    <select class="form-select select2" id="selectOPD" data-placeholder="-- Pilih OPD --" name="opd_id" style="width: 100%" value="{{ @old('opd_id') }}">
                        <option value="">-- Pilih OPD --</option>
                        @foreach ($opds as $opd)
                        <option value="{{ $opd->id }}" {{ old('opd_id') == $opd->id ? 'selected' : '' }}>{{ $opd->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                    <label for="single-select-field" class="form-label">Platform</label>
                    <select class="form-select" id="selectPlatform" data-placeholder="Pilih Platform" name="platform_id">
                        <option value="">-- Pilih Platform --</option>
                        @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}" {{ old('platform_id') == $platform->id ? 'selected' : '' }}>{{ $platform->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                    <label for="single-select-field" class="form-label">Tipe Aplikasi</label>
                    <select class="form-select" id="selectTipe" name="tipe_id">
                        <option value="">-- Pilih Tipe Aplikasi --</option>
                        @foreach ($tipes as $tipe)
                        <option value="{{ $tipe->id }}" {{ old('tipe_id') == $tipe->id ? 'selected' : '' }}>{{ $tipe->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                    <label for="single-select-field" class="form-label">Sektor Pelayanan</label>
                    <select class="form-select" id="selectSektorPelayanan" name="sektor_pelayanan_id">
                        <option value="">-- Pilih Sektor Pelayanan --</option>
                        @foreach ($sektor_pelayanans as $sektor_pelayanan)
                        <option value="{{ $sektor_pelayanan->id }}" {{ old('sektor_pelayanan_id') == $sektor_pelayanan->id ? 'selected' : '' }}>{{ $sektor_pelayanan->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                    <label for="single-select-field" class="form-label">Pengguna</label>
                    <select class="form-select" id="selectPengguna" name="pengguna_id">
                        <option value="">-- Pilih Pengguna --</option>
                        @foreach ($penggunas as $pengguna)
                        <option value="{{ $pengguna->id }}" {{ old('pengguna_id') == $pengguna->id ? 'selected' : '' }}>{{ $pengguna->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-1">
                    <label class="form-label">Status</label>
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="aktif" value="1">
                        <label class="form-check-label" for="aktif">Aktif</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="tidak_aktif" value="0">
                        <label class="form-check-label" for="tidak_aktif">Tidak Aktif</label>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger px-5" id="resetButton"><ion-icon name="close-circle-outline"></ion-icon>Reset Filter</button>
                <button type="submit" class="btn btn-primary px-5"><ion-icon name="save-outline"></ion-icon>Terapkan Filter</button>
            </div>
            </form>
        </div>
    </div>
</div>




