@extends('layouts.appcust')

@section('content')
    <header class="item header margin-top-0" style="background-image: url('assets/bg-web.png'); width: 100%; " id="section-home"
        data-stellar-background-ratio="0.5">
        <div class="wrapper">
            <div class="container">
                <div class="row intro-text align-items-center justify-content-center">
                    <div class="col-md-10 animated tada">
                        <center>
                            <h1 class="site-heading site-animate" style="font-size: 47px;">
                                DESKRIPSI LAYANAN<strong class="d-block"
                                    data-scrollreveal="enter top over 1.5s after 0.1s">GENDHIS</strong></h1>

                        </center><br><br>
                        <div class="item content">
                        <div class="container text-center">
							<a href="#paket" class="homebrowseitems">PILIH PAKET
							</a>
						</div>
                        </div>
                        </br>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="layanan" id="paket"> 
        <center><h2>PILIH PAKET<h2></center>
        <br>
        <div class="card-deck">
            <div class="card">
                <a href="{{ url('list-paket-travel') }}">
                    <img class="card-img-top" src="{{ asset('assets/wisata.jpg') }}" alt="Card image cap"
                        height="240">
                    <div class="card-body">
                        <h5 class="card-title">Gendhis Travel</h5>
                        <p class="card-text">Liburan santai dan penuh Cinta bersama Keluarga dengan tenang</p>
                    </div>
                </a>

            </div>
            <div class="card">
                <a href="{{ url('list-paket-bimbel') }}">
                    <img class="card-img-top" src="{{ asset('assets/bimbel.jpg') }}" alt="Card image cap"
                        height="240">
                    <div class="card-body">
                        <h5 class="card-title">Gendhis Sinau</h5>
                        <p class="card-text">Menyediakan paket bimbel untuk segala jenjang dengan harga yang menarik
                        </p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="{{ url('list-paket-jasa-foto') }}">
                    <img class="card-img-top" src="{{ asset('assets/fotografer.jpg') }}" alt="Card image cap"
                    height="240">
                    <div class="card-body">
                        <h5 class="card-title">Gendhis Jasa Fotografer</h5>
                        <p class="card-text">Abadikan segala momen dengan orang orang yang anda sayangi</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    </div><br><br>
@endsection
