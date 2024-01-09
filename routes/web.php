<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

Auth::routes();

Route::get('test', function () {
    $store = Str::singular((Str::snake('NewsParer')));
    return $store;
});
