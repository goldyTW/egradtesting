@extends('header')

@section('content')
    <button onclick="topFunction()" id="myBtn"><i class="fas fa-chevron-up" style="color: white;"></i></button>
    <a href="https://api.whatsapp.com/send?phone=6281513357035&text=Halo%21%20saya%20ingin%20tahu%20lebih%20lanjut%20tentang%20egrad%20boleh%20dibantu?" id="wafloat" target="_blank">
        <i class="fab fa-whatsapp my-float"></i></a>

    <section id="landing">
        <div class="container">
        <div class="row jedaatas"></div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12 my-5 text-center">
                    <br>
                    <a class="mainText">Webinar dan Online Course untuk Professional</a>
                </div>
                <div class="col-lg-12 col-sm-12 col-12 my-1 text-center">
                    <!-- <a class="btn px-5 py-3 tombol" type="submit" id="submit" href="/schedule">Lihat Jadwal</a> -->
                    <form method="POST" action="queryKelas" enctype="multipart form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-sm-9 col-12 my-1">
                            <input class="form-control inputan" type="text" id="queryKelas" name="queryKelas" placeholder="Ketikkan Kursus"/>
                        </div>
                        <div class="col-lg-1 col-sm-12 col-3 my-1 text-center">
                            <button class="btn px-4 py-2 tombol" type="submit" id="submit" onclick=""><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- Pilih Webinar/Online Course -->
        </div>
    </section>

    <section class="scroll-down">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <img src="assets/batas2.png" width="100%" id="batas">
                </div>
            </div>
            <div class="row justify-content-center" id="panah">
                <div class="col-lg-12 text-center">
                    <a class="todown" href="#layanan"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mt-5">
                    <h1 style=" z-index: 1;color: darkslategrey;">
                       <b> Layanan Kami</b></h1>
                </div>
            </div>
            <div class="row justify-content-center"> 
                <div class="col-lg-5 col-sm-9 col-10 my-3">
                    <div class="card">
                        <img  src="assets/webinar.jpg" alt="Avatar" style="width:100%">
                        <div class="box text-center">
                            <h4><b>Webinar</b></h4> 
                            <p>Terdapat webinar dengan berbagai tema dan bahasan tertentu yang dapat membuka cakrawala pikiran dan pengetahuan Anda.</p> 
                        </div>
                    </div>  
                </div>
                <div class="col-lg-5 col-sm-9 col-10 my-3">
                    <div class="card">
                        <img  src="assets/onlencourse.jpg" alt="Avatar" style="width:100%">
                        <div class="box text-center">
                            <h4><b>Online Course</b></h4> 
                            <p>Terdapat banyak kursus yang dapat meningkatkan kemampuan Anda dalam menghadapi dunia kerja dan usaha</p> 
                        </div>
                    </div>  
                </div>
                <!-- <div class="col-lg-3 col-sm-9 col-10 my-3">
                    <div class="card">
                        <img  src="assets/seminar.jpg" alt="Avatar" style="width:100%">
                        <div class="box text-center">
                            <h4><b>Seminar</b></h4> 
                            <p>Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> 
                        </div>
                    </div>  
                </div>
                <div class="col-lg-3 col-sm-9 col-10 my-3">
                    <div class="card">
                        <img  src="assets/certification.jpg" alt="Avatar" style="width:100%">
                        <div class="box text-center">
                            <h4><b>Certifications</b></h4> 
                            <p>Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> 
                        </div>
                    </div>  
                </div> -->
            </div>
        </div>
    </section>

    <section id="keterangan">
        <div class="container-fluid my-5" style="background-color: darkslategrey; color: white; background-size: cover;">
            <div class="row justify-content-center" >
                <div class="col-lg-3 col-10 text-center keterangan my-5 animate__animated animate__fadeInUp">
                    <h1><b>18</b></h1> 
                    <h3>Webinar</h3> 
                </div>
                <div class="col-lg-3 col-10 text-center keterangan my-5 animate__animated animate__fadeInUp">
                    <h1><b>21</b></h1> 
                    <h3>Pembicara</h3> 
                </div>
                <div class="col-lg-3 col-10 text-center keterangan my-5 animate__animated animate__fadeInUp">
                    <h1><b>2000+</b></h1> 
                    <h3>Peserta</h3> 
                </div>
                <div class="col-lg-3 col-10 text-center my-5 animate__animated animate__fadeInUp">
                    <h1><b>9</b></h1> 
                    <h3>Online Course</h3> 
                </div>
            </div>
        </div>
    </section>

    <section id="course">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mt-5">
                    <h1 style=" z-index: 1;color: darkslategrey;">
                       <b>Online Course Terpopuler</b></h1>
                </div>
            </div>
            <!-- <div class="row justify-content-center my-4">
                <div class="col-lg-2 col-6 my-2 text-center">
                        <div class="courseFilter">All</div>
                </div>
                <div class="col-lg-2 col-6 my-2 text-center">
                        <div class="courseFilter">Technology</div>
                </div>
                <div class="col-lg-2 col-6 my-2 text-center">
                        <div class="courseFilter">Medical</div>
                </div>
                <div class="col-lg-2 col-6 my-2 text-center">
                        <div class="courseFilter">Economic</div>
                </div>
                <div class="col-lg-2 col-6 my-2 text-center">
                        <div class="courseFilter">Psychology</div>
                </div>
            </div> -->
            <div class="row justify-content-center my-2"> 
                <div class="col-lg-4 col-sm-8 col-10 mt-3 mb-5">
                    <div class="card">
                        <img src="data:image/jpeg;base64,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" alt="Avatar" style="height: 200px;">
                        <!-- <div class="middle2"> 
                            <div class="text2">Diskon 20%</div>
                        </div> -->
                        <div class="middle">
                            <div class="text">Details</div>
                        </div>
                        <div class="box">
                            <h4><b>Doctor Update Symposium</b></h4> 
                            <div class="row">
                                <div class="col-lg-12 col-12" style="color: darklatesgray">
                                    <a style="font-size:13px"><i class="fa fa-graduation-cap"></i> Prof. Dr. dr. Samsuridjal Djauzi, SpPD-KAI</a>
                                </div>
                                <!-- <div class="col-lg-6 col-6 ">
                                    <a style="font-size:14px"><i class="fa fa-users"></i> 300+ Participants</a> 
                                </div> -->
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4 col-sm-8 col-10 mt-3 mb-5">
                    <div class="card">
                        <img src="assets/jalantol.jpg" alt="Avatar" style="height: 200px;">
                        <div class="middle">
                            <div class="text">Details</div>
                          </div>
                        <div class="box">
                            <h4><b>Geoteknik</b></h4> 
                            <div class="row">
                                <div class="col-lg-10 col-10" style="color: darklatesgray">
                                    <a style="font-size:14px"><i class="fa fa-graduation-cap"></i> Ir. Harnedi Maizir, M.T., Ph.D</a>
                                </div>
                                <!-- <div class="col-lg-6 col-6 ">
                                    <a style="font-size:14px"><i class="fa fa-users"></i> 400+ Participants</a> 
                                </div> -->
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4 col-sm-8 col-10 mt-3 mb-5">
                    <div class="card">
                        <img src="https://news.unl.edu/sites/default/files/styles/large_aspect/public/depression_1.jpg?itok=4xPNS9Mw" alt="Avatar" style="height: 200px;">
                        <div class="middle">
                            <div class="text">Details</div>
                          </div>
                        <div class="box">
                            <h4><b>Mental Health</b></h4> 
                            <div class="row">
                                <div class="col-lg-12 col-12" style="color: darklatesgray">
                                    <a style="font-size:14px"><i class="fa fa-graduation-cap"></i> dr. Chrisna Mayangsari Sp.KJ</a>
                                </div>
                                <!-- <div class="col-lg-6 col-6 ">
                                    <a style="font-size:14px"><i class="fa fa-users"></i> 70+ Participants</a> 
                                </div> -->
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <section id="meetmentor">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-10 mb-5 text-center">
                    <img src="assets/drsamsurijal.jfif" width="90%">
                </div>
                <div class="col-lg-8 col-sm-9 col-11 mb-5">
                    <h4>Profil Pengajar</h4>
                    <h2 style="font-weight:bold">Prof. Dr. dr. Samsuridjal Djauzi, SpPD-KAI</h2>
                    <h6>Guru Besar Tetap Ilmu Penyakit Dalam Fakultas Kedokteran Universitas Indonesia (FKUI)</h6>
                    <div class="col-lg-8 col-sm-9 col-10 my-3" style="border-top: 1px solid darkslategray;"></div>
                        <a> Mendirikan Yayasan Pelita Ilmu (1989)</a><br><br>
                        <a> Direktur Utama Rumah Sakit Kanker Dharmais Jakarta (2001-2005)<br><br>
                        <a> Ketua Persatuan Besar Persatuan Ahli Penyakit Dalam Indonesia (PB PAPDI) (2001-2003)<br><br>
                        <a> Anggota International AIDS Society (IAS)<br><br>
                    <a class="my-2 my-sm-0 px-3 py-2 login" id="login" href="/lecturers">Lihat Lainnya</a>
                </div>
            </div>
        </div>
    </section>
@endsection  