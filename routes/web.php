<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\staffController;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'name' => 'Muhammad Faris',
        'email' => 'farissenior24@gmail.com',
        'image' => 'logo.png',
        'title' => 'about'
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        'title' => 'blog'
    ]);
});

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


route::get('/dashboard/staffInformation', [staffController::class, 'index']) -> name('staffInformation');
route::get('/exportStaff', [staffController::class, 'staffExport']) -> name('exportStaff');
route::post('/importStaff', [staffController::class, 'staffimportexcel']) -> name('importStaff');