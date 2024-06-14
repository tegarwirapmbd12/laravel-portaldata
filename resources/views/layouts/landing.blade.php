<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portal - SDI Kabupaten Semarang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('portal/img/bitmap22.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('portal/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('portal/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('portal/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('portal/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('portal/css/style.css') }}" rel="stylesheet">

    <!-- CSS Added -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <style>


    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('layouts.partial-landing.navbar')
        <!-- Navbar & Hero End -->

        {{-- MAIN CONTENT START --}}
        @yield('content')
        {{-- MAIN CONTENT END --}}

        <!-- Footer Start -->
        @include('layouts.partial-landing.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>



    {{-- MODAL LANDINGPAGE START--}}
    @include('layouts.partial-landing.modal')
    {{-- MODAL LANDINGPAGE START--}}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('portal/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('portal/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('portal/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('portal/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('portal/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('portal/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('portal/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('portal/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- <script src="script.js"></script> -->

    <!-- <script src="visitor-counter.js"></script> -->
    <!-- Template Javascript -->
    <script src="{{ asset('portal/js/main.js') }}"></script>

    <script>
        // // Get the modal
        // var modal = document.getElementById("myModal");

        // // Get the image and set it in the modal
        // var img = document.getElementsByClassName("img-fluid");
        // var modalImg = document.getElementById("modalImage");

        // img.onclick = function(){
        //   modal.style.display = "block";
        //   modalImg.src = this.src;
        // }

        // // Close the modal when the "x" is clicked
        // var closeBtn = document.getElementsByClassName("close")[0];
        // closeBtn.onclick = function() {
        //   modal.style.display = "none";
        // }

        // // Close the modal when clicking outside the modal
        // window.onload= function(event) {
        //   if (event.target == modal) {
        //     modal.style.display = "none";
        //   }
        // }

        $(".img-item").on("click", function() {
            $('#imagepreview').attr('src', $(this).find(".img-fluid").attr('src')); // here asign the image to the modal when the user click the enlarge link
            $('#imagelink').attr('href', $(this).find(".img-fluid").attr('src')); // here asign the image to the modal when the user click the enlarge link
            $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });

		$(".pdf-item").on("click", function() {
            $('#imagepreview').attr('src', $(this).find(".img-fluid").attr('src')); // here asign the image to the modal when the user click the enlarge link
            $('#imagelink').attr('href', $(this).data('pdf')); // here asign the image to the modal when the user click the enlarge link
            $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });

        // JavaScript to handle the toggle action
        document.getElementById("toggleLink").addEventListener("click", function() {
            // Toggle the target link
            let targetLink = document.getElementById("searchLink");
            if (targetLink.style.display === "none") {
                targetLink.style.display = "block";
            } else {
                targetLink.style.display = "none";
            }
        });
    </script>

    <script>

    </script>

</body>

</html>
