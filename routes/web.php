<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/docs/{page?}', function ($page = 'introduction') {
    return view('docs.show', ['page' => $page]);
})->name('docs.show');

Route::get('/docs/components/{component?}', function ($component = null) {
    return view('docs.show', ['page' => $component]);
})->name('components.show');
