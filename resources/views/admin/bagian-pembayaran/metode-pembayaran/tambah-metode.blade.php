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
                            <li class="breadcrumb-item"><a href="/metode-pembayaran">Metode Pembayaran</a></li>
                            <li class="breadcrumb-item" aria-current="page">Form Tambah Metode Pembayaran</li>
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
                        <h3 class="card-title">Form Tambah Metode Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ url('admin/metode-pembayaran/store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputnamabank">Nama Menu</label>
                                        <input type="text" name="nama_menu" class="form-control" id="exampleInputnamabank"
                                            aria-describedby="emailHelp" placeholder="Masukkan Nama Menu">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputRekening">No Rekening</label>
                                        <input type="text" name="no_rekening" class="form-control" id="exampleInputRekening"
                                            placeholder="Masukkan No Rekening">
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
