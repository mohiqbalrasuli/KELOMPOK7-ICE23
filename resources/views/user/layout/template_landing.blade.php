<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mybee Hotel & Restaurant</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet" href="{{ asset('/assets/landing/css/open-iconic-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/landing/css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/landing/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/landing/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/landing/css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/landing/css/aos.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/landing/css/ionicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/landing/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/landing/css/jquery.timepicker.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/landing/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/landing/css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/landing/css/style.css') }}" />
  </head>
  <body>

    <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html">Mybee Hotel<span> & Restaurant</span></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="/mybee-hotel&resto" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/mybee-hotel&resto/rooms" class="nav-link">Our Rooms</a>
            </li>
            <li class="nav-item">
              <a href="/mybee-hotel&resto/restaurant" class="nav-link">Restaurant</a>
            </li>
            <li class="nav-item">
              <a href="/mybee-hotel&resto/about" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="/mybee-hotel&resto/blog" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="/mybee-hotel&resto/contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="user-menu" style="margin: 0; padding: 0; margin-right: 20px;">
        @auth
            <div class="dropdown">
                <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="User Avatar" class="rounded-circle mr-2" style="width: 32px; height: 32px;">
                    <span>{{ auth()->user()->name }}</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/mybee-hotel&resto/profile">Profile</a>
                    <a class="dropdown-item" href="/mybee-hotel&resto/orders">My Orders</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </div>
        @else
            <a href="/login" class="btn btn-primary">Login</a>
        @endauth
    </div>
    </nav>
    <!-- END nav -->
    @yield('content')
    <footer
      class="ftco-footer ftco-section img"
      style="background-image: url({{ asset('/assets/landing/images/bg_4.jpg') }})"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mybee Hotel & Restaurant</h2>
              <p>
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts.
              </p>
              <ul
                class="ftco-footer-social list-unstyled float-md-left float-lft mt-5"
              >
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text"
                      >203 Fake St. Mountain View, San Francisco, California,
                      USA</span
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-phone"></span
                      ><span class="text">+2 392 3929 210</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-envelope"></span
                      ><span class="text">info@yourdomain.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Mybee Hotel & Restaurant
              <script>
                document.write(new Date().getFullYear());
              </script>
              crafted by Team 7 Distributed by Informatics Engineering E23.
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="{{ asset('/assets/landing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/aos.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('/assets/landing/js/google-map.js') }}"></script>
    <script src="{{ asset('/assets/landing/js/main.js') }}"></script>
  </body>
</html>
