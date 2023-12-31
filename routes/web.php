<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('user.editPengguna');
    Route::post('userUpdate', [UserController::class, 'update'])->name('user.updatePengguna');

    Route::get('/koleksi', [CollectionsController::class, 'index'])->name('koleksi.daftarKoleksi');
    Route::get('/tambahKoleksi', [CollectionsController::class, 'create'])->name('koleksi.registrasi');
    Route::post('/koleksiStore', [CollectionsController::class, 'store'])->name('koleksi.storeKoleksi');
    Route::get('/koleksiView/{collection}', [CollectionsController::class, 'show'])->name('koleksi.infoKoleksi');
    Route::post('/koleksiUpdate', [CollectionsController::class,'update'])->name('koleksi.updateKoleksi');
    Route::get('koleksi/{collection}/edit', [CollectionsController::class, 'editKoleksi'])->name('koleksi.editKoleksi');


    Route::name('transaksi.')->group(function () {
        Route::get('/transaksi',[TransactionController::class, 'index'])->name('daftarTransaksi');
        Route::get('/transaksiTambah',[TransactionController::class, 'create'])->name('transaksiTambah');
        Route::post('/transaksiStore',[TransactionController::class, 'store']);
        Route::get('/transaksiView/{transaction}',[TransactionController::class, 'show']);
        Route::post('/detailTransactionUpdate', [DetailTransactionController::class, 'update'])->name('infoTransaksi');
        Route::post('/transaksiView/{transaction}', [TransactionController::class, 'show'])->name('');
        Route::get('/getAllTransactions', [
            TransactionController::class,
            'getAllTransactions'
        ]);
    });

    Route::name('detailTransaksi')->group(function () {
        Route::get('/detailTransaksiKembalikan/{detailTransactionId}', [DetailTransactionController::class, 'detailTransaksiKembalikan'])->name('detailTransaksiKembalikan');

        Route::get('/getAllDetailTransactions/{transactionId}', [DetailTransactionController::class, 'getAllDetailTransactions']);
    });



    
 
 
});

require __DIR__ . '/auth.php';