@extends('layouts.master')

@section('content')
<section id="formulir">
    <div class="container">
        <div class="row jedaatas"> </div>  
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12 mb-1 text-center">
                <h2 style="color: white;">Verify</h2>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-lg-10 col-10 card">
                <div class="mx-3 mt-5 mb-3"><h3>{{ __('Verifikasi Email Anda') }}</h3></div>

                <div class="mx-3 mb-5">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verifikasi baru telah dikirimkan! Silahkan cek email Anda') }}
                        </div>
                    @endif
                    Untuk melanjutkan silahkan cek email Anda<br>
                    Jika Anda tidak menerima email konfirmasi, <a href="{{ route('verification.resend') }}">klik lagi disini</a>.
                </div>
            </div>
        </div>
        <div class="row jedaatas"> </div>  
    </div>
</section>
@endsection
