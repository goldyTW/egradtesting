<!DOCTYPE html>
<html lang="en">
<meta name="description" content="egrad merupakan solusi belajar dengan ahlinya">
<meta name="keywords" content="pendidikan, kelas online, training online, mentoring, ahli, spesialis, cerdas">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> eGrad | Re-innovate Education</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/egradalt1.png">
    <link rel = "apple-touch-icon" type = "image/png" href="../../assets/egradalt1.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    /* @import url("https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap"); */
    *{
        scroll-behavior: smooth;
    }
    body{
        width: 100%;
        font-family: "Raleway";
        font-style: thin;
        color:darkslategrey;
        background-color: whitesmoke;
    }
    option{
        font-family: "Raleway" !important;
    }
    ::selection {
        background: #00cc99;
    }
    .jeda{
        margin-bottom: 10%;
    }
    .navbar{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        z-index: 99;
        background-color: white;
    }
    .navbar a, .viewall{
        text-decoration: none;
        color: darkslategrey;
        opacity: 100% !important;
        transition: 0.5s;
    }
    .navbar a:hover, .viewall:hover{
        color: #00cc99;
    }
    /* ul{
        display: flex;
        flex-direction: column;
        align-items: start;
        list-style-type: none;
    } */
    /* #navkiri li a {
        position: relative;
        display: block;
        text-decoration: none;
        padding: 4px 0;
    } */
    /* #navkiri li a::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 3px;
        top: 100%;
        left: 0;
        background-image: linear-gradient(to top right,#18725c, #00cc99 );
        transition: transform 0.5s;
        transform: scaleX(0);
        transform-origin: right;
    }
    #navkiri li a:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    } */
    .navbar-nav{
        margin-left: 0%;
    }
    li.dropdown {
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 180px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
        color: darkslategray;
        padding: 12px 16px;
        margin: 5px;
        border-bottom: 0.25px solid rgb(209, 209, 209);
        text-decoration: none;
        display: block;
        text-align: left;
        transition:0.5s;
    }
    .dropdown-content a:hover {background-color: white}
    .dropdown:hover .dropdown-content {
        display: block;
        transition: 0.5s;
    }
    #scheduleprevnext{
        border:0.5px solid white;
        border-radius: 25px; 
        color: white;
        cursor: pointer;
        transition: 0.5s;
    }
    #scheduleprevnext:hover{
        color:darkslategray;
        background-color: white;
    }
    #login, #myBtnTrf{
        background-image: linear-gradient(to top right,#1b8f72, #00cc99);
        background-size: contain;
        border-radius: 20px;
        border-color: transparent !important; 
        cursor: pointer;
        color: white;
        transition: 1s;
        text-decoration: none;
    }
    #login:hover{
        background-image: linear-gradient(to top right,darkslategrey, #1b8f72);
    }
    #signup, #notif, .urutanplay{
        border:0.5px solid darkslategrey;
        border-radius: 25px; 
        color: darkslategrey;
        cursor: pointer;
        transition: 0.5s;
    }
    .urutanplay{
        padding:10px 15px;
        margin: 10%;
        border-radius: 5px !important
    }
    .urutanplay:active{
        background-color: darkslategray !important;
        color: white !important;
    }
    #signup:hover, .urutanplay:hover, #daftar{
        background-color: darkslategrey !important;
        color: white !important;
        border-radius: 25px;
        border:0.5px solid darkslategrey;
        transition:0.5s;
    }
    #daftar:hover{
        color: darkslategrey !important;
        background-color:transparent !important;
    }
    .beli{
        background-color: #00cc99 !important;
        border-radius: 25px;
        cursor: pointer;
        transition: 0.5s;
        color: white !important;
    }
    .beli:hover, .aktif{
        background-color: darkslategray !important;
        cursor: pointer !important;
        color: white !important;
    }
    #landing{
        background-image: url('../assets/work1.jpg');
        background-size: cover;
        height: 600px;
        z-index: -1;
        vertical-align: middle;
    }
    .jedaatas{
        margin-bottom:15%;
    }
    .tombol{
        border-radius: 100px;
        background-color: white;
        color:darkslategrey !important;
        text-decoration:none;
        font-size: 20px;
        transition: 0.6s;
        cursor: pointer;
        border:0.5px solid white;
    }
    .tombol:hover{
        background-color: transparent;
        color:white !important;
        border-color: white;
    }
    .inputan{
        border-radius: 20px; 
        border-color: transparent; 
        height: 49px;
    }
    .fa-search:hover{
        color: white;
    }
    #batas{
        margin-top: -3%;
    }
    #panah{
        margin-top: -3.5%;
        z-index: 100;
    }
    #myBtn{
        display: none;
        position: fixed;
        bottom: 20px;
        left: 30px;
        z-index: 99;
        font-size: 30px;
        border: none;
        background-image: linear-gradient(to top right,#1b8f72, #00cc99);
        color: white;
        cursor: pointer;
        padding-left: 17.5px;
        padding-right: 17.5px;
        padding-bottom:8px;
        padding-top:8px;
        border-radius: 50px;
        transition: 0.4s;
    }
    #myBtn:hover {
        background-image: linear-gradient(to top right,darkslategrey, #1b8f72);
    }
    #wafloat{
        display: none;
        position:fixed;
        bottom: 20px;
        right: 30px !important;
        background-color:#25d366 !important;
        cursor: pointer;
        font-size: 30px;
        border: none;
        z-index: 99;
        padding-left: 17.5px;
        padding-right: 17.5px;
        padding-bottom:8px;
        padding-top:8px;
        border-radius: 50px;
        transition: 0.4s;
    }
    #wafloat:hover{
        background-color:#29c261 !important;
    }
    .my-float{
        color: white;
        text-decoration: none;
    }
    .todown{
        text-decoration: none;
        color: darkslategrey;
        transition: 0.4s;
    }
    .todown:hover{
        color: #00cc99;
    }

    /* ensure equal card height inside carousel */
    .carousel-inner>.row-equal.active, 
    .carousel-inner>.row-equal.next, 
    .carousel-inner>.row-equal.prev {
        display: flex;
    }

    /* prevent flicker during transition */
    .carousel-inner>.row-equal.active.left, 
    .carousel-inner>.row-equal.active.right {
        opacity: 0.5;
        display: flex;
    }
    .cardlecture, .bottomconsole{
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px;
    }
    .bottomconsole{
        box-shadow: 4px 4px 4px 4px rgba(0,0,0,0.2);
    }
    .card, .cardwebinar{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px;
        background-color: white;
    }
    .card{
        cursor: pointer;
    }
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .card img {
        border-radius: 5px 5px 0 0;
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .cardcourse, .cardcourse1, .cardcourse2{
        background-color: white;
        transition: 0.3s;
        border-radius: 15px;
    }
    .cardcourse1{
        width:257px;
    }
    .cardcourse2{
        width:300px;
        /* height:270px; */
    }
    .cardcourse1 img, .cardcourse2 img{
        border-radius: 15px 15px 0 0;
        opacity: 1;
        display: block;
        width: 100%;
        height: 150px;
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .box {
        padding: 20px;
    }
    .boxcourse{
        padding: 10px;
    }
    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    .middle2{
        top: 5% !important;
        left: 5% !important;
        position: absolute;
        transition: .5s ease;
        transform: translate(-5%, -5%);
        -ms-transform: translate(-5%, -5%);
        text-align: center;
    }
    .card:hover img {
        opacity: 0.3;
    }
    .card:hover .middle {
        opacity: 1;
    }
    .text, .courseFilter, .courseFilter2 {
        background-color: #00cc99;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
        border-radius: 50px;
        transition: 0.5s;
        cursor: pointer;
    }
    .text:hover{
        background-color: transparent;
        border:0.5px solid darkslategrey;
        color:darkslategrey;
    }
    .links{
        text-decoration:none !important;
        color: white;
        transition: 0.5s;
    }
    .links:hover{
        color:darkslategrey;
    }
    .courseFilter{
        background-color: white !important;
        color: darkslategrey !important;
    }
    .courseFilter2{
        background-color: darkslategray !important;
        color: white !important;
    }
    .text2{
        padding: 8px 16px;
        background-color: tomato;
        border-radius: 10px;
        color: white;
    }
    .keterangan{
        border-right: 0.5px solid;
        border-color: white;
    }
    .icontact{
        background-color: white;
        border-radius:100px;
        margin:6px;
        font-size: 20px;
        padding: 10px;
        color: rgb(37, 37, 37);
    }
    .icontact:hover{
        background-color: #00cc99;
        color: white;
        transition: 0.5s;
    }
    #option a{
        font-size: 16px; 
        text-decoration: none; 
        color:white;
        margin-bottom: 30px;
    }
    #option a:hover{
        color: #00cc99;
        transition: 1s;
    }
    .footer{
        /* position:fixed; */
        bottom:0px !important;
        background-color: rgb(37, 37, 37);
        background-size: cover;
        width:100%;
    }
    .mainText{
        font-size: 50px;
        z-index: 1;
        color: white !important;
        margin-top: 30%;
    }
    #wrapper {
        overflow-x: hidden;
    }
    #sidebar-wrapper {
        /* background-color:#00cc99; */
        background-image: url('../assets/work1.jpg');
        background-size:cover;
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
    }
    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        margin-top:20%;
        color:white;
    }
    #sidebar-wrapper .list-group {
        width: 15rem;
    }
    .list-group a{
        color:white;
        text-decoration:none;
        transition:0.4s;
    }
    .list-group a:hover{
        background-color: darkslategray;
    }
    #page-content-wrapper {
        min-width: 100vw;
    }
    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }
    .fotofounder{
        width: 60%;
    }
    .dropdownNotif{
        min-width: 500px !important; 
        right:0; 
        background-color:#edfaf1 !important;
        transition:0.5s;
    }
    .dropdownNotif a:hover{
        color: darkslategray !important;
        font-weight: bold;
    }
    #belikelas{
        display: none;
    }
    .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        padding-top: 100px; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgb(0,0,0); 
        background-color: rgba(0,0,0,0.4); 
        transition: 0.5s;
    }
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 60%;
    }
    .close {
        color: #aaaaaa;
        float: left;
        text-align: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close:hover, .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    footer{
        color:white; 
        margin-top:6.5%; 
        bottom:0px;
    }
    @media(max-width: 768px){
        .jeda{
            margin-bottom: 17%;
        }
        .navbar{
            background-color:white;
            opacity: 0.9;
        }
        .dropdownNotif{
            min-width: 350px !important; 
        }
        #batas{
            margin-top: -5% !important;
        }
        #panah{
            margin-top: -5.5% !important;
        }
        .keterangan{
            border: none;
        }
        .mainText{
            font-size: 40px !important;
            z-index: 1;
            color: white !important;
        }
        #notif{
            margin-top:200px !important;
        }
        .cardlecture{
        max-width:80%;
        }
        .jedaatas{
            margin-bottom:17% !important;
        }
        .modal-content {
            width: 80%;
        }
        footer{
            margin-top:52%;
            bottom:0px !important;
        }
    }
    @media(max-width:576px){
        .dropdownNotif{
            min-width: 250px !important; 
        }
        #batas{
            margin-top: -9% !important;
        }
        .welcome{
            display:none;
        }
        .jedaatas{
            margin-bottom:32% !important;
        }
        .modal-content {
            width: 80%;
        }
        footer{
            margin-top:66.5%;
            bottom:0px !important;
        }
    }
    </style>
    
</head>
<body>
<section id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top" id="navbarUtama">
            <img src="../../assets/egradalt1.png" width="60px" class="mx-2">
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
                            <a href="/technology">Teknologi</a>
                            <a href="/medical">Kedokteran</a>
                            <a href="/art">Seni</a>
                            <a href="/economy">Ekonomi dan Bisnis</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/schedule">Jadwal<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link mx-2 my-1" href="/lecturers">Pengajar<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/faq">FAQ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/about">Tentang Kami<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 my-1" href="/daftarevent#pilihEvent">Pendaftaran Acara<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto my-1 nav-flex-icons" id="navkanan">
                    <li class="nav-item mr-3">
                        <a class="my-2 my-sm-0 px-3 py-2 login" id="login" href="/login">Login</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="my-2 my-sm-0 px-3 py-2 signup" id="signup" href="/register">Sign up</a>
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
                            <a class="my-2" href="/home">Dashboard</a>
                            <a class="my-2" href="/profile">Profile</a>
                            <a class="my-2" style="/color:red" href="{{ route('logout') }}" 
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

<!--<section id="faq">-->
    <div class="container">     
        <div class="row jedaatas"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <h1 style="color: darkslattegray;">Halo! Halaman tidak ditemukan :(</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-10 col-12 text-center">
                <img src="../../assets/404.png" width="80%">
            </div>
        </div>
    </div>
<!--</section>-->

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