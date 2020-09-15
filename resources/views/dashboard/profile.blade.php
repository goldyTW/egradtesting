@extends('masterdashboard')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-9 col-10 mt-5 mb-2 text-center">
                <h1><b>Profile</b></h1>
            </div>
        </div>                
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-12 col-10 p-5 my-3 cardcourse text-center">
                @foreach($users as $p)
                @if(Auth::user()->email==$p->email)
                    <h5>Nama Lengkap: </h5>
                    <h4><b>{{ $p->namaLengkap }}</b></h4><br>
                    <h5>Nomor Whatsapp: </h5>
                    <h4><b>{{ $p->noWA }}</b> </h4><br>
                    <h5>Domisili: </h5>
                    <h4><b>{{ $p->domisili }}</b> </h4><br>
                    <h5>Tanggal Lahir: </h5>
                    <h4><b>{{ $p->tanggalLahir }} </b></h4><br>
                    <h5>Sekolah/Almamater: </h5>
                    <h4><b>{{ $p->sekolah }} </b></h4><br>
                    <h5>Tahun Lulus: </h5>
                    <h4><b>{{ $p->tahunLulus }}</b> </h4><br>
                    <h5>Jenis Kelamin: </h5>
                    <h4><b>{{ $p->jenisKelamin }} </b></h4><br>
                @endif
                @endforeach
            </div> 
        </div>
    </div>
</section>
@endsection