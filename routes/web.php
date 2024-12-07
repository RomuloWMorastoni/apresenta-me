<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas', [PessoasController::class, 'listarPessoas']);