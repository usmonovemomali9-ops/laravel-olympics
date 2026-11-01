<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OlympicController;

// Главная — редирект на список олимпиад
Route::get('/', function () {
    return redirect()->route('olympics.index');
});

// Ресурсные маршруты для всех CRUD-действий
Route::resource('olympics', OlympicController::class);