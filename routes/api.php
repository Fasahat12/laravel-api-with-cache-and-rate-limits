<?php

use App\Http\Controllers\Api\CaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('cases', [CaseController::class, 'index'])->middleware('throttle:api');
