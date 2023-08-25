<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\classController;
use App\Http\Controllers\eskulController;

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
    return view('home',[
        'name'=>'belajar',
        'role' => 'admin',
        'buah' => ['pisang', 'jeruk', 'apel','semangka']
    ]);
});

Route::get('/student', [StudentController::class,'index']);
Route::get('/class', [classController::class,'index']);
Route::get('/eskul',[eskulController::class,'index']);