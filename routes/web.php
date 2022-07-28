<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\MainController as MainController2;
use App\Http\Controllers\Admin\GreetingController;
use App\Http\Controllers\Admin\BackgroundController;
use App\Http\Controllers\Admin\ButtonController;


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

Route::get('/', [MainController2::class, 'index'])->name('welcome');

Route::middleware('guest')->group(function() {
	Route::get('login', [AuthController::class, 'login'])->name('login');
	
	Route::post('login', [AuthController::class, 'postSignin']);
	
	Route::get('/reg', function () {
	    return view('auth.reg');
	});
	
	Route::post('/reg', [AuthController::class, 'postReg']);
});

Route::middleware('auth')->group(function() {
	Route::get('/home', [MainController::class, 'index'])->name('home');
	Route::get('/post', [PostController::class, 'index'])->name('post');
	Route::get('/post-add', [PostController::class, 'add'])->name('post.add');
	Route::post('/post-add', [PostController::class, 'postAdd'])->name('post.add');
	Route::get('/post-edit/{id}', [PostController::class, 'edit'])->name('post.edit');
	Route::post('/post-edit/{id}', [PostController::class, 'postEdit'])->name('post.edit');
	Route::get('/post-del/{id}', [PostController::class, 'del'])->name('post.del');
	Route::get('/greeting', [GreetingController::class, 'index'])->name('greeting');
	Route::post('/greeting', [GreetingController::class, 'save'])->name('greeting.save');
	Route::get('/background', [BackgroundController::class, 'index'])->name('background');
	Route::post('/background', [BackgroundController::class, 'save'])->name('background.save');
	Route::get('/button', [ButtonController::class, 'index'])->name('button');
	Route::post('/button', [ButtonController::class, 'save'])->name('button.save');
});
