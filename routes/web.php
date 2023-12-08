<?php

use App\Http\Controllers\DaftarBarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
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
});

// Route::get('admin', function () {
//     return '<h1>Helo admin</h1>';
// })->middleware(['auth', 'verified','role:admin']);

// Route::get('penulis', function () {
//     return '<h1>Helo penulis</h1>';
// })->middleware(['auth', 'verified','role:penulis']);

// Route::get('kasir', function () {
//     return view('daftar_barang.index');
// })->middleware(['auth', 'verified','role:kasir||penulis']);

// Route::get('users', function () {
//     return view('tulisan');
// })->middleware(['auth', 'verified','role:users||kasir||penulis']);



// Route::get('tulisan', function () {
//     return view('tulisan');
// })->middleware(['auth', 'verified', 'role_or_permission:lihat-tulisan||admin||penulis']);


Route::resource('daftar_barang', DaftarBarangController::class)->middleware(['auth', 'verified', 'role:kasir||penulis||users']);

Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware(['auth', 'verified', 'role:kasir||penulis']);;

Route::get('/transaksi/create', [TransaksiController::class, 'create'])->middleware(['auth', 'verified', 'role:kasir||penulis']);;
Route::post('/transaksi', [TransaksiController::class, 'store'])->middleware(['auth', 'verified', 'role:kasir||penulis']);;

Route::get('transaksi/{id}/edit', [TransaksiController::class, 'edit'])->middleware(['auth', 'verified', 'role:kasir||penulis']);;
Route::put('transaksi/{id}', [TransaksiController::class, 'update'])->middleware(['auth', 'verified', 'role:kasir||penulis']);;

Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->middleware(['auth', 'verified', 'role:kasir||penulis']);;


require __DIR__.'/auth.php';
