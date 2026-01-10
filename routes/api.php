<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Load các route API theo module
Route::prefix('v1')->group(function () {
    require __DIR__ . '/api/khen_thuong.php';
});
