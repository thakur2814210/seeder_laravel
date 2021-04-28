<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;


Route::get('/',[TemplateController::class, 'index']);

Route::get('/chartjs',[TemplateController::class, 'chartjs']);

Route::get('/blank',[TemplateController::class, 'blank']);
Route::get('/signup',[TemplateController::class, 'signup']);

