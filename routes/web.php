<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
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



/*Users Routes */
Route::group(['middleware'=> 'auth'], function(){
    Route::get('/users/create' , [UserController::class, 'create'])->name('users.create');
    Route::post('/users' , [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class,'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class,'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.destroy');

    Route::resource('permission', PermissionController::class);
    Route::resource('roles', RolesController::class);
});
