<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $regis=[];
    public $hasPesanSertif=[];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();
        $event = DB::table('event')->get();
        $daftarevent = DB::table('daftarevent')->get();
        return view('home', array('selectedcourse' => $selectedcourse,'course' => $course ,'event' => $event, 'daftarevent' => $daftarevent));
    }

    public function profile(){
        //fetch data
        $users = DB::table('users')->get();

        //send data to view
        return view('dashboard/profile', ['users' => $users]);
    }

    public function selectedcourse(){
        $selectedcourse = DB::table('selectedcourse')->get();
        $course = DB::table('course')->get();
        return view('dashboard/coursediikuti', ['selectedcourse' => $selectedcourse],['course' => $course]);
     }

     public function buy(){
        $course = DB::table('course')->get();
        return view('dashboard/buy', ['course' => $course]);
     }

     public function daftar(){
        date_default_timezone_set('Asia/Jakarta');
        $event = DB::table('event')->get();
        $daftarevent = DB::table('daftarevent')->get();
        $waktuSekarang = date('yy-m-d H:i:s');
      
        return view('dashboard/daftarevent',array('event' => $event, 'daftarevent' => $daftarevent, 
       'waktuSekarang'=>$waktuSekarang));
     }

     public function myevent(){
        $event = DB::table('event')->get();
        $daftarevent = DB::table('daftarevent')->get();
        $pesansertif = DB::table('pesansertifikat')->get();
        return view('dashboard/myevent', array('event' => $event, 'daftarevent' => $daftarevent, 
        'pesansertif'=>$pesansertif));
     }

    public function store(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $waktuSekarang = date('yy-m-d H:i:s');
        // GINI CARANYA AND DI LARAVEL QUERYYYY
        $regis= DB::table('daftarevent')->select('emailPendaftar')->where([
            ['emailPendaftar', '=', $request->User()->email],
            ['namaEvent', '=', $request->input('pilihEvent')],
        ])->get();
        
        if($request->input('pilihEvent')!=""){
            if(count($regis)==0){     
                DB::table('daftarevent')->insert([  
                    'emailPendaftar' => $request->User()->email,
                    'namaPendaftar' => $request->User()->namaLengkap,
                    'namaEvent' => $request->input('pilihEvent'),
                    'created_at' => $waktuSekarang
                ]);
                return redirect()->back()->with('successDaftar','Data Added');   
            }
            else if(count($regis)>0){
                return redirect()->back()->with('failDaftar','Data Added');
            }
        }
        else{
            return redirect()->back()->with('failDaftar','Data Added'); 
        }
    }

    public function absen(Request $request){
        if($request->input('evenAbsen')!=""){
            DB::table('daftarevent')->where([
                ['emailPendaftar', '=', $request->User()->email],
                ['namaEvent', '=', $request->input('evenAbsen')],
            ])->update([
                'absensi' => 1
            ]);
            return redirect()->back()->with('successAbsen','Data Added');
        }
        else{
            return redirect()->back()->with('failAbsen','Data Added');
        }
    }

    public function pesansertifikat(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $waktuSekarang = date('yy-m-d H:i:s');

        $hasPesanSertif= DB::table('pesansertifikat')->select('emailPendaftar')->where([
            ['emailPendaftar', '=', $request->User()->email],
            ['namaEvent', '=', $request->input('eventSertif')],
        ])->get();
        
        if(count($hasPesanSertif)==0){ 
            if($request->input('MetodeBayar')!="pilih"){
            DB::table('pesansertifikat')->insert([
                'emailPendaftar' => $request-> User()->email,
                'namaPendaftar' => $request-> User()->namaLengkap,
                'namaEvent' => $request->input('eventSertif'),
                'metode' => $request->input('MetodeBayar'),
                'noHP' => $request->input('noHP'),
                'rekening' => $request->input('rekening'),
                'bank' => $request->input('namaBank'),
                'waktuTransfer' => $request->input('waktuTransfer'),
                'created_at' => $waktuSekarang
            ]);

            //upload file
            $file = $request->file('buktiBayar');
            $tujuan_upload = 'bukti_bayar';
            $file->move($tujuan_upload,$request->input('eventSertif')."_".$request->User()->email.".".$file->getClientOriginalExtension());
            // $file->getClientOriginalName()
            
            return redirect()->back()->with('successSertif','Data Added');
            }
            else{
                return redirect()->back()->with('failSertif2','Data Added');
            }
        }else{
            return redirect()->back()->with('failSertif','Data Added');
        }
    }
        
}
