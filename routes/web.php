<?php

use App\Http\Controllers\TaskController;
use \App\Http\Requests\TaskRequest;
use \App\Models\Task;

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

Route::get('/', function() {
  return to_route('tasks.index');
});

Route::resource('tasks', TaskController::class);

Route::put('tasks/{task}/toggle=complete', [TaskController::class, 'toggleComplete'])
  ->name('tasks.toggle-complete');

Route::fallback(function () {
    return 'Still got somewhere!';
});
