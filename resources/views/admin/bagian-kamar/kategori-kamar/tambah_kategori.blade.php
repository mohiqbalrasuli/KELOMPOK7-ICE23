@extends('admin.layout.template_admin')

@section('content')
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Kamar</a></li>
                <li class="breadcrumb-item"><a href="/kategori-kamar">Kategori Kamar</a></li>
                <li class="breadcrumb-item" aria-current="page">Form Tambah Kategori</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-15">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Form Tambah Kategori Kamar</h3>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    @if (auth()->user()->role === 'admin')
                    <form action="{{ url('admin/kategori-kamar/store') }}" method="POST" enctype="multipart/form-data">
                    @elseif (auth()->user()->role === 'staff_pengelola_kamar')
                    <form action="{{ url('staff-kamar/kategori-kamar/store') }}" method="POST" enctype="multipart/form-data">
                    @endif
                        @csrf
                      <div class="form-group">
                        <label class="form-label" for="exampleInputGambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="exampleInputGambar" aria-describedby="emailHelp"
                          placeholder="Masukkan gambar">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputName">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                          placeholder="Masukkan Nama Kategori">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputDeskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="exampleInputDeskripsi" placeholder="Masukkan Deskripsi">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputKapasitas">Kapasitas</label>
                        <input type="number" name="kapasitas" class="form-control" id="exampleInputKapasitas" placeholder="Masukkan Kapasitas">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputHarga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="exampleInputHarga" placeholder="Masukkan harga">
                      </div>
                      <button type="submit" class="btn btn-primary mb-4">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection
