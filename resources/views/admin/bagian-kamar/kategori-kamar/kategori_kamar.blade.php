@extends('admin.layout.template_admin')

@section('content')
<div class="pc-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Home</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/kategori-kamar">Kategori Kamar</a></li>
                <li class="breadcrumb-item" aria-current="page">Data Kategori Kamar</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- Default Styling table start -->
        <div class="col-md-15">
          <div class="card">
            <div class="card-header" style="display: flex; justify-content:space-between">
              <h3>Data Kategori Kamar</h3>
              <a href="/tambah-kategori-kamar" class="btn btn-primary" >
                <i class="ti ti-circle-plus"></i>
                Tambah Kategori</a>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomer Kategori</th>
                      <th>Deskripsi</th>
                      <th>Kapasitas</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>VIP</td>
                      <td>Kategori ini cocok untuk satu keluarga yang sedang liburan ke luar kota</td>
                      <td>5 Orang</td>
                      <td>1.000.000</td>
                      <td>
                        <a href="/edit-kategori-kamar" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Default Styling table start -->
      </div>
      <!-- [ Main Content ] end -->
</div>
@endsection
