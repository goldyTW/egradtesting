@extends('layouts.master')

@section('content')
<section id="formulir">
        <div class="container">
            <div class="row jedaatas"> </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12 mb-3 text-center">
                    <h2 style="color: white;">Reset Password</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-10 card">
                    @if (session('status'))
                    <script>
                        swal({
                            title: "Konfirmasi Reset Password Telah dikirimkan!!",
                            text: "Silahkan cek email Anda",
                            icon: "success",
                            confirmButtonText: 'OK',
                            closeOnConfirm: true, //It does close the popup when I click on close button
                            allowOutsideClick: false
                        });
                    </script>
                        <!-- <div class="alert alert-success my-2" role="alert">
                            {{ session('status') }}
                        </div> -->
                    @endif
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="row justify-content-center my-5 animate__animated animate__fadeInUp">
                            <div class="col-lg-6 col-10">
                                <label style="font-size: 12px; font-weight: bold;">Email Anda</label>
                                <input class="form-control form-control @error('email') is-invalid @enderror" style="border-color: darkslategrey;" type="text" name="email" placeholder="hajardewantara@gmail.com" required /><br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center animate__animated animate__fadeInUp">
                            <div class="col-lg-12 text-center">
                                <button class="btn ml-3 mb-5 px-5 py-2 text-center submit" type="submit" id="login" value="kirim">Kirim Konfirmasi</button>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
