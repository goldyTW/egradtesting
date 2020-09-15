@extends('master')

@section('content')
<section id="formulir">
<div class="container">
    <div class="row jedaatas"> </div>  
    <div class="row justify-content-center">
        <div class="col-lg-12 col-12 mb-3 text-center">
            <h2 style="color: white;">Login</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-10 card">
            <div class="row justify-content-center">
                <div class="col-lg-6 mt-5 mb-3 col-10 text-center">
                    <a>Anda dapat melakukan login untuk mendaftar pada acara dan menemukan berbagai fitur lainnya di <b>egrad.id</b></a>
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row justify-content-center mt-2 animate__animated animate__fadeInUp">
                    <div class="col-lg-6 col-10">
                        <label for="email" style="font-size: 14px; font-weight: bold;">{{ __('E-Mail Anda') }}</label>
                        <input id="email" style="border-color: darkslategrey;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <!-- form-group class="col-md-4 col-form-label text-md-right" -->
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <label for="password"  style="font-size: 14px; font-weight: bold;">{{ __('Password') }}</label>
                        <input id="password"style="border-color: darkslategrey;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <!-- <div class="form-check text-center">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <br> -->
                    </div>
                </div>
                <div class="row justify-content-center animate__animated animate__fadeInUp">
                    <div class="col-lg-12 text-center">       
                        <button type="submit" class="btn ml-3 px-5 py-2 text-center submit" id="login">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <br>
                    <div class="col-lg-12 mt-2 text-center">
                        Belum Punya Akun? <a href="/public/register">Daftar Disini</a>
                    </div>
                    <div class="col-lg-12 mb-5 mt-2 text-center">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection

                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

