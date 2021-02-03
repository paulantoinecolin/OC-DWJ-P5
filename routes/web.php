<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionsController;

require __DIR__.'/auth.php';
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


// HOME
Route::redirect('/', '/fr');
Route::view('/fr', 'welcome')->middleware('locale')->name('french');
Route::view('/de', 'welcome')->middleware('locale')->name('german');

// MESSAGES
Route::post('/messages', [MessagesController::class, 'store']);
Route::get('/messages', function () {
    abort(404);
});

// FILES DOWNLOAD/UPLOAD
Route::get('/public/pdf/{filename}', [ActionsController::class, 'download']);
Route::post('/public/membership', [ActionsController::class, 'upload'])->name('membership');
Route::get('/public/membership', function () {
    abort(404);
});


// ADMIN DASHBOARD
Route::get('/dashboard', [MessagesController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/{message}', [MessagesController::class, 'show'])->middleware(['auth']);
