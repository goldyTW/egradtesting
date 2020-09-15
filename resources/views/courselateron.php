@foreach($selectedcourse as $sc)
        @if(Auth::user()->email==$sc->email)
            @foreach($course->slice(1, 3) as $c)
                @if($sc->idCourse == $c->idCourse)
                    <div class="my-2 ml-3 cardcourse1">
                        <img src="{{$c->image}}" alt="Avatar" style="width:100%">
                        <div class="boxcourse my-2">
                            <h5><b><a href="{{$c->link}}" style="color:darkslategrey; text-decoration:none">{{$c->namaCourse}}</a></b></h5>
                            <a>{{$c->speaker}}</a>
                        </div>
                    </div>
                @endif
            @endforeach
            @if($sc->idCourse == null)
                Anda tidak memiliki kelas. Lihat kelas yang tersedia<a href="/buy"> disini </a>
            @endif
        @endif
    @endforeach

    {{count($selectedcourse->where('email', Auth::user()->email))}}