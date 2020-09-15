<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/foo', function () {
//   Artisan::call('storage:link');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/lecturers', function () {
    return view('lecturers');
});
Route::get('/technology', function () {
    return view('../courses/technology');
});
Route::get('/medical', function () {
    return view('../courses/medical');
});
Route::get('/economy', function () {
    return view('../courses/economy');
});
// Route::get('/HRD', function () {
//     return view('../courses/hrd');
// });
Route::get('/art', function () {
    return view('../courses/art');
});

Route::get('/doctor-update','WebinarController@doctorupdate');  
Route::get('/mental-health','WebinarController@mentalhealth');  
Route::get('/penyakit-dalam','WebinarController@penyakitdalam');  
Route::get('/anatomy','WebinarController@anatomy');  
Route::get('/geotechnik','WebinarController@geotechnik'); 
Route::get('/green-architecture','WebinarController@greenarchitecture');
Route::get('/technopreneur','WebinarController@technopreneur'); 
Route::get('/investasi','WebinarController@investasi'); 
Route::get('/furoshiki','WebinarController@furoshiki'); 
Route::get('/businesscommunication','WebinarController@businesscommunication'); 
Route::get('/manajemen-sdm','WebinarController@manajemensdm'); 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','HomeController@profile');   
Route::get('/coursediikuti','HomeController@selectedcourse');  
Route::get('/buy','HomeController@buy');  
Route::get('/daftarevent','HomeController@daftar');  
Route::get('/storedaftar','HomeController@store');
Route::get('/absen','HomeController@absen');
Route::get('/myevent','HomeController@myevent');
Route::post('/pesansertifikat','HomeController@pesansertifikat');
Route::post('/queryKelas','WebinarController@queryKelas');

Route::get('/schedule','WebinarController@schedule');

Auth::routes(['verify' => true]);