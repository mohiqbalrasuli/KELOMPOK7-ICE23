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
            <li class="breadcrumb-item" aria-current="page">Form Tambah Pengguna</li>
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
          <h3 class="card-title">Form Tambah Pengguna</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="/pengguna/store" method="POST">
                    @csrf
                  <div class="form-group">
                    <label class="form-label" for="exampleInputName">Nama Pengguna</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                      placeholder="Masukkan Nama Pengguna">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Masukkan Password">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInpuRole">Role</label>
                    <select class="mb-0 form-select" name="role" id="exampleInputRole">
                        <option selected disabled>--Pilih Role--</option>
                        <option value="admin">Admin</option>
                        <option value="staff pengelola kamar">Staff Hotel</option>
                        <option value="staff pengelola restoran">Staff Restoran</option>
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
