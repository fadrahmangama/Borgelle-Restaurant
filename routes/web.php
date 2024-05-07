<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;

Route::get('/auth', [SiteController::class, 'login']);
Route::post('/auth', [SiteController::class, 'auth']);
Route::get('/register', [SiteController::class, 'signin']);
Route::post('/register', [SiteController::class, 'register']);

Route::get('/home', [MenuController::class, 'home']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu/create', [MenuController::class, 'store']);
Route::get('/menu/{orderName}/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');;
Route::post('/menu/{orderName}/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::get('/welcome', [SiteController::class, 'admin']);
Route::get('/aboutUs', function(){
    return view('aboutUs');
});

//session
// Route::get('/login', function () {
//     if (session()->has('email')) return redirect('/menu'); 
//     return view('login');
// });

// Route::get('/logout', function () { 
//     session()->flush();
//     return redirect('/login');
// });
    
//middleware
Route::get('/login', function () {
    if (Auth::check ()) return redirect('/home'); 
    return view('login');
    })->name('login');

Route::get('/logout', function () { 
    Auth::logout();
    return redirect('/login');
    });

Route::resource('menu', MenuController::class)->middleware('auth');

Route::get('/documentation', function() {
    return view('welcome');
});