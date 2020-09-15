<!DOCTYPE html>
<html lang="en">
<meta name="description" content="egrad merupakan solusi belajar dengan ahlinya">
<meta name="keywords" content="pendidikan, kelas online, training online, mentoring, ahli, spesialis, cerdas">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> eGrad | Re-innovate Education</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/egradalt1.png">
    <link rel = "apple-touch-icon" type = "image/png" href="assets/egradalt1.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><h1><b>eGrad.id</b></h1></div>
      <div class="list-group list-group-flush">
        <a href="home" class="p-3"><i class="fa fa-columns mr-3"></i> Dasbor</a>
        <a href="myevent" class="p-3"><i class="fa fa-desktop mr-3"></i> Acara Saya</a>
        <a href="daftarevent#pilihEvent" class="p-3"><i class="fa fa-calendar-check mr-3"></i> Daftar Acara</a>
        <!--<a href="#" class="p-3" style="color:lightgrey" disable><i class="fa fa-graduation-cap mr-3"></i> Kursus Saya</a>-->
        <!-- <a href="#" class="p-3" style="color:grey" disable><i class="fa fa-certificate mr-3"></i> Certification</a> -->
        <a href="https://api.whatsapp.com/send?phone=6281513357035&text=Halo%21%20saya%20butuh%20bantuan%20teknis%20di%20dashboard%20egrad.%20boleh%20dibantu?" target="_blank" class="p-3"><i class="fa fa-question-circle mr-3"></i> Bantuan</a>
      </div>
    </div>

    <section id="page-content-wrapper">
        <section id="navbar">
            <nav class="navbar navbar-expand-lg">
            <button class="btn ml-2" id="menu-toggle"><i class="fa fa-bars" style="color: darkslategray;"></i> Menu</button>
            @if(isset(Auth::user()->email))
                <p class="my-2 ml-3 welcome"><strong>Halo {{ Auth::user()->namaLengkap }} </strong></p> 
                <ul class="navbar-nav ml-auto">
                    <div class="row">
                        <!-- <li class="nav-item my-3">
                            <a class="p-2 mx-2" id="signup" href="buy" title="Beli Kelas"><i class="fa fa-shopping-cart"></i></a>
                        </li> -->
                        <li class="nav-item my-3">
                            <a class="p-2 mx-2" id="signup" href="daftarevent#pilihEvent" title="Daftar Acara"><i class="fa fa-calendar-check"></i> Daftar Acara</a>
                        </li>
                        <!-- <li class="nav-item dropdown my-3">
                            <a class="p-2 mx-2" id="signup"  href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                            <div class="dropdown-content dropdownNotif">
                                <a class="my-2" style="cursor:pointer; background-color: transparent;">Kelas <b>((namakelas))</b> baru saja dibuka! Ayo segera Daftar!</a>
                                <a class="my-2" style="cursor:pointer; background-color: transparent;">Kelas <b>((namakelas))</b> baru saja dibuka! Ayo segera Daftar!</a>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown my-3 ml-1 mr-4">
                            <a class="p-2 mx-2" href="javascript:void(0)" id="signup" style="font-size:16px;" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fa fa-chevron-down"></i></a>
                            <div class="dropdown-content" style="min-width: 150px !important; right:0; !important">
                                <a class="my-2" href="home">Dasbor</a>
                                <a class="my-2" href="profile">Profil</a>
                                <a class="my-2" style="color:red" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout</a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </div>
                </ul>
            @else
                <script>window.location="login";</script>
            @endif 
            </nav>
        </section>

        @yield('content')
    
        <footer class="footer fixed" style=" color:white;bottom:0 !important">
        <!-- position:fixed; -->
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12 col-sm-12 justify-content-center text-center my-3">
                        © Copyright<b> eGrad </b>2020. All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
    </section>
    </div>
    <script>

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>