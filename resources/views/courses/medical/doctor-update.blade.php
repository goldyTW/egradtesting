@extends('header')

@section('content')
<div class="container">
    <div class="row jedaatas"></div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-10 col-12 mb-2 text-center">
            <h1>Doctor Update Symposium Series</h1>
            <h4>Prof. Dr. dr. Samsuridjal Djauzi, SpPD-KAI</h4>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-10 col-10 cardcourse mt-5 mb-1 p-3 mr-lg-2">
            <h3><b>Deskripsi</b></h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="col-lg-8 col-sm-10 col-10 cardcourse mt-5 mb-1 p-3 ml-lg-2">
            <h3><b>Video Online Class</b></h3>
                <div class="row" >
                    <div class="col-lg-12">
                       <p id="tersedia"> Video tersedia bila anda menjadi premium member. <a href="/register">Ayo jadi premium member </a></p>
                    </div>
                </div>
                <div class="row" >
                <div class="col-lg-12">
                       <p id="belikelas"> Apabila video dan keterangannya tidak muncul, artinya anda perlu membeli kelas <a href="/buy">Beli Kelas Sekarang </a></p>
                    </div>
                </div>
                @if(isset(Auth::user()->email))
                <script>
                    document.getElementById("tersedia").style.display = "none";
                </script>
                @foreach($selectedcourse as $sc)
                    @if(Auth::user()->email==$sc->email)
                        @foreach($course as $c)
                            @if($sc->idCourse == $c->idCourse)
                                @if($c->namaCourse == 'Doctor Update Symposium')
                                    <div class="row justify-content-center video">
                                        <iframe class="mx-2 my-4" id="vid1" width="480" height="270" src="https://drive.google.com/file/d/1Dw7Hd7fckuvGFyiVqLVBLWuex0W7_bVB/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe class="mx-2 my-4" id="vid2" width="480" height="270" src="https://drive.google.com/file/d/17qScsIB75LfF7CKM4xNNiLWmtaqp-4fC/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe class="mx-2 my-4" id="vid3" width="480" height="270" src="https://drive.google.com/file/d/17qScsIB75LfF7CKM4xNNiLWmtaqp-4fC/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>  
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 text-center">
                                            <h4 id="judul1">#1 Menjadi Dokter Berintegritas dan Berhati Mulia</h4>
                                            <h4 id="judul2">#2 Effective Learning</h4> 
                                            <h4 id="judul3">#2 Effective Learning</h4> 
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
                    <!-- <script>
                        document.getElementById("belikelas").style.display = "none";
                    </script> -->
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
        <div class="col-lg-11 col-sm-12 col-10 cardcourse p-3 mt-5 mb-1">
            <h3><b>Pertanyaan dan Jawaban</b></h3>
            <!-- <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</b><br>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            <br><i class="fa fa-user"></i> goldy - Medan
            <br><br>

            <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</b><br>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            <br><i class="fa fa-user"></i> goldy - Medan
            <br><br>   -->

            Pertanyaan dan Jawaban dapat anda download <a href="https://drive.google.com/drive/folders/1FtVPq196Z9S_R0luTNOZwp9rA2H2XNC9?usp=sharing">disini</a>
        </div>
    </div>
</div>
@endsection 