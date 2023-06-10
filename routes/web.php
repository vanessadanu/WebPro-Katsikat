<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CategoryController;
use App\Mail\ExampleMail;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebController::class, 'index']);

Route::group(['prefix' => 'home'], function () {
    Route::get('/', function () {
        return view('admin.login');
    });
    Route::get('/dash', function () {
        return view('admin.dash');
    });
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

Auth::routes([
    'regiter' => true
]);


Route::get('/', [\App\Http\Controllers\WebController::class, 'index']);

Route::post('auth/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/portfolios', \App\Http\Controllers\PortfolioController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);

Route::get('/dash', [\App\Http\Controllers\DashController::class, 'index'])->name('admin.dash');

// Auth::routes(['register' => true, 'confirm' => true]);

// Route::group(['middleware' => ['auth']], function () {
//   Route::get('/home', [HomeController::class, 'index'])->name('home');
//   Route::resource('/categories', CategoryController::class);
//   Route::resource('/portfolios', PortfolioController::class);
// });

// Route::get('/test/email', function() {
//     Mail::to("vanillipeace@gmail.com")->send(new ExampleMail());
//   });

// Route::post('login', [ApiController::class, 'login']);
