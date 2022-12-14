<!doctype html>
<link rel="shortcut icon" href="images/favicon.png">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'CV GENDHIS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="shortcut icon" href="{{ url('assets/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('assets/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87e9d7c5f.js" crossorigin="anonymous"></script>


    <!-- Styles -->

    <link rel="icon" type="image/png" href="{!! asset('images/favicon.png') !!}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
    <!--===============================================================================================-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
        integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" integrity="sha512-CbQfNVBSMAYmnzP3IC+mZZmYMP2HUnVkV4+PwuhpiMUmITtSpS7Prr3fNncV1RBOnWxzz4pYQ5EAGG4ck46Oig==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('user.beranda') }}">
                    <img src="{{ url('assets/favicon.png') }}" height="55" width="55">
                </a>
                <h3>CV. Gendhis</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse ml-5 navbar-collapse justify-content-md-center" id="navbarsExample09">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.beranda') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Paket
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ url('list-paket-travel') }}">
                                    Travel
                                </a>
                                <a class="dropdown-item" href="{{ url('list-paket-bimbel') }}">
                                    Bimbel
                                </a>
                                <a class="dropdown-item" href="{{ url('list-paket-jasa-foto') }}">
                                    Studio Foto
                                </a>

                            </div>
                        </li>

                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('history-order') }}">Pemesanan</a>
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Pesanan
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ url('history-order') }}">
                                Pesanan
                                </a>
                                <a class="dropdown-item" href="{{ url('serviceHistory') }}">
                                Riwayat Pesanan
                                </a>

                            </div> --}}
                            </li>
                        @endauth

                        <li class="nav-item">
                            <a class="nav-link" href="/about">Tentang Gendhis</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <img class="img-profile rounded-circle" style="width:40px;height:40px;"
                                        src="{{ asset('images/undraw_profile.svg') }}">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('profile') }}">
                                        Profil
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="get"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="site-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Situs web ini dibuat <i class="fas fa-heart"
                        aria-hidden="true" style="color: #B22222"></i> Mahasiswa Politeknik Negeri Malang PSDKU Kota
                    Kediri
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>
                        Media Sosial Gendhis
                    </p>
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=6287762586054&text=Halo%20Admin%20Gendhis,%20Saya%20ingin%20bertanya.%20Tolong%20bantu%20Saya.%20"
                            class="social-item"><span class="fab fa-whatsapp"></span></a>
                        <a href="#" class="social-item"><span class="fab fa-facebook"></span></a>
                        <a href="https://www.instagram.com/" class="social-item"><span
                                class="fab fa-instagram"></span></a>
                    </p>
                    </p>

                </div>
            </div>
    </footer>
    <script src="/js/jquery-.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/anim.js"></script>
    <script>
        //----HOVER CAPTION---//
        jQuery(document).ready(function($) {
            $('.fadeshop').hover(
                function() {
                    $(this).find('.captionshop').fadeIn(150);
                },
                function() {
                    $(this).find('.captionshop').fadeOut(150);
                }
            );

            $.get("notifikasi", function(data, status) {
                $.each(data, function(index, value) {
                    let button = '<a class="dropdown-item" href="{{ url('customerService') }}" >' +
                        value.keterangan + '</a>';
                    $('#notifikasi').append(button);
                    console.log(value.keterangan);
                });



            });

        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @yield('js')
    @include('sweetalert::alert')
</body>

</html>
