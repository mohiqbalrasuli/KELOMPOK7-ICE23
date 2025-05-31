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
                <li class="breadcrumb-item"><a href="/data-kamar">Kamar</a></li>
                <li class="breadcrumb-item" aria-current="page">Form Tambah Kamar</li>
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
              <h3 class="card-title">Form Tambah Kamar</h3>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    @if (auth()->user()->role==='admin')
                    <form action="{{ url('admin/kamar/store') }}" method="POST">
                    @csrf
                    @elseif (auth()->user()->role==='staff_pengelola_kamar')
                    <form action="{{ url('staff-kamar/kamar/store') }}" method="POST">
                    @csrf
                    @endif

                      <div class="form-group">
                        <label class="form-label" for="exampleInputName">Nomor Kamar</label>
                        <input type="number" name="nomer_kamar" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                          placeholder="Masukkan Nomor Kamar">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputStatus">Kategori Kamar</label>
                        <select class="mb-0 form-select" name="kategori_kamar_id">
                            <option selected disabled>--Pilih Kategori--</option>
                            @foreach ($kategori_kamar as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputlantai">Lantai</label>
                        <input type="number" name="lantai" class="form-control" id="exampleInputlantai" placeholder="Masukkan Nomor Lantai">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputStatus">Status</label>
                        <select class="mb-0 form-select" name="status">
                            <option selected disabled>--Status--</option>
                            <option value="tersedia">Tersedia</option>
                            <option value="terisi">Terisi</option>
                            <option value="maintenance">Maintenance</option>
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
