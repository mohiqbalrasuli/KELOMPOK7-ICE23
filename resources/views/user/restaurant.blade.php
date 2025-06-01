<style>
    .qty-container {
      display: inline-flex;
      border: 1px solid #ccc;
      border-radius: 4px;
      overflow: hidden;
      height: 28px;
    }

    .qty-btn {
      width: 28px;
      background: #f0f0f0;
      border: none;
      font-size: 16px;
      cursor: pointer;
    }

    .qty-input {
      width: 40px;
      border: none;
      text-align: center;
      outline: none;
      font-size: 14px;
    }

    .qty-btn:active {
      background: #ddd;
    }
  </style>
@extends('user.layout.template_landing')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('/assets/landing/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/mybee-hotel&resto">Beranda</a></span>
                            <span>Restoran</span></p>
                        <h1 class="mb-4 bread">Restoran</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-slider-resto mb-4 mb-md-0 owl-carousel">
                        <div class="item">
                            <div class="resto-img rounded"
                                style="background-image: url({{ asset('/assets/landing/images/room-4.jpg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="resto-img rounded"
                                style="background-image: url({{ asset('/assets/landing/images/room-5.jpg') }});"></div>
                        </div>
                        <div class="item">
                            <div class="resto-img rounded"
                                style="background-image: url({{ asset('/assets/landing/images/room-6.jpg') }});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">Tentang Mybee Hotel & Restaurant</span>
                        <h2 class="mb-4">Mybee Hotel & Restaurant</h2>
                    </div>
                    <p>Jauh di sana, di balik pegunungan kata-kata, jauh dari negara Vokalia dan Consonantia, tinggallah
                        teks-teks buta. Terpisah mereka tinggal di Bookmarksgrove tepat di pesisir Semantics, sebuah
                        samudera bahasa yang luas.</p>
                    <p>Sungai kecil bernama Duden mengalir di tempat mereka dan menyediakan segala yang diperlukan. Ini adalah
                        negara yang paradis, di mana bagian-bagian kalimat yang dipanggang terbang ke mulut Anda.</p>
                    <p><a href="#" class="btn btn-secondary rounded">Info Selengkapnya</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-menu bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Menu Mybee Hotel & Restaurant</span>
                    <h2>Spesialis Kami</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($menu as $value)
                    <div class="col-lg-6 col-xl-4 d-flex">
                        <div class="pricing-entry rounded d-flex ftco-animate">
                            <div class="img"
                                style="background-image: url({{ asset('assets/images/menu/'.$value->gambar) }}  )"></div>
                            <div class="desc p-4">
                                <div class="d-md-flex text align-items-start">
                                    <h3><span>{{ $value->nama_menu }}</span></h3>
                                </div>
                                <div class=" text align-items-start" style="font-size: 10px">
                                    <span class="price">Rp {{ $value->harga }}</span>
                                </div>
                                <div class="d-block">
                                    <p>
                                        {{ $value->kategori_menu->nama_kategori_menu }}
                                    </p>
                                </div>
                                @php
                                $role = auth()->user()->role;
                                $action = match ($role) {
                                    'admin' => url('admin/mybee-hotel&resto/pesanan-menu/store'),
                                    'staff_pengelola_kamar' => url('staff-kamar/mybee-hotel&resto/pesanan-menu/store'),
                                    'staff_pengelola_restoran' => url('staff-restoran/mybee-hotel&resto/pesanan-menu/store'),
                                    default => url('mybee-hotel&resto/pesanan-menu/store'),
                                };
                            @endphp

                            <form action="{{ $action }}" method="POST">
                                @csrf
                                    <input type="hidden" name="menu_id" value="{{ $value->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <div class="qty-container">
                                        <button type="button" class="qty-btn" onclick="decreaseQty(this)">−</button>
                                        <input type="number" name="jumlah" class="qty-input" value="1" min="1" onchange="onQtyChange(this)">
                                        <button type="button" class="qty-btn" onclick="increaseQty(this)">+</button>
                                      </div>
                                    <input type="hidden" name="jumlah" value="1">
                                    <input type="hidden" name="kursi" value="1">
                                    <button class="btn btn-primary" style="margin-top: 10px" type="submit">Tambahkan Pesanan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
<script>
    function decreaseQty(button) {
      const input = button.parentElement.querySelector('.qty-input');
      let value = parseInt(input.value) || 1;
      if (value > 1) {
        input.value = value - 1;
        triggerChange(input);
      }
    }

    function increaseQty(button) {
      const input = button.parentElement.querySelector('.qty-input');
      let value = parseInt(input.value) || 1;
      input.value = value + 1;
      triggerChange(input);
    }

    function onQtyChange(input) {
      let value = parseInt(input.value);
      if (isNaN(value) || value < 1) {
        input.value = 1;
      }
      // Di sini kamu bisa tambahkan aksi tambahan saat jumlah berubah
      // Misalnya: updateTotalHarga(input);
    }

    function triggerChange(input) {
      // Picu onchange manual kalau kamu ingin reaksi otomatis
      if (typeof Event === 'function') {
        input.dispatchEvent(new Event('change'));
      } else {
        // Untuk browser lama
        var evt = document.createEvent('HTMLEvents');
        evt.initEvent('change', false, true);
        input.dispatchEvent(evt);
      }
    }
  </script>

