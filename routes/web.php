<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/koleksi', [BukuController::class, 'show']);

Route::get('/baca/{id}', [BukuController::class, 'baca'])->name('baca');

Route::get('/tentang', function () {
    return view('tentang');
});

route::get('/pinjam', [RiwayatController::class, 'create'])->name('/pinjam')->middleware('auth');
Route::post('/pinjam/verivy', [RiwayatController::class, 'store'])->name('pinjam.verify');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('admin/dashboard/user', UserController::class);
    Route::resource('admin/dashboard/buku', BukuController::class);
    Route::get('admin/dashboard/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
    Route::delete('/riwayat/{riwayat}', [RiwayatController::class, 'destroy'])->name('riwayat.destroy');

});



require __DIR__ . '/auth.php';
