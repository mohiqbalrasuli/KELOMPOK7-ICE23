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
                                <form action="/data-menu/update/{{ $menu->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputName">Gambar</label>
                                        <input type="file" class="form-control" id="exampleInputName"
                                            aria-describedby="emailHelp" placeholder="Masukkan Nama Menu" name="gambar">
                                        <!-- Tampilkan gambar lama jika ada -->
                                        @if ($menu->gambar)
                                            <div class="mt-2">
                                                <img src="{{ asset('assets/images/menu/' . $menu->gambar) }}"
                                                    alt="Gambar Lama" width="150">
                                                <p class="text-muted">Gambar saat ini</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputName">Nama Menu</label>
                                        <input type="text" class="form-control" id="exampleInputName"
                                            aria-describedby="emailHelp" placeholder="Masukkan Nama Menu" name="nama_menu"
                                            value="{{ $menu->nama_menu }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputStatus">Kategori Menu</label>
                                        <select class="mb-0 form-select" name="kategori_menu_id">
                                            <option selected disabled>--Pilih Kategori Menu--</option>
                                            @foreach ($kategori_menu as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $menu->kategori_menu_id ? 'selected' : '' }}>
                                                    {{ $item->nama_kategori_menu }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputHarga">Harga</label>
                                        <input type="text" class="form-control" name="harga"
                                            value="{{ $menu->harga }}" id="exampleInputHarga" placeholder="Masukkan Harga">
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
