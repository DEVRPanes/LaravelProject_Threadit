<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/home', function () {
    return redirect('/posts');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
Route::get('/search', [PostController::class, 'search']);
Route::get('/category', [PostController::class, 'category']);

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\PostController::class, 'index'])->name('create');
Route::get('send', 'NotifyController@index');

Route::get('mail', function () {
    $order = App\Order::find(1);

    return (new App\Notifications\StatusUpdate($order))
                ->toMail($order->user);
});