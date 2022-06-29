<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\excersizes;
use App\Http\Controllers\UserController;
/*use App\Http\Controllers\excersizes;

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

Route::get('/users',[UserController::class,'users']);
    Route::resource('users', UserController::class);


Route::get('/excersizes',[excerzies::class,'oefeningen'])->middleware(['auth']);
Route::resource('excersizes', excersizes::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
