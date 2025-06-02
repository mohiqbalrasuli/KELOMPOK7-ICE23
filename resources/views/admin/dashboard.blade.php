@extends('admin.layout.template_admin')

@section('content')
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Hotel & Restaurant</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        @auth
            @if (auth()->user()->role == 'admin')
                <div class="row">
                    <!-- [ sample-page ] start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Kamar Terisi</h6>
                                <h4 class="mb-3">{{ $kamar_terisi }}/{{ $kamar_tersedia }} </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Tamu</h6>
                                <h4 class="mb-3">{{ $user }} </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                                <h4 class="mb-3">Rp {{ $pendapatan_kamar_hari_ini }} </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                                <h4 class="mb-3">Rp {{ $total_pendapatan_kamar }} </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Menu</h6>
                                <h4 class="mb-3">{{ $menu }}</h4>
                            </div>
                        </div>
                    </div>
                    @if ($kategori == null)
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-2 f-w-400 text-muted">Tidak ada kategori</h6>
                                    <h4 class="mb-3">0</h4>
                                    <p class="mb-0 text-muted text-sm">Silakan tambahkan kategori menu</p>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach ($kategori as $key => $value)
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="mb-2 f-w-400 text-muted">Total {{ $value->nama_kategori_menu }}</h6>
                                        <h4 class="mb-3">
                                            {{ $jumlahMenuPerKategori[$value->id] ?? 0 }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                                <h4 class="mb-3">Rp {{ $pendapatan_menu_hari_ini }} </h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                                <h4 class="mb-3">Rp {{ $total_pendapatan_menu }}</h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-8">
                        <h5 class="mb-3">Pesanan Kamar Terbaru</h5>
                        <div class="card tbl-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>NO. KAMAR</th>
                                                <th>NAMA TAMU</th>
                                                <th>TANGGAL CHEK-IN</th>
                                                <th>STATUS</th>
                                                <th class="text-end">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pesanan_kamar_terbaru as $value )
                                            <tr>
                                                <td><a href="#" class="text-muted">{{ $value->kamar->nomer_kamar }}</a></td>
                                                <td>{{ $value->user->name }}</td>
                                                <td>{{ $value->tanggal_checkin }}</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>{{ $value->status }}</span>
                                                </td>
                                                <td class="text-end">{{ $value->total_harga }}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <h5 class="mb-3">Laporan Analisis</h5>
                        <div class="card">
                            <div class="list-group list-group-flush">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Tingkat
                                    Hunian Kamar<span class="h5 mb-0">85%</span></a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Rata-rata
                                    Durasi Menginap<span class="h5 mb-0">2.5 Hari</span></a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Kepuasan
                                    Tamu<span class="h5 mb-0">4.8/5</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-8">
                        <h5 class="mb-3">Pesanan Menu Terbaru</h5>
                        <div class="card tbl-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>NO. MEJA</th>
                                                <th>NAMA TAMU</th>
                                                <th>JENIS MENU</th>
                                                <th>STATUS</th>
                                                <th class="text-end">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pesanan_menu_terbaru as $value )
                                            <tr>
                                                <td><a href="#" class="text-muted">{{ $value->kursi }}</a></td>
                                                <td>{{ $value->user->name }}</td>
                                                <td>{{ $value->menu->nama_menu }}</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>{{ $value->status }}</span>
                                                </td>
                                                <td class="text-end">Rp {{ $value->total_harga }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <h5 class="mb-3">Riwayat Transaksi</h5>
                        <div class="card">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                                <i class="ti ti-home f-18"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Kamar 101</h6>
                                            <p class="mb-0 text-muted">Hari ini, 14:00</P>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <h6 class="mb-1">+ Rp 1.5 Jt</h6>
                                            <p class="mb-0 text-muted">Check-in</P>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                                <i class="ti ti-utensils f-18"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Meja 12</h6>
                                            <p class="mb-0 text-muted">Hari ini, 13:45</P>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <h6 class="mb-1">+ Rp 450.000</h6>
                                            <p class="mb-0 text-muted">Restoran</P>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                                <i class="ti ti-bed f-18"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Kamar 203</h6>
                                            <p class="mb-0 text-muted">7 jam yang lalu</P>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <h6 class="mb-1">+ Rp 350.000</h6>
                                            <p class="mb-0 text-muted">Room Service</P>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @elseif (auth()->user()->role === 'staff_pengelola_kamar')
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Kamar Terisi</h6>
                        <h4 class="mb-3">{{ $kamar_terisi }}/{{ $kamar_tersedia }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Tamu</h6>
                        <h4 class="mb-3">{{ $user }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                                <h4 class="mb-3">Rp {{ $pendapatan_menu_hari_ini }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                                <h4 class="mb-3">Rp {{ $total_pendapatan_kamar }} </h4>
                            </div>
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-12 col-xl-8">
                        <h5 class="mb-3">Pesanan Kamar Terbaru</h5>
                        <div class="card tbl-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>NO. KAMAR</th>
                                                <th>NAMA TAMU</th>
                                                <th>TANGGAL CHEK-IN</th>
                                                <th>STATUS</th>
                                                <th class="text-end">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pesanan_kamar_terbaru as $value )
                                            <tr>
                                                <td><a href="#" class="text-muted">{{ $value->kamar->nomer_kamar }}</a></td>
                                                <td>{{ $value->user->name }}</td>
                                                <td>{{ $value->tanggal_chekin }}</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>{{ $value->status }}</span>
                                                </td>
                                                <td class="text-end">{{ $value->total_harga }}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="col-md-12 col-xl-4">
                <h5 class="mb-3">Laporan Analisis</h5>
                <div class="card">
                    <div class="list-group list-group-flush">
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Tingkat
                            Hunian Kamar<span class="h5 mb-0">85%</span></a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Rata-rata
                            Durasi Menginap<span class="h5 mb-0">2.5 Hari</span></a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Kepuasan
                            Tamu<span class="h5 mb-0">4.8/5</span></a>
                    </div>
                </div>
            </div>
        </div>
    @elseif (auth()->user()->role === 'staff_pengelola_restoran')
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Menu</h6>
                                <h4 class="mb-3">{{ $menu }} </h4>

                            </div>
                        </div>
                    </div>
                    @if ($kategori == null)
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-2 f-w-400 text-muted">Tidak ada kategori</h6>
                                    <h4 class="mb-3">0</h4>
                                    <p class="mb-0 text-muted text-sm">Silakan tambahkan kategori menu</p>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach ($kategori as $key => $value)
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="mb-2 f-w-400 text-muted">Total {{ $value->nama_kategori_menu }}</h6>
                                        <h4 class="mb-3">
                                            {{ $jumlahMenuPerKategori[$value->id] ?? 0 }}

                                        </h4>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

            <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                                <h4 class="mb-3">Rp {{ $pendapatan_menu_hari_ini }} </h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                                <h4 class="mb-3">Rp {{ $total_pendapatan_menu }}</h4>

                            </div>
                        </div>
                    </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-8">
                        <h5 class="mb-3">Pesanan Menu Terbaru</h5>
                        <div class="card tbl-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>NO. MEJA</th>
                                                <th>NAMA TAMU</th>
                                                <th>JENIS MENU</th>
                                                <th>STATUS</th>
                                                <th class="text-end">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pesanan_menu_terbaru as $value )
                                            <tr>
                                                <td><a href="#" class="text-muted">{{ $value->kursi }}</a></td>
                                                <td>{{ $value->user->name }}</td>
                                                <td>{{ $value->menu->nama_menu }}</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>{{ $value->status }}</span>
                                                </td>
                                                <td class="text-end">Rp {{ $value->total_harga }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="col-md-12 col-xl-4">
                <h5 class="mb-3">Riwayat Transaksi</h5>
                <div class="card">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                        <i class="ti ti-home f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Kamar 101</h6>
                                    <p class="mb-0 text-muted">Hari ini, 14:00</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">+ Rp 1.5 Jt</h6>
                                    <p class="mb-0 text-muted">Check-in</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                        <i class="ti ti-utensils f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Meja 12</h6>
                                    <p class="mb-0 text-muted">Hari ini, 13:45</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">+ Rp 450.000</h6>
                                    <p class="mb-0 text-muted">Restoran</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                        <i class="ti ti-bed f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Kamar 203</h6>
                                    <p class="mb-0 text-muted">7 jam yang lalu</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">+ Rp 350.000</h6>
                                    <p class="mb-0 text-muted">Room Service</P>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endauth
@endsection
