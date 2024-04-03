<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CrypthoController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DoubleAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransferController;
use App\Http\Middleware\DoubleAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transfer' , [TransferController::class , 'index'])->name('transfer.index');
Route::get('/transfer/store' , [TransferController::class , 'store'])->name('transfer.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','2fa'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::put("/doubleAuth/enable" , [DoubleAuthController::class , "authSwitcher"])->name('doubleAuth.switch');
    Route::get("/doubleAuth/show" , [DoubleAuthController::class , "index"])->name("doubleAuth");
    Route::put("/doubleAuth/validation" , [DoubleAuthController::class , "validate2fa"])->name("doubleAuth.valide");
    // card
    Route::get('/card/show',[CardController::class, "index"])->name("card.show");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::get('/cryptho',[CrypthoController::class,'index'])->name('cryptho.cryptho');

require __DIR__.'/auth.php';
