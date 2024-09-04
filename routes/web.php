<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-validate','formValidation');

Route::post('submit',[UserController::class, 'addUser']);