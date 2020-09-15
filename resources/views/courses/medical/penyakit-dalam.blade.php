@extends('header')

@section('content')
<div class="container">
    <div class="row jedaatas"></div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-10 col-12 mb-2 text-center">
            <h1>Online Class Penyakit Dalam</h1>
            <h4>dr. Tengku Bahdar Johan, Sp.PD</h4>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-10 col-sm-12 col-10 cardcourse mt-5 mb-1 p-3 mr-lg-2">
            <h3><b>Deskripsi</b></h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="col-lg-8 col-sm-10 col-10 cardcourse mt-5 mb-1 p-3 ml-lg-2">
            <h3><b>Video Online Class</b></h3>
                <div class="row" >
                    <div class="col-lg-12">
                       <p id="tersedia"> Video tersedia bila anda menjadi premium member. <a href="/user/create">Ayo jadi premium member </a></p>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12">
                       <p id="belikelas"> Anda tidak terdaftar di kelas ini. <a href="/buy">Beli Kelas Sekarang </a></p>
                    </div>
                </div>
                @if(isset(Auth::user()->email))
                <script>
                    document.getElementById("tersedia").style.display = "none";
                </script>
                @foreach($selectedcourse as $sc)
                    @if(Auth::user()->email==$sc->email)
                    <script>
                        document.getElementById("belikelas").style.display = "none";
                    </script>
                        @foreach($course as $c)
                            @if($sc->idCourse == $c->idCourse)
                                @if($c->namaCourse == 'Kesehatan Olahraga')
                                    <div class="row justify-content-center video">
                                        <iframe class="mx-2 my-4" id="vid1" width="480" height="270" src="https://drive.google.com/file/d/1DYeA42QmNChXj91_cXiKKgMsEWn5SiMW/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe class="mx-2 my-4" id="vid2" width="480" height="270" src="https://drive.google.com/file/d/1Ks6bj1mUnOJSLtPZY6fDRuG8nES3Xmp1/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe class="mx-2 my-4" id="vid3" width="480" height="270" src="https://drive.google.com/file/d/1yO_5R7seocCn_As7OAqLcMibECoVzj16/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>  
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 text-center">
                                            <h4 id="judul1">#1 D for Depression</h4>
                                            <h4 id="judul2">#2 Aktualisasi Perempuan</h4> 
                                            <h4 id="judul3">#3 Resiliensi</h4>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 my-3 text-center">
                                            <a class="mx-1 my-5 urutanplay" id="prev" onclick="prev();">prev</a>
                                            <a class="mx-1 my-5 urutanplay" id="next" onclick="next();">next</a>
                                        </div>
                                    </div>
                                    <script>
                                    document.getElementById("belikelas").style.display = "none";
                                </script>
                                @else
                                <script>
                                    document.getElementById("belikelas").style.display = "block";
                                </script>
                                @endif
                            <script>
                                document.getElementById("belikelas").style.display = "none";
                            </script>
                            @else
                            <script>
                                document.getElementById("belikelas").style.display = "block";
                            </script>
                            @endif
                        @endforeach
                    <script>
                        document.getElementById("belikelas").style.display = "none";
                    </script>
                    @else
                    <script>
                        document.getElementById("belikelas").style.display = "block";
                    </script>
                    @endif
                @endforeach
                @endif
                                    
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-11 col-sm-10 col-10 cardcourse p-3 mt-5 mb-1">
            <h3><b>Pertanyaan dan Jawaban</b></h3>
            <!-- <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</b><br>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            <br><i class="fa fa-user"></i> goldy - Medan
            <br><br>

            <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</b><br>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            <br><i class="fa fa-user"></i> goldy - Medan
            <br><br>   -->

            Pertanyaan dan Jawaban dapat anda download <a href="https://drive.google.com/drive/folders/1pWGWjrtpncq-oU5cyiYBYn8391Zk4GYq?usp=sharing">disini</a>
        </div>
    </div>
</div>
@endsection 