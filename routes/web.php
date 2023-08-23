<?php

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

Route::get('/user', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home/', function () {
//     Route::get('/home/', [homeController::class, 'home']);
// });

// use App\Http\Controllers\homeController;
// use App\Http\Controllers\topicsController;

// Route::get('/home', [homeController::class, 'show']);
// Route::get('/array', [homeController::class, 'array']);
// Route::get('/topics', [topicsController::class, 'index']);
// Route::get('/topics/new', [topicsController::class, 'create_topic']);
// Route::post('/topics/create', [topicsController::class, 'create']);

// use App\Http\Controllers\ollHomwork;

// Route::get('/homwork1', [ollHomwork::class, 'show']);
// Route::get('/homwork2', [ollHomwork::class, 'view1']);
// Route::get('/homwork3', [ollHomwork::class, 'print']);

// use App\Http\Controllers\GoodsController;

// Route::get('/homwork4', [GoodsController::class, 'show']);

// Route::get('/usery/{id}', function($id) {return "User ID: " . $id;});



 use App\Http\Controllers\TestController;

Route::get('/home', [homeController::class, 'show'])->name('index');
Route::get('/array', [homeController::class, 'array']);
Route::get('/topics', [topicsController::class, 'index']);
Route::get('/topics/new', [topicsController::class, 'create_topic']);
Route::post('/topics/create', [topicsController::class, 'create']);
Route::get('/about', function () { return 'This is the About page.';});
Route::get('/usery/{id}', function ($id) { return "User ID: " . $id;});
Route::get('/profile', function () { return 'This is the About page.';})->name('profile');
// Route::get('/posts', 'homeController@show');
// Route::resource('posts', 'TestController');
Route::resource('posts', TestController::class);
Route::get('/page', [homeController::class, 'page']);
Route::get('/master', [homeController::class, 'master']);
Route::get('/vars', [homeController::class, 'vars']);
Route::get('/get-topics', [homeController::class, 'get_topics']);
Route::get('/shop', [homeController::class, 'categores']);



use App\Http\Controllers\newView;

Route::get('/newView', [newView::class, 'show']);



use App\Http\Controllers\MyShop;

Route::get('/MyShop.shop_category', [MyShop::class, 'categores']);



