<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        // 'name' => 'Lucas',
        'age' => 22,
        'hobbies' => ['programming', 'music', 'sports'],
    ]);
});

Route::get('/hello', function () {
    return 'Hello';
})->name('hello'); // nomeando a rota

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
})->where('name', '[A-Za-z]+'); //não aceita números e caracteres especiais

Route::fallback(function () {
    return 'Still got somewhere!';
});

