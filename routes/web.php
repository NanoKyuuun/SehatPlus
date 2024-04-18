<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\KonsultasiMedisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileRecordController;
use App\Http\Controllers\ResepObatController;
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
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
Route::get('/', function () {
    return view('home');
})->name('home');
Route::post('/kirim-pesan', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//dashboard control users
Route::resource('/dashboard/users', DashboardUserController::class)->middleware(['auth', 'verified', 'role:admin'])->names('users');
//dashboard profile record
Route::middleware('auth')->group(function () {
    Route::get('/dashboard/profile-record', [ProfileRecordController::class, 'edit'])->name('profile_record.edit');
    Route::patch('/dashboard/profile-record', [ProfileRecordController::class, 'update'])->name('profile_record.update');
});
//dashboard konsultasi medis
Route::resource('/dashboard/konsultasi-medis', KonsultasiMedisController::class)->middleware(['auth', 'verified'])->names('konsultasi');
//dashboard resep obat
Route::get('/dashboard/resep-obat/create/{id}',[ResepObatController::class, 'create']);
Route::resource('/dashboard/resep-obat', ResepObatController::class)->middleware(['auth', 'verified'])->names('resep_obat');
Route::get('/dashboard/resep-obat/{id}/download/pdf', [ResepObatController::class, 'download_pdf'])->middleware(['auth', 'verified'])->name('download_pdf');
require __DIR__.'/auth.php';
