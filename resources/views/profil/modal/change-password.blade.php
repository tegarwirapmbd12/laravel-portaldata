<div class="modal fade text-left" id="changepasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/profile/change-password" method="POST">
                {{ csrf_field() }}
            <div class="modal-body">
                <label class="form-label" for="password">Password Lama</label>
                <input class="form-control" id="current_password" name="current_password" type="password" placeholder="**********">
            </div>
            <div class="modal-body">
                <label class="form-label">Password Baru</label>
                <input class="form-control" id="new_password" name="new_password" type="password" placeholder="**********">
            </div>
            <div class="modal-body">
                <label class="form-label">Ulangi Password Baru</label>
                <input class="form-control" id="new_password_confirmation" name="new_password_confirmation" type="password" placeholder="**********">
            </div>
            <div class="modal-body">
                <button type="submit" class="btn btn-primary px-4"><ion-icon name="save-outline"></ion-icon>Simpan Perubahan</button>
            </div>
            </form>
        </div>
    </div>
</div>
