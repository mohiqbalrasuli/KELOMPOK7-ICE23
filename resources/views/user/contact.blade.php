@extends('user.layout.template_landing')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('/assets/landing/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/mybee-hotel&resto">Beranda</a></span>
                            <span>Hubungi Kami</span>
                        </p>
                        <h1 class="mb-4 bread">Hubungi Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h3">Informasi Kontak</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info rounded bg-white p-4">
                        <p><span>Alamat:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info rounded bg-white p-4">
                        <p><span>Telepon:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info rounded bg-white p-4">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info rounded bg-white p-4">
                        <p><span>Situs Web</span> <a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    @if (auth()->user()->role === 'admin')
                        <form action="{{ url('admin/mybee-hotel&resto/contact/store') }}" method="POST"
                            class="bg-white p-5 contact-form">
                            @csrf
                        @elseif (auth()->user()->role === 'staff_pengelola_restoran')
                            <form action="{{ url('staff-restoran/mybee-hotel&resto/contact/store') }}"
                                class="bg-white p-5 contact-form" method="POST">
                                @csrf
                            @elseif (auth()->user()->role === 'staff_pengelola_kamar')
                                <form action="{{ url('staff-kamar/mybee-hotel&resto/contact/store') }}"
                                    class="bg-white p-5 contact-form" method="POST">
                                    @csrf
                                @else
                                    <form action="{{ url('/mybee-hotel&resto/contact/store') }}"
                                        class="bg-white p-5 contact-form" method="POST" enctype="multipart/form-data">
                                        @csrf
                    @endif
                    <div class="form-group">
                        <input type="text" name="subjek" class="form-control" placeholder="Subjek">
                    </div>
                    <div class="form-group">
                        <textarea name="pesan" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                    </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
