@extends('masterdashboard')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-9 col-10 my-5 text-center">
                <h1><b>Pendaftaran Acara</b></h1>
                <h4>Jadwal Acara Bisa Dilihat <a href="schedule">Disini</a></h4>
            </div>
        </div> 
        <div class="row pendaftaran mb-5 justify-content-center">
            <div class="col-lg-9 col-sm-9 col-10 py-4 text-center cardcourse">
                <h3 class="mt-3"><b>Daftar Acara</b></h3>
                <!-- <div class="row justify-content-center ">
                    <div class="col-lg-5 col-sm-7 col-9 text-center my-3">
                        <label>Pilih Kategori </label><br>
                        <select class="form-control" name="category" id="category" onchange="pilihCategory()" style="border-color: darkslategrey;" required>
                            <option>--Pilih Kategori--</option>   
                            <option value="'Technology'">Technology</option> 
                            <option value="'Medical'">Medical</option> 
                            <option value="'Economy'">Economy</option> 
                            <option value="'Psychology'">Psychology</option> 
                        </select> 
                        pilihan ini nanti dicocokin ke if di bagian pilih event. jadi sorting berdasarkan category. 
                        caritau caranya supaya bisa pass variable aja
                    </div>
                </div>  -->
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-sm-7 col-9 text-center my-3">
                        <label id="display">Pilih Acara </label><br>
                        <form method="GET" action="storedaftar">
                        @csrf
                        <select class="form-control" id="pilihevent" name="pilihEvent" style="border-color: darkslategrey;" required>
                            <option value="" class="p-1">- Pilih Acara -</option>   
                            @foreach($event as $p)
                            <!-- <a id="disp"></a> -->
                                @if(Carbon\Carbon::parse($p->tanggal)->addMinute(30) >= $waktuSekarang)
                                    <option value="{{ $p->namaEvent }}" name="{{ $p->namaEvent }}" class="p-1">{{ $p->namaEvent}}</option>      
                                    <!-- <a id="endisp"></a> -->
                                @endif
                            @endforeach
                        </select> 
                    </div>
                </div> 
                <div class="col-lg-12 col-sm-12 col-12-center">
                    <button class="px-5 py-2 mx-2 my-3" id="daftar" href="">Daftar</button>
                </div>
                </form>
            </div>
            @if(\Session::has('successDaftar'))
                <script>
                    swal({
                        title: "Pendaftaran Berhasil!",
                        text: "Pendaftaran Berhasil, Link Zoom akan muncul di laman Acara Saya",
                        icon: "success",
                        confirmButtonText: 'OK',
                        closeOnConfirm: true, //It does close the popup when I click on close button
                        allowOutsideClick: false
                    });
                </script>
            @endif
            @if(\Session::has('failDaftar'))
                <script>
                    swal({
                        title: "Pendaftaran Gagal!",
                        text: "Anda sudah terdaftar pada Acara ini",
                        icon: "error",
                        confirmButtonText: 'OK',
                        closeOnConfirm: true, //It does close the popup when I click on close button
                        allowOutsideClick: false
                    });
                </script>
            @endif
        </div>
        <!-- <script>
            function pilihCategory(){
                var category = document.getElementById('category').value;
                document.getElementById("display").innerHTML = 'if( $p->category == '+category+')';
                document.getElementById("disp").innerHTML = 'if( $p->category == '+category+')';
                document.getElementById("endisp").innerHTML = 'endif';
            }       
        </script> -->

        <div class="row justify-content-center" id="absensi">
            <div class="col-lg-9 col-sm-9 col-10 py-4 mb-5 text-center cardcourse">
                <h3 class="mt-3"><b>Absensi</b></h3>
                <a>Absen dapat dilakukan dari 1 jam setelah acara dimulai hingga paling lambat 1 Jam setelah acara selesai</a><br><br>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-sm-7 col-9 text-center my-3">
                        <label>Pilih Acara</label><br>
                        <form method="GET" action="absen">
                        @csrf
                        <select id="evenAbsen" class="form-control" name="evenAbsen" style="border-color: darkslategrey;" required>
                            <option value="">- Pilih Acara -</option> 
                            @foreach($daftarevent as $de)
                                @if(Auth::user()->email==$de->emailPendaftar)
                                    @foreach($event as $e)
                                        @if($de->namaEvent == $e->namaEvent)
                                            @if($waktuSekarang >= Carbon\Carbon::parse($e->tanggal)->addMinute(60) && $waktuSekarang <= Carbon\Carbon::parse($e->jamSelesai)->addMinute(60))
                                                @if($de->absensi!=1)
                                                <option value="{{ $e->namaEvent }}">{{ $e->namaEvent }}</option>      
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </select> <br>
                        <a style="color:red">Pastikan tidak salah memilih acara!</a>
                    </div>
                </div> 
                <div class="col-lg-12 col-sm-12 col-12 mt-4 mb-3 text-center">
                    <button class="px-5 py-2 mx-2" id="daftar" href="">Klik untuk Absen</button>
                </div>
                </form>
            </div>
            @if(\Session::has('successAbsen'))
                <script>
                    swal({
                        title: "Absen Berhasil!",
                        text: "Absen Berhasil, Silahkan Memesan Sertifikat",
                        icon: "success",
                        confirmButtonText: 'OK',
                        closeOnConfirm: true, //It does close the popup when I click on close button
                        allowOutsideClick: false
                    });
                </script>
            @endif
            @if(\Session::has('failAbsen'))
                <script>
                    swal({
                        title: "Absen Gagal!",
                        text: "Anda sudah absen pada Acara ini",
                        icon: "error",
                        confirmButtonText: 'OK',
                        closeOnConfirm: true, //It does close the popup when I click on close button
                        allowOutsideClick: false
                    });
                </script>
            @endif
        </div>
        <div class="row justify-content-center" id="sertifikat">
            <div class="col-lg-9 col-sm-9 col-10 py-4 mb-3 text-center cardcourse">
                <h3 class="mt-3"><b>Pemesanan Sertifikat</b></h3>
                <a>Pemesanan dapat dilakukan paling lambat 24 Jam setelah acara selesai</a><br><br>
                <button id="myBtnTrf" class="py-1 px-3">Ketentuan Pembayaran</button>
                <br><br>
                <form method="POST" action="pesansertifikat" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-sm-7 col-9 text-center my-3">
                                <a>Nama Pada Sertifikat </a><br>
                                <h5><b>{{ Auth::user()->namaLengkap }}</b></h5>
                            </div>
                        </div> 
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-sm-7 col-9 text-center mt-1 mb-4">
                                <label>Pilih Acara</label><br>
                                <select id="eventSertif" class="form-control mb-2" name="eventSertif" style="border-color: darkslategrey;" required>
                                    <option value="pilih">- Pilih Acara -</option>   
                                    @foreach($daftarevent as $de)
                                        @if(Auth::user()->email==$de->emailPendaftar)
                                            @foreach($event as $ev)
                                                @if($de->namaEvent == $ev->namaEvent)
                                                    @if($de->absensi==1)
                                                        @if($waktuSekarang <= Carbon\Carbon::parse($ev->tanggal)->addHour(26))
                                                        <option value="{{ $ev->namaEvent}}">{{ $ev->namaEvent }}</option>      
                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select> 
                                <a style="color:red">Anda wajib absen agar bisa memesan sertifikat</a>
                            </div>
                        </div> 
                        <section id="metodebayarbrok">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-sm-7 col-9 text-center my-1">
                                    <label>Metode Pembayaran*</label>
                                    <select class="form-control" id="MetodeBayar" name="MetodeBayar" onchange="metodeBayar()" style="border-color: darkslategrey;" required>
                                        <option value="pilih" class="p-1">- Pilih Metode -</option>   
                                        <option value="transferbank" name="transferbank" class="p-1" required>Transfer Bank</option>      
                                        <option value="digital" name="digital" class="p-1" required>OVO/GOPAY/DANA</option>      
                                    </select> 
                                </div>
                            </div>   
                            <br>
                            <div id="digital">
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 col-sm-7 col-9 text-center my-1">
                                        <label>Nomor Handphone*</label>
                                        <input class="form-control" id="noHP" style="border-color: darkslategrey;" type="text" name="noHP" placeholder="085788006644" 
                                        defaultValue="" autofocus/><br>
                                    </div>
                                </div>  
                            </div>
                            <div id="transferbank">
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 col-sm-7 col-9 text-center my-1">
                                        <label>Nama Bank*</label>
                                        <input class="form-control" id="namaBank" style="border-color: darkslategrey;" type="text" name="namaBank" placeholder="BCA/BNI/BRI" 
                                        defaultValue="" autofocus/><br>
                                    </div>
                                </div>   
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 col-sm-7 col-9 text-center my-1">
                                        <label>Nomor Rekening</label>
                                        <input class="form-control" id="rekening" style="border-color: darkslategrey;" type="text" name="rekening" placeholder="1122331021" 
                                        defaultValue="" autofocus/><br>
                                    </div>
                                </div>    
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 col-sm-7 col-9 text-center">
                                        <label>Waktu Transfer*</label>
                                        <input class="form-control" id="waktuTransfer" style="border-color: darkslategrey;" type="text" name="waktuTransfer" placeholder="19/8/20 22.22" 
                                        defaultValue="" autofocus/><br>
                                    </div>
                                </div>  
                            </div>

                            <script>
                                document.getElementById("digital").style.display = "none";
                                document.getElementById("transferbank").style.display = "none";

                                function metodeBayar(){ 
                                    var metode = document.getElementById("MetodeBayar").value;
                                    console.log(metode);
                                    if(metode=="transferbank"){
                                        document.getElementById("digital").style.display = "none";
                                        document.getElementById("transferbank").style.display = "block";
                                        document.getElementById("namaBank").required = true;
                                        document.getElementById("waktuTransfer").required = true;
                                    }
                                    else if(metode=="digital"){
                                        document.getElementById("digital").style.display = "block";
                                        document.getElementById("transferbank").style.display = "none";
                                        document.getElementById("noHP").required = true;
                                    }
                                    else{
                                        document.getElementById("digital").style.display = "none";
                                        document.getElementById("transferbank").style.display = "none";
                                    }
                                }
                            </script>
                        </section>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-sm-7 col-9 my-1 text-center">
                                <label>Upload Bukti Pembayaran*</label>
                                <input type="file" name="buktiBayar" class="form-control" value="Upload File" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12 mt-4 mb-3 text-center">
                            <button class="px-5 py-2 mx-2" id="daftar" href="">Pesan Sertifikat</button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4 class="mt-3"><b>Ketentuan Pembayaran Sertifikat</b></h4>
                    <ol>
                        <li>Pemesanan sertifikat dapat dilakukan setelah melakukan absensi pada sebuah acara, hingga 24 jam setelah acara tersebut selesai.</li>
                        <li>Transfer dilakukan sesuai biaya pemesanan sertifikat pada acara yang anda ikuti (dapat dilihat di eflyer), ditambah 3 digit terakhir no wa terdaftar. 
                            <br>Contoh: Bila no. wa Anda 0811.234.567 dan biaya pemesanan sertifikat Rp 12.000,00, maka transfer sebesar Rp 12.567,00.</li>
                        <li>Transfer dilakukan ke <b>BCA 237.139.8696 a/n Budi Ariati.</b></li>
                    </ol>
                </div>
            </div>

            <script>
                var modal = document.getElementById("myModal");
                var btn = document.getElementById("myBtnTrf");
                var span = document.getElementsByClassName("close")[0];
                btn.onclick = function() {
                    modal.style.display = "block";
                }
                span.onclick = function() {
                    modal.style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>

        </div>
    </div>
    @if(\Session::has('successSertif'))
        <script>
            swal({
                title: "Pemesanan Sertifikat Berhasil!",
                text: "Sertifikat dapat diunduh di laman Acara Saya 2 minggu setelah acara selesai",
                icon: "success",
                confirmButtonText: 'OK',
                closeOnConfirm: true, //It does close the popup when I click on close button
                allowOutsideClick: false
            });
        </script>
    @endif
    @if(\Session::has('failSertif'))
        <script>
            swal({
                title: "Pemesanan Sertifikat Gagal!",
                text: "Anda sudah memesan sertifikat acara tersebut sebelumnya",
                icon: "error",
                confirmButtonText: 'OK',
                closeOnConfirm: true, //It does close the popup when I click on close button
                allowOutsideClick: false
            });
        </script>
    @endif
    @if(\Session::has('failSertif2'))
        <script>
            swal({
                title: "Pemesanan Sertifikat Gagal!",
                text: "Pilih metode pembayaran",
                icon: "error",
                confirmButtonText: 'OK',
                closeOnConfirm: true, //It does close the popup when I click on close button
                allowOutsideClick: false
            });
        </script>
    @endif
</section>

<script>
// document.getElementById("absensi").style.display="none";
// document.getElementById("sertifikat").style.display="none";
</script>
@endsection