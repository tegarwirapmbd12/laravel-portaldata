<div class="modal fade text-left" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Register</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
            <div class="modal-body">
                <div class="mb-0">
                  <label for="single-select-field" class="form-label">Name</label>
                  <input class="form-control" type="name" placeholder="Masukkan Nama" aria-label="default input example" id="name" name="name" value="">
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                  <label for="single-select-field" class="form-label">Username</label>
                  <input class="form-control" type="text" placeholder="Masukkan Username" aria-label="default input example" id="username" name="username" value="">
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                  <label for="single-select-field" class="form-label">Email Address</label>
                  <input class="form-control" type="email" placeholder="Masukkan Email" aria-label="default input example" id="email" name="email" value="">
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                  <label for="passwordInput" class="form-label">Password</label>
                  <input class="form-control" type="password" placeholder="Masukkan Password" aria-label="default input example" id="password" name="password" value="">
                  {{-- <span class="input-password-text cursor-pointer" id="togglePassword"><i class="far fa-eye-slash"></i></span> --}}
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-0">
                  <label for="passwordInput" class="form-label">Masukkan Ulang Password</label>
                  <input class="form-control" type="password" placeholder="Masukkan Password" aria-label="default input example" id="password_confirmation" name="password_confirmation" value="">
                  {{-- <span class="input-password-text cursor-pointer" id="togglePassword"><i class="far fa-eye-slash"></i></span> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary px-5"><ion-icon name="save-outline"></ion-icon>Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>




