<?php

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
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

Route::get('/viewarticles/{id}', [WebController::class, 'articles'])->name('viewarticles');

// Route::get('/viewarticles/{itemId}', function ($itemId) {
//   $articles = Article::find($itemId);

//   if ($articles) {
//       return view('articles', compact('articles'));
//   } else {
//       // Handle case when the selected item is not found
//       // Redirect or display an error message
//   }
// })->name('viewarticles');

// Route::group(['prefix' => 'home'], function () {
//     Route::get('/', function () {
//         return view('admin.login');
//     });
//     Route::get('/dash', function () {
//         return view('admin.dash');
//     });
//     Route::get('/profile', function () {
//         return view('admin.profile');
//     })->name('admin.profile');
//     Route::get('/login', function(){
//         return view('admin.login');
//     })->name('admin.login');
// });

// Route::get('/login', function(){
//     return view('admin.login');
// })->name('admin.login');

// Auth::routes([
//     'regiter' => true
// ]);


// Route::get('/', [\App\Http\Controllers\WebController::class, 'index']);

// Route::post('auth/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/portfolios', \App\Http\Controllers\PortfolioController::class);
// Route::resource('/services', \App\Http\Controllers\ServiceController::class);

// Route::get('/dash', [\App\Http\Controllers\DashController::class, 'index'])->name('admin.dash');

Auth::routes(['register' => true, 'confirm' => true]);

Route::post('login', [AuthController::class, 'login']);

// Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {
Route::group(['middleware' => ['auth']], function () {
  Route::post('logout',[AuthController::class, 'logout'])->name('logout');
  Route::get('/home', [HomeController::class, 'index'])->name('home');
  Route::resource('/dash', DashController::class);
  Route::resource('/portfolios', PortfolioController::class);
  Route::resource('/services', ServiceController::class);
  Route::resource('/articles', ArticleController::class);
  Route::resource('/profile', ProfileController::class);
});

Route::get('/test/email', function() {
    Mail::to("vanillipeace@gmail.com")->send(new ExampleMail());
  });


