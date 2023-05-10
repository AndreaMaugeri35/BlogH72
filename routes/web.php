<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ChiSiamoController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [ChiSiamoController::class, 'chisiamo'])->name('chi-siamo');
Route::get('/articoli/dettagli/{id}', [ChiSiamoController::class,'dettagli'])-> name('dettagli');

Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
Route::get('/game/index', [GameController::class, 'index'])->name('index');

Route::get('/contattaci', [PublicController::class,'contattaci'])->name('contattaci');
Route::post('/contattaci/submit', [PublicController::class,'contattaci_submit'])->name('contattaci_submit');
