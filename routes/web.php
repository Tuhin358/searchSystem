<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Login
Route::get('/', [UserController::class, 'loginPage'])->name('login-page');
Route::post('/login', [UserController::class, 'logIn'])->name('login');
Route::get('/login', [UserController::class, 'logIn']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/data-create', [DashboardController::class, 'create'])->name('data.create');
    Route::post('/data-store', [DashboardController::class, 'store'])->name('data.store');
    Route::get('/data-edit/{id}', [DashboardController::class, 'edit'])->name('data.edit');
    Route::post('/data-update/{id}', [DashboardController::class, 'update'])->name('data.update');
    Route::get('/data-delete/{id}', [DashboardController::class, 'destroy'])->name('data.destroy');
});


// Route::get('/user', [UserController::class, 'index'])->name('users.index');

require __DIR__ . '/auth.php';
