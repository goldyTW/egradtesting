@extends('masterdashboard')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-9 col-10 mt-5 mb-2 text-center">
                <h1><b>Kursus yang Anda Ikuti</b></h1>
            </div>
        </div>  
        <div class="row justify-content-center">   
            <!-- <div class="col-lg-12 col-sm-12 col-10 p-5 my-3"> -->
                @foreach($selectedcourse as $sc)
                    @if(Auth::user()->email==$sc->email)
                        @foreach($course as $c)
                            @if($sc->idCourse == $c->idCourse)
                                <div class=" m-3 cardcourse1">
                                    <img src="{{$c->image}}" alt="Avatar" style="width:100%">
                                    <div class="boxcourse my-2">
                                        <h5><b><a href="{{$c->link}}" style="color:darkslategrey; text-decoration:none">{{$c->namaCourse}}</a></b></h5>
                                        <a>{{$c->speaker}}</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            <!-- </div>  -->
        </div>
    </div>
    </div>
</section>
@endsection