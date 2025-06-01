<!DOCTYPE html>
<html lang="id">

<head>
    <title>Mybee Hotel & Restaurant</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet" />
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

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Mybee Hotel<span> & Restaurant</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    @if (auth()->check())
                        @auth
                            @if (auth()->user()->role === 'admin')
                                <li class="nav-item active">
                                    <a href="{{ url('admin/mybee-hotel&resto') }}" class="nav-link">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/mybee-hotel&resto/rooms') }}" class="nav-link">Kamar Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/mybee-hotel&resto/restaurant') }}"
                                        class="nav-link">Restoran</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/mybee-hotel&resto/about') }}" class="nav-link">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/mybee-hotel&resto/blog') }}" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/mybee-hotel&resto/contact') }}" class="nav-link">Kontak</a>
                                </li>
                            @elseif (auth()->user()->role === 'staff_pengelola_kamar')
                                <li class="nav-item active">
                                    <a href="{{ url('staff-kamar/mybee-hotel&resto') }}" class="nav-link">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-kamar/mybee-hotel&resto/rooms') }}" class="nav-link">Kamar Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-kamar/mybee-hotel&resto/restaurant') }}"
                                        class="nav-link">Restoran</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-kamar/mybee-hotel&resto/about') }}" class="nav-link">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-kamar/mybee-hotel&resto/blog') }}" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-kamar/mybee-hotel&resto/contact') }}"
                                        class="nav-link">Kontak</a>
                                </li>
                            @elseif (auth()->user()->role === 'staff_pengelola_restoran')
                                <li class="nav-item active">
                                    <a href="{{ url('staff-restoran/mybee-hotel&resto') }}" class="nav-link">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-restoran/mybee-hotel&resto/rooms') }}" class="nav-link">Kamar Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-restoran/mybee-hotel&resto/restaurant') }}"
                                        class="nav-link">Restoran</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-restoran/mybee-hotel&resto/about') }}" class="nav-link">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-restoran/mybee-hotel&resto/blog') }}" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('staff-restoran/mybee-hotel&resto/contact') }}"
                                        class="nav-link">Kontak</a>
                                </li>
                            @elseif (auth()->user()->role === 'user')
                                <li class="nav-item active">
                                    <a href="/mybee-hotel&resto" class="nav-link">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mybee-hotel&resto/rooms" class="nav-link">Kamar Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mybee-hotel&resto/restaurant" class="nav-link">Restoran</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mybee-hotel&resto/about" class="nav-link">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mybee-hotel&resto/blog" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mybee-hotel&resto/contact" class="nav-link">Kontak</a>
                                </li>
                            @endif
                        @endauth
                    @else
                        <li class="nav-item active">
                            <a href="/mybee-hotel&resto" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="/mybee-hotel&resto/rooms" class="nav-link">Kamar Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="/mybee-hotel&resto/restaurant" class="nav-link">Restoran</a>
                        </li>
                        <li class="nav-item">
                            <a href="/mybee-hotel&resto/about" class="nav-link">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="/mybee-hotel&resto/blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="/mybee-hotel&resto/contact" class="nav-link">Kontak</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="user-menu" style="margin: 0; padding: 0; margin-right: 20px;">
            @auth
                <div class="dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="userDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Avatar Pengguna"
                            class="rounded-circle mr-2" style="width: 32px; height: 32px;">
                        <span>{{ auth()->user()->name }}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        @if (auth()->user()->role === 'admin')
                            <a class="dropdown-item" href="{{ url('admin/dashboard') }}">Dashboard</a>
                        @elseif (auth()->user()->role === 'staff_pengelola_kamar')
                            <a class="dropdown-item" href="{{ url('staff-kamar/dashboard') }}">Dashboard</a>
                        @elseif (auth()->user()->role === 'staff_pengelola_restoran')
                            <a class="dropdown-item" href="{{ url('staff-restoran/dashboard') }}">Dashboard</a>
                        @endif
                        <a class="dropdown-item" href="/mybee-hotel&resto/profile">Profile</a>
                        @if (auth()->user()->role==='admin')
                        <a class="dropdown-item" href="{{ url('admin/mybee-hotel&resto/pembayaran-kamar') }}">My Orders</a>
                        @elseif (auth()->user()->role==='staff_pengelola_kamar')
                        <a class="dropdown-item" href="{{ url('staff-kamar/mybee-hotel&resto/pembayaran-kamar') }}">My Orders</a>
                        @elseif (auth()->user()->role==='staff_pengelola_restoran')
                        <a class="dropdown-item" href="{{ url('staff-restoran/mybee-hotel&resto/pembayaran-kamar') }}">My Orders</a>
                        @else
                        <a class="dropdown-item" href="/mybee-hotel&resto/pembayaran-kamar">My Orders</a>
                        @endif
                        @if (auth()->user()->role==='admin')
                        <a class="dropdown-item" href="{{ url('admin/mybee-hotel&resto/pembayaran-menu') }}">Menu Orders</a>
                        @elseif (auth()->user()->role==='staff_pengelola_kamar')
                        <a class="dropdown-item" href="{{ url('staff-kamar/mybee-hotel&resto/pembayaran-menu') }}">Menu Orders</a>
                        @elseif (auth()->user()->role==='staff_pengelola_restoran')
                        <a class="dropdown-item" href="{{ url('staff-restoran/mybee-hotel&resto/pembayaran-menu') }}">Menu Orders</a>
                        @else
                        <a class="dropdown-item" href="/mybee-hotel&resto/pembayaran-menu">Menu Orders</a>
                        @endif
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
    <footer class="ftco-footer ftco-section img"
        style="background-image: url({{ asset('/assets/landing/images/bg_4.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Mybee Hotel & Restaurant</h2>
                        <p>
                            Hotel dan restoran terbaik dengan pelayanan berkualitas tinggi untuk memberikan pengalaman menginap dan bersantap yang tak terlupakan bagi setiap tamu kami.
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
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
                        <h2 class="ftco-heading-2">Tautan Berguna</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Blog</a></li>
                            <li><a href="#" class="py-2 d-block">Kamar</a></li>
                            <li><a href="#" class="py-2 d-block">Fasilitas</a></li>
                            <li><a href="#" class="py-2 d-block">Kartu Hadiah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Privasi</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Karir</a></li>
                            <li><a href="#" class="py-2 d-block">Tentang Kami</a></li>
                            <li><a href="#" class="py-2 d-block">Hubungi Kami</a></li>
                            <li><a href="#" class="py-2 d-block">Layanan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Ada Pertanyaan?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">Jl. Contoh No. 123
                                        Jakarta Selatan, DKI Jakarta,
                                        Indonesia</span>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">+62
                                            812 3456 7890</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@mybeehotel.com</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Mybee Hotel & Restaurant &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        dibuat oleh Tim 7 Teknik Informatika E23.
                    </p>
                </div>
            </div>
        </div>
    </footer>

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
