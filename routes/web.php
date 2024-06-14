<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalonMahasiswaController;
use App\Http\Controllers\JurusanController;


// Route for index page
Route::get('/', function () {
    return view('index', [
        'title' => 'Cheesecool University'
    ]);
})->name('index');

// Route for team page
Route::get('/team', function () {
    return view('team', [
        'title' => 'The Developer | Team'
    ]);
})->name('team');

// Routes for registration
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest'); // Correct method is store

// Routes for login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Route for dashboard
Route::middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/dashboard/mahasiswa', CalonMahasiswaController::class)->middleware('auth');
Route::resource('/dashboard/jurusan', JurusanController::class)->middleware('auth');
});


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
