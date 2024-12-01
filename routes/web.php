
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

// Bosh sahifa route'i
Route::get('/', function () {
    return view('layouts.app');
});

// notifications.index yo'nalishini aniqlash
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');

// notifications.create yo'nalishini aniqlash
Route::get('/notifications/create', [NotificationController::class, 'create'])->name('notifications.create');

// notifications.store yo'nalishini aniqlash
Route::post('/notifications', [NotificationController::class, 'store'])->name('notifications.store');

// notifications.edit yo'nalishini aniqlash
Route::get('/notifications/edit/{id}', [NotificationController::class, 'edit'])->name('notifications.edit');

// notifications.update yo'nalishini aniqlash
Route::put('/notifications/{id}', [NotificationController::class, 'update'])->name('notifications.update');

// notifications.destroy yo'nalishini aniqlash
Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');

// notifications.show yo'nalishini aniqlash
Route::get('/notifications/{id}', [NotificationController::class, 'show'])->name('notifications.show');
