<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna');
    Route::get('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');
    Route::post('/userStore', [UserController::class, 'store'])->name('user.storePengguna');
    Route::get('/userView/{user}', [UserController::class, 'show'])->name('user.infoPengguna');

    Route::get('/koleksi', [CollectionsController::class, 'index'])->name('koleksi.daftarKoleksi');
    Route::get('/tambahKoleksi', [CollectionsController::class, 'create'])->name('koleksi.registrasi');
    Route::post('/koleksiStore', [CollectionsController::class, 'store'])->name('koleksi.storeKoleksi');
    Route::get('/koleksiView/{collection}', [CollectionsController::class, 'show'])->name('koleksi.infoKoleksi');
    //Fajar arrohman NS 6706223015
});

require __DIR__ . '/auth.php';