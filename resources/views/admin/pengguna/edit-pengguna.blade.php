@extends('admin.layout.template_admin')

@section('content')
<div class="pc-content">
    <!-- [ breadcrumb ] start -->
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Kamar</a></li>
            <li class="breadcrumb-item"><a href="/pengguna">Pengguna</a></li>
            <li class="breadcrumb-item" aria-current="page">Form Edit Pengguna</li>
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
          <h3 class="card-title">Form Edit Pengguna</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="{{ url('admin/pengguna/update/'.$pengguna->id) }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label class="form-label" for="exampleInputName">Nama Pengguna</label>
                    <input type="text" name="name" value="{{ $pengguna->name }}" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                      placeholder="Masukkan Nama Pengguna">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputEmail">Email</label>
                    <input type="email" name="email" value="{{ $pengguna->email }}" class="form-control" id="exampleInputEmail" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInpuRole">Role</label>
                    <select class="mb-0 form-select" name="role">
                        <option selected disabled></option>
                        <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="staff pengelola kamar" {{ $pengguna->role == 'staff pengelola kamar' ? 'selected' : '' }}>Staff Hotel</option>
                        <option value="staff pengelola restoran" {{ $pengguna->role == 'staff pengelola restoran' ? 'selected' : '' }}>Staff Restoran</option>
                    </select>
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
