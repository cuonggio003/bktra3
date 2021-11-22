<?php

use App\Http\Controllers\DealerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dealers')->group(function () {
    Route::get('/home', [DealerController::class, 'showDealer'])->name('show.dealer');
    Route::get('/create', [DealerController::class, 'createDealer'])->name('create.dealer');
    Route::post('/create', [DealerController::class, 'store'])->name('store.dealer');
    Route::get('/{id}update', [DealerController::class, 'updateDealer'])->name('update.dealer');
    Route::post('/{id}update', [DealerController::class, 'editDealer'])->name('edit.dealer');
    Route::get('/{id}/delete', [DealerController::class, 'deleteDealer'])->name('delete.dealer');
    Route::get('/search', [DealerController::class, 'search'])->name('show.dealer');
});

