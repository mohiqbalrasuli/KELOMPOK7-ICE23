@extends('user.layout.template_landing')
@section('content')
<div class="hero-wrap" style="background-image: url({{ asset('/assets/landing/images/bg_3.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/mybee-hotel&resto">Home</a></span>
                        <span>Pembayaran</span>
                    </p>
                    <h1 class="mb-4 bread">Pembayaran Menu</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-no-pb ftco-room">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Pembayaran Menu</span>
        <h2 class="mb-4">Pembayaran Berhasil !!!</h2>
        <p>Silahkan Tunggu di kursi yang anda duduki</p>
        <p>Apabila anda memilih metode pembayaran bayar di tempat, silahkan menuju kasir untuk melakukan pembayaran setelah menikmati Menu Kami</p>
      </div>
    </div>
</section>
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-12 text-center">
            @if (Auth::user()->role == 'admin')
                <a href="{{ url('admin/mybee-hotel&resto') }}" class="btn btn-primary">Kembali</a>
            @elseif (Auth::user()->role == 'staff_pengelola_kamar')
                <a href="{{ url('staff-kamar/mybee-hotel&resto') }}" class="btn btn-primary">Kembali</a>
            @elseif (Auth::user()->role == 'staff_pengelola_restoran')
                <a href="{{ url('staff-restoran/mybee-hotel&resto') }}" class="btn btn-primary">Kembali</a>
            @else
                <a href="{{ url('mybee-hotel&resto') }}" class="btn btn-primary">Kembali</a>
            @endif
        </div>
    </div>
</div>
@endsection
