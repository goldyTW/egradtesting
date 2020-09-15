@extends('masterdashboard')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-9 col-10 mt-5 mb-2 text-center">
                <h1><b>Event yang Saya Daftar</b></h1>
            </div>
        </div>  

        <section class="carousel slide" id="myCarousel" data-ride="carousel" id="postsCarousel">
        <div class="row justify-content-center">
            <!-- <div class="col-lg-12 text-center">
                <a class="btn" href="#myCarousel" data-slide="prev" id="signup" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                Agustus
                <a class="btn" href="#myCarousel" data-slide="next" id="signup" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div> -->
        </div>
        <div class="carousel-inner text-center">
        <div class="row row-equal carousel-item active justify-content-center mt-2 mb-5" id="list">   
            <h4 id="belumdaftar" style="margin-bottom:21%">Anda belum mendaftar event di Egrad.id. <a href="daftarevent">Daftar Event Disini </a></h4>
            @foreach($daftarevent as $de)
                @if(Auth::user()->email==$de->emailPendaftar)
                    @foreach($event as $e)
                        @if($de->namaEvent == $e->namaEvent)
                        <script>
                            document.getElementById("belumdaftar").style.display="none";
                        </script>
                        <div class="cardwebinar col-lg-6 m-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 mt-3 text-center">
                                    <a><b>{{ $e->tanggal }}</b></a><br>
                                </div>
                                <div class="col-lg-9 my-2">
                                    <h4><b>{{ $e->namaEvent }}</b></h3>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a class="viewall" style="text-decoration:none" href="{{ $e->link }}" target="_blank">Link Zoom</a><br>
                                        </div>
                                        
                                        @foreach ($pesansertif as $ps)
                                            @if($ps->emailPendaftar == Auth::user()->email)
                                            @if($de->namaEvent == $ps->namaEvent)
                                            <div class="col-lg-4">   
                                                <a class="viewall" style="text-decoration:none" href="{{ url('storage/'.$e->namaEvent.'/'.Auth::user()->email.'.pdf') }}" target="_blank">Unduh Sertifikat</a><br>
                                            </div>
                                            @endif
                                            @endif
                                        @endforeach
<!--public_path().-->
                                        <div class="col-lg-5">
                                            <a class="viewall" style="text-decoration:none" href="{{ $e->wacommunity }}" target="_blank">Grup WA Komunitas</a><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endif
                    @endforeach 
                @endif
            @endforeach
        </div>
</div>
    </div>

</section>

<div class="container" style="bottom:0 !important; margin-bottom:19%">
    <div class="row">
        <div class="col-lg-12">
            <a style="color:whitesmoke">myevent</a>
        </div>
    </div>
</div>

<script>
    // Add active class to the current button (highlight it)
    var list = document.getElementById("list");
    var selected = list.getElementsByClassName("beli");
    for (var i = 0; i < selected.length; i++) {
        selected[i].addEventListener("click", function() {
            var current = list.getElementsByClassName("active");
            if(this.className == "active"){
                this.className = this.className.replace(" active", "");
            }else{
                this.className += " active";
            }
            // var current = document.getElementsByClassName("active");
            // if (current.length > 0) { 
            //     current[0].className = current[0].className.replace(" active", "");
            // }
        });           
    }
        
</script>
@endsection