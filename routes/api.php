<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController; // ここに \Api を追加！

Route::apiResource('tasks', TaskController::class);