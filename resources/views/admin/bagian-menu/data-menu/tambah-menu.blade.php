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
                            <li class="breadcrumb-item" aria-current="page">Form Tambah Menu</li>
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
                        <h3 class="card-title">Form Tambah Menu</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/data-menu/store" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputgambar">Gambar</label>
                                        <input type="file" name="gambar" class="form-control" id="exampleInpugambar"
                                            aria-describedby="emailHelp" placeholder="Masukkan Gambar">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputName">Nama Menu</label>
                                        <input type="text" name="nama_menu" class="form-control" id="exampleInputName"
                                            aria-describedby="emailHelp" placeholder="Masukkan Nama Menu">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputStatus">Kategori Menu</label>
                                        <select class="mb-0 form-select" name="kategori_menu_id">
                                            <option selected disabled>--Pilih Kategori Menu--</option>
                                            @foreach ($kategori_menu as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_kategori_menu }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputHarga">Harga</label>
                                        <input type="number" name="harga" class="form-control" id="exampleInputHarga"
                                            placeholder="Masukkan Harga">
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
