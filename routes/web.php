<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index'])->name('welcome');
Route::get('/artwork', [PublicController::class, 'artwork'])->name('artwork');
Route::get('/form-create', [PublicController::class, 'store'])->name('store-view');
Route::get('/{id}/edit', [PublicController::class, 'edit'])->name('edit-view');

