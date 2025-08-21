<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('messages')->group(function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::post('/', [MessagesController::class, 'store']);
    Route::get('/{id}', [MessagesController::class, 'show']);
    Route::put('/{id}', [MessagesController::class, 'update']);
    Route::delete('/{id}', [MessagesController::class, 'destroy']);
});
