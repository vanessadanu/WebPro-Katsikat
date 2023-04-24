<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.login');
    });
    Route::get('/dash', function () {
        return view('admin.dash');
    })->name('admin.dash');
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');
    Route::get('/login', function(){
        return view('admin.login');
    })->name('admin.login');
});

Route::get('/login', function(){
    return view('admin.login');
})->name('admin.login');

// Route::get('/test', function () {
//     return view('admin.test');
// });

Auth::routes([
    'regiter' => true
]);

Route::post('auth/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/portfolios', \App\Http\Controllers\PortfolioController::class);

// Route::group(['prefix' => 'portfolios'], function () {
//     Route::get('/create', function () {
//         return view('portfolios.create');
//     });
// });
