<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', [App\Http\Controllers\BladeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\BladeController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\BladeController::class, 'about'])->name('about');

Route::get('projects', function()
{
    return View::make('pages.projects');
});

Route::get('blade', function () {
    return view('child');
});