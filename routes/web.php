<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UsersController;
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

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);




Route::resource('users',UsersController::class)->middleware('auth');
Route::get('/get_users', [App\Http\Controllers\UsersController::class, 'get_users'])->name('get_users')->middleware('auth');

Route::post('user/verify',[UsersController::class,'verify_user'])->name('verify_user')->middleware('auth');
Route::post('user/active',[UsersController::class,'active_user'])->name('active_user')->middleware('auth');
Route::post('user/deactivate',[UsersController::class,'deactivate_user'])->name('deactivate_user')->middleware('auth');
Route::post('user/search',[UsersController::class,'search_user'])->name('search_user')->middleware('auth');



Route::resource('projects',ProjectController::class)->middleware('auth');
Route::get('/get_projects', [App\Http\Controllers\ProjectController::class, 'get_projects'])->name('get_projects')->middleware('auth');
