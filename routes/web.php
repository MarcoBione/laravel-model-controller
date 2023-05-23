<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;

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

//home page contenente solo i 'most popular'
Route::get('/', [PageController::class, 'index'])->name('home');

//percorso per accedere alla pagina contenente tutti i movies
Route::get('/movies', [PageController::class, 'index'])->name('movies.show');

