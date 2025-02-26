<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chi-sono', [PageController::class, 'about']);
Route::get('/dettagli/{service}',  [PageController::class, 'service']);


Route::get('/contattami',  [PageController::class, 'contact']);
Route::post('/invia-contatto',  [PageController::class, 'send']);
