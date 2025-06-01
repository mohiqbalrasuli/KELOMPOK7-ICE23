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
                        <li class="breadcrumb-item"><a href="/data-pembayaran">Pembayaran</a></li>
                        <li class="breadcrumb-item" aria-current="page">Data Metode Pembayaran</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between">
                <h3>Data Metode Pembayaran</h3>
                <a href="{{ url('admin/metode-pembayaran/create') }}" class="btn btn-primary" >
                  <i class="ti ti-circle-plus"></i>
                  Tambah Menu</a>
              </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bank</th>
                                    <th>Atas Nama</th>
                                    <th>No Rekening</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($metode_pembayaran as $key => $value )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->nama_bank }}</td>
                                    <td>{{ $value->atas_nama }}</td>
                                    <td>{{ $value->nomor_rekening }}</td>
                                    <td>
                                        <a href="{{ url('admin/metode-pembayaran/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('admin/metode-pembayaran/delete/'.$value->id) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection

