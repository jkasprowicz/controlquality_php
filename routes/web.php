<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserRoleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/config', [AdminController::class, 'index'])->name('admin.config');

Route::get('/admin/assign-role', [UserRoleController::class, 'showAssignRoleForm'])->name('assign-role-form');
Route::post('/admin/assign-role', [UserRoleController::class, 'assignRole'])->name('assign-role');


Route::middleware(['auth', 'role:admin'])->group(function () {
});

Route::middleware(['auth', 'role:tecnicos'])->group(function () {
    // Routes accessible only to users with the 'tecnicos' role
});

Route::middleware(['auth', 'role:analistas'])->group(function () {
    // Routes accessible only to users with the 'analistas' role
});
