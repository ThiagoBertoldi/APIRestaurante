<?php

use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MenuController;
use App\Models\NewClient;
use App\Http\Controllers\TableController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'ShowRequests'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/newRequest', [RequestController::class, 'newRequest'])->name('newRequest');

Route::post('/newRequest', [RequestController::class, 'validRequest']);

Route::get('/newClient', [ClientController::class, 'viewClient'])->name('viewClient');

Route::post('/newClient', [ClientController::class, 'createClient']);

Route::get('/showClients', function(){

    $clients = NewClient::all();

    return view('showClients', compact('clients'));
})->name('showClients');

Route::get('/tables', [TableController::class, 'tables'])->middleware(['showTables'])->name('tables');

Route::post('/tables', [TableController::class, 'newTable'])->name('newTable');

Route::get('/menu', [MenuController::class, 'menu'])->middleware(['showMenu'])->name('menu');

Route::get('/newMenu', [MenuController::class, 'newMenu'])->name('newMenu');

Route::post('/newMenu', [MenuController::class, 'createMenu']);