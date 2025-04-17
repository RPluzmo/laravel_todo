<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return view('bonjour');
    }
    return view('welcome');
})->name("welcome");


Route::get('/why', function () {
    return view('why');
})->name("why");

Route::get('/todos/create', [ToDoController::class, 'create'])->name("todos.create")->middleware('auth');
Route::post('/todos', [ToDoController::class, 'store'])->name("todos.store");
    Route::get('/diaries/create', [DiaryController::class, 'create'])->name("diaries.create")->middleware('auth');
    Route::post('/diaries', [DiaryController::class, 'store'])->name("diaries.store");

Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->name("todos.edit")->middleware('auth');
Route::put('/todos/{todo}', [ToDoController::class, 'update'])->name("todos.update");
    Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit'])->name("diaries.edit")->middleware('auth');
    Route::put('/diaries/{diary}', [DiaryController::class, 'update'])->name("diaries.update");

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy'])->name("todos.destroy");
    Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy'])->name("diaries.destroy");

Route::get('/todos', [ToDoController::class, 'index'])->name("todos.index")->middleware('auth');
    Route::get('/diaries', [DiaryController::class, 'index'])->name("diaries.index")->middleware('auth');

Route::get('/todos/{todo}', [ToDoController::class, 'show'])->name("todos.show")->middleware('auth');
    Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->name("diaries.show")->middleware('auth');



    Route::get('/register', [RegisterController::class, "create"])->name("register")->middleware("guest");
    Route::get('/login', [SessionController::class, "create"])->name("login")->middleware("guest");
    
Route::post('/register', [RegisterController::class, 'store'])->name("register.store");
    Route::post('/login', [SessionController::class, 'store'])->name("login.store");

Route::post('/logout', [SessionController::class, 'destroy'])->name("logout");

