<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartementController;
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

// Route::get('/', function () {
//     return view('layouts.master');
// });
// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/',[HomeController::class,'dashboard']);
//departement///
Route::get('departmnets/index',[DepartementController::class,'index'])->name('departmnetsIndex');
Route::get('departmnets/create',[DepartementController::class,'create'])->name('departementCreate');
Route::post('departmnets/store',[DepartementController::class,'store'])->name('departementStore');
Route::get('departmnets/edit/{id}',[DepartementController::class,'edit'])->name('departementEdit');
Route::post('departmnets/update/{id}',[DepartementController::class,'update'])->name('departementUpdate');
Route::post('departmnets/delete/{id}',[DepartementController::class,'delete'])->name('departementDelete');




Route::get('users/index',[UserController::class,'index'])->name('usersIndex');




