@extends('masterdashboard')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-9 col-10 mt-5 mb-2 text-center">
                <h1><b>Kursus Tersedia</b></h1>
                <h4>Klik untuk Membeli</h4>
            </div>
        </div>  
        <div class="row justify-content-center mb-5" id="list">   
            @foreach($course as $c)
                <div class="m-3 cardcourse2">
                    <img src="{{$c->image}}" alt="Avatar" style="width:100%">
                    <div class="boxcourse m-2">
                        <h5><b><a style="color:darkslategrey; text-decoration:none">{{$c->namaCourse}}</a></b></h5>
                        <div style="height:50px"><a>{{$c->speaker}}</a></div>
                        <div class="text-right" style="height:20px"><a><b>Rp{{$c->harga/1000}}.000</a></b></div>
                        
                        <div class=" row my-3">
                            <div class="col-lg-5 col-7">
                                <a href="{{$c->link}}" id="signup" class="px-3 py-2" style="text-decoration:none"><i class="fa fa-eye"></i> Lihat</a>
                            </div>
                            <div class="col-lg-7 col-5 text-right">
                            <a class="px-3 py-2 beli" style="text-decoration:none"><i class="fa fa-money-bill-wave-alt"></i> Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section>
    <div class="container-fluid" style="bottom:0px; position:fixed; z-index:101">
        <div class="row justify-content-center py-3 bottomconsole">
            <div class="col-lg-11 col-sm-9 col-10 pt-2">  
                <h4><b>Total Belanja :</b> Rp{{$c->harga/1000}}.000</h4>
            </div> 
            <br>
            <div class="col-lg-1 col-sm-2 text-center col-10 pt-2">  
            <a href="/" id="login" class="px-3 py-2" style="text-decoration:none">Bayar</a>
            </div> 
        </div>
    </div>
</section>
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