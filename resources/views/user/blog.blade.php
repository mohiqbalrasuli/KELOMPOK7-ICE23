@extends('user.layout.template_landing')
@section('content')
		<div class="hero-wrap" style="background-image: url({{ asset('/assets/landing/images/bg_3.jpg') }});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/mybee-hotel&resto">Beranda</a></span> <span>Blog</span></p>
	            <h1 class="mb-4 bread">Cerita Kami</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('/assets/landing/images/image_1.jpg') }});">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">30 Okt. 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Pengalaman Menakjubkan di Hotel Kami</a></h3>
                <p>Sebuah pengalaman yang tak terlupakan menanti Anda di hotel kami. Dengan fasilitas lengkap dan pelayanan terbaik, kami menjamin kenyamanan Anda selama menginap.</p>
                <a href="#" class="btn btn-secondary rounded">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('/assets/landing/images/image_2.jpg') }});">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">30 Okt. 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Fasilitas Terbaik untuk Tamu Kami</a></h3>
                <p>Nikmati berbagai fasilitas mewah yang kami sediakan untuk memberikan pengalaman menginap yang tak terlupakan bagi setiap tamu kami.</p>
                <a href="#" class="btn btn-secondary rounded">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('/assets/landing/images/image_3.jpg') }});">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">30 Okt. 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Kuliner Lezat di Restoran Hotel</a></h3>
                <p>Jelajahi berbagai hidangan lezat yang disajikan oleh chef profesional kami. Setiap hidangan dibuat dengan bahan-bahan berkualitas terbaik.</p>
                <a href="#" class="btn btn-secondary rounded">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('/assets/landing/images/image_4.jpg') }});">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">30 Okt. 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Aktivitas Menarik untuk Keluarga</a></h3>
                <p>Temukan berbagai aktivitas seru yang dapat dinikmati bersama keluarga. Kami menyediakan program khusus untuk membuat liburan Anda lebih berkesan.</p>
                <a href="#" class="btn btn-secondary rounded">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('/assets/landing/images/image_5.jpg') }});">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">30 Okt. 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Paket Liburan Spesial</a></h3>
                <p>Dapatkan penawaran menarik untuk paket liburan Anda. Kami menyediakan berbagai pilihan paket yang dapat disesuaikan dengan kebutuhan Anda.</p>
                <a href="#" class="btn btn-secondary rounded">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('/assets/landing/images/image_6.jpg') }});">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">30 Okt. 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Testimoni Tamu Kami</a></h3>
                <p>Baca pengalaman menginap dari tamu-tamu kami yang telah merasakan pelayanan dan kenyamanan di hotel kami.</p>
                <a href="#" class="btn btn-secondary rounded">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection