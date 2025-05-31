@extends('user.layout.template_landing')

@section('content')
    <div class="hero-wrap" style="background-image: url('{{ asset('assets/landing/images/bg_3.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span
                                class="mr-2"><a href="rooms.html">Rooms</a></span> <span>Rooms Single</span></p>
                        <h1 class="mb-4 bread">Rooms Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="single-slider owl-carousel">
                                <div class="item">
                                    <div class="room-img" style="background-image: url({{ asset('assets/images/kamar/' . $kategori_kamar->gambar) }});"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                            <h2 class="mb-4">{{ $kategori_kamar->nama_kategori }} <span>- ({{ $jumlah_kamar }} Available rooms)</span></h2>
                            <p>{{ $kategori_kamar->deskripsi }}</p>
                            <div class="d-md-flex mt-5 mb-5">
                                <ul class="list">
                                    <li><span>Kapasitas:</span> {{ $kategori_kamar->kapasitas }} Persons</li>
                                    <li><span>Harga:</span> {{ $kategori_kamar->harga }}</li>
                                </ul>
                                <ul class="list ml-md-5">
                                    <li><span>Kamar Tersedia:</span>
                                        <ul>
                                            @foreach ($kamar as $item)
                                                <li>{{ $item->nomer_kamar }}</li>
                                            @endforeach
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
@endsection
