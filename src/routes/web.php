<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ContactController;
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

//一般ユーザー向け
    Route::get('/contact',[ContactController::class, 'showForm'])->name('contact.form');
    Route::post('/contact/confirm',[ContactController::class,'confirm'])->name('contact.confirm');
    Route::post('/contact/submit')->name('contact.submit');
    Route::get('/contact/thankyou',function(){
        return view('contact.thankyou');
    })->name('contact.thankyou');

    //管理者向け
    Route::middleware(['auth','admin'])->prefix('admin')->name('admin')->group(function(){
        Route::get('/',function(){
            return redirect()->route('admin.dashboard');
        });

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    });
