<?php

use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OurInfoController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RuleController;
use App\Models\Admin\AboutController;
use Illuminate\Support\Facades\Auth;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
Route::resource('about',OurInfoController::class);
Route::resource('rules',RuleController::class);
