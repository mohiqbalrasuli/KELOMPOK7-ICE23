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
                        @if (auth()->user()->role === 'admin')
                        <a href="{{ url('admin/kategori-kamar/create') }}" class="btn btn-primary">
                            <i class="ti ti-circle-plus"></i>
                            Tambah Kategori</a>
                        @elseif (auth()->user()->role === 'staff_pengelola_kamar')
                        <a href="{{ url('staff-kamar/kategori-kamar/create') }}" class="btn btn-primary">
                            <i class="ti ti-circle-plus"></i>
                            Tambah Kategori</a>
                        @endif
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Kapasitas</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori_kamar as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img src="{{ asset('assets/images/kamar/' . $value->gambar) }}" alt="{{ $value->nama_kategori }}" width="100px"></td>
                                            <td>{{ $value->nama_kategori }}</td>
                                            <td>{{ $value->deskripsi }}</td>
                                            <td>{{ $value->kapasitas }}</td>
                                            <td>{{ $value->harga }}</td>
                                            <td>
                                                @if (auth()->user()->role === 'admin')
                                                <a href="{{ url('admin/kategori-kamar/edit/'.$value->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/kategori-kamar/delete/'.$value->id) }}"
                                                    class="btn btn-danger">Hapus</a>
                                                @elseif (auth()->user()->role === 'staff_pengelola_kamar')
                                                <a href="{{ url('staff-kamar/kategori-kamar/edit/'.$value->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ url('staff-kamar/kategori-kamar/delete/'.$value->id) }}"
                                                    class="btn btn-danger">Hapus</a>
                                                @endif
                                            </td>
                                    @endforeach
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
