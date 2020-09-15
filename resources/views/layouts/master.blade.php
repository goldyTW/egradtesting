<!DOCTYPE html>
<html lang="en">
<meta name="description" content="egrad merupakan solusi belajar dengan ahlinya">
<meta name="keywords" content="pendidikan, kelas online, training online, mentoring, ahli, spesialis, cerdas">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> eGrad | Re-innovate Education</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/egradalt1.png">
    <link rel = "apple-touch-icon" type = "image/png" href="../assets/egradalt1.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">
    <style>
        footer{
            color:white; 
            margin-top:6.5%; 
            bottom:0px;
        }
        @media(max-width:768px){
            footer{
                margin-top:52%;
                bottom:0px !important;
            }
        }
        @media(max-width:576px){
            footer{
                margin-top:66.5%;
                bottom:0px !important;
            }
        }
    </style>
    
</head>
<body style="background-image: url('../assets/backlogin.jpg'); background-size: cover;">
    <section id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top" id="navbarUtama">
        <img src="../assets/egradalt1.png" width="60px" class="mx-2">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" style="color: darkslategray;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="z-index: 99;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/public/">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 my-1 dropbtn" href="javascript:void(0)">Kelas<span class="sr-only">(current)</span></a>
                        <div class="dropdown-content">
                            <a href="/public/technology">Teknologi</a>
                            <a href="/public/medical">Kedokteran</a>
                            <a href="/public/art">Seni</a>
                            <a href="/public/economy">Ekonomi dan Bisnis</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/public/schedule">Jadwal<span class="sr-only">(current)</span></a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link mx-2 my-1" href="/public/lecturers">Pengajar<span class="sr-only">(current)</span></a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/public/faq">FAQ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/public/about">Tentang Kami<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/public/daftarevent">Pendaftaran Acara<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto my-1 nav-flex-icons">
                    <li class="nav-item mr-3">
                        <a class="my-2 my-sm-0 px-3 py-2 login" id="login" href="/public/login">Login</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="my-2 my-sm-0 px-3 py-2 signup" id="signup" href="/public/register">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    @yield('content')

    <footer class="footer fixed">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-sm-12 justify-content-center text-center mt-3 mb-3">
                    © Copyright<b> eGrad </b>2020. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
</body>
</html>