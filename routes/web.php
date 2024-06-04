<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('/index',[
        'title' => 'Cheesecool University '
    ]);
});

Route::get('/team', function () {
    return view('/team',[
        'title' => 'The Developer | Team '
    ]);
});

Route::get('/template-1', function () {
    return view('/template-1',[
        'title' => 'Template 1'
    ]);
});

Route::get('/login', function () {
    return view('login.index', [
        'title' => 'CheeseCool Login'
    ]);
})->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/template-2', function () {
    return view('/template-2',[
        'title' => 'Template 2'
    ]);
});
