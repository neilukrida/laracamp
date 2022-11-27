<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
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
})->name('welcome');

Route::get('checkout/{camp:slug}}', function () {
    return view('checkout');
})->name('checkout');

Route::get('success_checkout', function () {
    return view('success_checkout');
})->name('success_checkout');

// Route::get('checkout/{camp:slug}', function () {
//     return view('checkout');
// })->name('checkout');

//Socialites route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::middleware(['auth'])->group(function () {
    //Checkout routes
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success'); //ingat ini jangan taruh dibawah karena akan terbaca seperti slug
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');

    //user dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
}); //middleware disini adalah apabila belum login, maka user tidak dapat mengakses halamna tertentu

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
