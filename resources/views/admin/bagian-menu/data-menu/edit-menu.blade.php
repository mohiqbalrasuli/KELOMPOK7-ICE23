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
            <li class="breadcrumb-item"><a href="/data-menu">Menu</a></li>
            <li class="breadcrumb-item" aria-current="page">Form Edit Menu</li>
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
          <h3 class="card-title">Form Edit Menu</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form>
                    @csrf
                  <div class="form-group">
                    <label class="form-label" for="exampleInputName">Nama Menu</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                      placeholder="Masukkan Nama Menu" value="Nasi Goreng">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputStatus">Kategori Menu</label>
                    <select class="mb-0 form-select">
                        <option>Makanan</option>
                        <option>Minuman</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputHarga">Harga</label>
                    <input type="text" class="form-control" id="exampleInputHarga" placeholder="Masukkan Harga" value="Rp. 10.000">
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

