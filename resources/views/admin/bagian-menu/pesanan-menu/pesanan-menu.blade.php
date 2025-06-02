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
                <li class="breadcrumb-item"><a href="/pesanan-menu">Pesanan Menu</a></li>
                <li class="breadcrumb-item" aria-current="page">Data Pesanan Menu</li>
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
              <h3>Data Pesanan Menu</h3>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pembeli</th>
                      <th>Nama Menu</th>
                      <th>Jumlah</th>
                      <th>Total Harga</th>
                      <th>Kursi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pesanan as $key =>$value )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->menu->nama_menu }}</td>
                        <td>{{ $value->jumlah }}</td>
                         <td>{{ $value->total_harga }}</td>
                        <td>{{ $value->kursi }}</td>
                        <td>{{ $value->status }}</td>
                    </tr>
                    @endforeach
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

