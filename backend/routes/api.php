<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
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

Route::group(['middleware' => 'api'], function() {
    Route::get('tasks', [TaskController::class, 'index']);
    Route::post('task/edit', [TaskController::class, 'edit']);
    Route::post('task/update', [TaskController::class, 'update']);
    Route::post('task/delete', [TaskController::class, 'delete']);
    Route::post('task/create', [TaskController::class, 'create']);
});
