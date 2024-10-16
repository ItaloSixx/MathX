<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::controller(MainController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::post('/generate-exercices', 'gereneteExercices')->name('generateExercices');
    Route::get('/print-exercices', 'printExercices')->name('printExercices');
    Route::get('/export-exercices', 'export-exercices')->name('exportExercices');
});
