<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserAuthController;
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


Route::prefix('essam/')->middleware('guest:admin')->group(function(){
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'])->name('showLogin');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);
});


Route::prefix('essam/admin')->middleware('auth:admin,author')->group(function(){
    Route::view('' , 'essam.parent')->name('essamhome');

// this is routes for company table
    Route::resource('/companies', CompanyController::class);
    Route::get('/companies_restore/{id}' , [CompanyController::class , 'restore']);
    Route::get('/companies_force/{id}' , [CompanyController::class , 'force']);


    // this is the admin's routes table
    Route::resource('admins' , AdminController::class);
    Route::post('admins_update/{id}' , [AdminController::class , 'update']);

});
