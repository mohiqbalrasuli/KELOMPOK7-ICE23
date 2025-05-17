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
                <li class="breadcrumb-item"><a href="javascript: void(0)">Pembayaran</a></li>
                <li class="breadcrumb-item" aria-current="page">Data Pembayaran</li>
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
            <div class="card-header">
              <h3>Data Pembayaran Hotel</h3>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Metode Pembayaran</th>
                      <th>Tanggal</th>
                      <th>Jenis Pesanan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Iqbal</td>
                      <td>BRI</td>
                      <td>2025-05-16</td>
                      <td>Kamar</td>
                      <td>Sudah Lunas</td>
                      <td>
                        <a href="" class="btn btn-primary">Detail</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Default Styling table start -->
        <!-- Default Styling table start -->
        <div class="col-md-15">
          <div class="card">
            <div class="card-header">
              <h3>Data Pembayaran Restoran</h3>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Metode Pembayaran</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Iqbal</td>
                      <td>BRI</td>
                      <td>2025-05-16</td>
                      <td>Sudah Lunas</td>
                      <td>
                        <a href="" class="btn btn-primary">Detail</a>
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
