<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Exemplo de rota de API
Route::get('/user', function (Request $request) {
    return $request->user();
});