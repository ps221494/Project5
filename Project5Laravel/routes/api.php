<?php

use App\Http\Controllers\APIexcersizes;
use App\Http\Controllers\APIusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GebruikersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\excersizes;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::apiResource('users', UserController::class);
Route::group(['middleware' => ['auth:sanctum']], function () {

  Route::apiResource('excersizes', excersizes::class)
  ->parameters(['excersizes' => 'excersizes'])->except(['index']);

  Route::apiResource('/users', APIusers::class)
  ->parameters(['users' => 'users']);

});

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::apiResource('excersizes', APIexcersizes::class)
  ->parameters(['excersizes' => 'excersizes'])->only(['index']);

Route::apiResource('/users', APIusers::class);



//protected routes


  Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});
