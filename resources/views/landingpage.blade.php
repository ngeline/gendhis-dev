<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV. Gendhis</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{ url('assets/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('assets/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->


    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }

        .columnkanan {
            float: left;
            width: 50%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 90%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .background {
            opacity: 0.7;
        }

        .card-title {
            font-family: sans-serif;
            font-size: 20px;
            font-weight: 300;
            color: black;
            text-align: left;
        }

        .card-body {
            font-family: sans-serif;
            font-size: 20px;
            font-weight: 300;
            color: black;
            text-align: left;
        }

        .btn {
            width: 90px;
            height: 35px;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-bottom">
        <ul class="menu">
            <li>
                <a class="navbar-brand" href="#">
                    <img src="{{ url('assets/favicon.png') }}" height="55" width="55">
                </a>
            </li>
            <li>
                <h4>CV. Gendhis</h3>
            </li>
        </ul>
        <ul class="menu">
            <li><a href="#about">Tentang CV. Gendhis</a></li>
            <li><a href="#layanan">Layanan CV. Gendhis</a></li>
            <li><a href="#services">Keunggulan CV. Gendhis</a></li>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="/login"><button class="btn btn-primary">LOGIN</button></a></li>
        </ul>
    </nav>
    <header id="home">
        <div class="background">
            <img src="{{ url('assets/bg-web.png') }}" height="768" width=100%>
        </div>
        <div class="judul">
            <div>
                <br><br>
                <h1>SELAMAT DATANG DI<br> <b>CV. GENDHIS</b></h1>
                <p>Travel Agensi Terbaik, Kelas Bimbel yang terjangkau, dan Jasa Fotografer Terbaik</p>
            </div>
        </div>
    </header>
    <section class="about" id="about">
        <div class="deskripsi">
            <h2>Tentang CV. Gendhis</h2>
            <p>CV. Gendhis adalah perusahaan yang bergerak di bidang Travel Agent, Edukasi dan Photografi. CV. Gendhis sudah berjalan hampir dua tahun dan berlokasi di Pesantren Kota Kediri.</p>
            <a href="/register">
                <button>COBA SEKARANG</button>
            </a>
        </div>
        <div class="gambar">
            <div class="kiri">
                <img src="{{ asset('assets/wisata.jpg') }}" alt="" class="satu">
                <img src="{{ asset('assets/bimbel.jpg') }}" alt="" class="dua">
            </div>
            <div class="kanan">
                <img src="{{ asset('assets/fotografer.jpg') }}" alt="" class="tiga">
            </div>
        </div>
    </section>

    <section class="layanan" id="layanan">
        <div class="card-deck">
            <div class="card">
                <a href="">
                    <img class="card-img-top" src="{{ asset('assets/wisata.jpg') }}" alt="Card image cap"
                        height="240">
                    <div class="card-body">
                        <h5 class="card-title">Gendhis Travel</h5>
                        <p class="card-text">Kebahagiaan di tengah keluarga Tercinta Nikmatilah setiap perjalanan yang kamu nikmati Liburan santai dan promo pada bulan ini Manja dan penuh cinta bersama kerabat Petualangan dan liburan yang panjang Sensasi Liburan yang Menyenangkan.</p>
                    </div>
                </a>

            </div>
            <div class="card">
                <a href="">
                    <img class="card-img-top" src="{{ asset('assets/bimbel.jpg') }}" alt="Card image cap"
                        height="240">
                    <div class="card-body">
                        <h5 class="card-title">Gendhis Sinau</h5>
                        <p class="card-text">Mengenal huruf dan angka, mengeja, membaca dan menghitung. Menyiapkan untuk pendidikan menengah Bekal UTS, UAS dan Ujian Akhir Menyiapkan bekal pendidikan Tingkat LANJUT Penyelesaian Tugas Akhir.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="">
                    <img class="card-img-top" src="{{ asset('assets/fotografer.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Gendhis Jasa Fotografer</h5>
                        <p class="card-text">Abadikan Momen Pre Wedding Anda Abadikan Kasih Sayang dan kebahagiaan anda Profil dan Produk Abadikan Momen Liburan Kamu.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <h2>KEUNGGULAN CV. GENDHIS</h2>
        <div class="services-cards">
            <div class="services-card">
                <img src="{{ asset('assets') }}/tema/assets/img/icon/timwork.png" alt="">
                <center>
                    <h3>Manajemen Tim</h3>
                    <p>Tim kami sangat profesional dalam memanajemen Data yang telah masuk. Sehingga memudahkan Anda untuk melakukan pesanan secara Online ataupun Offline</p>
            </div>
            <div class="services-card">
                <img src="{{ asset('assets') }}/tema/assets/img/icon/management.png" alt="">
                <center>
                    <h3>Manajemen Booking</h3>
                    <p>Pada Manajemen Booking CV.GENDHIS sudah dipantau oleh Admin. Untuk pemensanan tidak usah diragukan lagi karena manajemen kami sudah handal</p>
            </div>
            <div class="services-card">
                <img src="{{ asset('assets') }}/tema/assets/img/icon/inovasi.png" alt="">
                <center>
                    <h3>Inovasi</h3>
                    <p>Kami akan terus berinovasi dalam berbisnis. Karena persaingan bisnis sekarang sangat ketat. Maka dari itu CV.GENDHIS akan terus berinovai agar pelanggan Senang</p>
            </div>
            <div class="services-card">
                <img src="{{ asset('assets') }}/tema/assets/img/icon/puas.png" alt="">
                <center>
                    <h3>Pelayanan</h3>
                    <p>Pelayanan pada CV.GENDHIS adalah nomor SATU. Sehingga pelanggan akan merasa puas dengan perlakuan ekstra. Pelanggan akan merasakan perbedaan pelayanan dengan yang lain.</p>
            </div>
        </div>
    </section>

    <section class="news" id="aboutus">
        <h2>INFORMASI PELAYANAN OFFLINE</h2>
        <div class="services-cards">
            <div class="services-card">
                <img src="{{ asset('assets') }}/tema/assets/img/pelayanan.jpg" alt="">
                <div class="text">
                    <h3>Pelayanan</h3>
                    <span>CV. Gendhis</span>
                    <p>Pelayanan kami unggulkan, karena kepuasan pelanggan adalah tujuan kami. Anda akan menikmati pelayanan yang berbeda dari lain.</p>
                    <hr>
                    <a href="">Learn More</a>
                </div>
            </div>
            <div class="services-card">
                <img src="{{ asset('assets/bg-web.png') }}" alt="">
                <div class="text">
                    <h3>Paket</h3>
                    <span>CV. Gendhis</span>
                    <p>Paket disini akan ter-Update, Kami selalu update paket Travel, Bimbel dan Jasa Foto. Kami tidak kalah dengan yang lain.</p>
                    <hr>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="services-card">
                <img src="{{ asset('assets') }}/tema/assets/img/jambuka.png" alt="">
                <div class="text">
                    <h3>Lokasi & Jam Buka</h3>
                    <span>CV. Gendhis</span>
                    <p>Lokasi Kami sangat strategis yaitu di Pesantren Kota Kediri, Untuk jam buka kami yaitu Pukul 09.00 sampai 16.00 WIB</p>
                    <hr>
                    <a href="https://goo.gl/maps/Hvcpt6SvgXr7Gx97A">Maps CV. Gendhis</a>
                </div>
            </div>
        </div>
    </section>



    <section class="intouch">
        <div class="row">
            <div class="float-right">
                <img src="{{ url('assets/favicon.png') }}">
            </div>
            <div class="float-left mt-2 ml-2">
                <h2>CV. GENDHIS</h2>
            </div>
        </div>

        <div class="sosmed">
            <h3>Hubungi Kami</h3>
            <ul>
                <li>cv.gendhis@gmail.com</li>
                <li><a href="https://wa.me/6285331436287">Contact Us</a></li>
                <li>Jl. Bence Gang 1,
                    Pakunden, Kec. Pesantren, Kota Kediri, Jawa Timur 64132.</li>
            </ul>
        </div>
    </section>
    <footer>
        <span>Made with <img src="{{ asset('img/icon/love.png') }}" alt=""> CV. Gendhis &copy;
            2022</span>
    </footer>
    <script src="{{ asset('assets') }}/tema/assets/js/script.js"></script>
    <script src="{{ asset('assets') }}/tema/assets/js/particles.js"></script>
    <script src="{{ asset('assets') }}/tema/assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
