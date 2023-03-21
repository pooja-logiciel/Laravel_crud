<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\updates;

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
    return view('template');
});
Route::get('update', [updates::class,'submit']);
Route::get('display', [updates::class,'display']);
Route::get('delete/{id}',[updates::class,'delete']);
Route::get('edit/{id}',[updates::class,'edit']);
Route::get('update_data',[updates::class,'update_data']);