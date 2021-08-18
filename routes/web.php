<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('home', ['name' => 'Jesus']);
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/menu', function () {
//     return view('menu');
// });

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/login', [WelcomeController::class, 'login']);
Route::get('/books', [WelcomeController::class, 'books']);
Route::get('/add', [WelcomeController::class, 'add']);
// Route::get('/add', [BookController::class, 'create']);
Route::post('/add', [BookController::class, 'store']);
Route::post('deleteBook', [BookController::class, 'deleteBook']);
Route::get('/book/{id}', [WelcomeController::class, 'book']);
Route::post('/edit', [WelcomeController::class, 'change']);
Route::post('/change', [BookController::class, 'change']);



