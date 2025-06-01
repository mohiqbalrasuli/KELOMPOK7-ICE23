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
                <li class="breadcrumb-item"><a href="javascript: void(0)">Kamar</a></li>
                <li class="breadcrumb-item" aria-current="page">Pesanan Kamar</li>
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
              <h3>Data Pesanan Kamar</h3>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomer Kamar</th>
                      <th>Nama</th>
                      <th>No Telepon</th>
                      <th>Jumlah Orang</th>
                      <th>Chek In</th>
                      <th>Chek Out</th>
                      <th>Harga</th>
                      <th>status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pesanan as $item => $value )
                    <tr>
                      <td>{{ $item + 1 }}</td>
                      <td>{{ $value->kamar->nomer_kamar }}</td>
                      <td>{{ $value->user->name }}</td>
                      <td>{{ $value->no_telepon }}</td>
                      <td>{{ $value->jumlah_orang }}</td>
                      <td>{{ $value->tanggal_checkin }}</td>
                      <td>{{ $value->tanggal_checkout }}</td>
                      <td>{{ $value->total_harga }}</td>
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
