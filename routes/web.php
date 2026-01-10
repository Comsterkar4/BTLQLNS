<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\KhenThuongController;

Route::get('/', function () {
    return view('welcome');
});

// 👉 FRONTEND: Danh sách khen thưởng
Route::prefix('admin')->group(function () {
    Route::get('/khen-thuong', [KhenThuongController::class, 'index']);
});
