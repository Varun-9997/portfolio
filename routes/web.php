<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/build/{path}', function ($path) {
    return response()->file(public_path("build/$path"));
})->where('path', '.*');