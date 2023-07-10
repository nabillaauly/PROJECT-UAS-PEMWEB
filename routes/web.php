<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HitungController;


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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/', function () {
    return view('homes');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/produk',function(){
    return view('produk');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/rekomendasi',function(){
    return view('rekomendasi');
});

Route::get('/dashboard',function(){
    return view('main');
});

Route::get('/databrand', function () {
    return view('databrand');
});


Route::get('/databrand', [BrandController::class, 'hitung'])->name('hitung');

Route::get('/spk',function(){
    return view('main');
});

Route::controller(BrandController::class)->group(function() {
    Route::get('brand/', 'index');
    Route::get('brand/add', 'add');
    Route::post('brand/store', 'store');
    Route::get('brand/edit/{id}', 'edit');
    Route::post('brand/update/{id}', 'update');
    Route::get('brand/delete/{id}', 'delete');
});

Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});

Route::controller(AlternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});

Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');

// Route::get('/login', function () {
   // return view('Login');
// });







