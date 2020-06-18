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
    return view('index');
});
Route::get('/index1', function () {
    return view('index1');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signupC', function () {
    return view('signupC');
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
