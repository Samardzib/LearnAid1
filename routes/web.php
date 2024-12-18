<?php

use App\Models\Task;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
// added
use App\Http\Controllers\HomeController;

// Authentication Routes
Auth::routes();


Route::get('/', function () {
    // Fetch tasks for the authenticated user
    $tasks = Task::where('user_id', Auth::id())->get();
    
    // Return the welcome view with the tasks variable
    return view('welcome', compact('tasks'));
})->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

Route::resource('tasks', TaskController::class)->middleware('auth');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
