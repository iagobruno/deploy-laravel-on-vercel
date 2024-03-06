<?php

use App\Models\User;
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

Route::domain('{project}.localhost')->group(function () {
    Route::get('/', function ($project) {
        return "Funcionou! Project = $project";
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return User::all();
});

Route::get('/users/{user}', function (User $user) {
    return $user;
})->name('users.show');
