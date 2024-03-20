<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
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
Route::get('/hello', function () {
   return view('hello', ['title' => 'hello world!']);
});

///////////////////////////////////////////////////////////////////////////////

Route::get('/events', [EventController::class, 'index']);
Route::get('/event/create', [EventController::class, 'create']);
Route::get('/event/edit/{id}', [EventController::class, 'edit']);

Route::post('/event/update/{id}', [EventController::class, 'update']);
Route::post('/event/destroy/{id}', [EventController::class, 'destroy']);
Route::post('/event', [EventController::class, 'store']);

///////////////////////////////////////////////////////////////////////////////

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
