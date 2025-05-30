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
                <li class="breadcrumb-item" aria-current="page">Pengguna</li>
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
              <h3>Data Pengguna</h3>
              @if (auth()->user()->role === 'admin')
              <a href="{{ url('admin/pengguna/create') }}" class="btn btn-primary">
                <i class="ti ti-circle-plus"></i>
                Tambah Pengguna</a>
                @endif
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $key => $value)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->role }}</td>
                      <td>
                        <a href="{{ url('admin/pengguna/edit/'. $value->id ) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('admin/pengguna/delete/'. $value->id ) }}" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" style="display: flex; justify-content:space-between">
              <h3>Data Admin</h3>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($admin as $key => $value)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->role }}</td>
                      <td>
                        <a href="{{ url('admin/pengguna/edit/'. $value->id ) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('admin/pengguna/delete/'. $value->id ) }}" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" style="display: flex; justify-content:space-between">
              <h3>Data Staff Hotel</h3>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($staff_hotel as $key => $value)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->role }}</td>
                      <td>
                        <a href="{{ url('admin/pengguna/edit/'. $value->id ) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('admin/pengguna/delete/'. $value->id ) }}" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" style="display: flex; justify-content:space-between">
              <h3>Data Staff Restoran</h3>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($staff_restoran as $key => $value)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->role }}</td>
                      <td>
                        <a href="{{ url('admin/pengguna/edit/'. $value->id ) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('admin/pengguna/delete/'. $value->id ) }}" class="btn btn-danger">Hapus</a>
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
