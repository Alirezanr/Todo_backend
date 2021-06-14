<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function ()
{
    Route::post('login', [ AuthController::class, 'login' ]);
    Route::post('signup', [ AuthController::class, 'signup' ]);
});

Route::group([ 'middleware' => 'auth:api' ], function ()
{
    Route::get('user-info', [ AuthController::class, 'index' ]);


    Route::get('/todos', [ TodoController::class, 'show' ]);
    Route::post('/create-todo', [ TodoController::class, 'create' ]);





    Route::post('logout', [ AuthController::class, 'logout' ]);


});


