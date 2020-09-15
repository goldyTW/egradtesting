@extends('header')
@section('content')
<section style="background-image:url('assets/backlogin.jpg'); background-size:cover;">
    <div class="container">
        <div class="row jedaatas"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12 mb-3 text-center">
                <h1 style="font-weight:bold; color:white">Online Course & Webinar Schedule</h1>
                <h3 class="mb-3"><a href="daftarevent#pilihEvent" class="tombol px-4 py-2" style="text-decoration:none">Daftar Disini</a></h3>
            </div>
        </div>  
        
        <section class="carousel slide" id="myCarousel" data-ride="carousel" id="postsCarousel">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <a class="btn" href="#myCarousel" data-slide="prev" id="scheduleprevnext" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                    <a class="btn" href="#myCarousel" data-slide="next" id="scheduleprevnext" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="carousel-inner text-center">
                <div class="row justify-content-center row-equal carousel-item my-2"> 
                    <div class="col-lg-9 col-12 ml-4 mt-3 mb-5 text-center">
                        <h2 style="color:white">Juli 2020 </h2>
                        <div class="cardwebinar p-2 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>04 Jul</h2>
                                    <a>16.00 WIB</a>
                                </div>
                                <div class="col-lg-8 mt-1">
                                    <h4><b>Depresi di Masa Pandemi</b></h4>
                                    <a><i class="fa fa-microphone"></i> dr. Chrisna Mayangsari Sp.Kj</a><br>
                                    <a><i class="fa fa-microphone"></i> Nurul Ekawati</a>
                                </div>
                            </div>
                        </div> 
                        <div class="cardwebinar p-2 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>07 Jul</h2>
                                    <a>19.45 WIB</a>
                                </div>
                                <div class="col-lg-8 mt-1">
                                    <h4><b>Fenomena Longsor di Jalan Tol</b></h4>
                                    <a><i class="fa fa-microphone"></i> Ir. Harnedi Maizir M.T., Ph.D</a><br>
                                    <a><i class="fa fa-microphone"></i> Heru Prasadja S.T</a>
                                </div>
                            </div>
                        </div>  
                        <div class="cardwebinar p-2 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>11 Jul</h2>
                                    <a>16.00 WIB</a>
                                </div>
                                <div class="col-lg-8 mt-1">
                                    <h4><b>Aktualisasi Perempuan</b></h4>
                                    <a><i class="fa fa-microphone"></i> dr. Chrisna Mayangsari Sp.Kj</a><br>
                                    <a><i class="fa fa-microphone"></i> Nurul Ekawati</a>
                                </div>
                            </div>
                        </div> 
                        <div class="cardwebinar p-2 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>17 Jul</h2>
                                    <a>19.45 WIB</a>
                                </div>
                                <div class="col-lg-8 mt-1">
                                    <h4><b>Compatible Engineer</b></h4>
                                    <a><i class="fa fa-microphone"></i> Cindar Hari Prabowo</a><br>
                                    <a><i class="fa fa-microphone"></i> Shanaz Haque</a>
                                </div>
                                <!-- <div class="col-lg-1 mt-2 px-2">
                                    <br>
                                    <i class="fa fa-chevron-right"></i>
                                </div> -->
                            </div>
                        </div>  
                        <div class="cardwebinar p-2 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>18 Jul</h2>
                                    <a>12.30 WIB</a>
                                </div>
                                <div class="col-lg-8 mt-2">
                                    <h4><b>Doctor Update Symposium</b></h4>
                                    <a><i class="fa fa-microphone"></i> Prof. Dr. dr. Samsuridjal Djauzi, SpPD-KAI</a><br>
                                    <a><i class="fa fa-microphone"></i> Dr. Ahmad Tawakkal, MBA</a>
                                </div>
                            </div>
                        </div>  
                        <div class="cardwebinar p-2 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>19 Jul</h2>
                                    <a>16.00 WIB</a>
                                </div>
                                <div class="col-lg-8 mt-2">
                                    <h4><b>Geriatri</b></h3>
                                    <a><i class="fa fa-microphone"></i> dr.Tengku Bahdar Johan, SpPD</a><br>
                                    <a><i class="fa fa-microphone"></i> Diany</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="row row-equal carousel-item justify-content-center my-2"> 
                    <div class="col-lg-9 col-12 ml-4 mt-3 mb-5  text-center">
                        <h2 style="color:white">Agustus 2020</h2>
                        @foreach($event as $p)
                        @if(Carbon\Carbon::parse($p->tanggal)->format('m') == "08")
                        <div class="cardwebinar p-3 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>{{Carbon\Carbon::parse($p->tanggal)->format('d M')}}</h2>
                                    <a>{{Carbon\Carbon::parse($p->tanggal)->format('H i')}} WIB</a>
                                </div>
                                <div class="col-lg-8 mt-1">
                                    <h4><b>{{ $p->namaEvent }}</b></h3>
                                    <a><i class="fa fa-microphone"></i> {{ $p->speaker}}</a><br>
                                    <a><i class="fa fa-microphone"></i> {{ $p->host}}</a>
                                </div>
                            </div>
                        </div> 
                        @endif
                        @endforeach 
                    </div>
                </div>
                <div class="row row-equal carousel-item active justify-content-center my-2"> 
                    <div class="col-lg-9 col-12 ml-4 mt-3 mb-5  text-center">
                        <h2 style="color:white">September 2020</h2>
                        @foreach($event as $p)
                        @if(Carbon\Carbon::parse($p->tanggal)->format('m') == "09")
                        <div class="cardwebinar p-3 my-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <h2>{{Carbon\Carbon::parse($p->tanggal)->format('d M')}}</h2>
                                    <a>{{Carbon\Carbon::parse($p->tanggal)->format('H i')}} WIB</a>
                                </div>
                                <div class="col-lg-8 mt-1">
                                    <h4><b>{{ $p->namaEvent }}</b></h3>
                                    <a><i class="fa fa-microphone"></i> {{ $p->speaker}}</a><br>
                                    <a><i class="fa fa-microphone"></i> {{ $p->host}}</a>
                                </div>
                            </div>
                        </div> 
                        @endif
                        @endforeach 
                    </div>
                </div>
        </section>
    </div>
</section>

<script>
    $(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

    // (function($) {
    //     "use strict";

    //     // manual carousel controls
    //     $('.next').click(
    //         function(){ 
    //             $('.carousel').carousel('next');
    //             return false; 
    //         });
    //     $('.prev').click(
    //         function(){
    //              $('.carousel').carousel('prev');
    //              return false; 
    //         });
        
    // })(jQuery);
</script>
@endsection

                        <!-- <div class="col-lg-1 mt-2 px-2">
                            <br>
                            <a href="/geotechnik" class="links"><i class="fa fa-chevron-right"></i></a>
                        </div> -->