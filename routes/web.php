<?php

use Illuminate\Support\Facades\Route;
/*
Illuminate\Support\Facades\Facade\Route.phpを利用する、ということを宣言しています。
Illuminate というのは、 vendor/laravel/framework/src/Illuminate/ に存在します。
*/
use App\Http\Controllers\TasksController;

Route::get('/', [TasksController::class, 'index']);

/*
Route::get('tasks/{id}', [TasksController::class, 'show']);
Route::post('tasks', [TasksController::class, 'store']);
Route::put('tasks/{id}', [TasksController::class, 'update']);
Route::delete('tasks/{id}', [TasksController::class, 'destroy']);

Route::get('tasks', [TasksController::class, 'index'])->name('task.index');
Route::get('tasks/create', [TasksController::class, 'create'])->name('task.create'); //違うかも

Route::get('tasks/{id}/edit', [TasksController::class, 'edit'])->name('task.edit');
*/


Route::resource('tasks', TasksController::class);