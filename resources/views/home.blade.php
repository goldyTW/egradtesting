@extends('masterdashboard')
@section('content')
    <section>
        <div class="container-fluid">
            <!-- <div class="row justify-content-center" style="margin-top:2%"></div> -->
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-7" style="width:80%">
                    <div class="row">
                        <div class="col-lg-9 col-10">
                            <h3>Acara Saya </h3>
                        </div>
                        <div class="col-lg-3 col-2 text-right mt-2">
                            <a class="viewall" style="text-decoration:none;" href="myevent">View</a>
                        </div>
                    </div>
                    <div class="row mb-5 event">
                    <p class="ml-3" id="belumdaftar">Anda belum mendaftar pada Acara di Egrad.id. <a href="daftarevent">Daftar Acara Disini </a></p>
                        <?php $count = 0; ?>
                        @foreach($daftarevent as $de)
                            <!-- foreach($de->emailPendaftar->slice(0,3) as $email) -->
                                @if(Auth::user()->email==$de->emailPendaftar)
                                    @foreach($event as $e)
                                        @if($count < 3)
                                            @if($de->namaEvent == $e->namaEvent)
                                            <script>
                                                document.getElementById("belumdaftar").style.display="none";
                                            </script>
                                            <div class="my-2 ml-3 cardcourse1">
                                                @if($e->category == "Technology")
                                                    <img src="https://wonderfulengineering.com/wp-content/uploads/2014/03/engineering-image-2.jpg" alt="Avatar" style="height: 130px;">
                                                @elseif($e->category == "Medical")
                                                    <img src="https://img.freepik.com/free-photo/portrait-smiling-asian-medical-male-doctor-standing-front-blurred-interior-hospital_7191-974.jpg?size=626&ext=jpg" alt="Avatar" style="height: 130px;">
                                                @elseif($e->category == "Art")
                                                    <img src="https://image.freepik.com/free-photo/people-making-paper-flowers-craft-art-work-handicraft_53876-22956.jpg" alt="Avatar" style="height: 130px;">
                                                @elseif($e->category == "Economy")
                                                    <img src="https://images.pexels.com/videos/3209211/free-video-3209211.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Avatar" style="height: 130px;">
                                                @endif
                                                <div class="boxcourse my-2">
                                                    <h5><b><a style="color:darkslategrey; text-decoration:none">{{$e->namaEvent}}</a></b></h5>
                                                    <a><b>{{$e->tanggal}}</b></a><br>
                                                    <a>{{$e->speaker}}</a>
                                                </div>
                                            </div>
                                            <?php $count++; ?>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            <!-- endforeach -->
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-lg-9 col-10">
                            <h3>Kursus Saya </h3>
                        </div>
                        <div class="col-lg-3 col-2 text-right mt-2">
                            <a class="viewall" style="text-decoration:none" href="coursediikuti">View</a>
                        </div>
                    </div>
                    <div class="row kursus">
                    <p class="ml-3" id="belumdaftar">Segera Hadir </a></p>
                    </div>

                    
                </div>
                <div class="col-lg-4 col-10">
                    <div class="p-2 cardcourse" style="background-image: linear-gradient(to top right,#1b8f72, #00cc99); color:white">
                        <h5 class="text-center mt-3"><b>Panduan Pendaftaran, Absensi, dan Pemesanan Sertifikat</b></h5>
                        <ol>
                        <li>Klik tombol <b>Daftar Acara</b> pada bagian kanan atas halaman ini</li>  
                        <li>Untuk Pendaftaran, Pilih nama acara pada Kolom <b>Daftar Acara</b></li>  
                        <li>Untuk Absensi, Pilih nama acara yang telah anda daftar pada Kolom <b>Absensi</b></li> 
                        <li>Untuk Sertifikat, Anda dapat dilakukan pada kolom <b>Pemesanan Sertifikat</b> pada bagian bawah halaman daftar acara</li>
                        </ol>
                        <!-- <h3><b>Overview</b> </h3>
                        <h5>Jumlah Acara Terdaftar: <b>{{count($daftarevent->where('emailPendaftar', Auth::user()->email) ) }}</b></h5>
                        <h5>Jumlah Kursus Dipilih: <b> N/A</b></h5> -->
                        <!-- , ['absensi', '1'] -->
                        <!-- <h5>Jumlah Event Akan Diikuti: <b>{{count($daftarevent->where(['emailPendaftar', Auth::user()->email], ['absensi', null]) ) }}</b></h5> -->
                    </div>
                    <div class="cardcourse m-2 my-4 p-3">
                        <h3>Rekomendasi untuk Anda </h3>
                        <div class="col-lg-11 col-10 p-3 m-3 card" style="background-color:#b8d5cd">
                            <b>Workshop Furoshiki</b>
                        </div>
                        <div class="col-lg-11 col-10 p-3 m-3 card" style="background-color:#8abaae" >
                            <b>Online Course Anatomi</b>
                        </div>
                        <!-- <div class="col-lg-11 col-10 p-3 m-3 card" style="background-color:#5ca08e; color:white">
                            <b>Doctor Update Symposium</b>
                        </div>
                        <div class="col-lg-11 col-10 p-3 m-3 card" style="background-color:#2e856e; color:white">
                            <b>Online Course Technopreneur</b>
                        </div>
                        <div class="col-lg-11 col-10 p-3 m-3 card" style="background-color:#006a4e; color:white">
                            <b>Online Course Penyakit Dalam</b>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection