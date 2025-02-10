<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello World";
});

route::get('/about', function () {
    echo "About Us";
});

route::get('/main/{value}', [MainController::class, 'index']); 
route::get('/page2/{value}', [MainController::class, 'page2']); 
route::get('/page3/{value}', [MainController::class, 'page3']); 
