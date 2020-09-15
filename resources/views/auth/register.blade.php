@extends('master')

@section('content')
<section id="formulir">
        <div class="container" >
            <div class="row jeda"> </div>
            @if(\Session::has('success'))
                <script>
                    swal({
                        title: "Berhasil!",
                        text: "Silahkan cek email Anda untuk konfirmasi Akun!",
                        icon: "success",
                        confirmButtonText: 'OK',
                        closeOnConfirm: true, //It does close the popup when I click on close button
                        allowOutsideClick: false
                    });
                </script>
            @endif
            <!-- @if(\Session::has('fail'))
                <script>
                    swal({
                        title: "Gagal!",
                        text: "Data Tidak Berhasil Dimasukkan! Silahkan coba lagi",
                        icon: "error",
                        confirmButtonText: 'OK',
                        closeOnConfirm: true, //It does close the popup when I click on close button
                        allowOutsideClick: false
                    });
                </script>              
            @endif -->
            
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12 mt-4 mb-3 text-center">
                    <h2 style="color: white;">Sign Up</h2> 
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-10 card">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row justify-content-center mt-5 animate__animated animate__fadeInUp">
                        <div class="col-lg-5 col-10">
                            <label style="font-size: 12px; font-weight: bold;">Nama Lengkap*</label>
                            <input class="form-control @error('namaLengkap') is-invalid @enderror" style="border-color: darkslategrey;" type="text" name="namaLengkap" placeholder="Hajar Dewantara" autocomplete="name" autofocus required/><br>
                                @error('namaLengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label style="font-size: 12px; font-weight: bold;">Email*</label>
                            <input class="form-control @error('email') is-invalid @enderror" style="border-color: darkslategrey;" type="text" name="email" placeholder="hajardewantara@gmail.com" required autocomplete="email"/><br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label style="font-size: 12px; font-weight: bold;">Password*</label>
                            <input class="form-control @error('password') is-invalid @enderror" style="border-color: darkslategrey;" type="password" name="password" placeholder="********" required autocomplete="new-password"/><br>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label style="font-size: 12px; font-weight: bold;">Confirm Password*</label>
                            <input id="password-confirm" class="form-control" style="border-color: darkslategrey;" type="password" name="password_confirmation" placeholder="********" required autocomplete="new-password" /><br>
                            
                            <label style="font-size: 12px; font-weight: bold;">Nomor Whatsapp*</label>
                            <input class="form-control @error('noWA') is-invalid @enderror" style="border-color: darkslategrey;" type="text" name="noWA" placeholder="0817081945" required /><br>
                                @error('noWA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-lg-5 col-10">
                            <label style="font-size: 12px; font-weight: bold;">Kota Domisili*</label>
                            <input class="form-control @error('domisili') is-invalid @enderror" style="border-color: darkslategrey;" type="text" name="domisili" placeholder="Jakarta" required /><br>
                                @error('domisili')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label style="font-size: 12px; font-weight: bold;">Tanggal Lahir*</label>
                            <input class="form-control datepicker" name="tanggalLahir" type="Date" style="border-color: darkslategrey;" required><br>
                            <label style="font-size: 12px; font-weight: bold;">Sekolah / Almamater</label>
                            <input class="form-control" style="border-color: darkslategrey;" type="text" name="sekolah" placeholder="Taman Siswa" /><br>
                            <label style="font-size: 12px; font-weight: bold;">Tahun Lulus</label>
                            <input class="form-control datepicker" name="tahunLulus" placeholder="2020" type="text" style="border-color: darkslategrey;"><br>
                            <label style="font-size: 12px; font-weight: bold;">Jenis Kelamin</label>
                            <div class="radio">
                                <input type="radio" name="jenisKelamin" id="JenisKelaminLaki" value="Laki-laki" required> Laki-laki<br>
                                <input type="radio" name="jenisKelamin" id="JenisKelaminPerempuan" value="Perempuan" rquired> Perempuan
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center animate__animated animate__fadeInUp">
                        <div class="col-lg-12 text-center">
                            <button class="btn ml-3 mt-2 px-5 py-2 text-center submit" type="submit" id="login" value="submit">Sign Up </button>
                        </div>
                        <div class="col-lg-12 mb-5 mt-2 text-center">
                            Sudah Punya Akun? <a href="/login">Masuk Disini</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
