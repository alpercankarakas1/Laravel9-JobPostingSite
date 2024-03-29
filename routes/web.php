<?php

use App\Http\Controllers\AdminPanel\AdminJobController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\ApplicationController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use \App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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

// ******** HOMEPAGE ROUTES *************
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class,'storecomment'])->name('storecomment');
Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');
Route::post('/storeapplication', [HomeController::class,'storeapplication'])->name('storeapplication');

// Route to Controller to View
Route::get('/test', [HomeController::class,'test'])->name('test');

// Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('param');

// Route with post
Route::post('/save', [HomeController::class,'save'])->name('save');

Route::get('/job/{id}', [HomeController::class,'job'])->name('job');
Route::get('/categoryjobs/{id}/{slug}', [HomeController::class,'categoryjobs'])->name('categoryjobs');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ******** USER AUTHENTICATION CONTROL *************

Route::middleware('auth')->group(function () {
    //************************ USER PANEL ROUTES *******************************

    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/reviews','reviews')->name('reviews');
        Route::get("/reviewdestroy/{id}", "reviewdestroy")->name("reviewdestroy");


    });

    // ******** ADMIN PANEL ROUTES *************
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');

        // ******** GENERAL ROUTES *************
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting/update', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

        // ******** ADMIN CATEGORY ROUTES *************

        Route::prefix('/category')->controller(AdminCategoryController::class)->name('category.')->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/create", "create")->name("create");
            Route::post("/store", "store")->name("store");
            Route::get("/edit/{id}", "edit")->name("edit");
            Route::post("/update/{id}", "update")->name("update");
            Route::get("/show/{id}", "show")->name("show");
            Route::get("/destroy/{id}", "destroy")->name("destroy");
        });
        // ******** ADMIN JOB ROUTES *************

        Route::prefix('/job')->controller(AdminJobController::class)->name('job.')->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/create", "create")->name("create");
            Route::post("/store", "store")->name("store");
            Route::get("/edit/{id}", "edit")->name("edit");
            Route::post("/update/{id}", "update")->name("update");
            Route::get("/show/{id}", "show")->name("show");
            Route::get("/destroy/{id}", "destroy")->name("destroy");
        });
        // *********** ADMIN JOB IMAGE GALLERY ROUTES **************************************

        Route::prefix('/image')->controller(ImageController::class)->name('image.')->group(function () {
            Route::get("/{jid}", "index")->name("index");
            Route::post("/store/{jid}", "store")->name("store");
            Route::get("/destroy/{jid}/{id}", "destroy")->name("destroy");
        });


        // *********** ADMIN MESSAGE ROUTES **************************************

        Route::prefix('/message')->controller(MessageController::class)->name('message.')->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/show/{id}", "show")->name("show");
            Route::post("/update/{id}", "update")->name("update");
            Route::get("/destroy/{id}", "destroy")->name("destroy");
        });

        // *********** ADMIN COMMENT ROUTES **************************************

        Route::prefix('/comment')->controller(CommentController::class)->name('comment.')->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/show/{id}", "show")->name("show");
            Route::post("/update/{id}", "update")->name("update");
            Route::get("/destroy/{id}", "destroy")->name("destroy");
        });

        // *********** ADMIN USER ROUTES **************************************

        Route::prefix('/user')->controller(AdminUserController::class)->name('user.')->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/edit/{id}", "edit")->name("edit");
            Route::get("/show/{id}", "show")->name("show");
            Route::post("/update/{id}", "update")->name("update");
            Route::get("/destroy/{id}", "destroy")->name("destroy");
            Route::post("/addrole/{id}", "addrole")->name("addrole");
            Route::get("/destroyrole/{uid}/{rid}", "destroyrole")->name("destroyrole");
        });

        // *********** ADMIN APPLICATION ROUTES **************************************

        Route::prefix('/application')->controller(ApplicationController::class)->name('application.')->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/edit/{id}", "edit")->name("edit");
            Route::get("/show/{id}", "show")->name("show");
            Route::post("/update/{id}", "update")->name("update");
            Route::get("/destroy/{id}", "destroy")->name("destroy");

        });

        // ******** ADMIN FAQ ROUTES *************

        Route::prefix('/faq')->controller(FaqController::class)->name('faq.')->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/create", "create")->name("create");
            Route::post("/store", "store")->name("store");
            Route::get("/edit/{id}", "edit")->name("edit");
            Route::post("/update/{id}", "update")->name("update");
            Route::get("/show/{id}", "show")->name("show");
            Route::get("/destroy/{id}", "destroy")->name("destroy");
        });
    });
});



