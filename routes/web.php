<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('login');
});
Route::get('create_role_index', function () {
    return view('create_role_index');
});
Route::get('register',[App\Http\Controllers\registration\RegistrationController::class,'register'])->name('register');


Route::post('create_role',[App\Http\Controllers\registration\RegistrationController::class,'create_role'])->name('create_role');

Route::get('get_role_list/{param_type}/{id}/{status}',[App\Http\Controllers\registration\RegistrationController::class,'get_role_list'])->name('get_role_list');

Route::get('edit_role/{id}',[App\Http\Controllers\registration\RegistrationController::class,'edit_role'])->name('edit_role');

Route::get('delete_role/{id}',[App\Http\Controllers\registration\RegistrationController::class,'delete_role'])->name('delete_role');

Route::post('update_role',[App\Http\Controllers\registration\RegistrationController::class,'update_role'])->name('update_role');

Route::post('register_new_user',[App\Http\Controllers\registration\RegistrationController::class,'register_new_user'])->name('register_new_user');
