<?php

use App\Http\Controllers\CrypthoController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facture',[FactureController::class , "index"])->name("facture");
Route::get("/edit", [EditController::class,"index" ])->name("edit.index");

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
