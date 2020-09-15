    <!-- <div class="row justify-content-center">
        <div class="col-lg-5 mt-3">
            <div class="alert alert-danger alert-block">
                <strong> {{ $message }} </strong>
            </div>
        </div>
        <div class="col-lg-1 mt-3">
            <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times" style="background-color:darklattesgray"></i></button>
        </div>
    </div> -->
    
    <!-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($erros ->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    @endif          -->
            try {
                DB::table('users')->insert($userData);  
            } catch(\Illuminate\Database\QueryException $e){
                $errorCode = $e->errorInfo[1];
                if($errorCode == '1062'){


                    if (video.idName === "vid") {
                
            } else {
                video.className = "scnavbar";
            }

   <!-- <a class="mx-1 urutanplay" id="button1" onclick="klikvideo(1);">1</a>
    <a class="mx-1 urutanplay" id="button2" onclick="klikvideo(2);">2</a>
    <a class="mx-1 urutanplay" id="button3" onclick="klikvideo(3);">3</a>
    <a class="mx-1 urutanplay" id="button4" onclick="klikvideo(4);">4</a> -->
    <!-- <a class="mx-1 urutanplay" id="button5" onclick="klikvideo(5);">5</a> -->
                   
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=84d78a74c24a9b
MAIL_PASSWORD=e71fb305d926c6
MAIL_ENCRYPTION=null