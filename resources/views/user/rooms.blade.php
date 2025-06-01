@extends('user.layout.template_landing')

@section('content')
	<div class="hero-wrap" style="background-image: url({{ asset('/assets/landing/images/bg_3.jpg') }});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Restaurant</span></p>
	            <h1 class="mb-4 bread">Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Harbor Lights Rooms</span>
            <h2 class="mb-4">Hotel Master's Rooms</h2>
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
                                        @if(auth()->user()->role == 'admin')
                                            <a href="{{ url('admin/mybee-hotel&resto/room/room-singgle/'. $value->id) }}"
                                                class="btn-custom px-3 py-2 rounded">View</a>
                                        @elseif (auth()->user()->role == 'staff_pengelola_kamar')
                                            <a href="{{ url('staff-kamar/mybee-hotel&resto/room/room-singgle/'. $value->id) }}"
                                                class="btn-custom px-3 py-2 rounded">View</a>
                                        @elseif (auth()->user()->role == 'staff_pengelola_restoran')
                                            <a href="{{ url('staff-restoran/mybee-hotel&resto/room/room-singgle/'. $value->id) }}"
                                                class="btn-custom px-3 py-2 rounded">View</a>
                                        @else
                                            <a href="{{ url('mybee-hotel&resto/room/room-singgle/', $value->id) }}"
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


    @endsection
