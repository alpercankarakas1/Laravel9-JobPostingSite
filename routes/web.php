<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use \App\Http\Controllers\AdminPanel\CategoryController;
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

// Hello World in route
Route::get('/hello', function () {
    return 'Hello World';
});

// Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// Call Controller Function
Route::get('/', [HomeController::class,'index'])->name('home');

// Route to Controller to View
Route::get('/test', [HomeController::class,'test'])->name('test');

// Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('param');

// Route with post
Route::post('/save', [HomeController::class,'save'])->name('save');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ******** ADMIN PANEL ROUTES *************
Route::get("/admin",[AdminHomeController::class,"index"])->name("admin");
// ******** ADMIN CATEGORY ROUTES *************
Route::get("/admin/category",[CategoryController::class,"index"])->name("admin_category");
Route::get("/admin/category/create",[CategoryController::class,"create"])->name("admin_category_create");
Route::post("/admin/category/store",[CategoryController::class,"store"])->name("admin_category_store");

