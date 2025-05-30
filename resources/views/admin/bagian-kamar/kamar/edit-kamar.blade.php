@extends('admin.layout.template_admin')

@section('content')
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Kamar</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Kategori Kamar</a></li>
                <li class="breadcrumb-item" aria-current="page">Form Edit Kamar</li>
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
              <h3 class="card-title">Form Edit Kamar</h3>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form action="/kamar/update/{{ $kamar->id }}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label class="form-label" for="exampleInputName">Nomor Kamar</label>
                        <input type="number" value="{{ $kamar->nomer_kamar }}" name="nomer_kamar" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                          placeholder="Masukkan Nomer Lantai" value="Kamar 1">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputStatus">Kategori Kamar</label>
                        <select class="mb-0 form-select" name="kategori_kamar_id">
                            <option selected disabled>--Pilih Kategori--</option>
                            @foreach ($kategori_kamar as $item)
                            <option value="{{ $item->id }}" {{ $kamar->kategori_kamar_id == $item->id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputlantai">Lantai</label>
                        <input type="text" name="lantai" value="{{ $kamar->lantai }}" class="form-control" id="exampleInputlantai" placeholder="Masukkan lantai" >
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputStatus">Status</label>
                        <select class="mb-0 form-select" name="status">
                            <option selected disabled>--Pilih Status--</option>
                            <option value="tersedia" {{ $kamar->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                            <option value="tidak_tersedia" {{ $kamar->status == 'tidsk_tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
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
