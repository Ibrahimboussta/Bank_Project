<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CrypthoController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DoubleAuthController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\DoubleAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facture',[FactureController::class , "index"])->name("facture");
Route::post('/facture', [FactureController::class, "store"])->name("facture.store");
Route::post("/facture/edit", [FactureController::class,"edit" ])->name("facture.edit");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','2fa'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::put("/doubleAuth/enable" , [DoubleAuthController::class , "authSwitcher"])->name('doubleAuth.switch');
    Route::get("/doubleAuth/show" , [DoubleAuthController::class , "index"])->name("doubleAuth");
    Route::put("/doubleAuth/validation" , [DoubleAuthController::class , "validate2fa"])->name("doubleAuth.valide");
    
    // card
    Route::get('/card/show',[CardController::class, "index"])->name("card.show");
    Route::post('/create/card', [CardController::class, 'store'])->name('store.card');
    Route::delete('/delete/card/{card}', [CardController::class, 'destroy'])->name('delete.card');
    
    // settings 
    Route::get('/settings',[ProfileController::class, "showsettings"])->name("settings.show");

    // crypto 
    
Route::get('/cryptho',[CrypthoController::class,'index'])->name('cryptho.cryptho');
    


    // profile 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


require __DIR__.'/auth.php';
