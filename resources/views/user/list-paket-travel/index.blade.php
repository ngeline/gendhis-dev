@extends('layouts.appcust')

@section('content')
    <div class="container py-4">
        <br><br><br>
        <center>
            <h2>PAKET TRAVEL<h2>
        </center>
        <br>
        <div class="row mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                        <li class="breadcrumb-item active text-dark" aria-current="page">Daftar Paket Travel</li>

                        <div class="col-md-7" style="position: absoulte; top: 5%; left: 32%">
                            <form action="{{ route('list-paket-cari.travel') }}" method="POST">
                                @csrf
                                <span>
                                    <span> Cari Nama Paket :
                                        <input type="text" name="cari" class="form-control-sm w-50"
                                            value="{{ $msg }}" required>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-search" style="color: white;"></i>
                                        </button>
                                        <a href="{{ route('list-paket.travel') }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-close" style="color: white;"></i>
                                        </a>
                                    </span>
                                </span>
                            </form>
                        </div>
                    </ol>

                </nav>
            </div>

        </div>

        <section class="layanan" id="layanan">

            <div class="content-wrapper">
                <div class="row" margin-right="-7px" margin-left=" 7px">
                    <div class="col-md-12 grid-margin stretch-card ">
                        <div class="card">
                            <div class="row">
                                @forelse ($data as $ndata)
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-header bg-secondry text-black">
                                                <center>
                                                </center>
                                                <img src="/assets/img/{{ $ndata->foto_paket }}" width="100px"
                                                    height="150px" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4>
                                                    {{ $ndata->nama_paket }}<br>
                                                    <span class="text-success">Rp
                                                        {{ number_format($ndata->harga_paket, 2, ',', '.') }}</span>
                                                </h4>
                                                <h6 class="text-muted">
                                                    {{ $ndata->deskripsi_paket }} <br>
                                                    Berangkat pada
                                                    {{ \Carbon\Carbon::parse($ndata->tanggal_travel)->isoFormat('d MMMM Y') }},
                                                    Pukul
                                                    {{ \Carbon\Carbon::parse($ndata->waktu_travel)->format('H:i') }}
                                                </h6>

                                                <div class="mt-3 text-center" role="group" aria-label="Basic example">
                                                    <a href="{{ route('form.order', ['id' => $ndata->produk_id]) }}"
                                                        class="btn btn-primary">Pilih Paket</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12">
                                        <h3>Data yang Anda cari tidak ada</h3>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
@endsection
