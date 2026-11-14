<?php

use App\Http\Controllers\TimetableController;
use App\Http\Controllers\TimetableEntryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/timetable', [TimetableController::class, 'index']);
Route::get('/entries', [TimetableEntryController::class, 'index']);
Route::get('/entries/create', [TimetableEntryController::class, 'create']);   // ← 追加
Route::post('/entries', [TimetableEntryController::class, 'store']);  