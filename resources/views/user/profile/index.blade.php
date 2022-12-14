@extends('layouts.appcust')

@section('content')
    <style>
        body {
            background-image: ;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: scroll;
        }
    </style>
    <div class="container py-4">
        <br><br><br>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/beranda') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 style="color: #8B0000;"><i class="fa fa-user" style="color: #8B0000;"></i> Profil Saya</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td width="10">:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                {{-- <tr>
                                <td>Nomor HP</td>
                                <td>:</td>
                                <td>{{ $user->phoneNumber }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->address }}</td>
                            </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h4 style="color: #8B0000;"><i style="color: #8B0000;" class="fa fa-pencil-alt"></i> Edit Profile
                        </h4>
                        <br>
                        <form method="POST" action="{{ url('profile') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-2 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $user->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-2 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $user->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                            <label for="phoneNumber" class="col-md-2 col-form-label text-md-right">Nomor HP</label>

                            <div class="col-md-6">
                                <input style="background-color: #ecebeb; color: black;" id="nohp" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ $user->phoneNumber }}" required autocomplete="nohp" autofocus>

                                @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <textarea style="background-color: #ecebeb; color: black;" name="address" class="form-control @error('address') is-invalid @enderror" required="">{{ $user->address }}</textarea>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> --}}

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="password-confirm"
                                        type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary"
                                        style="width: 100%; font-weight: bold; font-size: 16px;">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div><br><br>
@endsection
