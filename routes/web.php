<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

Route::get('/', function (){
    return view('login');
});

Route::get('/show', [SubjectController::class, 'show']);
Route::get('/subjects', [SubjectController::class, 'subjects']);
Route::get('/feedback', [SubjectController::class, 'feedback']);