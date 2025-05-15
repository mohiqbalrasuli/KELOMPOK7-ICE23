@extends('layout.template_admin')

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
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
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
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">
              <h5>Data Kamar</h5>
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
                    <tr>
                      <td>1</td>
                      <td>101</td>
                      <td>VIP</td>
                      <td>1</td>
                      <td>Tersedia</td>
                      <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>102</td>
                      <td>VIP</td>
                      <td>1</td>
                      <td>Tersedia</td>
                      <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>103</td>
                      <td>VIP</td>
                      <td>1</td>
                      <td>Tersedia</td>
                      <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
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
