@extends('admin.layout.template_admin')

@section('content')
<div class="pc-content">
    <!-- [ breadcrumb ] start -->
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/kategori-menu">Kategori Menu</a></li>
            <li class="breadcrumb-item" aria-current="page">Form Edit Kategori</li>
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
          <h3 class="card-title">Form Edit Kategori Menu</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="/kategori-menu/update/{{ $kategori_menu->id }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label class="form-label" for="exampleInputName">Nama Kategori</label>
                    <input type="text" name="nama_kategori_menu" value="{{ $kategori_menu->nama_kategori_menu }}" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                      placeholder="Masukkan Nama Kategori">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputDeskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" value="{{ $kategori_menu->deskripsi }}" class="form-control" id="exampleInputDeskripsi" placeholder="Masukkan Deskripsi">
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

