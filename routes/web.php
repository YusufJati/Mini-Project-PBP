<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnggotaController;

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

Route::get('/detail', [DetailController::class, 'index']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('anggota')->name('anggota.')->group(function(){

    Route::middleware(['guest'])->group(function(){
        Route::view('/login','dashboard.anggota.login')->name('login');
        Route::view('/register','dashboard.anggota.register')->name('register');
        Route::post('/create',[AnggotaController::class,'create'])->name('create');
    });

    Route::middleware(['auth'])->group(function(){

    });

});