@extends('user.layout.template_landing')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('/assets/landing/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/mybee-hotel&resto">Home</a></span>
                            <span>Pembayaran</span>
                        </p>
                        <h1 class="mb-4 bread">Pembayaran Menu</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Pesanan</h4>
                            <p>Banyak Pesanan : <span>{{ $jumlah_menu }}</span></p>
                        </div>
                        @if ($jumlah_menu == 0)
                            <div class="card-body text-center">
                                <h4>Belum ada pesanan</h4>
                                <p>Silakan pesan menu terlebih dahulu</p>
                            </div>
                        @else
                            @foreach ($pesanan as $item)
                                <div class="card-body" style="border-bottom: 1px solid #b9b9b9">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <strong>Nama Menu:</strong>
                                        </div>
                                        <div class="col-md-8">
                                            {{ $item->menu->nama_menu }}
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <strong>Jumlah:</strong>
                                        </div>
                                        <div class="col-md-8">
                                            {{ $item->jumlah }}
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <strong>Total Harga:</strong>
                                        </div>
                                        <div class="col-md-8">
                                            Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ url('admin/mybee-hotel&resto/pembayaran-menu/delete/' . $item->id) }}"
                                                    class="btn btn-primary">Hapus</a>
                                            @elseif (Auth::user()->role == 'staff_pengelola_kamar')
                                                <a href="{{ url('staff-kamar/mybee-hotel&resto/pembayaran-menu/delete/' . $item->id) }}"
                                                    class="btn btn-primary">Hapus</a>
                                            @elseif (Auth::user()->role == 'staff_pengelola_restoran')
                                                <a href="{{ url('staff-restoran/mybee-hotel&resto/pembayaran-menu/delete/' . $item->id) }}"
                                                    class="btn btn-primary">Hapus</a>
                                            @else
                                                <a href="{{ url('/mybee-hotel&resto/pembayaran-menu/delete/' . $item->id) }}"
                                                    class="btn btn-primary">Hapus</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <strong>Total keseluruhan:</strong>
                            </div>
                            <div class="col-md-8">
                                Rp {{ number_format($total_pesanan, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>
                @if ($jumlah_menu > 0)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Metode Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                @php
                                    $role = auth()->user()->role;
                                    $action = match ($role) {
                                        'admin' => url('admin/mybee-hotel&resto/pembayaran-menu/proses'),
                                        'staff_pengelola_kamar' => url(
                                            'staff-kamar/mybee-hotel&resto/pembayaran-menu/proses',
                                        ),
                                        'staff_pengelola_restoran' => url(
                                            'staff-restoran/mybee-hotel&resto/pembayaran-menu/proses',
                                        ),
                                        default => url('/mybee-hotel&resto/pembayaran-menu/proses'),
                                    };
                                @endphp

                                <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @foreach ($metode_pembayaran as $metode)
                                        <div class="form-check mb-3">
                                            <input class="form-check-input metode-pembayaran" type="radio"
                                                name="metode_pembayaran_id" id="metode{{ $metode->id }}"
                                                value="{{ $metode->id }}" required>
                                            <label class="form-check-label" for="metode{{ $metode->id }}">
                                                {{ $metode->nama_bank }} - {{ $metode->nomor_rekening }} -
                                                {{ $metode->atas_nama }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="mb-3" style="display: block">
                                        <input type="text" name="kursi" id="kursi" placeholder="Masukkan No Kursi">
                                        <label for="kursi" style="font-size: 10px">*Apabila tidak memasukkan nomer kursi
                                            yang sesuai, maka tidak akan kami layani</label>
                                    </div>

                                    <div id="transfer-info" class="mb-3">
                                        <p>silahkan Transfer ke Bank Yang di pilih sebesar {{ $total_pesanan }} dan
                                            cantumkan bukti pembayaran di bawah</p>
                                        <div class="form-group">
                                            <input type="file" name="bukti_pembayaran" class="form-control" placeholder=>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Konfirmasi Pesanan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

                <section class="ftco-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Detail Pesanan</h4>
                                        <p>Banyak Pesanan : <span>{{ $jumlah_menu_bayar }}</span></p>
                                    </div>
                                    @if ($jumlah_menu_bayar == 0)
                                        <div class="card-body text-center">
                                            <h4>Belum ada pesanan</h4>
                                            <p>Silakan pesan menu terlebih dahulu</p>
                                        </div>
                                    @else
                                        @foreach ($pesanan_bayar as $item)
                                            <div class="card-body" style="border-bottom: 1px solid #b9b9b9">
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <strong>Nama Menu:</strong>
                                                    </div>
                                                    <div class="col-md-8">
                                                        {{ $item->menu->nama_menu }}
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <strong>Jumlah:</strong>
                                                    </div>
                                                    <div class="col-md-8">
                                                        {{ $item->jumlah }}
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <strong>Total Harga:</strong>
                                                    </div>
                                                    <div class="col-md-8">
                                                        Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <strong>Total keseluruhan:</strong>
                                        </div>
                                        <div class="col-md-8">
                                            Rp {{ number_format($total_pesanan_bayar, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const metodeInputs = document.querySelectorAll('.metode-pembayaran');
                        const transferInfo = document.getElementById('transfer-info');
                        const buktiInput = document.querySelector('input[name="bukti_pembayaran"]');

                        metodeInputs.forEach(input => {
                            input.addEventListener('change', function() {
                                const selectedLabel = this.nextElementSibling.textContent;
                                if (selectedLabel.includes('Bayar Di Tempat')) {
                                    transferInfo.style.display = 'none';
                                    buktiInput.value = 'bayar_ditempat';
                                } else {
                                    transferInfo.style.display = 'block';
                                    buktiInput.value = '';
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </section>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 text-center">
                @if (Auth::user()->role == 'admin')
                    <a href="{{ url('admin/mybee-hotel&resto') }}" class="btn btn-primary">Pesan Menu Lainnya</a>
                @elseif (Auth::user()->role == 'staff_pengelola_kamar')
                    <a href="{{ url('staff-kamar/mybee-hotel&resto') }}" class="btn btn-primary">Pesan Menu Lainnya</a>
                @elseif (Auth::user()->role == 'staff_pengelola_restoran')
                    <a href="{{ url('staff-restoran/mybee-hotel&resto') }}" class="btn btn-primary">Pesan Menu
                        Lainnya</a>
                @else
                    <a href="{{ url('mybee-hotel&resto') }}" class="btn btn-primary">Pesan Menu Lainnya</a>
                @endif
            </div>
        </div>
    </div>

@endsection
