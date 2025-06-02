<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Mybee Hotel & Resto</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <!-- [Google Font] Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="/dashboard" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="{{ asset('assets/images/Screenshot_2025-05-15_224615-removebg-preview.png') }}"
                        width="225px" alt="logo">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    @if (auth()->user()->role === 'admin')
                        <li class="pc-item">
                            <a href="{{ url('admin/dashboard') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                                <span class="pc-mtext">Dashboard</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/pengguna') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-user"></i></span>
                                <span class="pc-mtext">Data Pengguna</span>
                            </a>
                        </li>

                        <li class="pc-item pc-caption">
                            <label>Kamar</label>
                            <i class="ti ti-dashboard"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/kategori-kamar') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-bed"></i></span>
                                <span class="pc-mtext">Kategori Kamar</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/data-kamar') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-bed"></i></span>
                                <span class="pc-mtext">Data Kamar</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/pesanan-kamar') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
                                <span class="pc-mtext">Data Pesanan</span>
                            </a>
                        </li>

                        <li class="pc-item pc-caption">
                            <label>Restoran</label>
                            <i class="ti ti-news"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/kategori-menu') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-tools-kitchen-2"></i></span>
                                <span class="pc-mtext">Kategori Menu</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/data-menu') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-tools-kitchen-2"></i></span>
                                <span class="pc-mtext">Data Menu</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/pesanan-menu') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
                                <span class="pc-mtext">Data Pesanan</span>
                            </a>
                        </li>
                        <li class="pc-item pc-caption">
                            <label>Pembayaran</label>
                            <i class="ti ti-news"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/metode-pembayaran') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-cash-banknote"></i></span>
                                <span class="pc-mtext">Metode Pembayaran</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('admin/data-pembayaran') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-cash-banknote"></i></span>
                                <span class="pc-mtext">Data Pembayaran</span>
                            </a>
                        </li>
                    @elseif (auth()->user()->role === 'staff_pengelola_kamar')
                        <li class="pc-item">
                            <a href="{{ url('staff-kamar/dashboard') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                                <span class="pc-mtext">Dashboard</span>
                            </a>
                        </li>
                        <li class="pc-item pc-caption">
                            <label>Kamar</label>
                            <i class="ti ti-dashboard"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-kamar/kategori-kamar') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-bed"></i></span>
                                <span class="pc-mtext">Kategori Kamar</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-kamar/data-kamar') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-bed"></i></span>
                                <span class="pc-mtext">Data Kamar</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-kamar/pesanan-kamar') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
                                <span class="pc-mtext">Data Pesanan</span>
                            </a>
                        </li>
                        <li class="pc-item pc-caption">
                            <label>Pembayaran</label>
                            <i class="ti ti-news"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-kamar/data-pembayaran') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-cash-banknote"></i></span>
                                <span class="pc-mtext">Data Pembayaran</span>
                            </a>
                        </li>
                    @elseif (auth()->user()->role === 'staff_pengelola_restoran')
                        <li class="pc-item">
                            <a href="{{ url('staff-restoran/dashboard') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                                <span class="pc-mtext">Dashboard</span>
                            </a>
                        </li>
                        <li class="pc-item pc-caption">
                            <label>Restoran</label>
                            <i class="ti ti-news"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-restoran/kategori-menu') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-tools-kitchen-2"></i></span>
                                <span class="pc-mtext">Kategori Menu</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-restoran/data-menu') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-tools-kitchen-2"></i></span>
                                <span class="pc-mtext">Data Menu</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-restoran/pesanan-menu') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
                                <span class="pc-mtext">Data Pesanan</span>
                            </a>
                        </li>
                        <li class="pc-item pc-caption">
                            <label>Pembayaran</label>
                            <i class="ti ti-news"></i>
                        </li>
                        <li class="pc-item">
                            <a href="{{ url('staff-restoran/data-pembayaran') }}" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-cash-banknote"></i></span>
                                <span class="pc-mtext">Data Pembayaran</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none">
                        <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-search"></i>
                        </a>
                        <div class="dropdown-menu pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i data-feather="search"></i>
                                    <input type="search" class="form-control border-0 shadow-none"
                                        placeholder="Search here. . .">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                        <form class="header-search">
                            <i data-feather="search" class="icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search here. . .">
                        </form>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="pc-h-item">
                        @if (auth()->user()->role === 'admin')
                            <a href="{{ url('admin/mybee-hotel&resto') }}" title="Ke Halaman Utama"
                                class="pc-head-link" href="#" role="button">
                                <i class="ti ti-brand-chrome"></i>
                            </a>
                        @elseif(auth()->user()->role === 'staff_pengelola_kamar')
                            <a href="{{ url('staff-kamar/mybee-hotel&resto') }}" title="Ke Halaman Utama"
                                class="pc-head-link" href="#" role="button">
                                <i class="ti ti-brand-chrome"></i>
                            </a>
                        @elseif (auth()->user()->role === 'staff_pengelola_restoran')
                            <a href="{{ url('staff-restoran/mybee-hotel&resto') }}" title="Ke Halaman Utama"
                                class="pc-head-link" href="#" role="button">
                                <i class="ti ti-brand-chrome"></i>
                            </a>
                        @endif
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Message</h5>
                                <a href="#!" class="pc-head-link bg-transparent"><i
                                        class="ti ti-x text-danger"></i></a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative"
                                style="max-height: calc(100vh - 215px)">
                                <div class="list-group list-group-flush w-100">
                                    @foreach ($notifikasi as $value)
                                        <a class="list-group-item list-group-item-action">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/user/avatar-1.jpg') }}"
                                                        alt="user-image" class="user-avtar">
                                                </div>
                                                <div class="flex-grow-1 ms-1">
                                                    <span
                                                        class="float-end text-muted">{{ \Carbon\Carbon::parse($value->waktu)->format('g:i A') }}</span>
                                                    <p class="text-body mb-1">
                                                        <b>{{ $value->name }}</b> {{ $value->subjek }}
                                                    </p>
                                                    <span
                                                        class="text-muted">{{ \Carbon\Carbon::parse($value->waktu)->format('j F') }}</span>
                                                </div>

                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="text-center py-2">
                                <a href="#!" class="link-primary">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                            aria-expanded="false">
                            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image"
                                class="user-avtar">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex mb-1">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image"
                                            class="user-avtar wid-35">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                                        <span>{{ Auth::user()->role }}</span>
                                    </div>
                                    <a href="/logout" class="pc-head-link bg-transparent"><i
                                            class="ti ti-power text-danger"></i></a>
                                </div>
                            </div>
                            {{-- <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="drp-t1" data-bs-toggle="tab"
                                        data-bs-target="#drp-tab-1" type="button" role="tab"
                                        aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i>
                                        Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="drp-t2" data-bs-toggle="tab"
                                        data-bs-target="#drp-tab-2" type="button" role="tab"
                                        aria-controls="drp-tab-2" aria-selected="false"><i
                                            class="ti ti-settings"></i> Setting</button>
                                </li>
                            </ul> --}}
                            {{-- <div class="tab-content" id="mysrpTabContent">
                                <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel"
                                    aria-labelledby="drp-t1" tabindex="0">
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-edit-circle"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-user"></i>
                                        <span>View Profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-clipboard-list"></i>
                                        <span>Social Profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-wallet"></i>
                                        <span>Billing</span>
                                    </a>
                                    <a href="/logout" class="dropdown-item">
                                        <i class="ti ti-power"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2"
                                    tabindex="0">
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-help"></i>
                                        <span>Support</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-user"></i>
                                        <span>Account Settings</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-lock"></i>
                                        <span>Privacy Center</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-messages"></i>
                                        <span>Feedback</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-list"></i>
                                        <span>History</span>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        @yield('content')
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col-sm my-1">
                    <p class="m-0">Mybee Hotel & Resto crafted by Team 7 Distributed by Informatics Engineering E23.
                    </p>
                </div>
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item"><a href="/dashboard">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change("preset-1");
    </script>
    <script>
        font_change("Public-Sans");
    </script>
</body>
<!-- [Body] end -->

</html>
