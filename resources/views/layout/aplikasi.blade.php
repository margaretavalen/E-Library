<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
    <title>E-Library</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap') }}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body> 
  <div class="container-xxl bg-white p-0">
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <div class="container-xxl position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
          {{-- <span><img src="{{ asset('img/logo.png') }}" alt="Logo"></span> --}}
          <span><h1 class="text-primary m-0">E Library</h1></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('index') }}" class="{{ ($title == 'index') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ ($title == 'about') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">About</a>
            <a href="{{ route('book') }}" class="{{ ($title == 'book') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Book</a>
            <a href="{{ route('audiobook') }}" class="{{ ($title == 'audiobook') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Audiobook</a>
            <a href="{{ route('blog') }}" class="{{ ($title == 'blog') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Blog</a>
            <a href="{{ route('contact') }}" class="{{ ($title == 'contact') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Contact</a>
            @auth
            <a href="{{ route('booklist') }}" class="{{ ($title == 'booklist') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">List Book</a>
            @endauth
          </div>
          @guest
          <a href="{{ route('form-login') }}" class="btn btn-primary py-2 px-4">Login</a>
          @endguest
          @auth
          <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-4">Logout</a>
          @endauth
        </div>
      </nav>
      @yield('awal')
      @if( Session::has( 'success' ))    
      <div class="alert alert-success" role="alert">{{ Session::get( 'success' ) }}</div>
      @endif
    </div>
    @yield('konten')
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
              <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
              <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
            </div>
            <div class="col-lg-4 col-md-6">
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Blackpink Street, Suite 17 Semarang</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 8123 4567 890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>elibrary@gmail.com</p>
                <div class="d-flex pt-2">
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
              <p>Send your aspiration in here</p>
              <div class="position-relative mx-auto" style="max-width: 400px;">
                  <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                  <a type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" href="{{ route('contact') }}">Send</a>
              </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="{{ route('index') }}">E-Library</a>, All Right Reserved. By Margareta Valencia<br><br>
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.isotope-3.0.6.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

@yield('script')
<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
