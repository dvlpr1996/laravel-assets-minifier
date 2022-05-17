<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fileController;

Route::get('/', [fileController::class, "index"])->name("index");
Route::post('/upload', [fileController::class, "upload"])->name("upload");
