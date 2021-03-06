<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('indexx');
});
Route::get('/jobd', function () {
    return view('job_details');
});
Route::get('/jobl', function () {
    return view('job_listing');
});
Route::get('MaFichePP', function () {
    return view('Professionnel.MaFichePP');
});

Route::get('mes_offres', function () {
    return view('Professionnel.mes_offres');
});
Route::get('mesOffres', function () {
    return view('Professionnel.mesOffres');
});
Route::get('mes_candidatures', function () {
    return view('Candidat.mes_candidatures');
});
Route::get('/admins', function () {
    return view('Admin.admin');
});
Route::get('/dashboardC', function () {
    return view('Candidat.dashboardC');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contactt');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signupC', function () {
    return view('signupC');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/cc', function () {
    return view('cc');
});
Route::get('/e', function () {
    return view('elements');
});
Route::get('/MaFicheP', function () {
    return view('Candidat.MaFicheP');
});
Route::get('/MaFicheE', function () {
    return view('Professionnel.MaFicheE');
});

Route::get('/monOffre', function () {
    return view('Professionnel.monOffre');
});



//Route::get('/ficheP','FichePController@newFicheP');
//Route::get('/listficheP','FichePController@listficheP')
//Route::get('/contact/{name}',function($name)
//{
//	echo "je suis ".$name;
//});
Auth::routes();
 Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    //Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    //Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    //Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    //Route::post('/register/writer', 'Auth\RegisterController@createWriter');

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin');
    //Route::view('/writer', 'writer');
