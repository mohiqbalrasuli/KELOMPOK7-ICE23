@extends('admin.layout.template_admin')

@section('content')
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Kamar</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Kategori Kamar</a></li>
                <li class="breadcrumb-item" aria-current="page">Form Edit Kamar</li>
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
              <h3 class="card-title">Form Edit Kamar</h3>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form>
                        @csrf
                      <div class="form-group">
                        <label class="form-label" for="exampleInputName">Nomor Kamar</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                          placeholder="Masukkan Nama Kategori" value="Kamar 1">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputStatus">Kategori Kamar</label>
                        <select class="mb-0 form-select">
                            <option>VIP</option>
                            <option>Reguler</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputDeskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="exampleInputDeskripsi" placeholder="Masukkan Deskripsi" value="Kamar 1">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputStatus">Status</label>
                        <select class="mb-0 form-select">
                            <option>Tersedia</option>
                            <option>Di Booking</option>
                            <option>Perbaikan</option>
                        </select>
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