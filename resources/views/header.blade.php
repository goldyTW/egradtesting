<!DOCTYPE html>
<html lang="en">
<meta name="description" content="egrad merupakan solusi belajar dengan ahlinya">
<meta name="keywords" content="pendidikan, kelas online, training online, mentoring, ahli, spesialis, cerdas">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> eGrad | Re-innovate Education</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/egradalt1.png">
    <link rel = "apple-touch-icon" type = "image/png" href = "assets/egradalt1.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top" id="navbarUtama">
            <img src="assets/egradalt1.png" width="60px" class="mx-2">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" style="color: darkslategray;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="z-index: 99;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 my-1 dropbtn" href="javascript:void(0)" >Kursus<span class="sr-only">(current)</span></a>
                        <div class="dropdown-content">
                        <a href="technology">Teknologi</a>
                            <a href="medical">Kedokteran</a>
                            <a href="art">Seni</a>
                            <a href="economy">Ekonomi dan Bisnis</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="schedule">Jadwal<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link mx-2 my-1" href="lecturers">Pengajar<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="faq">FAQ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="about">Tentang Kami<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="daftarevent#pilihEvent">Pendaftaran Acara<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto my-1 nav-flex-icons" id="navkanan">
                    <li class="nav-item mr-3">
                        <a class="my-2 my-sm-0 px-3 py-2 login" id="login" href="login">Login</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="my-2 my-sm-0 px-3 py-2 signup" id="signup" href="register">Sign up</a>
                    </li>
                </ul>
                @if(isset(Auth::user()->email))
                <script>
                    document.getElementById("navkanan").style.display = "none";
                </script>
                <ul class="navbar-nav ml-auto my-1 nav-flex-icons" id="navkanan2">
                    <li class="nav-item dropdown my-3 ml-1 mr-4">
                        <a class="p-2 mx-2" href="javascript:void(0)" id="signup" style="font-size:16px;" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <i class="fa fa-chevron-down"></i></a>
                        <div class="dropdown-content" style="min-width: 150px !important; right:0; !important">
                            <a class="my-2" href="home">Dashboard</a>
                            <a class="my-2" href="profile">Profile</a>
                            <a class="my-2" style="color:red" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout</a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                @endif
            </div>
        </nav>
    </section>

    @yield('content')
    
    <footer class="footer mt-5" style="color: white; bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center text-left">
                <div class="col-lg-3 col-sm-9 col-10 mt-5 mb-4 text-center">
                    <h4><b>Egrad.id</b></h4>
                    <a style="font-size: 14px; color: rgb(117, 117, 117);">egrad merupakan sebuah platform pembelajaran dan mentoring online untuk Mahasiswa dan Professional.
                        Terdapat berbagai kelas dan webinar yang tersedia dari 4 disiplin ilmu yakni Teknik, Kedokteran, Seni, dan Ekonomi. </a>
                </div>
                <div class="col-lg-3 col-sm-12 mt-5 mb-4 text-center" id="option">
                    <h4>Important Links</h4><br>
                    <a href="schedule">Jadwal<span class="sr-only">(current)</span></a> <br><br>
                    <a href="lecturers">Pengajar<span class="sr-only">(current)</span></a> <br><br>
                    <a href="faq">FAQ<span class="sr-only">(current)</span></a> <br><br>
                    <a href="about">Tentang Kami<span class="sr-only">(current)</span></a> <br>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5 mb-4 text-center">
                    <a href="https://www.instagram.com/egrad.id/" target="_blank"><i class="fab fa-instagram icontact"></i></a>
                    <a href="https://web.facebook.com/goldy.t.wijaya/" target="_blank"><i class="fab fa-facebook icontact"></i></a>
                    <a href="https://www.linkedin.com/in/goldytw/" target="_blank"><i class="fab fa-linkedin icontact"></i></a><br>
                    <br><a><b>Egrad Office </b><br>
                        Citra Gran, Cibubur</a><br><br>
                        <a><i class="fas fa-phone m-2" style="color: white;"></i> +6281513357035</a><br>
                        <a><i class="fas fa-envelope m-2" style="color: white;"></i> admin@egrad.id</a>
                </div>
                <div class="col-lg-3 col-sm-9 col-10 mt-5 mb-4 text-center">
                    <div class="kotak p-4" style="background-color: #00cc99; border-radius: 20px;">
                        <h4><b>Ayo Daftar!</b></h4>
                        <a style="font-size: 14px;">Ayo segera bikin akun di egrad! Dapatkan penawaran menarik untuk kelas-kelas
                        yang berkualitas!</a><br><br>
                        <a href="register" class="my-3 my-sm-0 px-3 py-2 tombol" style="border-color: 0.5px solid white; margin-top: 3px; text-decoration:none">
                            Sign Up</a><br>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center" style="border-top: 1px solid white;">
                <div class="col-lg-12 col-sm-12 justify-content-center text-center mt-3 mb-3">
                    © Copyright<b> eGrad </b>2020. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>

    <script>
        var mybutton = document.getElementById("myBtn");
        var wabutton = document.getElementById("wafloat");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                mybutton.style.display = "block";
                wafloat.style.display = "block";
                document.getElementById("navbarUtama").style.top = "0";
            } else {
                document.getElementById("navbarUtama").style.top = "0";
            }
        }

        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        
        var x;
        for(x=2; x<=3; x++){
            document.getElementById("vid"+x).style.display = "none";
            document.getElementById("judul"+x).style.display = "none";
        }
        var y = 1;
        function prev(){
            for(x=1; x<=3; x++){
                document.getElementById("vid"+x).style.display = "none";
                document.getElementById("judul"+x).style.display = "none";
            }
            y = y-1;
            var prev = document.getElementById("prev");
            if(y<=1){
                prev.disabled = true;
                prev.style.color = "#999791";
                prev.style.borderColor = "#999791";
                y=1;
            }
            document.getElementById("vid"+y).style.display = "block";
            document.getElementById("judul"+y).style.display = "block";
        }
        function next(){
            for(x=1; x<=3; x++){
                document.getElementById("vid"+x).style.display = "none";
                document.getElementById("judul"+x).style.display = "none";
            }
            y = y+1;
            var next = document.getElementById("next");
            if(y>=3){
                next.disabled = true;
                next.style.color = "#999791";
                next.style.borderColor = "#999791";
                y=3;
            }
            document.getElementById("vid"+y).style.display = "block";
            document.getElementById("judul"+y).style.display = "block";
        }
         // function klikvideo(y){
        //     for(x=1; x<=4; x++){
        //         document.getElementById("vid"+x).style.display = "none";
        //     }
        //     document.getElementById("vid"+y).style.display = "block";
        // }
    </script>
</body>
</html>