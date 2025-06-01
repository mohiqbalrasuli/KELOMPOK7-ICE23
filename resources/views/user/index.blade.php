@extends('user.layout.template_landing')

@section('content')
    <!-- END nav -->
    <div class="hero">
        <section class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url({{ asset('/assets/landing/images/bg_1.jpg') }})">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text">
                                <h2>Lebih dari sekadar hotel... sebuah pengalaman</h2>
                                <h1 class="mb-3">
                                    Hotel untuk seluruh keluarga, sepanjang tahun.
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{ asset('/assets/landing/images/bg_2.jpg') }})">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text">
                                <h2>Harbor Lights Hotel &amp; Resort</h2>
                                <h1 class="mb-3">Terasa seperti berada di rumah sendiri.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @auth
        <section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        @php
                            $role = auth()->user()->role;
                            $action = match ($role) {
                                'admin' => url('admin/mybee-hotel&resto/pesanan-kamar/store'),
                                'staff_pengelola_kamar' => url('staff-kamar/mybee-hotel&resto/pesanan-kamar/store'),
                                'staff_pengelola_restoran' => url('staff-restoran/mybee-hotel&resto/pesanan-kamar/store'),
                                default => url('mybee-hotel&resto/pesanan-kamar/store'),
                            };
                        @endphp

                        <form action="{{ $action }}" class="booking-form aside-stretch" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Tanggal Check-in</label>
                                        <input type="date" name="tanggal_checkin" class="form-control"
                                            placeholder="Tanggal check-in" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Tanggal Check-out</label>
                                        <input type="date" name="tanggal_checkout" class="form-control"
                                            placeholder="Tanggal check-out" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">No Telepon</label>
                                        <input type="text" name="no_telepon" class="form-control"
                                            placeholder="Masukkan No. Telepon" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Kamar</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon">
                                                    <span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select name="kamar_id" id="" class="form-control">
                                                    <option value="">Pilih Kamar</option>
                                                    @foreach ($kamar as $value)
                                                        <option value="{{ $value->id }}">
                                                            ({{ $value->nomer_kamar }}){{ $value->kategori_kamar->nama_kategori }}
                                                            - Rp {{ $value->kategori_kamar->harga }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Tamu</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon">
                                                    <span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select name="jumlah_orang" id="" class="form-control">
                                                    <option value="1">1 Dewasa</option>
                                                    <option value="2">2 Dewasa</option>
                                                    <option value="3">3 Dewasa</option>
                                                    <option value="4">4 Dewasa</option>
                                                    <option value="5">5 Dewasa</option>
                                                    <option value="6">6 Dewasa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex">
                                <div class="form-group d-flex align-self-stretch">
                                    <button type="submit"
                                        class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block"><span>Cek
                                            Ketersediaan
                                            <small>Harga Terbaik Dijamin!</small></span></button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endauth

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Selamat Datang di Harbor Lights Hotel</span>
                    <h2 class="mb-4">Anda Akan Betah Tinggal Di Sini</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-reception-bell"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Layanan Ramah</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services active py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-serving-dish"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Sarapan Gratis</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-car"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Layanan Antar Jemput</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-spa"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Suite &amp; SPA</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services py-4 d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-bed"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Cozy Rooms</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-7 order-md-last d-flex">
                    <div class="img img-1 mr-md-2 ftco-animate"
                        style="background-image: url({{ asset('/assets/landing/images/about-1.jpg') }})"></div>
                    <div class="img img-2 ml-md-2 ftco-animate"
                        style="background-image: url({{ asset('/assets/landing/images/about-2.jpg') }})"></div>
                </div>
                <div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">Tentang Mybee Hotel & Restaurant</span>
                        <h2 class="mb-4">
                            Mybee Hotel & Restaurant Hotel Terbaik yang Direkomendasikan di Seluruh Indonesia
                        </h2>
                    </div>
                    <p>
                        Mybee Hotel & Restaurant adalah hotel bintang 5 yang menawarkan pengalaman menginap mewah dengan fasilitas lengkap dan pelayanan terbaik. Terletak di lokasi strategis, kami memberikan kenyamanan maksimal bagi setiap tamu kami.
                    </p>
                    <p>
                        <a href="#" class="btn btn-secondary rounded">Pesan Kamar Anda Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimony-section">
        <div class="container">
            <div class="row no-gutters ftco-animate justify-content-center">
                <div class="col-md-5 d-flex">
                    <div class="testimony-img aside-stretch-2"
                        style="background-image: url({{ asset('/assets/landing/images/testimony-img.jpg') }})"></div>
                </div>
                <div class="col-md-7 py-5 pl-md-5">
                    <div class="py-md-5">
                        <div class="heading-section ftco-animate mb-4">
                            <span class="subheading">Testimoni</span>
                            <h2 class="mb-0">Pelanggan Puas</h2>
                        </div>
                        <div class="carousel-testimony owl-carousel ftco-animate">
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">
                                            Hotel yang sangat nyaman dengan pelayanan terbaik. Staff sangat ramah dan profesional. Fasilitas lengkap dan bersih. Sangat direkomendasikan untuk liburan keluarga.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('/assets/landing/images/person_1.jpg') }})">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Budi Santoso</p>
                                            <span class="position">Pengusaha</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">
                                            Kamar yang luas dan nyaman dengan pemandangan kota yang indah. Restoran hotel menyajikan makanan lezat dengan pilihan menu yang beragam. Spa dan kolam renang membuat liburan semakin menyenangkan.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('/assets/landing/images/person_2.jpg') }})">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Siti Rahayu</p>
                                            <span class="position">Dokter</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">
                                            Lokasi strategis dengan akses mudah ke berbagai tempat wisata. Tim event organizer sangat membantu dalam menyiapkan acara pernikahan kami. Semua tamu terkesan dengan pelayanan yang diberikan.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('/assets/landing/images/person_3.jpg') }})">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Ahmad Hidayat</p>
                                            <span class="position">Guru</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">
                                            Hotel dengan konsep modern dan elegan. Cocok untuk meeting bisnis dan acara perusahaan. Fasilitas meeting room yang lengkap dengan teknologi terkini. Tim staff sangat profesional dan responsif.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('/assets/landing/images/person_4.jpg') }})">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Dewi Lestari</p>
                                            <span class="position">Event Organizer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-room">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Kamar Mybee Hotel</span>
                    <h2 class="mb-4">Daftar Kategori kamar</h2>
                </div>
            </div>
            <div class="row no-gutters">
                @foreach ($kategori_kamar as $value)
                    <div class="col-lg-6">
                        <div class="room-wrap d-md-flex ftco-animate">
                            <a href="#" class="img"
                                style="background-image: url({{ asset('assets/images/kamar/' . $value->gambar) }})"></a>
                            <div class="half left-arrow d-flex align-items-center">
                                <div class="text p-4 text-center">
                                    <p class="star mb-0">
                                        <span class="ion-ios-star"></span><span class="ion-ios-star"></span><span
                                            class="ion-ios-star"></span><span class="ion-ios-star"></span><span
                                            class="ion-ios-star"></span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="price mr-1">Rp {{ $value->harga }}</span>
                                        <span class="per">per night</span>
                                    </p>
                                    <h3 class="mb-3"><a href="rooms.html">{{ $value->nama_kategori }}</a></h3>
                                    <p class="pt-1">
                                        @auth
                                            @if (auth()->user()->role == 'admin')
                                                <a href="{{ url('admin/mybee-hotel&resto/room/room-singgle/'. $value->id) }}"
                                                    class="btn-custom px-3 py-2 rounded">View</a>
                                            @elseif (auth()->user()->role == 'staff_pengelola_kamar')
                                                <a href="{{ url('staff-kamar/mybee-hotel&resto/room/room-singgle/'. $value->id) }}"
                                                    class="btn-custom px-3 py-2 rounded">View</a>
                                            @elseif (auth()->user()->role == 'staff_pengelola_restoran')
                                                <a href="{{ url('staff-restoran/mybee-hotel&resto/room/room-singgle/' . $value->id) }}"
                                                    class="btn-custom px-3 py-2 rounded">View</a>
                                            @else
                                                <a href="{{ url('mybee-hotel&resto/room/room-singgle/'. $value->id) }}"
                                                    class="btn-custom px-3 py-2 rounded">View</a>
                                            @endif
                                        @endauth
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-menu bg-light">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Restaurant</span>
                    <h2>Restaurant</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($menu as $value)
                    <div class="col-lg-6 col-xl-4 d-flex">
                        <div class="pricing-entry rounded d-flex ftco-animate">
                            <div class="img"
                                style="background-image: url({{ asset('assets/images/menu/' . $value->gambar) }}  )">
                            </div>
                            <div class="desc p-4">
                                <div class="d-md-flex text align-items-start">
                                    <h3><span>{{ $value->nama_menu }}</span></h3>
                                    <span class="price">Rp {{ $value->harga }}</span>
                                </div>
                                <div class="d-block">
                                    <p>
                                        {{ $value->kategori_menu->nama_kategori_menu }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 text-center ftco-animate">
                    @auth
                        @if (auth()->user()->role == 'admin')
                            <p><a href="{{ url('admin/mybee-hotel&resto/restaurant') }}" class="btn btn-primary rounded">View
                                    All Menu</a></p>
                        @elseif (auth()->user()->role == 'staff_pengelola_kamar')
                            <p><a href="{{ url('staff-kamar/mybee-hotel&resto/restaurant') }}"
                                    class="btn btn-primary rounded">View All Menu</a></p>
                        @elseif (auth()->user()->role == 'staff_pengelola_restoran')
                            <p><a href="{{ url('staff-restoran/mybee-hotel&resto/restaurant') }}"
                                    class="btn btn-primary rounded">View All Menu</a></p>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Read Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url({{ asset('/assets/landing/images/image_1.jpg') }})">
                        </a>
                        <div class="text mt-3 text-center">
                            <div class="meta mb-2">
                                <div><a href="#">Oct. 30, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading">
                                <a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url({{ asset('/assets/landing/images/image_2.jpg') }})">
                        </a>
                        <div class="text mt-3 text-center">
                            <div class="meta mb-2">
                                <div><a href="#">Oct. 30, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading">
                                <a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url({{ asset('/assets/landing/images/image_3.jpg') }})">
                        </a>
                        <div class="text mt-3 text-center">
                            <div class="meta mb-2">
                                <div><a href="#">Oct. 30, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </div>
                            </div>
                            <h3 class="heading">
                                <a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram">
        <div class="container-fluid">
            <div class="row no-gutters justify-content-center pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Photos</span>
                    <h2><span>Instagram</span></h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-1.jpg" class="insta-img image-popup"
                        style="background-image: url({{ asset('/assets/landing/images/insta-1.jpg') }})">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-2.jpg" class="insta-img image-popup"
                        style="background-image: url({{ asset('/assets/landing/images/insta-2.jpg') }})">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-3.jpg" class="insta-img image-popup"
                        style="background-image: url({{ asset('/assets/landing/images/insta-3.jpg') }})">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-4.jpg" class="insta-img image-popup"
                        style="background-image: url({{ asset('/assets/landing/images/insta-4.jpg') }})">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="images/insta-5.jpg" class="insta-img image-popup"
                        style="background-image: url({{ asset('/assets/landing/images/insta-5.jpg') }})">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>
