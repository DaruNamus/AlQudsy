<?php

use App\Http\Controllers\LandingPage;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPage::class, 'index'])
    ->name('home');