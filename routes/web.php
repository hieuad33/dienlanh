<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ServiceController;
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
//view cho khách hàng

//trang chủ
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', [ServiceController::class,'getview']);
Route::get('/services/{slug}', [ServiceController::class,'getServiceslug']);
Route::get('/services/{id}', [ServiceController::class,'getService']);
Route::get('/home', [Controller::class, 'index']);

Route::get('/posts/{slug}', [ServiceController::class,'getServiceslug']);
Route::get('/posts', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/', function () {
    return view('admin.index');;
})->name('admin');
    /* Group for profile */
   
    /* Group post*/
  
    /* Group for admin */
    Route::middleware('auth')->group(function () {
        /* Group category */
         Route::prefix('category')->group(function () {
            Route::get('/', [CategoriesController::class,'getList']);
            Route::get('add', [CategoriesController::class,'getAdd']);
            Route::post('add', [CategoriesController::class,'postAdd']);
            Route::get('data', [CategoriesController::class,'dataTable'])->name('data');
            Route::post('update', [CategoriesController::class,'postUpdate']);
            Route::put('delete', [CategoriesController::class,'delete']);
        });
        /* Group file */
        Route::prefix('tag')->group(function () {
            Route::get('/', [TagsController::class,'getList'])->name('list-tag');
            Route::get('data',[TagsController::class,'dataTable'])->name('data-tag');
            Route::post('add',[TagsController::class,'postAdd'] );
            Route::put('update', [TagsController::class,'putUpdate']);
            Route::put('delete', [TagsController::class,'delete']);
        });
        Route::prefix('post')->group(function () {
            Route::get('/', [PostsController::class,'getList'])->name('list-post');
            Route::get('add', [PostsController::class,'getAdd']);
            Route::put('updateStatus',[PostsController::class,'updateStatus']);
            Route::put('updateHot',[PostsController::class,'updateHot']);
            Route::post('add',  [PostsController::class,'postadd']);
            Route::get('update/{id}', [PostsController::class,'getUpdate']);
            Route::post('update/{id}', [PostsController::class,'postUpdate']);
            Route::get('delete/{id}', [PostsController::class,'getDelete']);
        });

        Route::prefix('service')->group(function () {
            Route::get('/', [ServiceController::class,'getList'])->name('list-service');
            Route::get('add', [ServiceController::class,'getAdd']);
            Route::put('updateStatus',[ServiceController::class,'updateStatus']);
           
            Route::post('add',  [ServiceController::class,'postadd']);
            Route::get('update/{id}', [ServiceController::class,'getUpdate']);
            Route::post('update/{id}', [ServiceController::class,'postUpdate']);
            Route::get('delete/{id}', [ServiceController::class,'getDelete']);
        });
    
        /* Group author */
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        
    });
});



//admin
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function (){
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// xay ra ko khong co rt ton tai 404
//Route::fallback(function () {
//    return view(404);
//});
require __DIR__.'/auth.php';
