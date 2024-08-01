<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});

// student 
Route::resource('/students', studentController::class);

// teacher 
Route::resource('/teachers', TeacherController::class);


