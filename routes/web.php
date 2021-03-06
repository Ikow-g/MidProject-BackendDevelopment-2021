<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/courses', [CourseController::class, 'index']);
// single course
Route::get('course/{slug}', [CourseController::class, 'show']);


Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/user', function () {
    return view('user',[
        "title" => "User"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);