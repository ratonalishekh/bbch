<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\frontendController;

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\adminDashboardController;
use App\Http\Controllers\backend\hotlineController;
use App\Http\Controllers\backend\logoController;


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

// frontend route 

Route::get('/',[frontendController::class,'index'])->name('frontend.home');



// Admin Routes 

Route::get('admin/login',[adminController::class,'adminLoginForm'])->name('admin.login.form');
Route::post('admin/login/check',[adminController::class,'adminLoginCheck'])->name('admin.login.check');

Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',[adminDashboardController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout', [adminController::class, 'adminlogout'])->name('admin.logout');
    //login


        // hotline & date time header top start
    Route::get('hotline/create', [hotlineController::class, 'create'])->name('hotline.create');
    Route::post('hotline/store', [hotlineController::class, 'store'])->name('hotline.store');
        // hotline & date time header top start
    Route::get('logo/create', [logoController::class, 'create'])->name('logo.create');
});