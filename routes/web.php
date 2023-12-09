<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

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

Route::view("product","/product");
Route::view('/payment', 'payment')->name('payment');

Route::view("location","/location");

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/register', function () {
    return view('admin.register');
});


Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');
