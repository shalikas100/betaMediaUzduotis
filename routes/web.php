<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

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

Route::get('/Card/index', [CardController::class, 'index'])->name('card.index');
Route::get('/Card/create', [CardController::class, 'create'])->name('card.create');

Route::get('/Card/searchAjax', [CardController::class, 'searchAjax'])->name('card.searchAjax');

Route::post('/Card/store', [CardController::class, 'store'])->name('card.store');


