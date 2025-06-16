<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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


Route::get('/', [TasksController::class, 'home']);



Route::middleware('auth')->group(function () {
    Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');
    Route::patch('/tasks/{id}/update', [TasksController::class, 'update'])->name('tasks.update');
    Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/{id}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
    Route::delete('/tasks/{id}/destroy', [TasksController::class, 'destroy'])->name('tasks.destroy');
    Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
