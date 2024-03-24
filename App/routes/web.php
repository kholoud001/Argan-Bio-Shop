<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\GoogleController;
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

////////////////////////// Registration
Route::get('/registerForm',[RegisterController::class , 'index'])->name('registerForm');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/email', function () {
    return view('Password.password');
});
Route::get('/', function () {
    return view('Auth.login');
})->name('login');

////////////////////////////////// Google login
///
//google login
Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleController::class, 'callbackGoogle']);

/*
|--------------------------------------------------------------------------
|                                Forgot password
|                                 enter & send email
|--------------------------------------------------------------------------
*/

// Route for showing the form to enter the email
Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])
    ->name('password.request');
// Route for handling form submission
Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store'])
    ->name('password.email');
//success page
Route::get('/check-your-inbox', [ForgotPasswordLinkController::class, 'show'])
    ->name('success');
/*
|--------------------------------------------------------------------------
|                                Forgot password
|                                 reset password
|--------------------------------------------------------------------------
*/
// Display the password reset form
Route::get('/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])
    ->name('password.reset');
// Process the password reset form submission
Route::post('/reset-password/{token}', [ForgotPasswordController::class, 'reset'])
    ->name('password.update');

