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
    return view('welcome');
});


Route::get('/RedCandy', [\App\Http\Controllers\RedCandyController::class, 'index']); //main website index

Route::get('/redcandy/{redCandy}', [\App\Http\Controllers\RedCandyController::class, 'show']); //shows specific posts

Route::get('/redcandy/create/post', [\App\Http\Controllers\RedCandyController::class, 'create']); //shows create post form

Route::post('/redcandy/create/post', [\App\Http\Controllers\RedCandyController::class, 'store']); //saves the created post to the database

Route::get('/redcandy/{redCandy}/edit', [\App\Http\Controllers\RedCandyController::class, 'edit']); //shows edit post form

Route::put('/redcandy/{redCandy}/edit', [\App\Http\Controllers\RedCandyController::class, 'update']); //commits edited post to the database

Route::delete('/redcandy/{redCandy}', [\App\Http\Controllers\RedCandyController::class, 'destroy']); //deletes post from the database
