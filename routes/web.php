<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyBranchController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserAuthController;
use App\Models\CompanyBranch;
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


Route::prefix('essam/')->middleware('guest:admin,companyBranch')->group(function(){
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'])->name('showLogin');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);
});


// Route::prefix('essam/admin')->middleware('auth:admin,author')->group(function(){


Route::prefix('essam/admin')->group(function(){
    Route::view('' , 'essam.parent')->name('essamhome');

    // this is routes for company table
    Route::resource('/companies', CompanyController::class);
    Route::post('companies_update/{id}' , [CompanyController::class , 'update']);


    // this is routes for branches table
    Route::resource('/branches', CompanyBranchController::class);
    Route::get('/branches_restore/{id}' , [CompanyBranchController::class , 'restore']);
    Route::get('/branches_force/{id}' , [CompanyBranchController::class , 'force']);


    // this is the admin's routes table
    Route::resource('admins' , AdminController::class);
    Route::post('admins_update/{id}' , [AdminController::class , 'update']);

});
