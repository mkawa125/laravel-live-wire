<?php

use App\Http\Livewire\Post\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::get('posts', Index::class)->name('posts');
// });

// Route::middleware(['auth:sanctum', 'verified'])->group(function (){
//     Route::get('/',  [UserController::class, 'index'])->name('dashboard');
//     Route::get('/dashboard',  [UserController::class, 'index'])->name('dashboard');
// });
Route::get('/',  [UserController::class, 'index'])->name('dashboard');
Route::get('/dashboard',  [UserController::class, 'index'])->name('dashboard');
