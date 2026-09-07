<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, API!']);
});

Route::apiResource('tasks', TaskController::class);
