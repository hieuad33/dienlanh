<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admincontroller;
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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web','auth']], function (){
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



//trang chủ
Route::get('/', [HomeController::class,'index']);
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', [ServiceController::class,'getview'])->name('service');
Route::get('/services/{slug}', [ServiceController::class,'getServiceslug']);
Route::get('servicesreach', [ServiceController::class,'search'])->name('fservice');
Route::get('/services/{id}', [ServiceController::class,'getService']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{slug}', [PostsViewController::class,'getPostslug']);
Route::get('postsearch', [PostsViewController::class,'getSearch'])->name('fpost');
Route::get('/posts/category/{slug}', [PostsViewController::class,'getCategoryslug']);
Route::get('/posts/tags/{slug}', [PostsViewController::class,'getTagslug']);
Route::get('/posts', [PostsViewController::class,'index'])->name('posts');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact/{type}',[ContactController::class,'contact_type']);
Route::post('scontact',[ContactController::class,'postContact'])->name('sendcontact');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/',[HomeController::class,'getdashbroad'])->name('admin');
    Route::get('/dashboard',[HomeController::class,'getdashbroad']);
    

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
         Route::prefix('contact')->group(function () {
            Route::get('/', [ContactController::class,'getList'])->name('list-contact');
            Route::get('data',[ContactController::class,'dataTable'])->name('data-contact');
          Route::put('delete', [ContactController::class,'delete']);
        });

    
        /* Group author */
         Route::prefix('author')->group(function () {
            Route::get('/',  [Admincontroller::class,'getList'])->name('list-author');
            Route::delete('delete', [Admincontroller::class,'delete']);
        });
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        
    });
});







// xay ra ko khong co rt ton tai 404
//Route::fallback(function () {
//    return 404;
  //  return view(404);
//});
require __DIR__.'/auth.php';
