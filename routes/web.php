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
    return view('frontend.home.index');
});
Route::get('/all-doners', function () {
    return view('frontend.doner.index');
});
Route::get('/all-blogs', function () {
    return view('frontend.blog.index');
});
Route::get('/blog-details', function () {
    return view('frontend.blog.single-blog');
});
Route::get('/all-projects', function () {
    return view('frontend.project.index');
});
Route::get('/registration', function () {
    return view('frontend.registration.index');
});
Route::get('/admin/login', function () {
    return view('frontend.auth.adminlogin');
});

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
Auth::routes();
Route::get('test', function () {
    $store = Str::singular((Str::snake('NewsParer')));
    return $store;
});
