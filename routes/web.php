<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProfilController;

// Admin
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\PhotographersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Photography_sessionsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ImagesController;

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'customerCount')->name('customer.count');
});
Route::controller(RegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/register/proses', 'registerSubmit')->name('register.submit');
});
Route::controller(LoginController::class)->group(function() {
    Route::get('/loginadmin', 'loginAdmin')->name('login.admin');
    Route::post('/loginadmin/proses', 'loginsubmit')->name('login.submit');
    Route::get('/logoutadmin', 'logout')->name('login.logout');
});
Route::middleware(['admin'])->group (function(){
    Route::controller(CustomersController::class)->group(function () {
        Route::get('/customers', 'customers')->name('customers');
        Route::get('/customers/create', 'create')->name('customers.create');
        Route::post('/customers/create/update', 'store')->name('customers.update');
        Route::get('/customers/edit/{id}', 'edit')->name('customers.editpage');
        Route::put('/customers/softdelete/{id}', 'softdelete')->name('customers.softdelete');
        Route::put('/customers/edit/update/{id}', 'update')->name('customers.edit');    
        Route::get('/customers/restore/{id}', 'restore')->name('customers.restore');
        Route::delete('/customers/delete/{id}', 'delete')->name('customers.delete');
        Route::get('/customers/history', 'history')->name('customers.history');
    });
    Route::controller(PhotographersController::class)->group(function () {
        Route::get('/photographers', 'photographers')->name('photographers');
        Route::get('/photographers/create', 'create')->name('photographers.create');
        Route::post('/photographers/create/update', 'store')->name('photographers.update');
        Route::get('/photographers/edit/{id}', 'edit')->name('photographers.editpage');
        Route::put('/photographers/softdelete/{id}', 'softdelete')->name('photographers.softdelete');
        Route::put('/photographers/edit/update/{id}', 'update')->name('photographers.edit');    
        Route::get('/photographers/restore/{id}', 'restore')->name('photographers.restore');
        Route::delete('/photographers/delete/{id}', 'delete')->name('photographers.delete');
        Route::get('/photographers/history', 'history')->name('photographers.history');
    });
    Route::controller(Photography_sessionsController::class)->group(function () {
        Route::get('/photography_sessions', 'photography_sessions')->name('photography_sessions');
        Route::get('/photography_sessions/create', 'create')->name('photography_sessions.create');
        Route::post('/photography_sessions/create/update', 'store')->name('photography_sessions.update');
        Route::get('/photography_sessions/edit/{id}', 'edit')->name('photography_sessions.editpage');
        Route::put('/photography_sessions/softdelete/{id}', 'softdelete')->name('photography_sessions.softdelete');
        Route::put('/photography_sessions/edit/update/{id}', 'update')->name('photography_sessions.edit');    
        Route::get('/photography_sessions/restore/{id}', 'restore')->name('photography_sessions.restore');
        Route::delete('/photography_sessions/delete/{id}', 'delete')->name('photography_sessions.delete');
        Route::get('/photography_sessions/history', 'history')->name('photography_sessions.history');
    });
    
    Route::controller(BookingsController::class)->group(function () {
        Route::get('/bookings', 'bookings')->name('bookings');
        Route::get('/bookings/create', 'create')->name('bookings.create');
        Route::post('/bookings/create/update', 'store')->name('bookings.update');
        Route::get('/bookings/edit/{id}', 'edit')->name('bookings.editpage');
        Route::put('/bookings/softdelete/{id}', 'softdelete')->name('bookings.softdelete');
        Route::put('/bookings/edit/update/{id}', 'update')->name('bookings.edit');    
        Route::get('/bookings/restore/{id}', 'restore')->name('bookings.restore');
        Route::delete('/bookings/delete/{id}', 'delete')->name('bookings.delete');
        Route::get('/bookings/history', 'history')->name('bookings.history');
    });
    Route::controller(ImagesController::class)->group(function () {
        Route::get('/images', 'images')->name('images');
        Route::get('/images/create', 'create')->name('images.create');
        Route::post('/images/create/update', 'store')->name('images.update');
        Route::get('/images/edit/{id}', 'edit')->name('images.editpage');
        Route::put('/images/softdelete/{id}', 'softdelete')->name('images.softdelete');
        Route::put('/images/edit/update/{id}', 'update')->name('images.edit');    
        Route::get('/images/restore/{id}', 'restore')->name('images.restore');
        Route::delete('/images/delete/{id}', 'delete')->name('images.delete');
        Route::get('/images/history', 'history')->name('images.history');
    });
});
// User

Route::get('/example', function () {
    return view('example');
});

//info pesanan dan formbooking proses// 
Route::controller(BookingController::class)->group(function () {
    Route::get('/infopesanan','infopesanan')->name('infopesanan.index');
    Route::get('/formbooking','form')->name('form.index');
    Route::post('/formbooking/kirim','formStore')->name('form.store');
    Route::get('/booking', 'bookingpage')->name('booking');
});

//profil//
Route::get('/profil', [ProfilController::class, 'show'])->name('profil');
Route::get('/editprofil', [ProfilController::class, 'edit'])->name('profil.edit');
Route::put('/editprofil', [ProfilController::class, 'update'])->name('profil.update');
Route::post('/editprofil', [ProfilController::class, 'show'])->name('profil.edit');
Route::get('/profil', [ProfilController::class, 'show'])->name('profil.edit');




Route::get('/', function () {
    return view('home');
})->name('home');
// login proses//
Route::get('/login', [SessionController::class, 'index'])->name('login');

Route::post('/login/proses', [SessionController::class, 'login'])->name('login.proses');

// Route::post('/loginpost', [SessionController::class, 'login'])->name('loginpost');
//register proses//
Route::get('registrasi', [SessionController::class, 'registrasi'])->name('registrasi');
Route::post('sesi/proses', [SessionController::class, 'proses'])->name('proses');
//logout proses//
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
// })->name('login');
