<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('auth')->group(function ()
{
    Route::post('login', [ AuthController::class, 'login' ]);
    Route::post('signup', [ AuthController::class, 'signup' ]);
});

Route::group([ 'middleware' => 'auth:api' ], function ()
{
    Route::get('access_check', [ AuthController::class, 'index' ]);





    Route::post('logout', [ AuthController::class, 'logout' ]);


});


