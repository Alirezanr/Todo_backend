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
    Route::get('/todo/{id}', [ TodoController::class, 'getSingleTodo' ]);
    Route::post('/create', [ TodoController::class, 'create' ]);
    Route::delete('/delete/{id}', [ TodoController::class, 'destroy' ]);
    Route::put('/update/{id}', [ TodoController::class, 'update' ]);
    Route::post('/status-update/{id}', [ TodoController::class, 'updateStatus' ]);
    Route::post('/by-category/{category}', [ TodoController::class, 'getTodosByCategory' ]);

    Route::post('logout', [ AuthController::class, 'logout' ]);
});


