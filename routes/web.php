<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/listerEmployes', [ EmployeController::class, 'listEmployes']);
Route::get('/ajoutEmploye', [EmployeController::class, 'addEmploye']);

Route::post('/validerEmploye', [ EmployeController::class, 'validerEmploye']);
