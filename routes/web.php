<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CrypthoController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DoubleAuthController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\DoubleAuthMiddleware;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    Route::get("/doubleAuth/show" , [DoubleAuthController::class , "index"])->name("doubleAuth");
    Route::put("/doubleAuth/validation" , [DoubleAuthController::class , "validate2fa"])->name("doubleAuth.valide");
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified','2fa'])->group(function () {
    Route::put("/doubleAuth/enable" , [DoubleAuthController::class , "authSwitcher"])->name('doubleAuth.switch');
    
    // card
    Route::get('/card/show',[CardController::class, "index"])->name("card.show");
    Route::post('/create/card', [CardController::class, 'store'])->name('store.card');
    Route::delete('/delete/card/{card}', [CardController::class, 'destroy'])->name('delete.card');
    
    // settings 
    Route::get('/settings',[ProfileController::class, "showsettings"])->name("settings.show");
    
    // transactions
    Route::get('/transactions',[TransactionController::class, "index"])->name("transaction.show");

    // Loan
    Route::get('/loan', [LoanController::class, 'index'])->name('loan.show');
    Route::post('/loan/store', [LoanController::class, 'store'])->name('loan.store');
    Route::post('/', [LoanController::class, 'take'])->name('loan');
    

    // profile 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::get('/cryptho',[CrypthoController::class,'index'])->name('cryptho.cryptho');

require __DIR__.'/auth.php';
