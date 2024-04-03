<?php

use App\Http\Controllers\CrypthoController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transfer' , [TransferController::class , 'index'])->name('transfer.index');
Route::get('/transfer/store' , [TransferController::class , 'store'])->name('transfer.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
// });

Route::get('/cryptho',[CrypthoController::class,'index'])->name('cryptho.cryptho');

require __DIR__.'/auth.php';
