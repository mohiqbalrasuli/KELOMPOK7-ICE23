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
        @if (auth()->user()->role==='admin')
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
                      <th>Total Bayar</th>
                      <th>Bukti Pembayaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pesanan_kamar as $key =>$value )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->metode_pembayaran->nama_bank }}</td>
                        <td>{{ $value->tanggal_bayar }}</td>
                        <td>{{ $value->total_harga }}</td>
                        <td><img src="{{ asset('assets/images/bukti_pembayaran_kamar/'.$value->bukti_pembayaran) }}" alt="" width="100px"></td>
                    </tr>

                    @endforeach
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
                      <th>Total Bayar</th>
                      <th>Bukti Pembayaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pesanan_menu as $key =>$value )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->metode_pembayaran->nama_bank }}</td>
                        <td>{{ $value->tanggal_bayar }}</td>
                        <td>{{ $value->total_harga }}</td>
                        <td><img src="{{ asset('assets/images/bukti_pembayaran_kamar/'.$value->bukti_pembayaran) }}" alt="" width="100px"></td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Default Styling table start -->
        @elseif (auth()->user()->role==='staff_pengelola_kamar')
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
                      <th>Total Bayar</th>
                      <th>Bukti Pembayaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pesanan_kamar as $key =>$value )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->metode_pembayaran->nama_bank }}</td>
                        <td>{{ $value->tanggal_bayar }}</td>
                        <td>{{ $value->total_harga }}</td>
                        <td><img src="{{ asset('assets/images/bukti_pembayaran_kamar/'.$value->bukti_pembayaran) }}" alt="" width="100px"></td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Default Styling table start -->

        @elseif (auth()->user()->role==='staff_pengelola_restoran')
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
                      <th>Total Bayar</th>
                      <th>Bukti Pembayaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pesanan_menu as $key =>$value )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->metode_pembayaran->nama_bank }}</td>
                        <td>{{ $value->tanggal_bayar }}</td>
                        <td>{{ $value->total_harga }}</td>
                        <td><img src="{{ asset('assets/images/bukti_pembayaran_kamar/'.$value->bukti_pembayaran) }}" alt="" width="100px"></td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Default Styling table start -->
        @endif
      </div>
      <!-- [ Main Content ] end -->
</div>
@endsection
