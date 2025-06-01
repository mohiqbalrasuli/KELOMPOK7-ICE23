@extends('user.layout.template_landing')

@section('content')
		<div class="hero-wrap" style="background-image: url({{ asset('/assets/landing/images/bg_3.jpg') }});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/mybee-hotel&resto">Beranda</a></span> <span>Tentang Kami</span></p>
            <h1 class="mb-4 bread">Tentang Mybee Hotel & Restaurant</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Selamat Datang di Mybee Hotel & Restaurant</span>
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
                <h3 class="heading mb-3">Pelayanan Ramah</h3>
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
                <h3 class="heading mb-3">Kamar Nyaman</h3>
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
						<div class="img img-1 mr-md-2 ftco-animate" style="background-image: url({{ asset('/assets/landing/images/about-1.jpg') }});"></div>
						<div class="img img-2 ml-md-2 ftco-animate" style="background-image: url({{ asset('/assets/landing/images/about-2.jpg') }});"></div>
					</div>
					<div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">Tentang Mybee Hotel & Restaurant</span>
	            <h2 class="mb-4">Mybee Hotel & Restaurant Hotel Paling Direkomendasikan di Seluruh Dunia</h2>
	          </div>
	          <p>Jauh di sana, di balik pegunungan kata-kata, jauh dari negara Vokalia dan Consonantia, di sana tinggal teks-teks buta. Terpisah mereka tinggal di Bookmarksgrove tepat di pesisir Semantics, lautan bahasa yang besar.</p>
	          <p><a href="#" class="btn btn-secondary rounded">Pesan Kamar Anda Sekarang</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="testimony-section">
      <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
        	<div class="col-md-5 d-flex">
        		<div class="testimony-img aside-stretch-2" style="background-image: url({{ asset('/assets/landing/images/testimony-img.jpg') }});"></div>
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
	                    <p class="mb-4">Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakan segala yang diperlukan. Ini adalah negara yang paradis, di mana bagian-bagian kalimat yang dipanggang terbang ke mulut Anda.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url({{ asset('/assets/landing/images/person_1.jpg') }})">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Gerald Hodson</p>
		                    <span class="position">Pengusaha</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakan segala yang diperlukan. Ini adalah negara yang paradis, di mana bagian-bagian kalimat yang dipanggang terbang ke mulut Anda.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url({{ asset('/assets/landing/images/person_2.jpg') }})">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Gerald Hodson</p>
		                    <span class="position">Pengusaha</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakan segala yang diperlukan. Ini adalah negara yang paradis, di mana bagian-bagian kalimat yang dipanggang terbang ke mulut Anda.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Gerald Hodson</p>
		                    <span class="position">Businessman</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Gerald Hodson</p>
		                    <span class="position">Businessman</span>
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

		<section class="instagram ftco-section ftco-no-pb">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Photos</span>
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('/assets/landing/images/insta-1.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('/assets/landing/images/insta-1.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('/assets/landing/images/insta-2.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('/assets/landing/images/insta-2.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('/assets/landing/images/insta-3.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('/assets/landing/images/insta-3.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('/assets/landing/images/insta-4.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('/assets/landing/images/insta-4.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('/assets/landing/images/insta-5.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('/assets/landing/images/insta-5.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


@endsection