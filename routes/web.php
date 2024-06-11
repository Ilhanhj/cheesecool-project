<?php

use App\Http\Controllers\CalonMahasiswaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('/index',[
        'title' => 'Cheesecool University '
    ]);
})->name('index');

Route::get('/team', function () {
    return view('/team',[
        'title' => 'The Developer | Team '
    ]);
})->name('team');


Route::get('/register', function () {
    return view('register.index', [
        'title' => 'Cheesecool | Register'
    ]);
})->middleware('guest')->name('register');

Route::get('/login', function () {
    return view('login.index', [
        'title' => 'Cheesecool | Login'
    ]);
})->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'authenticate']);


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/dashboard/mahasiswa',CalonMahasiswaController::class);




// Route::get('/template-1', function () {
//     return view('/template-1',[
//         'title' => 'Template 1'
//     ]);
// });


// Route::get('/template-2', function () {
//     return view('/template-2',[
//         'title' => 'Template 2'
//     ]);
// });
