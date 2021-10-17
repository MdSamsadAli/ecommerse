<?php

use App\Http\Controllers\controller\userController;
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

Route::get('layout', function(){
    return view('layouts.admin.layout');
});

Route::get('dashboard', function(){
    return view('admin.dashboard.index');
});

Route::get('dashboard/computers_laptop', function(){
    return view('admin.dashboard.computers_laptop');
});

// Route::get('user', function(){
//     return view('admin.user.index');
// });

// Route::get('user/create', function(){
//     return view('admin.user.create');
// });

Route::get('/user', [userController::class, 'index'])->name('user.index');
Route::get('/user/create', [userController::class, 'create'])->name('user.create');
Route::post('/user/store', [userController::class, 'store'])->name('user.store');

Route::get('/user/{id}/edit', [userController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}/update', [userController::class, 'update'])->name('user.update');
Route::get('/user/{id}/delete', [userController::class, 'delete'])->name('user.delete');
