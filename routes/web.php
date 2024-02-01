<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\dashboardController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(MotorcycleController::class)->prefix('motorcycle')->group(function () {
        Route::get('', 'index')->name('motorcycle');
        Route::get('create', 'create')->name('motorcycle.create');
        Route::post('store', 'store')->name('motorcycle.store');
        Route::get('show/{id}', 'show')->name('motorcycle.show');
        Route::get('edit/{id}', 'edit')->name('motorcycle.edit');
        Route::put('edit/{id}', 'update')->name('motorcycle.update');
        Route::delete('destroy/{id}', 'destroy')->name('motorcycle.destroy');
    });

    Route::controller(usersController::class)->prefix('admin')->group(function () {
        Route::get('', 'index')->name('admin');
        Route::get('create', 'create')->name('admin.create');
        Route::post('store', 'store')->name('admin.store');
        Route::get('show/{id}', 'show')->name('admin.show');
        Route::get('edit/{id}', 'edit')->name('admin.edit');
        Route::put('edit/{id}', 'update')->name('admin.update');
        Route::delete('destroy/{id}', 'destroy')->name('admin.destroy');
    });

    Route::controller(TransactionController::class)->prefix('transaction')->group(function () {
        Route::get('', 'index')->name('transaction');
        Route::get('create', 'create')->name('transaction.create');
        Route::post('store', 'store')->name('transaction.store');
        Route::get('show/{id}', 'show')->name('transaction.show');
        Route::get('edit/{id}', 'edit')->name('transaction.edit');
        Route::put('edit/{id}', 'update')->name('transaction.update');
        Route::delete('destroy/{id}', 'destroy')->name('transaction.destroy');
    });

    Route::get('/dashboard', [dashboardController::class, 'showDashboard'])->name('dashboard');
    Route::post('/motorcycle', [MotorcycleController::class, 'store']);
    Route::post('/admin', [usersController::class, 'store']);
    Route::post('/motorcycle', [MotorcycleController::class, 'store']);

 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});