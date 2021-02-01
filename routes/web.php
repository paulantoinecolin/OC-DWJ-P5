<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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


Route::redirect('/', '/fr');

Route::view('/fr', 'welcome')->middleware('locale')->name('french');
Route::view('/de', 'welcome')->middleware('locale')->name('german');

Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/messages', [MessagesController::class, 'index'])->middleware(['auth']);
// Route::post('/messages', [MessagesController::class, 'store'])->middleware(['guest']);
// Route::get('/messages/{message}', [MessagesController::class, 'show'])->middleware(['auth']);
