<?php

use Illuminate\Support\Facades\Route;

Route::view('/demo-form', 'demo');
Route::post('/demo-form', function () {
    return 'Form submitted';
});
