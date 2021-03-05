<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\LembarJawabanController;
use App\Http\Controllers\CheckerPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LembarJawabanController::class, 'index']);
Route::get('/detail', [LembarJawabanController::class, 'show']);
Route::get('/checker', [CheckerPageController::class, 'index']);
Route::get('/check', [CheckerPageController::class, 'checker'])->name('CheckerPage.check');
Route::post('/upload', [CheckerPageController::class, 'store'])->name('CheckerPage.upload');
// Route::post('/hasil', [CheckerPageController::class, 'show']);

// Route::get('/check', function () {
//     $response = Http::get('http://127.0.0.1:4000/check');

//     dd($response->json());
// })->name('CheckerPage.check');


// Route::post('/upload', [CheckerPageController::class, 'store'])->name('CheckerPage.upload');


