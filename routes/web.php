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
        'title' => 'Cheesecool University',
    ]);
})->name('index');

// Route for team page
Route::get('/team', function () {
    return view('team', [
        'title' => 'The Developer | Team',
    ]);
})->name('team');

// Routes for registration
Route::get('/register', [RegisterController::class, 'index'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware(
    'guest'
); // Correct method is store

// Routes for login
Route::get('/login', [LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Route for dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name(
        'dashboard'
    );
    Route::resource(
        '/dashboard/mahasiswa',
        CalonMahasiswaController::class
    )->except('show');
});

Route::resource('/dashboard/jurusan', JurusanController::class)
    ->except('show')
    ->middleware('admin');
