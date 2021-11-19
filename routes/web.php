<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PendaftaranController;


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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route tester admin templete
Route::get('tes-admin',function(){
    return view('layouts.admin');
});



//Admin Route
Route :: group(['prefix'=>'admin','middleware'=>['auth', 'role:admin']],
function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']) -> name ('home');
    });
//Member Route
Route :: group(['prefix'=>'user','middleware'=>['auth', 'role:member']],
function(){
    Route::get('/sample', [App\Http\Controllers\HomeController::class, 'index2']) -> name ('home');
});

    Route::resource('dokter', DokterController::class);
    Route::resource('pasien', PasienController::class);
    Route::resource('poliklinik', PoliklinikController::class);
    Route::resource('obat', ObatController::class);
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::get('galery',function(){
        return view('layouts.galery');
    });
    Route::get('profil',function(){
        return view('layouts.profil');
    });

