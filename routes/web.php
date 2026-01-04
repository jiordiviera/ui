<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/docs/{page?}', function ($page = 'installation') {
    return view('docs.show', ['page' => $page]);
})->name('docs');
