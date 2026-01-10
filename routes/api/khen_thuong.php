<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhenThuongController;


Route::apiResource('khen-thuong', KhenThuongController::class);
