<?php

use App\Http\Controllers\ServerController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/servers',[\App\Http\Controllers\ServerController::class, 'showServers'])->name('showservers');
Route::delete('/deleteserver/{id}', [\App\Http\Controllers\ServerController::class, 'deleteServer'])->name('deleteserver');
Route::get('/addserver',  [ServerController::class, 'addServer'])->name('addserver');
Route::post('/updateserver', [ServerController::class, 'updateServer'])->name('updateserver');
Route::get('/editserver/{server}', [ServerController::class, 'editServer'])->name('editserver');
Route::put('/editserverupdate/{server}', [ServerController::class, 'editServerUpdate'])->name('editupdateserver');

