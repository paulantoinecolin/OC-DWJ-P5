<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionsController;

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
Route::get('/public/pdf/{filename}', [ActionsController::class, 'download']);
Route::post('/public/membership', [ActionsController::class, 'upload'])->name('membership');

// Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/messages', [MessagesController::class, 'store'])->middleware(['guest']);


Route::get('dashboard', function () {
    return view('dashboard', [
        'messages' => \App\Models\Message::paginate(7)
        ]);
})->middleware(['auth'])->name('dashboard');
    
Route::get('/messages/{message}', [MessagesController::class, 'show'])->middleware(['auth']);
