<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AdminController;

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

Route::view('registration', "rej");
Route::post('registration', [PlayerController::class, 'addPlayer']);
Route::view('thankyou', "thank");
Route::get('playerlist', [PlayerController::class, 'showPlayer']);

Route::get('admin', [AdminController::class, "adminLogin"]);
Route::view('adminpanel',"admin_control");
Route::post('admin_page', [AdminController::class, 'managePlayer']);
Route::post('admin_control', [PlayerController::class, 'managePlayer']);

Route::get('delete/{id}', [PlayerController::class, "delete"]);
Route::get('edit/{id}', [PlayerController::class, "showData"]);
Route::post('edit', [PlayerController::class, "update"]);
