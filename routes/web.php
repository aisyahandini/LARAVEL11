<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\castcontroller;


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

Route::get('/',[homeController::class,"home"]);
Route::get('/register',[authController::class,"register"]);
Route::get('/welcome',[authController::class,"welcome"]);
Route::get('/datatabel', function(){
    return view('datatabel');
});
Route::get('/table', function(){
    return view('table');
});
route::get('/data-table',function(){
    return view('data-table');
});

     Route::get('/cast', [castcontroller::class, 'index']);
     Route::get('/cast/create', [castcontroller::class, 'create']);
     Route::post('/cast', [castcontroller::class, 'store']);
     Route::get('/cast/{cast_id}', [castcontroller::class, 'show']);
     Route::get('/cast/{cast_id}/edit', [castontroller::class, 'edit']);
     Route::put('/cast/{cast_id}', [castcontroller::class, 'update']);
     Route::delete('/cast/{cast_id}', [castcontroller::class,'destroy']);