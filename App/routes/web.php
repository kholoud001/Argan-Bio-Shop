<?php

use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/registerForm',[RegisterController::class , 'index'])->name('registerForm');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/email', function () {
    return view('Password.password');
});
Route::get('/', function () {
    return view('Auth.login');
})->name('login');


