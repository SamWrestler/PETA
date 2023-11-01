<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [IndexController::class, 'index']);
Route::get('/{data}/changeLang', [IndexController::class, 'changeLang'])->name('changeLang');
Route::get('/admin:8080', [AdminController::class , 'index']);
Route::patch('/admin:8080/change_header', [AdminController::class, 'changeHeader'])->name('changeHeader');
Route::patch('/admin:8080/change_about', [AdminController::class, 'changeAbout'])->name('changeAbout');
Route::patch('/admin:8080/change_red', [AdminController::class, 'changeRed'])->name('changeRed');
Route::patch('/admin:8080/change_orange', [AdminController::class, 'changeOrange'])->name('changeOrange');
Route::patch('/admin:8080/change_yellow', [AdminController::class, 'changeYellow'])->name('changeYellow');
Route::patch('/admin:8080/change_green', [AdminController::class, 'changeGreen'])->name('changeGreen');
Route::patch('/admin:8080/change_footer' , [AdminController::class, 'changeFooter'])->name('changeFooter');
Route::post('/reserve' , [ReserveController::class, 'reserve'])->name('reserve');
Route::delete('/reserve_delete/{reserve}', [ReserveController::class, 'delete_reserve'])->name('delete');
Route::get('login:8080', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login:8080', [LoginController::class, 'login']);

Auth::routes(['register' => false, 'login' => false]);

