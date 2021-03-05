<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckerPageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::get('/check', [CheckerPageController::class, 'checker'])->name('CheckerPage.check');

// Route::get('/check', [CheckerPageController::class, 'checker'])->name('CheckerPage.check');
// Route::post('/upload', [CheckerPageController::class, 'store'])->name('CheckerPage.upload');

// Route::redirect('/checker', 'http://127.0.0.1:4000/upload', 301)->name('CheckerPage.upload');




