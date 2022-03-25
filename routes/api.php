<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/ping', function(){
    return ['pong' => true];
});

Route::post('/todo', [ApiController::class, 'createTodo']);
Route::get('/todo', [ApiController::class, 'readAllTodo']);
Route::get('/todo/{id}', [ApiController::class, 'readTodo']);
Route::put('/todo/{id}', [ApiController::class, 'updateTodo']);
Route::delete('/todo/{id}', [ApiController::class, 'deleteTodo']);
