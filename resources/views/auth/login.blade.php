<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link rel="icon" type="image/x-icon" href="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-simawang.png') }}">
  <link href="{{ asset('fobiaadmin/fobia/ltr/assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('fobiaadmin/fobia/ltr/assets/js/pace.min.js') }}"></script>

  <!--plugins-->
  <link href="{{ asset('fobiaadmin/fobia/ltr/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{ asset('fobiaadmin/fobia/ltr/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('fobiaadmin/fobia/ltr/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="{{ asset('fobiaadmin/fobia/ltr/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('fobiaadmin/fobia/ltr/assets/css/icons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body{
        background-color: #923eb9;
    }
    .input-password {
      position: relative;
    }

    .input-password-text {
      position: absolute;
      top: 72%;
      right: 16px;
      transform: translateY(-50%);
      cursor: pointer;
      background-color: transparent; /* Mengatur latar belakang menjadi transparan */
      border: none; /* Menghilangkan border */
    }

    .password-input {
      padding-right: 40px;
    }
  </style>

  <title>Simawang - Sistem Manajemen Website Jawa Tengah</title>
</head>

<body>

  <!--start wrapper-->
  @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

      @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
            <div class="login-logo text-center">
                <img src="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-jateng-removebg-preview.png') }}" class="logo" alt="Logo" style="width: 20%; height: 35%; margin-bottom: 5%; margin-top: 5%">
              </div>
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <a href="javascript:;"><img src="{{ asset('fobiaadmin/fobia/ltr/assets/images/logo-text-simawang.png') }}" alt="" style="width: 50%"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="text-left" style="padding-left: 4%; margin-top: 6%; margin-bottom: 6%; border-left: 3px solid rgb(208, 21, 211)">
                <h4>Login</h4>
              </div>
              <form class="form-body row g-3" action="/login" method="post">
                @csrf
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="input-password col-12">
                  <label for="passwordInput" class="form-label">Password</label>
                  <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password" required>
                  <span class="input-password-text cursor-pointer" id="togglePassword"><i class="far fa-eye-slash"></i></span>
                </div>
                <div class="col-12">
                    <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-danger reload" id="reload">
                            &#x21bb;
                        </button>
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                </div>
                <div class="col-12 col-lg-12 social-auth-links text-center mb-3">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                  </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end wrapper-->
  <script src="{{ asset('fobiaadmin/fobia/ltr/assets/js/jquery.min.js') }}"></script>

  <script>
    const passwordInput = document.getElementById('passwordInput');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.innerHTML = '<i class="far fa-eye"></i>';
      } else {
        passwordInput.type = 'password';
        togglePassword.innerHTML = '<i class="far fa-eye-slash"></i>';
      }
    });

    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success:function(data){
                $(".captcha span").html(data.captcha)
            }
        });
    });
  </script>





</body>

</html>
