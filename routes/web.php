<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia ('Index/Index');
});

Route::get('/convert', function () {
    return inertia ('Convert/Convert');
});
