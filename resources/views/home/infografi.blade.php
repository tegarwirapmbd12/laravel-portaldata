@extends('layouts.index_view')
@section('content')

<div id="main-content">
    <section class="work" id="portfolio">
            <div class="card-header">
                <h1 class="text-secondary " style=" font-weight: bold; margin-left: 20px;">PUBLIKASI</h1>
            </div>
		<div class="container">
			<h2 class="work-title title text-center"><strong>INFOGRAFIS</strong></h2>
			<div class="row portfolio-controllers-container">
				<div class="portfolio-controllers wow fadeLeft" data-wow-duration="1s" data-wow-delay=".1s">
					<button type="button" class="filter-btn active-work" data-filter="all">All</button>
					<button type="button" class="filter-btn" data-filter=".web-design">Web Design</button>
					<button type="button" class="filter-btn" data-filter=".web-development">Web Development</button>
					<button type="button" class="filter-btn" data-filter=".graphics">Graphics</button>
					<button type="button" class="filter-btn" data-filter=".wordpress">Wordpress</button>
				</div>
			</div>
		</div>
		<div class="portfolios">
            @foreach($infografis as $infografi)
            <div class="col-md-4 col-sm-6 portfolio web-design">
				<figure class="portfolio-image">
					<img src="{{ $infografi->image }}" alt="" class="img-responsive">
					<figcaption class="caption text-center">
						<div class="caption-content">
							<h3 class="portfolio-item-title text-center sub-title">{{ $infografi->title }}</h3>
							<ul class="portfolio-link">
								<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</figcaption>
				</figure>
			</div>
            @endforeach
		</div>
		{{-- <div class="more more-work more-container text-center">
			<a href="#">See More</a>
		</div> --}}
	</section><!-- End Work Section -->
</div>









@endsection
@section('script')
<script>
     // Reset nilai-nilai filter ke nilai default
    $(document).ready(function() {
        $("#resetButton").click(function() {
            $("#selectOPD").val(null).trigger("change");
            $("#selectMetadataRoles").val("");
        });
    });

</script>
<script>
    $(document).ready(function() {
        $('.view-modal').on('click', function() {
            var metadataId = $(this).data('id');
            $('#viewModal').data('metadata-id', metadataId);
        });

        $('#viewModal').on('show.bs.modal', function() {
            var metadataId = $(this).data('metadata-id');
            // Lakukan permintaan AJAX untuk mengambil informasi variabel dari server
            $.ajax({
                url: '/metadata/' + metadataId, // Ganti dengan rute yang sesuai di aplikasi Anda
                type: 'GET',
                success: function(response) {
                    $('#metadataAlias').text(response.alias); // Misalnya, response ini berisi data variabel yang diambil dari server
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
