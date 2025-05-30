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
                                <h4 class="mb-3">{{ $kamar_terisi }}/{{ $kamar_tersedia }} <span
                                        class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i>
                                        80%</span></h4>
                                <p class="mb-0 text-muted text-sm">Tingkat hunian <span class="text-primary">80%</span> hari ini
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Tamu</h6>
                                <h4 class="mb-3">{{ $user }} <span
                                        class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i>
                                        15%</span></h4>
                                <p class="mb-0 text-muted text-sm">Tambah <span class="text-success">6</span> tamu baru hari ini
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                                <h4 class="mb-3">Rp 8.5 Jt <span class="badge bg-light-danger border border-danger"><i
                                            class="ti ti-trending-up"></i> 25%</span></h4>
                                <p class="mb-0 text-muted text-sm">Naik <span class="text-danger">Rp 1.7 Jt</span> dari kemarin
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                                <h4 class="mb-3">1.000.000 <span class="badge bg-light-warning border border-warning"><i
                                            class="ti ti-trending-up"></i> 12%</span></h4>
                                <p class="mb-0 text-muted text-sm">Tambah <span class="text-warning">3</span> pesanan baru</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Menu</h6>
                                <h4 class="mb-3">{{ $menu }} <span
                                        class="badge bg-light-warning border border-warning"><i class="ti ti-trending-up"></i>
                                        12%</span></h4>
                                <p class="mb-0 text-muted text-sm">Tambah <span class="text-warning">3</span> pesanan baru</p>
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
                                            <span class="badge bg-light-danger border border-danger">
                                                <i class="ti ti-trending-up"></i> 25%
                                            </span>
                                        </h4>
                                        <p class="mb-0 text-muted text-sm">
                                            Naik <span class="text-danger">Rp 1.7 Jt</span> dari kemarin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                                <h4 class="mb-3">Rp 8.5 Jt <span class="badge bg-light-danger border border-danger"><i
                                            class="ti ti-trending-up"></i> 25%</span></h4>
                                <p class="mb-0 text-muted text-sm">Naik <span class="text-danger">Rp 1.7 Jt</span> dari kemarin
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                                <h4 class="mb-3">Rp 8.5 Jt <span class="badge bg-light-danger border border-danger"><i
                                            class="ti ti-trending-up"></i> 25%</span></h4>
                                <p class="mb-0 text-muted text-sm">Naik <span class="text-danger">Rp 1.7 Jt</span> dari kemarin
                                </p>
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
                                                <th>NO. KAMAR/MEJA</th>
                                                <th>NAMA TAMU</th>
                                                <th>JENIS PESANAN</th>
                                                <th>STATUS</th>
                                                <th class="text-end">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#" class="text-muted">Kamar 101</a></td>
                                                <td>John Doe</td>
                                                <td>Check-in</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-success f-10 m-r-5"></i>Check-in</span>
                                                </td>
                                                <td class="text-end">Rp 1.5 Jt</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Meja 12</a></td>
                                                <td>Jane Smith</td>
                                                <td>Restoran</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-warning f-10 m-r-5"></i>Menunggu</span>
                                                </td>
                                                <td class="text-end">Rp 450.000</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Kamar 203</a></td>
                                                <td>Mike Johnson</td>
                                                <td>Room Service</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-success f-10 m-r-5"></i>Selesai</span>
                                                </td>
                                                <td class="text-end">Rp 350.000</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Meja 8</a></td>
                                                <td>Sarah Wilson</td>
                                                <td>Restoran</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-danger f-10 m-r-5"></i>Dibatalkan</span>
                                                </td>
                                                <td class="text-end">Rp 0</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Kamar 305</a></td>
                                                <td>David Brown</td>
                                                <td>Check-out</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-warning f-10 m-r-5"></i>Proses</span>
                                                </td>
                                                <td class="text-end">Rp 2.1 Jt</td>
                                            </tr>
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
                                                <th>NO. KAMAR/MEJA</th>
                                                <th>NAMA TAMU</th>
                                                <th>JENIS PESANAN</th>
                                                <th>STATUS</th>
                                                <th class="text-end">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#" class="text-muted">Kamar 101</a></td>
                                                <td>John Doe</td>
                                                <td>Check-in</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-success f-10 m-r-5"></i>Check-in</span>
                                                </td>
                                                <td class="text-end">Rp 1.5 Jt</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Meja 12</a></td>
                                                <td>Jane Smith</td>
                                                <td>Restoran</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-warning f-10 m-r-5"></i>Menunggu</span>
                                                </td>
                                                <td class="text-end">Rp 450.000</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Kamar 203</a></td>
                                                <td>Mike Johnson</td>
                                                <td>Room Service</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-success f-10 m-r-5"></i>Selesai</span>
                                                </td>
                                                <td class="text-end">Rp 350.000</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Meja 8</a></td>
                                                <td>Sarah Wilson</td>
                                                <td>Restoran</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-danger f-10 m-r-5"></i>Dibatalkan</span>
                                                </td>
                                                <td class="text-end">Rp 0</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#" class="text-muted">Kamar 305</a></td>
                                                <td>David Brown</td>
                                                <td>Check-out</td>
                                                <td><span class="d-flex align-items-center gap-2"><i
                                                            class="fas fa-circle text-warning f-10 m-r-5"></i>Proses</span>
                                                </td>
                                                <td class="text-end">Rp 2.1 Jt</td>
                                            </tr>
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
                        <h4 class="mb-3">{{ $kamar_terisi }}/{{ $kamar_tersedia }} <span
                                class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i>
                                80%</span></h4>
                        <p class="mb-0 text-muted text-sm">Tingkat hunian <span class="text-primary">80%</span> hari ini
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Tamu</h6>
                        <h4 class="mb-3">{{ $user }} <span class="badge bg-light-success border border-success"><i
                                    class="ti ti-trending-up"></i>
                                15%</span></h4>
                        <p class="mb-0 text-muted text-sm">Tambah <span class="text-success">6</span> tamu baru hari ini
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                        <h4 class="mb-3">Rp 8.5 Jt <span class="badge bg-light-danger border border-danger"><i
                                    class="ti ti-trending-up"></i> 25%</span></h4>
                        <p class="mb-0 text-muted text-sm">Naik <span class="text-danger">Rp 1.7 Jt</span> dari kemarin
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                        <h4 class="mb-3">1.000.000 <span class="badge bg-light-warning border border-warning"><i
                                    class="ti ti-trending-up"></i> 12%</span></h4>
                        <p class="mb-0 text-muted text-sm">Tambah <span class="text-warning">3</span> pesanan baru</p>
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
                                        <th>NO. KAMAR/MEJA</th>
                                        <th>NAMA TAMU</th>
                                        <th>JENIS PESANAN</th>
                                        <th>STATUS</th>
                                        <th class="text-end">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#" class="text-muted">Kamar 101</a></td>
                                        <td>John Doe</td>
                                        <td>Check-in</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>Check-in</span>
                                        </td>
                                        <td class="text-end">Rp 1.5 Jt</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Meja 12</a></td>
                                        <td>Jane Smith</td>
                                        <td>Restoran</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-warning f-10 m-r-5"></i>Menunggu</span>
                                        </td>
                                        <td class="text-end">Rp 450.000</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Kamar 203</a></td>
                                        <td>Mike Johnson</td>
                                        <td>Room Service</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>Selesai</span>
                                        </td>
                                        <td class="text-end">Rp 350.000</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Meja 8</a></td>
                                        <td>Sarah Wilson</td>
                                        <td>Restoran</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-danger f-10 m-r-5"></i>Dibatalkan</span>
                                        </td>
                                        <td class="text-end">Rp 0</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Kamar 305</a></td>
                                        <td>David Brown</td>
                                        <td>Check-out</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-warning f-10 m-r-5"></i>Proses</span>
                                        </td>
                                        <td class="text-end">Rp 2.1 Jt</td>
                                    </tr>
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
                                <h4 class="mb-3">{{ $menu }} <span
                                        class="badge bg-light-warning border border-warning"><i class="ti ti-trending-up"></i>
                                        12%</span></h4>
                                <p class="mb-0 text-muted text-sm">Tambah <span class="text-warning">3</span> pesanan baru</p>
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
                                            <span class="badge bg-light-danger border border-danger">
                                                <i class="ti ti-trending-up"></i> 25%
                                            </span>
                                        </h4>
                                        <p class="mb-0 text-muted text-sm">
                                            Naik <span class="text-danger">Rp 1.7 Jt</span> dari kemarin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Pendapatan Hari Ini</h6>
                        <h4 class="mb-3">Rp 8.5 Jt <span class="badge bg-light-danger border border-danger"><i
                                    class="ti ti-trending-up"></i> 25%</span></h4>
                        <p class="mb-0 text-muted text-sm">Naik <span class="text-danger">Rp 1.7 Jt</span> dari kemarin
                        </p>
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
                                        <th>NO. KAMAR/MEJA</th>
                                        <th>NAMA TAMU</th>
                                        <th>JENIS PESANAN</th>
                                        <th>STATUS</th>
                                        <th class="text-end">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#" class="text-muted">Kamar 101</a></td>
                                        <td>John Doe</td>
                                        <td>Check-in</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>Check-in</span>
                                        </td>
                                        <td class="text-end">Rp 1.5 Jt</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Meja 12</a></td>
                                        <td>Jane Smith</td>
                                        <td>Restoran</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-warning f-10 m-r-5"></i>Menunggu</span>
                                        </td>
                                        <td class="text-end">Rp 450.000</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Kamar 203</a></td>
                                        <td>Mike Johnson</td>
                                        <td>Room Service</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-success f-10 m-r-5"></i>Selesai</span>
                                        </td>
                                        <td class="text-end">Rp 350.000</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Meja 8</a></td>
                                        <td>Sarah Wilson</td>
                                        <td>Restoran</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-danger f-10 m-r-5"></i>Dibatalkan</span>
                                        </td>
                                        <td class="text-end">Rp 0</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="text-muted">Kamar 305</a></td>
                                        <td>David Brown</td>
                                        <td>Check-out</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="fas fa-circle text-warning f-10 m-r-5"></i>Proses</span>
                                        </td>
                                        <td class="text-end">Rp 2.1 Jt</td>
                                    </tr>
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
