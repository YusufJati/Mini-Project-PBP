<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Anggota\AnggotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/', [DashboardController::class, 'index']);

Route::get('/detail/{buku}', [DetailController::class, 'index']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('anggota')->name('anggota.')->group(function(){

    Route::middleware(['guest:anggota'])->group(function(){
        Route::view('/login','dashboard.anggota.login')->name('login');
        Route::view('/register','dashboard.anggota.register')->name('register');
        Route::post('/create',[AnggotaController::class,'create'])->name('create');
        Route::post('/check',[AnggotaController::class,'check'])->name('check');
 
    });

    Route::middleware(['auth:anggota'])->group(function(){
        Route::view('/mainhome','dashboard.anggota.mainhome')->name('mainhome');
        Route::get('/logout', [LoginController::class,'logout'])->name('logout');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/riwayat', [App\Http\Controllers\RiwayatController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
