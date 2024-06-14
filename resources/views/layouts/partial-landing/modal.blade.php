<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a download type="button" id="imagelink" class="btn btn-primary btn-sm" href="#"><span class="fa fa-download"></span> Unduh</a>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" aria-label="Close"><span class="fa fa-times"></span> Tutup</button>
            </div>
            <div class="modal-body">
                <img src="" id="imagepreview" style="width: 100%;">
            </div>
            <div class="modal-footer">
                <!-- <h3 style="text-align: left;">contoh 1</h3> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal while user select search engine in navbar -->
<div class="modal fade text-left" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg " role="document">
    <div class="modal-content bg-transparent">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pencarian Data</h5>
            <button type="button" class="close bg-transparent" style="border: none;" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: white;">&times;</span>
            </button>
        </div>
        <br>
        <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="search-input" placeholder="masukkan pencarian"/>
            <button class="btn btn-dark" type="button" id="search-button"><i class="fa fa-search"></i></button>
      </div>
        </form>
    </div>
</div>
</div>
