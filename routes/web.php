<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello World";
});

route::get('/about', function () {
    echo "About Us";
});