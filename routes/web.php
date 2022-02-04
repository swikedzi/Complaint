<?php

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
    return view('setting.branch.add');
});

Route::prefix('/users-registration')->group( function (){

});

Route::prefix('/cbe-branches')->group( function (){
    Route::get('/', [\App\Http\Controllers\CbeBranchesController::class, 'index']);
    Route::get('/add', [\App\Http\Controllers\CbeBranchesController::class, 'add']);
    //Route::match(['get', 'post'], '/add', [\App\Http\Controllers\CbeBranchesController::class, 'add']);
});

Route::prefix('/departiments')->group( function (){
    Route::get('/', [\App\Http\Controllers\DepartimentController::class, 'index']);
    Route::match(['get', 'post'], '/add', [\App\Http\Controllers\DepartimentController::class, 'add']);
});

Route::prefix('/complaints-categories')->group( function (){
    Route::get('/', [\App\Http\Controllers\ComplainCategoryController::class, 'index']);
    Route::match(['get', 'post'], '/add', [\App\Http\Controllers\ComplainCategoryController::class, 'add']);
});

Route::prefix('/staff-registration')->group( function (){
    Route::get('/', [\App\Http\Controllers\StaffRegistrationController::class, 'index']);
    Route::match(['get', 'post'], '/add', [\App\Http\Controllers\StaffRegistrationController::class, 'add']);
});

Route::prefix('/complaints')->group( function (){
    Route::get('/', [\App\Http\Controllers\ComplaintController::class, 'index']);
    Route::match(['get', 'post'], '/add', [\App\Http\Controllers\ComplaintController::class, 'add']);
});

