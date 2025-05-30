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
                <li class="breadcrumb-item" aria-current="page">Data Kamar</li>
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
                <h3>Data Kamar</h3>
                <a href="/kamar/create" class="btn btn-primary" >
                  <i class="ti ti-circle-plus"></i>
                  Tambah Kamar</a>
              </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomer Kamar</th>
                      <th>Kategori Kamar</th>
                      <th>Lantai</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kamar as $key => $value)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->nomer_kamar }}</td>
                      <td>{{ $value->kategori_kamar->nama_kategori }}</td>
                      <td>{{ $value->lantai }}</td>
                      <td>{{ $value->status }}</td>
                      <td>
                        <a href="/kamar/edit/{{ $value->id }}" class="btn btn-primary">Edit</a>
                        <a href="/kamar/delete/{{ $value->id }}" class="btn btn-danger">Hapus</a>
                      </td>
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
