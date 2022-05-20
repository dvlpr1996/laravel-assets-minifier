<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fileController;

Route::get('/', [fileController::class, "index"])->name("index");
Route::post('/upload', [fileController::class, "upload"])->name("upload");
Route::get('/download', [fileController::class, "download"])->name("download");
Route::get('/delete', [fileController::class, "delete"])->name("delete");
