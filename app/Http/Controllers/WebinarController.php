<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebinarController extends Controller
{
    public function queryKelas(Request $request){
        $pencarian = $request->input('queryKelas');

        if($pencarian=="teknik"||$pencarian=="engineering"||$pencarian=="tech"||$pencarian=="technology"||$pencarian=="teknologi"){ 
            return view('courses/technology'); 
        }
        else if($pencarian=="geotechnik" || $pencarian=="geoteknik" || $pencarian=="geologi" || $pencarian=="geo" ||  $pencarian=="andi" || 
        $pencarian=="online class geoteknik" || $pencarian=="online class geotechnik"){
            return view('courses/technology/geotechnik'); 
        }
        else if($pencarian=="technopreneur" || $pencarian=="sociopreneur" || $pencarian=="prof raldi" || $pencarian=="inkubator" 
        || $pencarian=="online class technopreneur" ){
            return view('courses/technology/technopreneur'); 
        }
        else if($pencarian=="architecture" || $pencarian=="green architecture" || $pencarian=="tiyok prasetyoadi" || $pencarian=="green building" 
        || $pencarian=="online class architecture" ||  $pencarian=="green home" || $pencarian=="online class green building" ){
            return view('courses/technology/green-architecture'); 
        }

        else if($pencarian=="dokter" || $pencarian=="medis"|| $pencarian=="kedokteran"|| $pencarian=="kesehatan"  ){
            return view('courses/medical'); 
        }
        else if($pencarian=="doctor update" || $pencarian=="simposium doctor update" || $pencarian=="prof samsuridjal" || $pencarian=="doctor update symposium"){
            return view('courses/medical/doctor-update'); 
        }
        else if($pencarian=="mental health" || $pencarian=="depresi" || $pencarian=="dr chrisna" || $pencarian=="anxiety" 
        || $pencarian=="online class mental health"){
            return view('courses/medical/mental-health'); 
        }
        else if($pencarian=="anatomi" || $pencarian=="anatomy" || $pencarian=="dr alvin" || $pencarian=="online class anatomi"){
            return view('courses/medical/anatomy'); 
        }
        else if($pencarian=="penyakit dalam" || $pencarian=="geriatri" || $pencarian=="dr bahdar" || $pencarian=="online class penyakit dalam"){
            return view('courses/medical/penyakit-dalam'); 
        }

        else if($pencarian=="ekonomi" || $pencarian=="economy" || $pencarian=="business" || $pencarian=="investasi" || $pencarian=="investment" || $pencarian=="bisnis"){
            return view('courses/economy'); 
        }
        else if($pencarian=="business communication" || $pencarian=="komunikasi" || $pencarian=="umkm" || $pencarian=="bu mona" || $pencarian=="online class business communication"){
            return view('courses/economy/bizkom'); 
        }

        else if($pencarian=="art" || $pencarian=="seni" || $pencarian=="fashion" || $pencarian=="kerajinan" || $pencarian=="kesenian" || $pencarian=="handicraft" || $pencarian=="skill"){
            return view('courses/art'); 
        }
        else if($pencarian=="furoshiki" || $pencarian=="bungkus" || $pencarian=="retno arumsari" || $pencarian=="online class furoshiki"){
            return view('courses/art/furoshiki'); 
        }
        else {
            return view('errors/404'); 
        }
    }

    public function schedule(){
        //fetch data
        $event = DB::table('event')->get();

        date_default_timezone_set('Asia/Jakarta');
        $month = date('m');
        // $hour = date('H:i:s');

        //send data to view
        return view('schedule', array('event' => $event,'month' => $month));

    }

    public function doctorupdate()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/medical/doctor-update', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function mentalhealth()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/medical/mental-health', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function penyakitdalam()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/medical/penyakit-dalam', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function anatomy()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/medical/anatomy', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function geotechnik()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/technology/geotechnik', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function greenarchitecture()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/technology/green-architecture', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function technopreneur()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/technology/technopreneur', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function investasi()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/economy/investasi', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    public function manajemensdm()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/hrd/manajemen-sdm', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }

    public function furoshiki()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/art/furoshiki', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }

    public function businesscommunication()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();

        return view('courses/economy/bizkom', ['selectedcourse' => $selectedcourse],['course' => $course]);
    }
    
}
