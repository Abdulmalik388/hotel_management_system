<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('pages.welcome');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/room', [PagesController::class, 'room'])->name('pages.rooms');
Route::get('/booking', [PagesController::class, 'booking'])->name('pages.booking');
Route::get('/terms', [PagesController::class, 'terms'])->name('pages.terms');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('pages.privacy');




// Show login form
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');

// Handle login submission
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

// Admin dashboard (just a test page)
Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');


Route::prefix('admin')->group(function () {
    // Bookings management
    Route::get('/bookings', [AdminController::class, 'viewBookings'])->name('admin.bookings');
    Route::get('/bookings/confirm/{id}', [AdminController::class, 'confirmBooking'])->name('admin.bookings.confirm');
    Route::get('/bookings/cancel/{id}', [AdminController::class, 'cancelBooking'])->name('admin.bookings.cancel');
    Route::delete('/bookings/delete/{id}', [AdminController::class, 'deleteBooking'])->name('admin.bookings.delete');

    // Views for confirmed and cancelled bookings (no ID required)
    Route::get('/bookings/confirmed', [AdminController::class, 'confirmedBookings'])->name('admin.bookings.confirmed');
    Route::get('/bookings/cancelled', [AdminController::class, 'cancelledBookings'])->name('admin.bookings.cancelled');
});

Route::post('/book', [BookingController::class, 'store'])->name('booking.store');

Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::post('/contact', [ContactInfoController::class, 'store'])->name('contact.submit');
// routes/web.php
Route::get('/admin/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts');
Route::delete('/admin/contacts/{id}', [\App\Http\Controllers\Admin\ContactController::class, 'deleteContact'])->name('admin.contacts.delete');
Route::get('/admin/rooms/create', [AdminController::class, 'addRoomForm'])->name('admin.rooms.create');
Route::post('/admin/rooms/store', [AdminController::class, 'storeRoom'])->name('admin.rooms.store');

Route::get('/admin/rooms', [AdminController::class, 'rooms'])->name('admin.rooms');
Route::get('/admin/rooms/{id}/edit', [AdminController::class, 'editRoom'])->name('admin.rooms.edit');
Route::post('/admin/rooms/{id}/update', [AdminController::class, 'updateRoom'])->name('admin.rooms.update');
Route::delete('/admin/rooms/{id}', [AdminController::class, 'deleteRoom'])->name('admin.rooms.delete');
